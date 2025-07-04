// js/github-api.js
class GitHubAPI {
    constructor() {
        this.baseURL = 'api/github.php';
        this.cache = new Map();
        this.cacheTimeout = 5 * 60 * 1000; // 5 minutes
    }

    async fetchGitHubProfile(username) {
        try {
            // Check cache first
            const cacheKey = `profile_${username}`;
            const cached = this.cache.get(cacheKey);
            
            if (cached && (Date.now() - cached.timestamp) < this.cacheTimeout) {
                return cached.data;
            }

            const response = await fetch(`${this.baseURL}?action=profile&username=${encodeURIComponent(username)}`);
            const result = await response.json();
            
            if (result.success) {
                // Cache the result
                this.cache.set(cacheKey, {
                    data: result.data,
                    timestamp: Date.now()
                });
                return result.data;
            } else {
                console.error(`Error fetching profile for ${username}:`, result.error);
                return null;
            }
        } catch (error) {
            console.error(`Error fetching profile for ${username}:`, error);
            return null;
        }
    }

    async updateMemberStats(username, memberId) {
        const profile = await this.fetchGitHubProfile(username);
        
        if (profile) {
            // Update profile stats on the page
            const memberCard = document.querySelector(`[data-member-id="${memberId}"]`);
            if (memberCard) {
                const reposElement = memberCard.querySelector('.repos-count');
                const followersElement = memberCard.querySelector('.followers-count');
                const followingElement = memberCard.querySelector('.following-count');
                
                if (reposElement) this.animateCounter(reposElement, profile.public_repos || 0);
                if (followersElement) this.animateCounter(followersElement, profile.followers || 0);
                if (followingElement) this.animateCounter(followingElement, profile.following || 0);
            }
        }
        
        return profile;
    }

    animateCounter(element, targetValue) {
        const startValue = parseInt(element.textContent) || 0;
        const duration = 1000; // 1 second
        const startTime = Date.now();
        
        const animate = () => {
            const elapsed = Date.now() - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            const currentValue = Math.floor(startValue + (targetValue - startValue) * progress);
            element.textContent = currentValue;
            
            if (progress < 1) {
                requestAnimationFrame(animate);
            }
        };
        
        animate();
    }

    async loadAllTeamStats() {
        // Update this with your actual GitHub usernames
        const members = [
            { username: 'jeremayah19', id: 1 },
            { username: 'janesmith', id: 2 }, // Replace with real username
            { username: 'mikejohnson', id: 3 } // Replace with real username
        ];

        const promises = members.map(member => this.updateMemberStats(member.username, member.id));
        const profiles = await Promise.all(promises);
        
        // Calculate total stats
        const totalStats = profiles.reduce((acc, profile) => {
            if (profile) {
                acc.repos += profile.public_repos || 0;
                acc.followers += profile.followers || 0;
                acc.following += profile.following || 0;
            }
            return acc;
        }, { repos: 0, followers: 0, following: 0 });

        // Update dashboard stats
        this.updateDashboardStats(totalStats);
        
        return profiles;
    }

    updateDashboardStats(stats) {
        const reposCard = document.querySelector('[data-stat="total-repos"]');
        const followersCard = document.querySelector('[data-stat="total-followers"]');
        
        if (reposCard) this.animateCounter(reposCard, stats.repos);
        if (followersCard) this.animateCounter(followersCard, stats.followers);
    }
}

// Initialize GitHub API
const githubAPI = new GitHubAPI();

// Auto-load data when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Add data attributes to existing elements for easy targeting
    addDataAttributes();
    
    // Load GitHub data
    githubAPI.loadAllTeamStats();
});

function addDataAttributes() {
    // Add data attributes to member cards
    const memberCards = document.querySelectorAll('.member-card');
    memberCards.forEach((card, index) => {
        card.setAttribute('data-member-id', index + 1);
        
        // Add classes to stat elements
        const statsElements = card.querySelectorAll('.fw-bold');
        if (statsElements[0]) statsElements[0].classList.add('repos-count');
        if (statsElements[1]) statsElements[1].classList.add('followers-count');
        if (statsElements[2]) statsElements[2].classList.add('following-count');
    });
}

// Expose API for manual refresh
window.refreshGitHubData = () => {
    githubAPI.cache.clear();
    githubAPI.loadAllTeamStats();
};