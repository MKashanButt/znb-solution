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
                        About Us
                    </div>

                    <div class="flex flex-col gap-5">
                        <h1
                            class="text-navy-text dark:text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] tracking-tight">
                            Healthcare Logistics, <span class="text-primary">Simplified</span>
                        </h1>

                        <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl leading-relaxed max-w-xl">
                            We’re building the infrastructure that helps clinics deliver diagnostics and products
                            faster,
                            with less admin work and a better patient experience.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                            Book a Demo
                        </button>
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">
                            Meet the Team
                        </button>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 pt-4 max-w-xl">
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <p class="text-navy-text dark:text-white font-extrabold text-xl">2019</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Founded</p>
                        </div>
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <p class="text-navy-text dark:text-white font-extrabold text-xl">HIPAA</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Compliance-first</p>
                        </div>
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <p class="text-navy-text dark:text-white font-extrabold text-xl">Nationwide</p>
                            <p class="text-slate-500 dark:text-slate-400 text-sm">Clinic partners</p>
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
                                <p class="text-navy-text dark:text-white font-bold text-sm">Built with clinics in mind
                                </p>
                                <p class="text-slate-600 dark:text-slate-400 text-xs mt-1 leading-relaxed">
                                    Designed to reduce delays, improve compliance, and simplify fulfillment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- OUR MISSION -->
        <section
            class="py-16 lg:py-24 px-6 lg:px-20 bg-slate-50 dark:bg-white/5 border-y border-slate-100 dark:border-white/10">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="flex flex-col gap-5">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-navy-text dark:text-white tracking-tight">
                        Our Mission
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed">
                        To make healthcare operations faster, cleaner, and more reliable—so providers can focus on care,
                        not logistics.
                    </p>

                    <div class="flex flex-col gap-4 mt-2">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                            <div>
                                <p class="text-navy-text dark:text-white font-bold">Reduce operational friction</p>
                                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                                    Streamlined ordering, fulfillment, and reporting workflows.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                            <div>
                                <p class="text-navy-text dark:text-white font-bold">Support clinical scale</p>
                                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                                    Built for single practices and multi-location groups.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                            <div>
                                <p class="text-navy-text dark:text-white font-bold">Deliver patient trust</p>
                                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed">
                                    Compliance-first workflows with secure handling.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-6 shadow-sm">
                        <p class="text-navy-text dark:text-white font-extrabold text-3xl">98%</p>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Clinic satisfaction rate</p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-6 shadow-sm">
                        <p class="text-navy-text dark:text-white font-extrabold text-3xl">24/7</p>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Support availability</p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-6 shadow-sm">
                        <p class="text-navy-text dark:text-white font-extrabold text-3xl">Secure</p>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">HIPAA-aligned systems</p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-6 shadow-sm">
                        <p class="text-navy-text dark:text-white font-extrabold text-3xl">Fast</p>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Fulfillment turnaround</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OUR VALUES -->
        <section class="py-20 lg:py-28 px-6 lg:px-20">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14 space-y-4">
                    <h2
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white tracking-tight">
                        Our Values
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                        We build with clinical reality in mind—clean systems, clear workflows, and trust-first
                        execution.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">health_and_safety</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Patient First</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Every workflow is designed to improve patient compliance, comfort, and confidence.
                        </p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">lock</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Security Always</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            HIPAA-aligned handling, secure workflows, and compliance-first engineering.
                        </p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">bolt</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Speed Matters</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Faster fulfillment and diagnostics means better care and fewer drop-offs.
                        </p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">handshake</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Clinic Partnership</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            We work alongside clinics—not above them—so workflows actually match reality.
                        </p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">monitoring</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Data Clarity</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Reporting that helps clinics move faster, reduce waste, and make better decisions.
                        </p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">precision_manufacturing</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Operational Excellence</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Clean processes. Predictable outcomes. Less chaos for teams and patients.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TIMELINE -->
        <section
            class="py-20 lg:py-28 px-6 lg:px-20 bg-slate-50 dark:bg-white/5 border-y border-slate-100 dark:border-white/10">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14 space-y-4">
                    <h2
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white tracking-tight">
                        Our Story
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                        Built from real clinical problems: delays, scattered systems, and manual work that steals time
                        from care.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm">
                        <p class="text-primary font-extrabold text-sm uppercase tracking-wider">Phase 1</p>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-2">The Problem</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Clinics were stuck juggling multiple vendors, delayed shipments, and manual diagnostic
                            tracking.
                        </p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm">
                        <p class="text-primary font-extrabold text-sm uppercase tracking-wider">Phase 2</p>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-2">The Build</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            We designed a unified platform that connects ordering, fulfillment, diagnostics, and
                            reporting.
                        </p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm">
                        <p class="text-primary font-extrabold text-sm uppercase tracking-wider">Phase 3</p>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-2">The Scale</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Today, we support clinics nationwide with compliance-first operations and fast turnaround
                            workflows.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- LEADERSHIP -->
        <section class="py-20 lg:py-28 px-6 lg:px-20">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14 space-y-4">
                    <h2
                        class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white tracking-tight">
                        Leadership
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                        A team focused on building real systems for real healthcare operations.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Person -->
                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div
                                class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary font-extrabold">
                                A
                            </div>
                            <div>
                                <p class="text-navy-text dark:text-white font-bold text-lg">Alex Morgan</p>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Founder &amp; CEO</p>
                            </div>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-4 leading-relaxed">
                            Focused on building scalable healthcare infrastructure that clinics actually love using.
                        </p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div
                                class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary font-extrabold">
                                J
                            </div>
                            <div>
                                <p class="text-navy-text dark:text-white font-bold text-lg">Jordan Lee</p>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Head of Operations</p>
                            </div>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-4 leading-relaxed">
                            Makes sure fulfillment, compliance, and workflows run clean—every day.
                        </p>
                    </div>

                    <div
                        class="rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md transition-all">
                        <div class="flex items-center gap-4">
                            <div
                                class="size-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary font-extrabold">
                                S
                            </div>
                            <div>
                                <p class="text-navy-text dark:text-white font-bold text-lg">Samantha Cruz</p>
                                <p class="text-slate-500 dark:text-slate-400 text-sm">Clinical Partnerships</p>
                            </div>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-4 leading-relaxed">
                            Works directly with clinics to ensure the platform fits real-world care delivery.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-20 lg:py-28 px-6 lg:px-20 bg-medical-blue dark:bg-background-dark/50">
            <div class="max-w-6xl mx-auto text-center flex flex-col items-center gap-6">
                <h2
                    class="text-[#0d1b12] dark:text-white tracking-tight text-3xl md:text-5xl font-extrabold leading-tight max-w-[900px]">
                    Want to Work With a Team That Moves Fast?
                </h2>
                <p class="text-[#4c6b57] dark:text-gray-400 text-lg md:text-xl max-w-2xl leading-relaxed">
                    If you’re a clinic, provider group, or healthcare organization looking to simplify operations—
                    we’d love to show you how it works.
                </p>

                <div class="flex flex-wrap justify-center gap-4 pt-2">
                    <button
                        class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-10 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                        Book a Demo
                    </button>
                    <button
                        class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-10 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-white/60 dark:hover:bg-white/5 transition-all">
                        Contact Us
                    </button>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>