document.addEventListener('DOMContentLoaded', () => {
    
    // === 1. ИНИЦИАЛИЗАЦИЯ ИКОНОК (LUCIDE) ===
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // === 2. МОБИЛЬНОЕ МЕНЮ (BURGER) ===
    const burger = document.querySelector('.burger');
    const overlay = document.querySelector('.mobile-overlay');
    const navLinks = document.querySelectorAll('.mobile-nav__list a');

    if (burger && overlay) {
        const toggleMenu = () => {
            burger.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : '';
        };

        burger.addEventListener('click', toggleMenu);
        
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (overlay.classList.contains('active')) toggleMenu();
            });
        });
    }

    // === 3. ПЛАВНЫЙ АККОРДЕОН FAQ (БЕЗ КОНФЛИКТОВ) ===
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const trigger = item.querySelector('.faq-item__trigger');
        const content = item.querySelector('.faq-item__content');

        if (trigger && content) {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const isActive = item.classList.contains('active');

                // Закрываем все остальные
                faqItems.forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-item__content').style.height = '0px';
                });

                // Если текущий был закрыт — открываем его
                if (!isActive) {
                    item.classList.add('active');
                    // Устанавливаем высоту в пикселях для плавной анимации
                    content.style.height = content.scrollHeight + 'px';
                }
            });
        }
    });

    // === 4. ТАБЫ В СЕКЦИИ ТЕХНОЛОГИИ ===
    const techItems = document.querySelectorAll('.tech__item');
    const techScreens = document.querySelectorAll('.tech__screen');

    techItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const targetId = item.getAttribute('data-target');
            
            techItems.forEach(i => i.classList.remove('active'));
            techScreens.forEach(s => s.classList.remove('active'));

            item.classList.add('active');
            document.getElementById(targetId)?.classList.add('active');
        });
    });

    // === 5. ФОРМА КОНТАКТОВ С КАПЧЕЙ ===
    const contactForm = document.getElementById('main-form');
    
    if (contactForm) {
        const phoneInput = document.getElementById('phone-input');
        const captchaTask = document.getElementById('captcha-task');
        const captchaInput = document.getElementById('captcha-input');
        const successMsg = document.getElementById('form-success');
        
        // Математическая капча
        const n1 = Math.floor(Math.random() * 8) + 2;
        const n2 = Math.floor(Math.random() * 6) + 1;
        const correctSum = n1 + n2;
        if (captchaTask) captchaTask.innerText = `${n1} + ${n2}`;

        // Валидация телефона (только цифры и +)
        phoneInput?.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^0-9+]/g, '');
        });

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            if (parseInt(captchaInput.value) !== correctSum) {
                alert('Неверный ответ в капче!');
                return;
            }

            const btn = contactForm.querySelector('button');
            btn.disabled = true;
            btn.innerText = 'Отправка...';

            // Имитация AJAX
            setTimeout(() => {
                contactForm.style.display = 'none';
                if (successMsg) {
                    successMsg.style.display = 'flex';
                    lucide.createIcons();
                }
            }, 1500);
        });
    }

    // === 6. COOKIE POPUP (LOCAL STORAGE) ===
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (cookiePopup && !localStorage.getItem('cookies_accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('visible');
        }, 3000);
    }

    cookieAccept?.addEventListener('click', () => {
        localStorage.setItem('cookies_accepted', 'true');
        cookiePopup.classList.remove('visible');
    });

    // === 7. INTERSECTION OBSERVER (АНИМАЦИЯ REVEAL) ===
    // Важно: Observer запускается после всех остальных расчетов
    const revealElements = document.querySelectorAll('.reveal');
    
    if (revealElements.length > 0) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        revealElements.forEach(el => revealObserver.observe(el));
    }

    // === 8. HEADER SCROLL ===
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            header?.classList.add('header--scrolled');
        } else {
            header?.classList.remove('header--scrolled');
        }
    });

    // Пересчет высоты аккордеона при изменении окна (чтобы не ехал текст)
    window.addEventListener('resize', () => {
        const activeFAQ = document.querySelector('.faq-item.active .faq-item__content');
        if (activeFAQ) activeFAQ.style.height = activeFAQ.scrollHeight + 'px';
    });
});