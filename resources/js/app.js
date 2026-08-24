import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const mobileButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileIcon = document.getElementById('mobile-menu-icon');

    mobileButton?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');
        mobileIcon?.classList.toggle('fa-bars');
        mobileIcon?.classList.toggle('fa-xmark');
    });

    document.querySelectorAll('.mobile-link').forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu?.classList.add('hidden');
            mobileIcon?.classList.remove('fa-xmark');
            mobileIcon?.classList.add('fa-bars');
        });
    });

    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar?.classList.toggle('shadow-lg', window.scrollY > 40);
    });

    const slides = [...document.querySelectorAll('.hero-slide')];
    const dots = [...document.querySelectorAll('.carousel-dot')];
    const nextButton = document.getElementById('next-slide');
    const prevButton = document.getElementById('prev-slide');
    const carousel = document.getElementById('home');

    let currentSlide = 0;
    let timer;
    const interval = 6000;

    const showSlide = (index) => {
        if (!slides.length) return;

        currentSlide = (index + slides.length) % slides.length;
        slides.forEach((slide, i) => slide.classList.toggle('active', i === currentSlide));
        dots.forEach((dot, i) => dot.classList.toggle('active', i === currentSlide));
    };

    const start = () => {
        clearInterval(timer);
        timer = setInterval(() => showSlide(currentSlide + 1), interval);
    };

    nextButton?.addEventListener('click', () => {
        showSlide(currentSlide + 1);
        start();
    });

    prevButton?.addEventListener('click', () => {
        showSlide(currentSlide - 1);
        start();
    });

    dots.forEach((dot, i) => dot.addEventListener('click', () => {
        showSlide(i);
        start();
    }));

    carousel?.addEventListener('mouseenter', () => clearInterval(timer));
    carousel?.addEventListener('mouseleave', start);

    let touchStartX = 0;
    carousel?.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    carousel?.addEventListener('touchend', (e) => {
        const distance = touchStartX - e.changedTouches[0].screenX;
        if (Math.abs(distance) < 50) return;
        showSlide(distance > 0 ? currentSlide + 1 : currentSlide - 1);
        start();
    }, { passive: true });

    start();

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.section-reveal').forEach((el) => observer.observe(el));


    const contactForm = document.getElementById('contact-form');

    contactForm?.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = document.getElementById('name')?.value.trim() || '';
        const company = document.getElementById('company')?.value.trim() || '-';
        const email = document.getElementById('email')?.value.trim() || '';
        const service = document.getElementById('service')?.value || 'General Inquiry';
        const message = document.getElementById('message')?.value.trim() || '';

        const whatsappMessage = `Hello B-COMP,

I would like to discuss an IT requirement.

Name: ${name}
Company: ${company}
Email: ${email}
Service: ${service}

Message:
${message}

Thank you.`;

        const whatsappUrl = `https://wa.me/6285781010372?text=${encodeURIComponent(whatsappMessage)}`;
        window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
    });

});
