@extends('layouts.app')

@section('title', 'Bekasi Computer (B-COMP) | Technology & IT Solutions')

@section('content')
<header id="navbar" class="fixed inset-x-0 top-0 z-50 border-b border-slate-200/80 bg-white/95 backdrop-blur-xl transition-all">
    <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 sm:px-6 lg:px-8">
        <a href="#home" class="flex items-center gap-3">
            <img src="{{ asset('images/bcomp-logo.png') }}" alt="B-COMP Logo" class="h-12 w-12 object-contain">
            <div>
                <div class="font-manrope text-xl font-extrabold tracking-tight text-[#09294F]">B-COMP</div>
                <div class="text-[10px] uppercase tracking-[0.2em] text-slate-500">Bekasi Computer</div>
            </div>
        </a>

        <div class="hidden items-center gap-8 text-sm font-semibold xl:flex">
            <a href="#home" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#services" class="nav-link">Services</a>
            <a href="#clients" class="nav-link">Clients</a>
            <a href="#portfolio" class="nav-link">Portfolio</a>
            <a href="#technology" class="nav-link">Technology</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>

        <a href="https://wa.me/6285781010372" target="_blank" rel="noopener"
           class="hidden items-center gap-3 rounded-lg bg-[#09294F] px-6 py-3 text-sm font-semibold text-white transition hover:bg-[#153E73] xl:inline-flex">
            <i class="fa-brands fa-whatsapp text-lg"></i>
            Contact Us
        </a>

        <button id="mobile-menu-button" class="flex h-11 w-11 items-center justify-center rounded-lg border border-slate-200 text-[#09294F] xl:hidden" aria-label="Open navigation">
            <i id="mobile-menu-icon" class="fa-solid fa-bars"></i>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white xl:hidden">
        <div class="mx-auto flex max-w-7xl flex-col gap-1 px-5 py-5 text-sm font-medium">
            @foreach (['home'=>'Home','about'=>'About','services'=>'Services','clients'=>'Clients','portfolio'=>'Portfolio','technology'=>'Technology','contact'=>'Contact'] as $id=>$label)
                <a href="#{{ $id }}" class="mobile-link rounded-lg px-4 py-3 hover:bg-slate-50">{{ $label }}</a>
            @endforeach
            <a href="https://wa.me/6285781010372" target="_blank" rel="noopener"
               class="mt-3 rounded-lg bg-[#09294F] px-5 py-3.5 text-center font-semibold text-white">
                <i class="fa-brands fa-whatsapp mr-2"></i> WhatsApp Us
            </a>
        </div>
    </div>
</header>

<section id="home" class="relative mt-20 h-[690px] overflow-hidden bg-[#041120] sm:h-[720px] lg:h-[740px]">
    @php
        $slides = [
            [
                'badge'=>'Technology Solutions for Modern Business',
                'title'=>'Empowering Business',
                'highlight'=>'Through Technology',
                'text'=>'Bekasi Computer provides reliable technology, software and IT solutions designed to help businesses operate smarter, faster and more efficiently.',
                'image'=>'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=85&w=2000&auto=format&fit=crop',
            ],
            [
                'badge'=>'Infrastructure & Networking',
                'title'=>'Reliable Infrastructure',
                'highlight'=>'For Your Business',
                'text'=>'Build a secure and scalable IT environment with professional networking, infrastructure, system integration and technical support.',
                'image'=>'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=85&w=2000&auto=format&fit=crop',
            ],
            [
                'badge'=>'Software & Digital Solutions',
                'title'=>'Digital Solutions',
                'highlight'=>'Built Around Your Business',
                'text'=>'From corporate websites to custom business applications, we develop technology solutions tailored to your organization.',
                'image'=>'https://images.unsplash.com/photo-1551434678-e076c223a692?q=85&w=2000&auto=format&fit=crop',
            ],
        ];
    @endphp

    @foreach ($slides as $i => $slide)
        <div class="hero-slide absolute inset-0 {{ $i === 0 ? 'active' : '' }}">
            <img src="{{ $slide['image'] }}" alt="{{ $slide['badge'] }}" class="absolute inset-0 h-full w-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#041120] via-[#061A30]/95 to-[#061A30]/30"></div>

            <div class="relative z-10 mx-auto flex h-full max-w-7xl items-center px-5 sm:px-6 lg:px-8">
                <div class="slide-content max-w-4xl text-white">
                    <div class="mb-7 inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-xs font-medium backdrop-blur-md sm:text-sm">
                        <span class="h-2 w-2 rounded-full bg-[#FFD600]"></span>
                        {{ $slide['badge'] }}
                    </div>

                    <h1 class="font-manrope text-4xl font-extrabold leading-[1.06] tracking-tight sm:text-5xl md:text-6xl lg:text-[68px]">
                        {{ $slide['title'] }}
                        <span class="block text-[#FFD600]">{{ $slide['highlight'] }}</span>
                    </h1>

                    <p class="mt-7 max-w-2xl text-base leading-relaxed text-slate-300 sm:text-lg lg:text-xl">
                        {{ $slide['text'] }}
                    </p>

                    <div class="mt-9 flex flex-col gap-4 sm:flex-row">
                        <a href="#services" class="inline-flex items-center justify-center gap-3 rounded-lg bg-[#FFD600] px-7 py-4 font-bold text-[#061A30] transition hover:bg-[#FFC21A]">
                            Explore Our Services <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="#contact" class="inline-flex items-center justify-center rounded-lg border border-white/30 px-7 py-4 font-semibold text-white transition hover:bg-white hover:text-[#061A30]">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <button id="prev-slide" class="carousel-arrow left-5 lg:left-8" aria-label="Previous slide">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button id="next-slide" class="carousel-arrow right-5 lg:right-8" aria-label="Next slide">
        <i class="fa-solid fa-chevron-right"></i>
    </button>

    <div class="absolute bottom-8 left-1/2 z-20 flex -translate-x-1/2 items-center gap-2">
        @foreach ($slides as $i => $slide)
            <button data-slide="{{ $i }}" class="carousel-dot {{ $i === 0 ? 'active' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
        @endforeach
    </div>
</section>

<section id="about" class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-20">
            <div class="section-reveal relative">
                <div class="absolute -inset-4 -rotate-2 rounded-3xl bg-[#FFF8D6]"></div>
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=85&w=1400&auto=format&fit=crop"
                     alt="B-COMP Office" class="relative h-[420px] w-full rounded-2xl object-cover lg:h-[510px]">
                <div class="absolute -bottom-6 right-2 z-10 max-w-[230px] rounded-xl bg-[#09294F] p-6 text-white shadow-xl sm:right-8">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/bcomp-logo.png') }}" alt="B-COMP" class="h-14 w-14 object-contain">
                        <div>
                            <div class="text-xl font-bold">B-COMP</div>
                            <div class="text-xs text-slate-300">Bekasi Computer</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-reveal">
                <span class="section-kicker">About B-COMP</span>
                <h2 class="section-title mt-4">Your Reliable Technology Partner</h2>
                <p class="mt-6 text-lg leading-relaxed text-slate-600">
                    Bekasi Computer (B-COMP) is a technology company based in Bekasi, Indonesia, focused on providing reliable IT solutions for businesses and organizations.
                </p>
                <p class="mt-4 leading-relaxed text-slate-600">
                    We combine technology expertise with a business-oriented approach to help clients improve operational efficiency, modernize infrastructure and develop reliable digital solutions.
                </p>
                <div class="mt-8 grid gap-5 sm:grid-cols-2">
                    @foreach (['Business-Oriented','Reliable Solutions','Professional Support','Scalable Technology'] as $item)
                        <div class="flex items-center gap-3">
                            <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-[#FFD600] text-[#061A30]">
                                <i class="fa-solid fa-check text-xs"></i>
                            </span>
                            <span class="font-semibold text-slate-700">{{ $item }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative overflow-hidden bg-[#09294F] py-14">
    <div class="relative mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-y-10 lg:grid-cols-4">
            @foreach ([['B2B','Business Solutions'],['End-to-End','IT Solutions'],['Secure','Technology Approach'],['Support','Professional Assistance']] as $i => $stat)
                <div class="text-center {{ $i < 3 ? 'lg:border-r lg:border-white/10' : '' }}">
                    <div class="text-3xl font-extrabold text-[#FFD600] lg:text-4xl">{{ $stat[0] }}</div>
                    <p class="mt-2 text-sm text-slate-300">{{ $stat[1] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="services" class="bg-slate-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="section-reveal mx-auto max-w-3xl text-center">
            <span class="section-kicker">Our Services</span>
            <h2 class="section-title mt-4">Technology Solutions for Your Business</h2>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">
                We deliver practical technology solutions that help businesses improve efficiency, reliability and digital capabilities.
            </p>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($services as $service)
                <article class="service-card section-reveal relative overflow-hidden rounded-xl border border-slate-200 bg-white p-8 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-[#FFF8D6] text-xl text-[#09294F]">
                        @switch($service['icon'])
                            @case('code') <i class="fa-solid fa-code"></i> @break
                            @case('network') <i class="fa-solid fa-network-wired"></i> @break
                            @case('server') <i class="fa-solid fa-server"></i> @break
                            @case('support') <i class="fa-solid fa-screwdriver-wrench"></i> @break
                            @case('shield') <i class="fa-solid fa-shield-halved"></i> @break
                            @default <i class="fa-solid fa-laptop"></i>
                        @endswitch
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-[#061A30]">{{ $service['title'] }}</h3>
                    <p class="mt-3 leading-relaxed text-slate-600">{{ $service['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="clients" class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="section-reveal mx-auto max-w-3xl text-center">
            <span class="section-kicker">Trusted By</span>
            <h2 class="section-title mt-4">What Our Clients Say</h2>
            <p class="mt-5 text-lg leading-relaxed text-slate-600">
                We build long-term relationships through reliable delivery, responsive support and practical technology solutions.
            </p>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($testimonials as $testimonial)
                <article class="section-reveal relative rounded-2xl border border-slate-200 bg-white p-7 transition-all duration-300 hover:-translate-y-2 hover:border-[#FFD600] hover:shadow-xl lg:p-8">
                    <i class="fa-solid fa-quote-right absolute right-7 top-6 text-5xl text-[#FFD600]/30"></i>
                    <div class="flex items-center gap-4">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-[#FFD600]/30 bg-[#FFF8D6] font-bold text-[#09294F]">
                            {{ $testimonial['initial'] }}
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-[#061A30]">{{ $testimonial['company'] }}</h3>
                            <p class="mt-1 text-sm text-slate-500">{{ $testimonial['type'] }}</p>
                        </div>
                    </div>
                    <div class="mt-6 flex gap-1 text-[#FFC21A]">
                        @for ($i = 0; $i < 5; $i++) <i class="fa-solid fa-star"></i> @endfor
                    </div>
                    <blockquote class="mt-5 leading-relaxed text-slate-600">“{{ $testimonial['quote'] }}”</blockquote>
                    <div class="mt-7 border-t border-slate-100 pt-6">
                        <p class="font-semibold text-[#061A30]">{{ $testimonial['person'] }}</p>
                        <p class="mt-1 text-sm text-slate-500">{{ $testimonial['role'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="portfolio" class="bg-[#061A30] py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="section-reveal max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#FFD600]">Portfolio / Projects</span>
            <h2 class="mt-4 font-manrope text-3xl font-extrabold text-white sm:text-4xl lg:text-5xl">
                Technology Projects Built to Deliver Value
            </h2>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $project)
                <article class="section-reveal group overflow-hidden rounded-2xl border border-white/10 bg-white/5 transition hover:bg-white/10">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        <span class="absolute left-4 top-4 rounded-full bg-[#FFD600] px-3 py-1 text-xs font-bold text-[#061A30]">
                            {{ $project['category'] }}
                        </span>
                    </div>
                    <div class="p-7">
                        <h3 class="text-xl font-bold text-white">{{ $project['title'] }}</h3>
                        <p class="mt-3 leading-relaxed text-slate-400">{{ $project['description'] }}</p>
                        <div class="mt-6 flex flex-wrap gap-2">
                            @foreach ($project['tags'] as $tag)
                                <span class="rounded-full bg-white/10 px-3 py-1 text-xs text-slate-300">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="technology" class="bg-white py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="section-reveal mx-auto max-w-3xl text-center">
            <span class="section-kicker">Technology Stack</span>
            <h2 class="section-title mt-4">Technologies We Work With</h2>
        </div>
        <div class="section-reveal mt-14 grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
            @foreach ($technologies as $technology)
                <div class="flex min-h-[110px] items-center justify-center rounded-xl border border-slate-200 bg-white px-4 text-center font-semibold text-[#09294F] transition hover:-translate-y-1 hover:border-[#FFD600] hover:bg-[#FFF8D6]">
                    {{ $technology }}
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-[#FFD600] py-16 lg:py-20">
    <div class="mx-auto flex max-w-7xl flex-col gap-8 px-5 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-bold uppercase tracking-[0.2em] text-[#09294F]">Have a project in mind?</p>
            <h2 class="mt-3 font-manrope text-3xl font-extrabold text-[#061A30] sm:text-4xl lg:text-5xl">
                Let's Build the Right Technology Solution.
            </h2>
        </div>
        <a href="https://wa.me/6285781010372" target="_blank" rel="noopener"
           class="inline-flex shrink-0 items-center justify-center gap-3 rounded-lg bg-[#09294F] px-8 py-4 font-bold text-white transition hover:bg-[#061A30]">
            <i class="fa-brands fa-whatsapp text-xl"></i> Talk to B-COMP
        </a>
    </div>
</section>

<section id="contact" class="bg-slate-50 py-20 lg:py-28">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
        <div class="section-reveal mx-auto max-w-3xl text-center">
            <span class="section-kicker">Contact Us</span>
            <h2 class="section-title mt-4">Let's Discuss Your Technology Needs</h2>
        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-5">
            <div class="section-reveal rounded-2xl bg-[#09294F] p-8 text-white lg:col-span-2 lg:p-10">
                <img src="{{ asset('images/bcomp-logo.png') }}" alt="B-COMP" class="h-20 w-20 object-contain">
                <h3 class="mt-6 text-2xl font-bold">Bekasi Computer</h3>
                <p class="mt-2 text-slate-300">Technology & IT Solutions</p>

                <div class="mt-10 space-y-7">
                    <a href="mailto:bekasi.computer22@gmail.com" class="flex gap-4">
                        <span class="contact-icon"><i class="fa-solid fa-envelope"></i></span>
                        <div>
                            <p class="text-sm text-slate-400">Email</p>
                            <p class="mt-1 break-all font-medium">bekasi.computer22@gmail.com</p>
                        </div>
                    </a>
                    <a href="https://wa.me/6285781010372" target="_blank" rel="noopener" class="flex gap-4">
                        <span class="contact-icon"><i class="fa-brands fa-whatsapp text-xl"></i></span>
                        <div>
                            <p class="text-sm text-slate-400">Phone / WhatsApp</p>
                            <p class="mt-1 font-medium">+62 857 8101 0372</p>
                        </div>
                    </a>
                    <div class="flex gap-4">
                        <span class="contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <div>
                            <p class="text-sm text-slate-400">Office</p>
                            <p class="mt-1 font-medium">Bekasi, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-reveal rounded-2xl border border-slate-200 bg-white p-7 shadow-xl lg:col-span-3 sm:p-9 lg:p-10">
                <h3 class="text-2xl font-bold text-[#061A30]">Send an Inquiry</h3>
                <p class="mt-2 text-slate-500">Your inquiry will be securely submitted to B-COMP.</p>

                <form id="contact-form" class="mt-8 space-y-5">
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label class="form-label">Full Name</label>
                            <input id="name" name="name" required maxlength="120" class="form-input" placeholder="Your name">
                        </div>
                        <div>
                            <label class="form-label">Company</label>
                            <input id="company" name="company" maxlength="160" class="form-input" placeholder="Company name">
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Business Email</label>
                        <input id="email" type="email" name="email" required maxlength="190" class="form-input" placeholder="name@company.com">
                    </div>

                    <div>
                        <label class="form-label">Service</label>
                        <select id="service" name="service" class="form-input">
                            @foreach (array_merge(['General Inquiry'], array_column($services, 'title')) as $service)
                                <option value="{{ $service }}">{{ $service }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="form-label">Message</label>
                        <textarea id="message" name="message" rows="5" required maxlength="3000" class="form-input resize-none" placeholder="Tell us about your requirements..."></textarea>
                    </div>

                    <button class="flex w-full items-center justify-center gap-3 rounded-lg bg-[#09294F] px-6 py-4 font-bold text-white transition hover:bg-[#153E73]">
                        <i class="fa-brands fa-whatsapp text-xl"></i> Send via WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="mx-auto max-w-7xl px-5 pb-20 sm:px-6 lg:px-8 lg:pb-28">
        <div class="section-reveal overflow-hidden rounded-2xl border border-slate-200 shadow-xl">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5551.585877354577!2d107.03559387630841!3d-6.243130861135207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f4fc3f6486b%3A0x51b98288af2f35d9!2sB-COM%20(Bekasi%20Computer)!5e1!3m2!1sid!2ssg!4v1787472083080!5m2!1sid!2ssg"
                width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin" title="B-COMP Location">
            </iframe>
        </div>
    </div>
</section>

<footer class="bg-[#041120] text-slate-400">
    <div class="mx-auto max-w-7xl px-5 pb-8 pt-16 sm:px-6 lg:px-8">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
            <div>
                <a href="#home" class="flex items-center gap-3">
                    <img src="{{ asset('images/bcomp-logo.png') }}" alt="B-COMP" class="h-14 w-14 object-contain">
                    <div>
                        <div class="text-xl font-extrabold text-white">B-COMP</div>
                        <div class="text-xs">Bekasi Computer</div>
                    </div>
                </a>
                <p class="mt-5 max-w-xs text-sm leading-relaxed">
                    Reliable technology, software, infrastructure and IT solutions for modern businesses.
                </p>
            </div>

            <div>
                <h4 class="font-bold text-white">Company</h4>
                <div class="mt-5 flex flex-col gap-3 text-sm">
                    <a href="#about" class="footer-link">About Us</a>
                    <a href="#services" class="footer-link">Services</a>
                    <a href="#clients" class="footer-link">Our Clients</a>
                    <a href="#portfolio" class="footer-link">Portfolio</a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-white">Services</h4>
                <div class="mt-5 flex flex-col gap-3 text-sm">
                    @foreach (array_slice($services, 0, 5) as $service)
                        <span>{{ $service['title'] }}</span>
                    @endforeach
                </div>
            </div>

            <div>
                <h4 class="font-bold text-white">Contact</h4>
                <div class="mt-5 space-y-4 text-sm">
                    <a href="mailto:bekasi.computer22@gmail.com" class="footer-link flex gap-3">
                        <i class="fa-solid fa-envelope mt-1 text-[#FFD600]"></i>
                        <span class="break-all">bekasi.computer22@gmail.com</span>
                    </a>
                    <a href="https://wa.me/6285781010372" target="_blank" rel="noopener" class="footer-link flex gap-3">
                        <i class="fa-brands fa-whatsapp mt-1 text-[#FFD600]"></i>
                        +62 857 8101 0372
                    </a>
                    <div class="flex gap-3">
                        <i class="fa-solid fa-location-dot mt-1 text-[#FFD600]"></i>
                        Bekasi, Indonesia
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-14 flex flex-col justify-between gap-4 border-t border-white/10 pt-7 text-sm md:flex-row">
            <p>© {{ now()->year }} Bekasi Computer (B-COMP). All Rights Reserved.</p>
            <p>Technology Solutions for Better Business.</p>
        </div>
    </div>
</footer>

<a href="https://wa.me/6285781010372?text=Hello%20B-COMP,%20I%20would%20like%20to%20discuss%20an%20IT%20solution."
   target="_blank" rel="noopener" aria-label="Contact B-COMP via WhatsApp"
   class="fixed bottom-5 right-5 z-40 flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-2xl transition hover:scale-110 sm:bottom-7 sm:right-7 sm:h-16 sm:w-16">
    <i class="fa-brands fa-whatsapp text-2xl sm:text-3xl"></i>
</a>
@endsection
