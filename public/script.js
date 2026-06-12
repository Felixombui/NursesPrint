// public/script.js

document.addEventListener('DOMContentLoaded', function() {
    
    // --- 1. Sticky Header Logic (BLACK BACKGROUND) ---
    const header = document.getElementById('main-header');
    function handleScroll() {
        if (!header) return;
        // Change header to BLACK after scrolling 50px past the top
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    handleScroll();
    window.addEventListener('scroll', handleScroll);

    // --- 2. Mobile Menu Toggle ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.contains('hidden');
            mobileMenu.classList.toggle('hidden');
            updateMenuIcon(!isHidden);
        });
    }
    function updateMenuIcon(isOpen) {
        const iconContainer = mobileMenuBtn?.querySelector('svg');
        if (!iconContainer) return;
        iconContainer.innerHTML = isOpen 
            ? '<line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line>'
            : '<line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line>';
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }

    // Close menu on link click
    mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            updateMenuIcon(false);
        });
    });

    // --- 3. Smooth Scroll for Anchors ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({ top: targetElement.offsetTop - 80, behavior: "smooth" });
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    updateMenuIcon(false);
                }
            }
        });
    });

    // --- 4. Exam Library Tab Switching Logic ---
    const examTabs = document.querySelectorAll('.exam-tab');
    const examContentAreas = document.querySelectorAll('.exam-content-area');

    examTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active state from all tabs
            examTabs.forEach(t => t.classList.remove('active'));
            // Add active state to clicked tab
            this.classList.add('active');
            
            // Hide all content areas
            examContentAreas.forEach(area => area.classList.add('hidden'));
            
            // Show corresponding content area
            const targetId = this.getAttribute('data-target');
            const targetArea = document.getElementById(targetId);
            if (targetArea) {
                targetArea.classList.remove('hidden');
                // Re-initialize icons if new SVGs are injected dynamically
                if (typeof lucide !== 'undefined') lucide.createIcons();
            }
        });
    });
});
// Add to public/script.js

document.addEventListener('DOMContentLoaded', function() {
    
    // --- Library Page Header Logic ---
    const libraryHeader = document.getElementById('library-header');
    
    // For library pages, we want the header to be solid immediately
    if (libraryHeader) {
        libraryHeader.classList.add('library-header');
        
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                libraryHeader.classList.add('shadow-md');
            } else {
                libraryHeader.classList.remove('shadow-md');
            }
        });
    }

    // --- Topic Filtering Logic (Optional Future Proofing) ---
    const topicLinks = document.querySelectorAll('.topic-link');
    topicLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active state from all
            topicLinks.forEach(l => l.classList.remove('active'));
            // Add to clicked
            this.classList.add('active');
        });
    });
});
// Add to public/script.js

document.addEventListener('DOMContentLoaded', function() {
    
    // --- Quiz Interaction Logic ---
    const optionRadios = document.querySelectorAll('.option-radio');
    const nextBtn = document.getElementById('next-question-btn');
    const questionNavBtns = document.querySelectorAll('.question-nav-btn');
    let currentQuestionIndex = 0;

    // Handle Option Selection
    optionRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            // Mark current nav button as answered
            if(questionNavBtns[currentQuestionIndex]) {
                questionNavBtns[currentQuestionIndex].classList.add('answered');
            }
            
            // Enable Next Button
            if(nextBtn) nextBtn.disabled = false;
        });
    });

    // Handle Navigation Clicks (Sidebar)
    questionNavBtns.forEach((btn, index) => {
        btn.addEventListener('click', function() {
            // In a real app, this would fetch/load the specific question
            // For now, we just update the UI state
            questionNavBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentQuestionIndex = index;
            
            // Reset Next button state for demo purposes
            if(nextBtn) nextBtn.disabled = true;
        });
    });

    // Handle Next Button
    if(nextBtn) {
        nextBtn.addEventListener('click', function() {
            // Move to next question logic here
            const nextIndex = currentQuestionIndex + 1;
            if(nextIndex < questionNavBtns.length) {
                questionNavBtns.forEach(b => b.classList.remove('active'));
                questionNavBtns[nextIndex].classList.add('active');
                currentQuestionIndex = nextIndex;
                this.disabled = true;
                
                // Trigger re-animation of question card
                const card = document.querySelector('.question-card');
                if(card) {
                    card.style.animation = 'none';
                    card.offsetHeight; /* trigger reflow */
                    card.style.animation = null; 
                }
            }
        });
    }
});