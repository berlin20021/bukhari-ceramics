import './bootstrap';

// ===== Page Transition System =====

// Disable browser's automatic scroll restoration
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

// Force scroll to top immediately on page load (before any rendering)
window.scrollTo(0, 0);
document.documentElement.scrollTop = 0;
document.body.scrollTop = 0;

document.addEventListener('DOMContentLoaded', function() {
    // Force scroll to top again
    window.scrollTo(0, 0);
    
    // Initialize page transitions
    initPageTransitions();
    
    // Add smooth scroll behavior after initial load
    setTimeout(() => {
        document.documentElement.classList.add('smooth-scroll');
    }, 100);
});

function initPageTransitions() {
    // Get all internal links
    const links = document.querySelectorAll('a[href^="/"], a[href^="' + window.location.origin + '"]');
    
    links.forEach(link => {
        // Skip links that should open in new tab or have special behavior
        if (link.target === '_blank' || 
            link.hasAttribute('download') || 
            link.getAttribute('href') === '#' ||
            link.classList.contains('no-transition')) {
            return;
        }
        
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if it's the current page
            if (href === window.location.pathname) {
                e.preventDefault();
                return;
            }
            
            // Prevent default navigation
            e.preventDefault();
            
            // Start page transition
            transitionToPage(href);
        });
    });
}

function transitionToPage(url) {
    // Add exit animation to body
    document.body.style.opacity = '0';
    document.body.style.transform = 'translateY(-20px)';
    document.body.style.transition = 'all 0.25s ease-in';
    
    // Create loading overlay
    const overlay = document.createElement('div');
    overlay.className = 'page-loading-overlay';
    overlay.innerHTML = '<div class="loading-spinner"></div>';
    document.body.appendChild(overlay);
    
    // Navigate after animation
    setTimeout(() => {
        window.location.href = url;
    }, 250);
}

// Ensure page is at top on full load
window.addEventListener('load', function() {
    // Force scroll to top instantly
    window.scrollTo(0, 0);
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
    
    // Remove loading overlay if exists
    const overlay = document.querySelector('.page-loading-overlay');
    if (overlay) {
        setTimeout(() => {
            overlay.classList.add('hidden');
            setTimeout(() => overlay.remove(), 250);
        }, 50);
    }
});

// Handle browser back/forward buttons
window.addEventListener('pageshow', function(event) {
    // Always scroll to top on page show
    window.scrollTo(0, 0);
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
    
    if (event.persisted) {
        // Page was loaded from cache (back/forward button)
        document.body.style.opacity = '1';
        document.body.style.transform = 'translateY(0)';
    }
});

// Add intersection observer for scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('content-slide-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe elements with animation class
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(el => observer.observe(el));
});
