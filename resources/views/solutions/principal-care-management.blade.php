<x-app-layout>
    <main class="flex-1">
        <!-- Hero Section -->
        <section class="px-6 lg:px-20 py-12 lg:py-24 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Column -->
                <div class="flex flex-col gap-8 order-2 lg:order-1">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400 text-xs font-bold uppercase tracking-wider w-fit">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        US-Based Clinical Platform
                    </div>
                    <div class="flex flex-col gap-6">
                        <h1
                            class="text-navy-text dark:text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] tracking-tight">
                            Principal Care Management for <span class="text-primary">Streamlined Clinics</span>
                        </h1>
                        <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl leading-relaxed max-w-xl">
                            Optimize patient care, staff workflows, and operational efficiency with one centralized
                            platform tailored for principal care management.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="/about-us">
                            <button
                                class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                                See How It Works
                            </button>
                        </a>
                        <a href="#learn-more">
                            <button
                                class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">
                                Learn More
                            </button>
                        </a>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="relative order-1 lg:order-2">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
                    <div
                        class="absolute -bottom-10 -left-10 w-64 h-64 bg-blue-100/50 dark:bg-blue-900/10 rounded-full blur-3xl">
                    </div>
                    <div
                        class="relative bg-clinical-blue dark:bg-white/5 border border-blue-100 dark:border-white/10 rounded-3xl p-4 shadow-2xl overflow-hidden">
                        <div class="aspect-square w-full rounded-2xl bg-center bg-cover"
                            style='background-image: url("https://png.pngtree.com/png-clipart/20240701/original/pngtree-3-professional-smiling-group-doctors-posing-png-image_15452519.png");'>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 lg:py-32 px-6 lg:px-20 bg-slate-50 dark:bg-background-dark" id="learn-more">
            <div class="max-w-7xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white">
                    Key Features of Principal Care Management
                </h2>
                <p class="text-slate-500 dark:text-slate-400 text-lg mt-4">
                    Comprehensive tools designed to enhance patient care and clinic efficiency.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col gap-4 p-6 bg-white dark:bg-[#162d21] rounded-xl shadow-md">
                    <div class="flex items-center justify-center w-14 h-14 bg-primary/10 text-primary rounded-lg">
                        <span class="material-symbols-outlined text-3xl">calendar_month</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-text dark:text-white">Automated Scheduling</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        Streamline patient appointments, reminders, and follow-ups automatically.
                    </p>
                </div>
                <div class="flex flex-col gap-4 p-6 bg-white dark:bg-[#162d21] rounded-xl shadow-md">
                    <div class="flex items-center justify-center w-14 h-14 bg-primary/10 text-primary rounded-lg">
                        <span class="material-symbols-outlined text-3xl">medication</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-text dark:text-white">Medication Management</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        Monitor and manage patient prescriptions directly from the platform.
                    </p>
                </div>
                <div class="flex flex-col gap-4 p-6 bg-white dark:bg-[#162d21] rounded-xl shadow-md">
                    <div class="flex items-center justify-center w-14 h-14 bg-primary/10 text-primary rounded-lg">
                        <span class="material-symbols-outlined text-3xl">analytics</span>
                    </div>
                    <h3 class="text-xl font-bold text-navy-text dark:text-white">Clinical Insights</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        Access actionable reports and patient analytics to optimize outcomes.
                    </p>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 lg:py-32 px-6 lg:px-20 bg-white dark:bg-background-dark">
            <div class="max-w-7xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white">
                    What Our Clients Say
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-slate-50 dark:bg-[#162d21] rounded-xl p-8 shadow-md flex flex-col gap-4">
                    <p class="text-slate-600 dark:text-slate-400 italic">
                        "The Principal Care Management system completely transformed our clinic workflow. Efficiency has
                        improved and patient satisfaction is at an all-time high."
                    </p>
                    <div class="flex items-center gap-3 mt-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full" />
                        <div>
                            <h4 class="text-navy-text dark:text-white font-bold text-sm">Dr. Samantha Lee</h4>
                            <p class="text-slate-500 text-xs">Clinic Director, NY</p>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-[#162d21] rounded-xl p-8 shadow-md flex flex-col gap-4">
                    <p class="text-slate-600 dark:text-slate-400 italic">
                        "From lab integrations to patient communication, this platform is a game-changer for principal
                        care."
                    </p>
                    <div class="flex items-center gap-3 mt-4">
                        <img src="https://randomuser.me/api/portraits/men/46.jpg" class="w-10 h-10 rounded-full" />
                        <div>
                            <h4 class="text-navy-text dark:text-white font-bold text-sm">Dr. Michael Tan</h4>
                            <p class="text-slate-500 text-xs">Primary Care Physician, CA</p>
                        </div>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-[#162d21] rounded-xl p-8 shadow-md flex flex-col gap-4">
                    <p class="text-slate-600 dark:text-slate-400 italic">
                        "The integration and compliance features make it easy to focus on patient care without worrying
                        about operational overhead."
                    </p>
                    <div class="flex items-center gap-3 mt-4">
                        <img src="https://randomuser.me/api/portraits/women/48.jpg" class="w-10 h-10 rounded-full" />
                        <div>
                            <h4 class="text-navy-text dark:text-white font-bold text-sm">Dr. Angela Ruiz</h4>
                            <p class="text-slate-500 text-xs">Medical Director, TX</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 lg:py-32 px-6 lg:px-20 bg-slate-50 dark:bg-background-dark">
            <div class="max-w-7xl mx-auto text-center mb-16">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white">
                    Frequently Asked Questions
                </h2>
            </div>
            <div class="max-w-4xl mx-auto space-y-4">
                <details class="p-6 bg-white dark:bg-[#162d21] rounded-xl shadow-md">
                    <summary class="text-lg font-bold cursor-pointer">Is the platform HIPAA compliant?</summary>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">
                        Yes, our platform is fully HIPAA and CLIA compliant, ensuring patient data security and privacy.
                    </p>
                </details>
                <details class="p-6 bg-white dark:bg-[#162d21] rounded-xl shadow-md">
                    <summary class="text-lg font-bold cursor-pointer">Can it integrate with existing EMR systems?
                    </summary>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">
                        Absolutely, we provide API integrations to ensure smooth synchronization with most EMR/EHR
                        platforms.
                    </p>
                </details>
                <details class="p-6 bg-white dark:bg-[#162d21] rounded-xl shadow-md">
                    <summary class="text-lg font-bold cursor-pointer">Does it support multi-location clinics?</summary>
                    <p class="text-slate-600 dark:text-slate-400 mt-2">
                        Yes, manage multiple clinic locations and staff from a single dashboard effortlessly.
                    </p>
                </details>
            </div>
        </section>

        <!-- CTA Footer Section -->
        <x-cta />
    </main>
</x-app-layout>