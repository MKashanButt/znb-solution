<x-app-layout>
    <main class="flex-1 bg-white dark:bg-background-dark">
        <!-- HERO -->
        <section class="px-6 lg:px-20 pt-14 pb-16 lg:pt-20 lg:pb-24 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
                <!-- Left -->
                <div class="flex flex-col gap-7">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider w-fit">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Who We Serve
                    </div>

                    <div class="flex flex-col gap-5">
                        <h1
                            class="text-navy-text dark:text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] tracking-tight">
                            Built for Clinics, Providers &amp; <span class="text-primary">Care Teams</span>
                        </h1>

                        <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl leading-relaxed max-w-xl">
                            Whether you're running a small private practice or managing a multi-location clinic network,
                            our
                            platform
                            streamlines product fulfillment and diagnostic workflows—without referrals, delays, or
                            chaos.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                            Book a Demo
                        </button>
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">
                            View Platform Overview
                        </button>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-4 max-w-xl">
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <p class="text-navy-text dark:text-white font-extrabold text-xl">2,500+</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Clinics onboarded</p>
                        </div>
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <p class="text-navy-text dark:text-white font-extrabold text-xl">HIPAA</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Secure workflows</p>
                        </div>
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <p class="text-navy-text dark:text-white font-extrabold text-xl">Fast</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Turnaround time</p>
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="relative">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
                    <div
                        class="absolute -bottom-10 -left-10 w-64 h-64 bg-blue-100/50 dark:bg-blue-900/10 rounded-full blur-3xl">
                    </div>

                    <div
                        class="relative bg-clinical-blue dark:bg-white/5 border border-blue-100 dark:border-white/10 rounded-3xl p-4 shadow-2xl overflow-hidden">
                        <div class="aspect-square w-full rounded-2xl bg-center bg-cover relative"
                            style='background-image: url("https://png.pngtree.com/png-clipart/20240701/original/pngtree-3-professional-smiling-group-doctors-posing-png-image_15452519.png");'>
                            <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-transparent"></div>

                            <div
                                class="absolute bottom-5 left-5 right-5 bg-white/90 dark:bg-background-dark/80 backdrop-blur-md rounded-2xl p-4 border border-white/40 dark:border-white/10">
                                <p class="text-navy-text dark:text-white font-bold text-sm">Designed for real clinical
                                    operations</p>
                                <p class="text-slate-600 dark:text-slate-400 text-xs mt-1 leading-relaxed">
                                    Products + Diagnostics + Fulfillment in one platform.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- TRUST BAR -->
        <section class="bg-slate-50 dark:bg-white/5 py-12 border-y border-slate-100 dark:border-white/10">
            <div class="max-w-7xl mx-auto px-6 lg:px-20">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4">
                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">verified_user</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">Trusted Nationwide</h3>
                            <p class="text-slate-500 text-xs mt-1">US clinics and practices</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">shield_lock</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">HIPAA Compliant</h3>
                            <p class="text-slate-500 text-xs mt-1">Secure patient workflows</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">workspace_premium</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">CLIA Certified</h3>
                            <p class="text-slate-500 text-xs mt-1">Lab-grade quality</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">local_shipping</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">Fast Fulfillment</h3>
                            <p class="text-slate-500 text-xs mt-1">Direct to patient shipping</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHO WE SERVE CARDS -->
        <section class="py-20 lg:py-28 px-6 lg:px-20">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14 space-y-4">
                    <h2
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white tracking-tight">
                        Who We Serve
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                        Our platform is built for healthcare teams who need speed, compliance, and a smooth patient
                        experience.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card -->
                    <div
                        class="group flex flex-col gap-4 rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">local_hospital</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold">Primary Care Clinics</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Reduce admin workload, keep patients compliant, and streamline diagnostic workflows in one
                            place.
                        </p>
                        <ul class="mt-2 space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                One-click ordering
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Patient delivery tracking
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Faster results workflow
                            </li>
                        </ul>
                    </div>

                    <div
                        class="group flex flex-col gap-4 rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">cardiology</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold">Specialty Practices</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Designed for cardiology, pain management, endocrinology, orthopedics, and more.
                        </p>
                        <ul class="mt-2 space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Specialty test panels
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Product + diagnostics in one system
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Compliance-first workflows
                            </li>
                        </ul>
                    </div>

                    <div
                        class="group flex flex-col gap-4 rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">groups</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold">Multi-Location Groups</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Standardize operations across multiple clinics with centralized ordering and reporting.
                        </p>
                        <ul class="mt-2 space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Unified dashboards
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Location-level insights
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Scalable fulfillment
                            </li>
                        </ul>
                    </div>

                    <div
                        class="group flex flex-col gap-4 rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">home_health</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold">Home Health Providers</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Keep care continuous with direct-to-patient shipments and secure reporting.
                        </p>
                        <ul class="mt-2 space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Patient-first logistics
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Automated reminders
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Reduced missed care
                            </li>
                        </ul>
                    </div>

                    <div
                        class="group flex flex-col gap-4 rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">monitor_heart</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold">RPM &amp; Chronic Care Teams</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Enable remote monitoring and ongoing care programs with integrated equipment + testing.
                        </p>
                        <ul class="mt-2 space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                CGM and monitoring kits
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Automated patient compliance
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Reporting workflows
                            </li>
                        </ul>
                    </div>

                    <div
                        class="group flex flex-col gap-4 rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">science</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold">Labs &amp; Diagnostic Networks</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                            Expand access to testing with coordinated kit distribution and result delivery.
                        </p>
                        <ul class="mt-2 space-y-2 text-sm text-slate-500 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Centralized workflows
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Fast turnaround pipeline
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-base text-primary">check_circle</span>
                                Secure reporting
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-20 lg:py-28 px-6 lg:px-20 bg-medical-blue dark:bg-background-dark/50">
            <div class="max-w-6xl mx-auto text-center flex flex-col items-center gap-6">
                <h2
                    class="text-[#0d1b12] dark:text-white tracking-tight text-3xl md:text-5xl font-extrabold leading-tight max-w-[900px]">
                    Ready to See How It Fits Your Practice?
                </h2>
                <p class="text-[#4c6b57] dark:text-gray-400 text-lg md:text-xl max-w-2xl leading-relaxed">
                    We’ll walk you through the workflow, show real clinic use cases, and help you launch fast.
                </p>

                <div class="flex flex-wrap justify-center gap-4 pt-2">
                    <button
                        class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-10 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                        Book a Demo
                    </button>
                    <button
                        class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-10 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-white/60 dark:hover:bg-white/5 transition-all">
                        Contact Sales
                    </button>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>