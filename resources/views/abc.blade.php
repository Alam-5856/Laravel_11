<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Therapy Services Overview</title>
    <meta name="description"
        content="This platform offers therapeutic services including past life regression and NLP to help users overcome anxiety, stress, and emotional blockages for personal growth.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

    <style>
        /* ---------- palette (mirrors the Tailwind scale the Figma site uses) ---------- */
        :root {
            --orange-50: #fff7ed;
            --orange-100: #ffedd5;
            --orange-200: #fed7aa;
            --orange-300: #fdba74;
            --orange-400: #fb923c;
            --orange-500: #f97316;
            --orange-600: #ea580c;
            --orange-700: #c2410c;
            --orange-800: #9a3412;
            --orange-900: #7c2d12;
            --amber-50: #fffbeb;
            --amber-100: #fef3c7;
            --amber-400: #fbbf24;
            --amber-600: #d97706;
            --amber-800: #92400e;
            --amber-900: #78350f;
            --green-100: #dcfce7;
            --green-400: #4ade80;
            --green-500: #22c55e;
            --green-600: #16a34a;
            --green-700: #15803d;
            --blue-100: #dbeafe;
            --blue-600: #2563eb;
            --purple-100: #f3e8ff;
            --purple-600: #9333ea;
            --gray-600: #4b5563;
            --gray-700: #374151;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: var(--gray-700);
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-weight: 500;
        }

        /* ---------- shared helpers ---------- */
        .text-amber-900 { color: var(--amber-900) !important; }
        .text-orange-600 { color: var(--orange-600) !important; }
        .text-gray-700 { color: var(--gray-700) !important; }
        .text-gray-600 { color: var(--gray-600) !important; }
        .text-orange-100 { color: var(--orange-100); }
        .text-orange-200 { color: var(--orange-200); }
        .text-orange-300 { color: var(--orange-300); }

        .section-pad { padding: 5rem 0; }

        .shell {
            max-width: 80rem;
            margin: 0 auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .shell-md { max-width: 56rem; }

        @media (min-width: 576px) {
            .shell { padding-left: 1.5rem; padding-right: 1.5rem; }
        }

        @media (min-width: 992px) {
            .shell { padding-left: 2rem; padding-right: 2rem; }
        }

        .heading-rule {
            width: 6rem;
            height: 4px;
            background: var(--orange-600);
            margin: 0 auto;
        }

        .section-title {
            font-size: 2.25rem;
            color: var(--amber-900);
            margin-bottom: 1rem;
        }

        @media (min-width: 768px) {
            .section-title { font-size: 3rem; }
        }

        .lead-copy {
            font-size: 1.25rem;
            color: var(--gray-700);
        }

        .tick {
            color: var(--orange-600);
            margin-top: .25rem;
            flex-shrink: 0;
        }

        .bg-warm-1 { background: linear-gradient(to bottom right, var(--orange-50), var(--amber-50)); }
        .bg-warm-2 { background: linear-gradient(to bottom right, var(--amber-50), var(--orange-50)); }

        .grad-icon {
            background: linear-gradient(to bottom right, var(--orange-400), var(--amber-600));
            color: #fff;
        }

        /* ---------- buttons ---------- */
        .btn-pill {
            border-radius: 9999px;
            padding: 1rem 2rem;
            border: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            text-decoration: none;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -4px rgba(0, 0, 0, .1);
            transition: background-color .2s, color .2s, transform .2s;
        }

        .btn-orange { background: var(--orange-600); color: #fff; }
        .btn-orange:hover { background: var(--orange-700); color: #fff; }
        .btn-green { background: var(--green-600); color: #fff; }
        .btn-green:hover { background: var(--green-700); color: #fff; }
        .btn-amber { background: var(--amber-800); color: #fff; }
        .btn-amber:hover { background: var(--amber-900); color: #fff; }

        .btn-outline-orange {
            background: #fff;
            color: var(--amber-900);
            border: 2px solid var(--orange-600);
        }

        .btn-outline-orange:hover { background: #f9fafb; color: var(--amber-900); }

        /* ---------- hero ---------- */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: linear-gradient(to bottom right, var(--orange-50), var(--amber-50) 50%, var(--orange-100));
        }

        .hero-blobs {
            position: absolute;
            inset: 0;
            opacity: .1;
            pointer-events: none;
        }

        .hero-blobs span {
            position: absolute;
            display: block;
            border-radius: 9999px;
            filter: blur(64px);
        }

        .blob-a { top: 5rem; left: 2.5rem; width: 18rem; height: 18rem; background: var(--orange-400); }
        .blob-b { bottom: 5rem; right: 2.5rem; width: 24rem; height: 24rem; background: var(--amber-400); }

        .hero-inner {
            position: relative;
            z-index: 10;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .hero-logo { width: 12rem; height: 12rem; }

        .hero h1 {
            font-size: 2.25rem;
            color: var(--amber-900);
            margin-bottom: 1rem;
        }

        .hero-sub {
            font-size: 1.5rem;
            color: var(--orange-800);
            margin-bottom: 1.5rem;
        }

        .hero-pill {
            padding: .5rem 1rem;
            background: rgba(255, 255, 255, .5);
            border-radius: 9999px;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            color: var(--amber-900);
            font-size: 1rem;
        }

        @media (min-width: 576px) {
            .hero-logo { width: 14rem; height: 14rem; }
            .hero h1 { font-size: 3rem; }
            .hero-sub { font-size: 1.875rem; }
            .hero-pill { font-size: 1.125rem; }
        }

        @media (min-width: 768px) {
            .hero-logo { width: 16rem; height: 16rem; }
            .hero h1 { font-size: 3.75rem; }
            .hero-sub { font-size: 2.25rem; }
        }

        @media (min-width: 992px) {
            .hero h1 { font-size: 4.5rem; }
        }

        /* ---------- about ---------- */
        .about-photo-wrap { position: relative; display: inline-block; }

        .about-photo-wrap::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom right, var(--orange-400), var(--amber-600));
            border-radius: 1.5rem;
            transform: rotate(3deg);
        }

        .about-photo {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 28rem;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, .25);
        }

        /* ---------- cards ---------- */
        .service-card {
            background: #fff;
            border-radius: 1rem;
            padding: 2rem;
            border: 1px solid var(--orange-100);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1);
            transition: box-shadow .3s;
            height: 100%;
        }

        .service-card:hover { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, .25); }

        .service-icon {
            padding: 1rem;
            border-radius: .75rem;
            flex-shrink: 0;
            line-height: 0;
        }

        .feature-card {
            text-align: center;
            padding: 1.5rem;
            border-radius: .75rem;
            transition: background-color .2s;
            height: 100%;
        }

        .feature-card:hover { background: var(--orange-50); }

        .feature-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 4rem;
            height: 4rem;
            border-radius: 9999px;
            margin-bottom: 1rem;
        }

        .stat-num {
            font-size: 2.25rem;
            color: var(--orange-600);
            margin-bottom: .5rem;
        }

        .testimonial-card {
            position: relative;
            background: #fff;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1);
            transition: box-shadow .3s;
            height: 100%;
        }

        .testimonial-card:hover { box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .1); }

        .quote-mark {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: var(--orange-200);
            line-height: 0;
        }

        .star-filled { fill: var(--orange-500); color: var(--orange-500); }

        /* ---------- booking form ---------- */
        .booking-box {
            background: linear-gradient(to bottom right, var(--orange-50), var(--amber-50));
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, .1);
        }

        .booking-box label {
            display: block;
            color: var(--amber-900);
            margin-bottom: .5rem;
        }

        .booking-box .form-control,
        .booking-box .form-select {
            padding: .75rem 1rem;
            border-radius: .5rem;
            border: 1px solid var(--orange-200);
            background-color: #fff;
        }

        .booking-box .form-control:focus,
        .booking-box .form-select:focus {
            border-color: var(--orange-600);
            box-shadow: 0 0 0 2px rgba(234, 88, 12, .5);
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, var(--orange-600), var(--amber-600));
            color: #fff;
            border: 0;
            border-radius: .5rem;
            font-size: 1.125rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1);
            transition: filter .2s;
        }

        .btn-submit:hover { filter: brightness(.92); }

        /* ---------- faq ---------- */
        .faq-item {
            background: #fff;
            border-radius: .75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, .1);
            overflow: hidden;
            margin-bottom: 1rem;
            transition: box-shadow .2s;
        }

        .faq-item:hover { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1); }

        .faq-q {
            width: 100%;
            background: transparent;
            border: 0;
            padding: 1.25rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            text-align: left;
            font-size: 1.125rem;
            color: var(--amber-900);
            transition: background-color .2s;
        }

        .faq-q:hover { background: var(--orange-50); }
        .faq-q .chev-up { display: none; }
        .faq-q[aria-expanded="true"] .chev-up { display: block; }
        .faq-q[aria-expanded="true"] .chev-down { display: none; }

        .faq-a {
            padding: 0 1.5rem 1.25rem;
            color: var(--gray-700);
            line-height: 1.625;
        }

        /* ---------- contact ---------- */
        .contact-ico {
            padding: .75rem;
            border-radius: .5rem;
            flex-shrink: 0;
            line-height: 0;
        }

        .journey-box {
            background: linear-gradient(to bottom right, var(--orange-100), var(--amber-100));
            border-radius: 1rem;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        /* ---------- footer ---------- */
        .site-footer {
            background: linear-gradient(to bottom right, var(--amber-900), var(--orange-900));
            color: #fff;
        }

        .site-footer a { color: inherit; text-decoration: none; }
        .site-footer a:hover { color: #fff; }
        .footer-divider { border-top: 1px solid var(--orange-800); }

        .footer-social {
            padding: .75rem;
            background: rgba(255, 255, 255, .1);
            border-radius: 9999px;
            display: inline-flex;
            transition: background-color .2s;
        }

        .footer-social:hover { background: rgba(255, 255, 255, .2); }

        /* ---------- floating whatsapp ---------- */
        .wa-float {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            z-index: 1050;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 4rem;
            height: 4rem;
            background: var(--green-500);
            color: #fff;
            border-radius: 9999px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, .25);
            transition: background-color .3s, transform .3s;
            animation: wa-bounce 1s infinite;
        }

        .wa-float:hover {
            background: var(--green-600);
            color: #fff;
            transform: scale(1.1);
        }

        .wa-badge {
            position: absolute;
            top: -.25rem;
            right: -.25rem;
            display: flex;
            height: 1.25rem;
            width: 1.25rem;
        }

        .wa-badge .ping {
            position: absolute;
            display: inline-flex;
            height: 100%;
            width: 100%;
            border-radius: 9999px;
            background: var(--green-400);
            opacity: .75;
            animation: wa-ping 1s cubic-bezier(0, 0, .2, 1) infinite;
        }

        .wa-badge .dot {
            position: relative;
            display: inline-flex;
            border-radius: 9999px;
            height: 1.25rem;
            width: 1.25rem;
            background: var(--green-500);
        }

        @keyframes wa-bounce {
            0%, 100% { transform: translateY(-25%); animation-timing-function: cubic-bezier(.8, 0, 1, 1); }
            50% { transform: none; animation-timing-function: cubic-bezier(0, 0, .2, 1); }
        }

        @keyframes wa-ping {
            75%, 100% { transform: scale(2); opacity: 0; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            .wa-float, .wa-badge .ping { animation: none; }
        }
    </style>
</head>

<body>

    <!-- ============================ HERO ============================ -->
    <section class="hero">
        <div class="hero-blobs">
            <span class="blob-a"></span>
            <span class="blob-b"></span>
        </div>

        <div class="shell hero-inner text-center">
            <div class="d-flex justify-content-center mb-4">
                <img src="/logo.png" alt="Flying Monk Logo" class="hero-logo">
            </div>

            <h1>Flying Monk Soul Awakening</h1>
            <p class="hero-sub">Journey Beyond Time — Heal Your Mind, Body &amp; Soul</p>

            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">
                <span class="hero-pill">Past Life Regression</span>
                <span class="hero-pill">Future Life Progression</span>
                <span class="hero-pill">Inner Child Healing</span>
                <span class="hero-pill">Age Regression</span>
                <span class="hero-pill">Womb Healing</span>
            </div>

            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center align-items-center">
                <a href="tel:9873017269" class="btn-pill btn-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                    <span>Call Now: 9873017269</span>
                </a>

                <a href="https://wa.me/919873017269?text=Hi%20Vivek%2C%20I%20want%20to%20book%20Past%20Life%20Regression%20session"
                    target="_blank" rel="noopener noreferrer" class="btn-pill btn-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                    </svg>
                    <span>WhatsApp Now</span>
                </a>

                <a href="#booking" class="btn-pill btn-amber">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M8 2v4" /><path d="M16 2v4" />
                        <rect width="18" height="18" x="3" y="4" rx="2" /><path d="M3 10h18" />
                    </svg>
                    <span>Book Session</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ============================ ABOUT ============================ -->
    <section id="about" class="section-pad bg-white">
        <div class="shell">
            <div class="text-center mb-5">
                <h2 class="section-title">About Flying Monk</h2>
                <div class="heading-rule mb-4"></div>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="about-photo-wrap">
                        <img src="/vivek.jpg" alt="Vivek - Flying Monk" class="about-photo">
                    </div>
                </div>

                <div class="col-md-6">
                    <p class="fs-5 text-gray-700 lh-base mb-4">
                        <strong class="text-amber-900">Flying Monk Soul Awakening</strong> is dedicated to helping
                        individuals heal emotional pain, fears, anxiety, and relationship challenges through powerful
                        subconscious healing techniques.
                    </p>
                    <p class="fs-5 text-gray-700 lh-base mb-4">
                        Led by <strong class="text-amber-900">Vivek — Flying Monk</strong>, our sessions are safe,
                        guided, and transformational. We believe that true healing comes from within, and through
                        accessing the subconscious mind, we can unlock profound insights and release deep-seated
                        emotional blockages.
                    </p>
                    <p class="fs-5 text-gray-700 lh-base mb-4">
                        Whether you're dealing with anxiety, relationship issues, past trauma, or seeking personal
                        growth, our specialized healing modalities can help you discover the root causes and achieve
                        lasting transformation.
                    </p>

                    <div class="pt-3">
                        <h3 class="fs-3 text-amber-900 mb-3">What We Believe</h3>
                        <ul class="list-unstyled text-gray-700 m-0">
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <span class="tick">✓</span><span>Every soul carries wisdom from past experiences</span>
                            </li>
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <span class="tick">✓</span><span>Healing happens when we access our inner truth</span>
                            </li>
                            <li class="d-flex align-items-start gap-3 mb-3">
                                <span class="tick">✓</span><span>Transformation begins with self-awareness</span>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <span class="tick">✓</span><span>You have the power to heal yourself</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ SERVICES ============================ -->
    <section id="services" class="section-pad bg-warm-1">
        <div class="shell">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Healing Services</h2>
                <div class="heading-rule mb-4"></div>
                <p class="lead-copy mx-auto" style="max-width:48rem;">
                    Transformative healing modalities to help you release pain, find clarity, and awaken your soul
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="service-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/><path d="M20 3v4"/><path d="M22 5h-4"/><path d="M4 17v2"/><path d="M5 18H3"/></svg></div>
                            <div><h3 class="fs-3 text-amber-900 mb-2">Past Life Regression</h3></div>
                        </div>
                        <p class="text-gray-700 mb-4 lh-base">Journey into your past lives to understand current life patterns and heal deep-rooted fears.</p>
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Discover past life memories</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Heal emotional trauma</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Remove unexplained fears</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Understand karmic patterns</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="service-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"/><circle cx="12" cy="12" r="10"/></svg></div>
                            <div><h3 class="fs-3 text-amber-900 mb-2">Future Life Progression</h3></div>
                        </div>
                        <p class="text-gray-700 mb-4 lh-base">Experience your possible future and gain clarity about your life path, career, and relationships.</p>
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Experience your future timeline</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Meet your future self</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Gain clarity about decisions</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Remove fears about future</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Understand your life purpose</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="service-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
                            <div><h3 class="fs-3 text-amber-900 mb-2">Inner Child Healing</h3></div>
                        </div>
                        <p class="text-gray-700 mb-4 lh-base">Connect with your inner child to heal childhood wounds and reclaim your authentic self.</p>
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Heal childhood emotional wounds</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Improve self-confidence</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Reduce anxiety and stress</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Build healthier relationships</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="service-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                            <div><h3 class="fs-3 text-amber-900 mb-2">Age Regression</h3></div>
                        </div>
                        <p class="text-gray-700 mb-4 lh-base">Revisit specific moments in your current life to release trapped emotions and limiting beliefs.</p>
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Heal past traumatic memories</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Release emotional pain</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Overcome phobias</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Transform negative patterns</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-card">
                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="service-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/><path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16c.5.3 1.2.5 2 .5s1.5-.2 2-.5"/><path d="M19 6.3a9 9 0 0 1 1.8 3.9 2 2 0 0 1 0 3.6 9 9 0 0 1-17.6 0 2 2 0 0 1 0-3.6A9 9 0 0 1 12 3c2 0 3.5 1.1 3.5 2.5s-.9 2.5-2 2.5c-.8 0-1.5-.4-1.5-1"/></svg></div>
                            <div><h3 class="fs-3 text-amber-900 mb-2">Womb Regression</h3></div>
                        </div>
                        <p class="text-gray-700 mb-4 lh-base">Access memories from the womb to heal the deepest subconscious blocks and emotional imprints.</p>
                        <div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Heal prenatal trauma</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Release subconscious blocks</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Emotional balance</span></div>
                            <div class="d-flex align-items-start gap-3 mb-3"><span class="tick">✓</span><span class="text-gray-700">Connect with life purpose</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ WHY CHOOSE ============================ -->
    <section class="section-pad bg-white">
        <div class="shell">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Choose Flying Monk</h2>
                <div class="heading-rule mb-4"></div>
                <p class="lead-copy mx-auto" style="max-width:48rem;">
                    Experience healing with a trusted guide who understands your journey
                </p>
            </div>

            <div class="row g-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg></div>
                        <h3 class="fs-4 text-amber-900 mb-3">Personalized Sessions</h3>
                        <p class="text-gray-700 m-0">Each session is tailored to your unique needs and healing journey</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg></div>
                        <h3 class="fs-4 text-amber-900 mb-3">Confidential Healing</h3>
                        <p class="text-gray-700 m-0">Your privacy and trust are our top priorities. All sessions are completely confidential</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg></div>
                        <h3 class="fs-4 text-amber-900 mb-3">Online / Offline Available</h3>
                        <p class="text-gray-700 m-0">Choose between in-person sessions in Noida or convenient online sessions from anywhere</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
                        <h3 class="fs-4 text-amber-900 mb-3">Safe Guided Experience</h3>
                        <p class="text-gray-700 m-0">Professional guidance throughout your healing journey with proven techniques</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg></div>
                        <h3 class="fs-4 text-amber-900 mb-3">100+ Happy Clients</h3>
                        <p class="text-gray-700 m-0">Join hundreds of satisfied clients who have experienced profound transformation</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-card">
                        <div class="feature-icon grad-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        <h3 class="fs-4 text-amber-900 mb-3">Flexible Scheduling</h3>
                        <p class="text-gray-700 m-0">Book sessions at times that work best for you, including weekends</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center mt-4">
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="stat-num">100+</div>
                        <div class="text-gray-700">Happy Clients</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="stat-num">500+</div>
                        <div class="text-gray-700">Sessions Conducted</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="stat-num">5+</div>
                        <div class="text-gray-700">Years Experience</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="p-3">
                        <div class="stat-num">100%</div>
                        <div class="text-gray-700">Confidential</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ TESTIMONIALS ============================ -->
    <section id="testimonials" class="section-pad bg-warm-2">
        <div class="shell">
            <div class="text-center mb-5">
                <h2 class="section-title">Client Testimonials</h2>
                <div class="heading-rule mb-4"></div>
                <p class="lead-copy mx-auto" style="max-width:48rem;">
                    Real stories from people who found healing and transformation
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <span class="quote-mark"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg></span>
                        <div class="d-flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></div>
                        <p class="text-gray-700 mb-4 lh-base fst-italic">"Life-changing experience! I discovered the root cause of my fear of water, which came from a past life. After the session, I feel liberated and at peace."</p>
                        <div class="pt-3" style="border-top:1px solid #e5e7eb;">
                            <p class="text-amber-900 mb-0">Priya S.</p>
                            <p class="small text-gray-600 mb-0">Past Life Regression</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <span class="quote-mark"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg></span>
                        <div class="d-flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></div>
                        <p class="text-gray-700 mb-4 lh-base fst-italic">"Vivek helped me heal childhood wounds I didn&#039;t even know existed. My relationships have improved dramatically, and I finally feel confident in myself."</p>
                        <div class="pt-3" style="border-top:1px solid #e5e7eb;">
                            <p class="text-amber-900 mb-0">Rahul M.</p>
                            <p class="small text-gray-600 mb-0">Inner Child Healing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <span class="quote-mark"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg></span>
                        <div class="d-flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></div>
                        <p class="text-gray-700 mb-4 lh-base fst-italic">"I was struggling with severe anxiety for years. Through age regression, we found the triggering event and released it. I feel like a new person!"</p>
                        <div class="pt-3" style="border-top:1px solid #e5e7eb;">
                            <p class="text-amber-900 mb-0">Sneha K.</p>
                            <p class="small text-gray-600 mb-0">Age Regression</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <span class="quote-mark"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg></span>
                        <div class="d-flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></div>
                        <p class="text-gray-700 mb-4 lh-base fst-italic">"The womb regression session was incredibly profound. I understood why I felt disconnected from my purpose. Now I have clarity and direction."</p>
                        <div class="pt-3" style="border-top:1px solid #e5e7eb;">
                            <p class="text-amber-900 mb-0">Amit P.</p>
                            <p class="small text-gray-600 mb-0">Womb Regression</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <span class="quote-mark"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg></span>
                        <div class="d-flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></div>
                        <p class="text-gray-700 mb-4 lh-base fst-italic">"My recurring nightmares stopped after discovering their connection to a past life. Vivek&#039;s guidance made me feel safe throughout the process."</p>
                        <div class="pt-3" style="border-top:1px solid #e5e7eb;">
                            <p class="text-amber-900 mb-0">Kavita R.</p>
                            <p class="small text-gray-600 mb-0">Past Life Regression</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <span class="quote-mark"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/></svg></span>
                        <div class="d-flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f97316" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="star-filled"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></div>
                        <p class="text-gray-700 mb-4 lh-base fst-italic">"I was skeptical at first, but the results speak for themselves. My anger issues have resolved, and I&#039;m building healthier relationships."</p>
                        <div class="pt-3" style="border-top:1px solid #e5e7eb;">
                            <p class="text-amber-900 mb-0">Rohan D.</p>
                            <p class="small text-gray-600 mb-0">Inner Child Healing</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5 text-center">
                <p class="fs-4 text-amber-900 mb-3">Join hundreds of satisfied clients on their healing journey</p>
                <a href="#booking" class="btn-pill btn-orange">Book Your Session Now</a>
            </div>
        </div>
    </section>

    <!-- ============================ BOOKING ============================ -->
    <section id="booking" class="section-pad bg-white">
        <div class="shell shell-md">
            <div class="text-center mb-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="text-orange-600 mb-3">
                    <path d="M8 2v4" /><path d="M16 2v4" />
                    <rect width="18" height="18" x="3" y="4" rx="2" /><path d="M3 10h18" />
                </svg>
                <h2 class="section-title">Book Your Session</h2>
                <div class="heading-rule mb-4"></div>
                <p class="lead-copy">Take the first step towards healing and transformation</p>
            </div>

            <div class="booking-box">
                <form id="booking-form" class="d-grid gap-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required class="form-control"
                                placeholder="Your name">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required class="form-control"
                                placeholder="Your phone number">
                        </div>
                    </div>

                    <div>
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required class="form-control"
                            placeholder="your.email@example.com">
                    </div>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="service">Service Required *</label>
                            <select id="service" name="service" required class="form-select">
                                <option value="">Select a service</option>
                                <option value="Past Life Regression">Past Life Regression</option>
                                <option value="Future Life Progression">Future Life Progression</option>
                                <option value="Inner Child Healing">Inner Child Healing</option>
                                <option value="Age Regression">Age Regression</option>
                                <option value="Womb Regression">Womb Regression</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="date">Preferred Date *</label>
                            <input type="date" id="date" name="date" required class="form-control">
                        </div>
                    </div>

                    <div>
                        <label for="message">Message (Optional)</label>
                        <textarea id="message" name="message" rows="4" class="form-control" style="resize:none;"
                            placeholder="Tell us about your healing goals or any questions you have..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <span id="submit-idle" class="d-flex align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                                <path d="m21.854 2.147-10.94 10.939" />
                            </svg>
                            <span>Send Booking Request via WhatsApp</span>
                        </span>
                        <span id="submit-done" class="d-none align-items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335" /><path d="m9 11 3 3L22 4" />
                            </svg>
                            <span>Booking Request Sent!</span>
                        </span>
                    </button>
                </form>

                <div class="mt-4 p-4 bg-white rounded" style="border:1px solid var(--orange-200);">
                    <p class="text-center text-gray-700 m-0">
                        <strong class="text-amber-900">Note:</strong> After submitting, you'll be redirected to WhatsApp
                        to confirm your booking with Vivek directly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ FAQ ============================ -->
    <section id="faq" class="section-pad bg-warm-1">
        <div class="shell shell-md">
            <div class="text-center mb-5">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <div class="heading-rule mb-4"></div>
                <p class="lead-copy">Everything you need to know about our healing sessions</p>
            </div>

            <div id="faq-list">
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-0" aria-expanded="false" aria-controls="faq-0">
                        <span class="pe-3">What is Past Life Regression?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-0" data-bs-parent="#faq-list">
                        <div class="faq-a">Past Life Regression is a therapeutic technique that uses hypnosis to access memories from previous lifetimes. It helps you understand current life patterns, fears, and relationships by exploring their origins in past lives. This can lead to profound healing and personal transformation.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
                        <span class="pe-3">Is Past Life Regression safe?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-1" data-bs-parent="#faq-list">
                        <div class="faq-a">Yes, Past Life Regression is completely safe when conducted by a trained professional like Vivek. You remain in control throughout the session and can stop at any time. The process is gentle, guided, and designed to ensure your comfort and safety.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                        <span class="pe-3">How long does a session take?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-2" data-bs-parent="#faq-list">
                        <div class="faq-a">A typical session lasts between 2 to 3 hours. This includes pre-session discussion, the regression therapy itself, and post-session integration. We take the time needed to ensure a thorough and meaningful experience.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                        <span class="pe-3">Do I need to believe in past lives for it to work?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-3" data-bs-parent="#faq-list">
                        <div class="faq-a">No, you don&#039;t need to believe in past lives. Whether the experiences are actual past life memories or metaphors from your subconscious, the healing benefits are real. Many clients approach with an open mind and find profound insights.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                        <span class="pe-3">What conditions can be treated?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-4" data-bs-parent="#faq-list">
                        <div class="faq-a">We help with anxiety, depression, phobias, relationship issues, chronic pain, lack of purpose, low self-esteem, addictions, unexplained fears, and patterns that keep repeating in your life. Each session is tailored to your specific needs.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                        <span class="pe-3">Are online sessions as effective as in-person?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-5" data-bs-parent="#faq-list">
                        <div class="faq-a">Yes! Online sessions via video call are just as effective as in-person sessions. You can experience the healing from the comfort of your home. All you need is a quiet space, good internet connection, and headphones.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-6" aria-expanded="false" aria-controls="faq-6">
                        <span class="pe-3">How many sessions will I need?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-6" data-bs-parent="#faq-list">
                        <div class="faq-a">Many clients experience significant breakthroughs in just one session. However, some prefer multiple sessions to explore different areas or go deeper into their healing journey. We&#039;ll discuss your specific needs during the consultation.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-7" aria-expanded="false" aria-controls="faq-7">
                        <span class="pe-3">What should I expect during a session?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-7" data-bs-parent="#faq-list">
                        <div class="faq-a">You&#039;ll be guided into a deeply relaxed state through hypnosis. You remain conscious and aware throughout, able to speak and describe your experiences. Most people describe it as a peaceful, meditative state where insights and memories emerge naturally.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-8" aria-expanded="false" aria-controls="faq-8">
                        <span class="pe-3">How do I prepare for a session?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-8" data-bs-parent="#faq-list">
                        <div class="faq-a">Come with an open mind and specific questions or issues you&#039;d like to explore. Wear comfortable clothes, avoid heavy meals before the session, and ensure you&#039;re well-rested. We&#039;ll guide you through everything else.</div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-q" type="button" data-bs-toggle="collapse" data-bs-target="#faq-9" aria-expanded="false" aria-controls="faq-9">
                        <span class="pe-3">What are your fees and payment options?</span>
                        <span class="text-orange-600 flex-shrink-0 lh-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-down"><path d="m6 9 6 6 6-6"/></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="chev-up"><path d="m18 15-6-6-6 6"/></svg></span>
                    </button>
                    <div class="collapse" id="faq-9" data-bs-parent="#faq-list">
                        <div class="faq-a">Session fees vary based on the type and duration of therapy. Please contact us via WhatsApp or phone for current pricing. We accept online payments, bank transfers, and cash payments. Payment plans can be discussed for multiple sessions.</div>
                    </div>
                </div>
            </div>

            <div class="mt-5 text-center p-4 p-md-5 bg-white rounded-4 shadow-sm">
                <p class="fs-4 text-amber-900 mb-3">Still have questions?</p>
                <p class="text-gray-700 mb-4">
                    We're here to help! Contact us via WhatsApp or phone for personalized answers.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://wa.me/919873017269?text=Hi%20Vivek%2C%20I%20have%20some%20questions%20about%20the%20sessions"
                        target="_blank" rel="noopener noreferrer" class="btn-pill btn-green"
                        style="padding:.75rem 2rem;">WhatsApp Us</a>
                    <a href="tel:9873017269" class="btn-pill btn-orange" style="padding:.75rem 2rem;">Call: 9873017269</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ CONTACT ============================ -->
    <section id="contact" class="section-pad bg-white">
        <div class="shell">
            <div class="text-center mb-5">
                <h2 class="section-title">Get In Touch</h2>
                <div class="heading-rule mb-4"></div>
                <p class="lead-copy">Ready to begin your healing journey? Contact us today</p>
            </div>

            <div class="row g-5">
                <div class="col-md-6">
                    <div>
                        <h3 class="fs-3 text-amber-900 mb-4">Contact Information</h3>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="contact-ico" style="background:var(--orange-100);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="text-orange-600">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 mb-1">Phone</p>
                                <a href="tel:9873017269" class="fs-4 text-amber-900 text-decoration-none">9873017269</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="contact-ico" style="background:var(--green-100);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color:var(--green-600);">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 mb-1">WhatsApp</p>
                                <a href="https://wa.me/919873017269" target="_blank" rel="noopener noreferrer"
                                    class="fs-4 text-amber-900 text-decoration-none">Chat with us</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="contact-ico" style="background:var(--blue-100);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color:var(--blue-600);">
                                    <rect width="20" height="16" x="2" y="4" rx="2" />
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 mb-1">Email</p>
                                <a href="mailto:info@flyingmonk.com"
                                    class="fs-4 text-amber-900 text-decoration-none">info@flyingmonk.com</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="contact-ico" style="background:var(--amber-100);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color:var(--amber-600);">
                                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 mb-1">Location</p>
                                <p class="fs-4 text-amber-900 m-0">Noida, India</p>
                                <p class="text-gray-600 mt-1 mb-0">Online sessions available worldwide</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="contact-ico" style="background:var(--purple-100);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" style="color:var(--purple-600);">
                                    <circle cx="12" cy="12" r="10" /><polyline points="12 6 12 12 16 14" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-600 mb-1">Session Hours</p>
                                <p class="text-amber-900 mb-0">Monday - Saturday: 10:00 AM - 7:00 PM</p>
                                <p class="text-amber-900 mb-0">Sunday: By Appointment</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4 mt-4" style="border-top:1px solid var(--orange-200);">
                        <h3 class="fs-3 text-amber-900 mb-3">Session Types</h3>
                        <div class="text-gray-700">
                            <p class="mb-2">✓ In-Person Sessions (Noida)</p>
                            <p class="mb-2">✓ Online Video Sessions</p>
                            <p class="mb-2">✓ Individual Sessions</p>
                            <p class="mb-2">✓ Couple Sessions</p>
                            <p class="mb-0">✓ Follow-up Sessions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="journey-box">
                        <h3 class="fs-2 text-amber-900 mb-4">Start Your Healing Journey Today</h3>
                        <p class="fs-5 text-gray-700 mb-4 lh-base">
                            Take the first step towards emotional freedom, inner peace, and self-discovery. Book a
                            session with Vivek — Flying Monk and experience the transformative power of subconscious
                            healing.
                        </p>

                        <div class="d-grid gap-3">
                            <a href="https://wa.me/919873017269?text=Hi%20Vivek%2C%20I%20want%20to%20book%20a%20session"
                                target="_blank" rel="noopener noreferrer" class="btn-pill btn-green w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                </svg>
                                <span>Book via WhatsApp</span>
                            </a>
                            <a href="tel:9873017269" class="btn-pill btn-orange w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                                <span>Call Now: 9873017269</span>
                            </a>
                            <a href="#booking" class="btn-pill btn-outline-orange w-100">Fill Booking Form</a>
                        </div>

                        <div class="mt-4 p-3 bg-white rounded-3">
                            <p class="text-center small text-gray-600 m-0">
                                <strong class="text-amber-900">Special Offer:</strong> First-time clients get a free
                                15-minute consultation call
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================ FOOTER ============================ -->
    <footer class="site-footer">
        <div class="shell" style="padding-top:4rem; padding-bottom:4rem;">
            <div class="row g-5 mb-4">
                <div class="col-md-6">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="/logo.png" alt="Flying Monk Logo" style="width:5rem; height:5rem;">
                        <div>
                            <h3 class="fs-3 m-0">Flying Monk</h3>
                            <p class="text-orange-200 m-0">Soul Awakening</p>
                        </div>
                    </div>
                    <p class="text-orange-100 lh-base mb-4">
                        Guiding you on a transformative journey beyond time to heal your mind, body, and soul through
                        the power of subconscious healing and spiritual awakening.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="tel:9873017269" class="footer-social" aria-label="Call us">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </a>
                        <a href="mailto:info@flyingmonk.com" class="footer-social" aria-label="Email us">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <h4 class="fs-5 mb-3">Quick Links</h4>
                    <ul class="list-unstyled text-orange-100 m-0">
                        <li class="mb-2"><a href="#about">About</a></li>
                        <li class="mb-2"><a href="#services">Services</a></li>
                        <li class="mb-2"><a href="#testimonials">Testimonials</a></li>
                        <li class="mb-2"><a href="#booking">Book Session</a></li>
                        <li class="mb-2"><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                    <h4 class="fs-5 mb-3">Our Services</h4>
                    <ul class="list-unstyled text-orange-100 m-0">
                        <li class="mb-2">Past Life Regression</li>
                        <li class="mb-2">Future Life Progression</li>
                        <li class="mb-2">Inner Child Healing</li>
                        <li class="mb-2">Age Regression</li>
                        <li class="mb-2">Womb Regression</li>
                        <li class="mb-2">Online Sessions</li>
                        <li>In-Person Sessions</li>
                    </ul>
                </div>
            </div>

            <div class="row g-4 py-4 footer-divider">
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-orange-300">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                    </svg>
                    <div>
                        <p class="small text-orange-200 mb-0">Call Us</p>
                        <a href="tel:9873017269">9873017269</a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-orange-300">
                        <rect width="20" height="16" x="2" y="4" rx="2" />
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                    </svg>
                    <div>
                        <p class="small text-orange-200 mb-0">Email</p>
                        <a href="mailto:info@flyingmonk.com">info@flyingmonk.com</a>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-orange-300">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                    <div>
                        <p class="small text-orange-200 mb-0">Location</p>
                        <p class="mb-0">Noida, India</p>
                    </div>
                </div>
            </div>

            <div class="py-4 footer-divider">
                <p class="small text-orange-200 text-center mb-2">
                    Keywords: Past Life Regression India | Past Life Regression Noida | Inner Child Healing India |
                    Emotional Healing Session | Past Life Regression Therapist | Age Regression Therapy | Womb
                    Regression Healing | Hypnotherapy India | Subconscious Healing
                </p>
            </div>

            <div class="pt-4 footer-divider text-center">
                <p class="text-orange-100 mb-2">
                    © <span id="year"></span> Flying Monk Soul Awakening. All rights reserved.
                </p>
                <p class="small text-orange-200 d-flex align-items-center justify-content-center gap-2 m-0">
                    Made with
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#ef4444"
                        stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                    </svg>
                    for healing and transformation
                </p>
            </div>
        </div>
    </footer>

    <!-- ============================ FLOATING WHATSAPP ============================ -->
    <a href="https://wa.me/919873017269?text=Hi%20Vivek%2C%20I%20want%20to%20book%20Past%20Life%20Regression%20session"
        target="_blank" rel="noopener noreferrer" class="wa-float" aria-label="Chat on WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
        </svg>
        <span class="wa-badge"><span class="ping"></span><span class="dot"></span></span>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script>
        (function () {
            "use strict";

            /* ---------------- booking form -> whatsapp ---------------- */
            var form = document.getElementById('booking-form');
            document.getElementById('date').min = new Date().toISOString().split('T')[0];

            form.addEventListener('submit', function (ev) {
                ev.preventDefault();

                var text = [
                    'New Session Booking Request:',
                    'Name: ' + form.name.value,
                    'Phone: ' + form.phone.value,
                    'Email: ' + form.email.value,
                    'Service: ' + form.service.value,
                    'Preferred Date: ' + form.date.value,
                    'Message: ' + form.message.value
                ].join('\n');

                window.open('https://wa.me/919873017269?text=' + encodeURIComponent(text), '_blank');

                var idle = document.getElementById('submit-idle');
                var done = document.getElementById('submit-done');
                idle.classList.replace('d-flex', 'd-none');
                done.classList.replace('d-none', 'd-flex');

                setTimeout(function () {
                    done.classList.replace('d-flex', 'd-none');
                    idle.classList.replace('d-none', 'd-flex');
                }, 3000);
            });

            document.getElementById('year').textContent = new Date().getFullYear();
        })();
    </script>
</body>

</html>
