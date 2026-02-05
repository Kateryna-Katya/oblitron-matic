// Initialize Icons
lucide.createIcons();

// Header scroll effect
const header = document.querySelector('.header');
window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('header--scrolled');
    } else {
        header.classList.remove('header--scrolled');
    }
});

// Basic GSAP Setup
gsap.registerPlugin(ScrollTrigger);

console.log('Project <?= $domainTitle ?> initialized');
// GSAP Hero Animation
const tl = gsap.timeline();

tl.from(".hero__badge", {
    y: 20,
    opacity: 0,
    duration: 0.6,
    ease: "power3.out"
})
.from(".hero__title", {
    y: 40,
    opacity: 0,
    duration: 0.8,
    ease: "power3.out"
}, "-=0.4")
.from(".hero__text", {
    y: 30,
    opacity: 0,
    duration: 0.8
}, "-=0.6")
.from(".hero__btns", {
    y: 20,
    opacity: 0,
    duration: 0.6
}, "-=0.6")
.from(".visual-image", {
    scale: 0.9,
    opacity: 0,
    duration: 1,
    ease: "expo.out"
}, "-=0.8")
.from(".visual-card", {
    x: (i) => i === 0 ? -50 : 50,
    opacity: 0,
    duration: 0.8,
    stagger: 0.2
}, "-=0.5");

// Mouse Move Parallax for Cards
document.addEventListener("mousemove", (e) => {
    const x = (window.innerWidth / 2 - e.pageX) / 50;
    const y = (window.innerHeight / 2 - e.pageY) / 50;
    
    gsap.to(".visual-card--1", { x: x, y: y, duration: 1 });
    gsap.to(".visual-card--2", { x: -x, y: -y, duration: 1 });
});

// Vanilla JS: Intersection Observer for scroll animations
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, observerOptions);

document.querySelectorAll('.reveal').forEach(el => {
    observer.observe(el);
});

// Update Lucide icons after adding new content
lucide.createIcons();
// Vanilla JS: Technology Tabs
const techItems = document.querySelectorAll('.tech__item');
const techScreens = document.querySelectorAll('.tech__screen');

techItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        // Remove active class from all
        techItems.forEach(i => i.classList.remove('active'));
        techScreens.forEach(s => s.classList.remove('active'));

        // Add active to current
        item.classList.add('active');
        const targetId = item.getAttribute('data-target');
        document.getElementById(targetId).classList.add('active');
    });
});

// Дополним Observer для тех-секции (если еще не добавлен в прошлом шаге)
const techObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, { threshold: 0.2 });

document.querySelectorAll('.reveal').forEach(el => techObserver.observe(el));
// Vanilla JS: FAQ Accordion
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    const trigger = item.querySelector('.faq-item__trigger');
    
    trigger.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        
        // Close all other items (optional, but cleaner)
        faqItems.forEach(i => i.classList.remove('active'));
        
        // Toggle current item
        if (!isActive) {
            item.classList.add('active');
        }
    });
});