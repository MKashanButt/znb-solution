<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Healthcare B2B Hero - Professional Blue</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#17cf54",
                        "background-light": "#f6f8f6",
                        "background-dark": "#112116",
                        "clinical-blue": "#f0f7ff",
                        "navy-text": "#0e1b12"
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Manrope', sans-serif;
        }

        * {
            scroll-behavior: smooth;
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="bg-white dark:bg-background-dark text-navy-text transition-colors duration-300">
    <header
        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-100 dark:border-white/10 px-6 lg:px-20 py-4 bg-white/80 backdrop-blur-md dark:bg-background-dark/80 sticky top-0 z-50">
        <div>
            <a href="/" class="flex items-center">
                <div class="flex items-center justify-center size-10 rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-2xl">medical_services</span>
                </div>
                <h2 class="text-navy-text dark:text-white text-xl font-extrabold leading-tight tracking-tight">ZNB <span
                        class="text-primary">Solution</span></h2>
            </a>
        </div>
        <div class="hidden md:flex flex-1 justify-end gap-10 items-center">
            <nav class="flex items-center gap-8">
                <a class="text-navy-text dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                    href="/">Home</a>
                <div x-data="{ open: false }" class="relative">
                    <!-- Dropdown Button -->
                    <button @click="open = !open"
                        class="text-navy-text dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors flex items-center gap-1">
                        Solutions
                        <span class="material-symbols-outlined text-[18px]">
                            arrow_drop_down
                        </span>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.outside="open = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute right-0 mt-2 w-52 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl shadow-lg z-50 py-2">
                        <a href="/billing-and-rcm"
                            class="block px-4 py-2 text-sm text-navy-text dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary rounded-lg">
                            Billing & RCM
                        </a>
                        <a href="/chronic-care-management"
                            class="block px-4 py-2 text-sm text-navy-text dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary rounded-lg">
                            Chronic Care Management
                        </a>
                        <a href="/remote-patient-monitoring"
                            class="block px-4 py-2 text-sm text-navy-text dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary rounded-lg">
                            Remote Patient Monitoring
                        </a>
                        <a href="/principal-care-management"
                            class="block px-4 py-2 text-sm text-navy-text dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary rounded-lg">
                            Principal Care Management
                        </a>
                    </div>
                </div>

                <a class="text-navy-text dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                    href="/who-we-serve">Who We Serve</a>
                <a class="text-navy-text dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors"
                    href="/about-us">About Us</a>
            </nav>
            <div class="flex items-center gap-4 border-l border-slate-200 dark:border-white/10 pl-8">
                <a href="/contact-us"
                    class="no-underline text-navy-text dark:text-slate-300 text-sm font-semibold hover:text-primary transition-colors">
                    <button
                        class="flex min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-10 px-5 bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-all shadow-md shadow-primary/20">
                        Contact Us
                    </button>
                </a>
            </div>
        </div>
    </header>
    {{ $slot }}
    <footer class="bg-black text-gray-200 py-16 px-6 md:px-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <div class="flex flex-col gap-6">
                    <div class="flex items-center text-white">
                        <div class="size-8 text-primary">
                            <span class="material-symbols-outlined text-2xl">medical_services</span>
                        </div>
                        <span class="text-xl font-extrabold tracking-tight">ZNB Solution</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-400 max-w-xs">
                        Providing doctors with an all-in-one platform for medical products nationwide.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-6">Quick Links</h4>
                    <ul class="flex flex-col gap-3">
                        <li><a class="footer-link" href="/">Home</a></li>
                        <li><a class="footer-link" href="/who-we-serve">Who We Serve</a></li>
                        <li><a class="footer-link" href="/about-us">About Us</a></li>
                        <li><a class="footer-link" href="/contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-6">Compliance &amp; Legal</h4>
                    <ul class="flex flex-col gap-3">
                        <li>HIPAA Compliance</li>
                        <li>CLIA Certification</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-6">
                    <h4 class="text-white font-bold text-sm uppercase tracking-wider">Contact</h4>
                    <div class="flex flex-col gap-3">
                        <a class="footer-link flex items-center gap-2" href="mailto:support@znbsolution.com">
                            <span class="material-symbols-outlined text-sm">mail</span>
                            support@znbsolutions.com
                        </a>
                        <a class="footer-link flex items-center gap-2" href="tel:+18005550123">
                            <span class="material-symbols-outlined text-sm">call</span>
                            +1 (510) 290-2229
                        </a>
                    </div>
                    <div class="mt-2">
                        <a class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-all"
                            href="#">
                            <svg class="w-5 h-5 fill-currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 mt-4">
                <div
                    class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-gray-500 tracking-wide">
                    <p>© 2026 ZNB Solution. All rights reserved. HIPAA &amp; CLIA compliant.</p>
                    <div class="flex gap-4 items-center">
                        <span class="flex items-center gap-1.5"><span
                                class="w-1.5 h-1.5 rounded-full bg-primary/40"></span> Secure Infrastructure</span>
                        <span class="flex items-center gap-1.5"><span
                                class="w-1.5 h-1.5 rounded-full bg-primary/40"></span> SOC2 Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>