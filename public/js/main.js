// Menu mobile
const menuToggle = document.getElementById('menuToggle');
const mainMenu = document.getElementById('mainMenu');

if (menuToggle && mainMenu) {
    menuToggle.addEventListener('click', () => {
        mainMenu.classList.toggle('show');
    });
}

// Slider héro
function initHeroSlider() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slider-image');
    const totalSlides = slides.length;
    
    if (slides.length === 0) return;
    
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        currentSlide = (index + totalSlides) % totalSlides;
        slides[currentSlide].classList.add('active');
    }
    
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');
    
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            showSlide(currentSlide - 1);
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            showSlide(currentSlide + 1);
        });
    }
    
    // Changement automatique des slides
    setInterval(() => {
        showSlide(currentSlide + 1);
    }, 5000);
}

// Bouton de retour en haut
function initBackToTop() {
    const backToTopButton = document.getElementById('backToTop');
    
    if (!backToTopButton) return;
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });
    
    backToTopButton.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Animation au défilement
function initScrollAnimations() {
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.service-card, .about-content, .section-title');
        
        elements.forEach(element => {
            if (!element) return;
            
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };
    
    // Initialisation des animations
    window.addEventListener('load', () => {
        const animatedElements = document.querySelectorAll('.service-card, .about-content, .section-title');
        
        animatedElements.forEach(element => {
            if (!element) return;
            
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        });
        
        // Afficher la première animation immédiatement
        setTimeout(animateOnScroll, 100);
    });
    
    window.addEventListener('scroll', animateOnScroll);
}

// Initialisation de toutes les fonctionnalités
document.addEventListener('DOMContentLoaded', () => {
    initHeroSlider();
    initBackToTop();
    initScrollAnimations();
    
    // Fermer le menu mobile lors du clic sur un lien
    const navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (mainMenu && menuToggle) {
                mainMenu.classList.remove('show');
            }
        });
    });
});

// Gestion des erreurs de chargement des images
document.addEventListener('error', function(e) {
    const target = e.target;
    if (target.tagName.toLowerCase() === 'img') {
        target.style.display = 'none';
        console.warn('Image non trouvée : ' + target.src);
    }
}, true);
