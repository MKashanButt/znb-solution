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
                        Remote Patient Monitoring (RPM)
                    </div>

                    <div class="flex flex-col gap-6">
                        <h1
                            class="text-navy-text dark:text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] tracking-tight">
                            Monitor Patients <span class="text-primary">Between Visits</span><br />
                            Without Adding Staff Burden
                        </h1>

                        <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl leading-relaxed max-w-xl">
                            Keep your patients engaged, compliant, and clinically stable using our Remote Patient
                            Monitoring platform.
                            Track vitals, automate follow-ups, and support outcomes — all in one workflow.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="/about-us">
                            <button
                                class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                                See How It Works
                            </button>
                        </a>
                        <a href="#rpm-workflow">
                            <button
                                class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">
                                Explore RPM Workflow
                            </button>
                        </a>
                    </div>

                    <div class="flex items-center gap-4 pt-4">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-background-dark object-cover"
                                data-alt="Nurse profile photo"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl1XyXZ2ySf6jmt5GHy7IwX8RYN6GslmmYpugZhOQ8uLUppftrrXzYVY1joBkyQu7J2FFADf6FAR1vpWNl_oLtDeMQkH_bNlsYoanYhMQ9H2ogSgdKAremIxYOnAMjoDttyrg4KXnhzTaQtS8z6j3CwnWFCzWfmA7QMX6G8GcREeYU5X5kJLZmIry5W8QZ2cGuv_4w2boxmVML4NSVkeLTZc24_HwzqkRmvmvRNd0BB0U-HRy_myCLH4kcjOxEDimNFLgp8eWpxUE" />
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-background-dark object-cover"
                                data-alt="Doctor profile photo"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsbmn_sN-z7gZ1KD8eqKLxqmhUuFN137N5OUBEJtkQY_MEB1gskeDnXkxWswc29TxH0Cbxn-wEmVKOd_nIbD4OqG38U5qqaF__NVttjDzGMcMFCZTSg-j_Qqof1-elYpa-epNMWGMf1LXfC-zHdAtPhht2kM1iy9LiMeWfCG7DUv211iF6pOlq6wEEO2vaLruwV7qOXubRkVTN_-WKEdi2vpLZhAXVzEce3H12lXc3R0D6MoX4przOBUuVbmlSM5a42v0p1YFCQq0" />
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-background-dark object-cover"
                                data-alt="Healthcare admin profile photo"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQQ-t1F08GJ2bijru3R0-Dxh2RvjpwcUQpRrHAGiNvHwcNYnwfsMOgDi2_ywQ9myFEl6ROvcZDm0ScVlNUuQdN5a_l3YGiOaI66TMmHJg1u04qvOUSMSR2MPT6LgK89MiDCdElTurlzrQcJVLV7apLrXoyG83Wd-tzH41R35MxrHArvA_ywybS4-UsZRQNv1p9ri_F9hFOnpJOdkvrKAkR9y4WDJ_-YFvHJiZWbI7da4gFS4I3XpxM8t3--zNgi0Yi1Wkr1XCNvlc" />
                        </div>

                        <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">
                            Used by <span class="text-navy-text dark:text-white font-bold">2,500+</span> clinics to
                            improve patient adherence
                        </p>
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
                            data-alt="Remote patient monitoring dashboard and connected devices"
                            style='background-image: url("https://images.unsplash.com/photo-1580281657527-47f249e8f8c8?auto=format&fit=crop&w=1200&q=80");'>
                            <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-transparent"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Trust Bar Section -->
        <section class="bg-slate-50 dark:bg-white/5 py-12 border-y border-slate-100 dark:border-white/10">
            <div class="max-w-7xl mx-auto px-6 lg:px-20">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4">

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">monitor_heart</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">Real-Time Vitals</h3>
                            <p class="text-slate-500 text-xs mt-1">Continuous tracking</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">shield_lock</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">HIPAA Compliant</h3>
                            <p class="text-slate-500 text-xs mt-1">Secure clinical data</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">notifications_active</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">Automated Alerts</h3>
                            <p class="text-slate-500 text-xs mt-1">Actionable follow-ups</p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center md:items-start gap-4 text-center md:text-left">
                        <div class="text-primary/60">
                            <span class="material-symbols-outlined text-3xl">local_shipping</span>
                        </div>
                        <div>
                            <h3 class="text-navy-text dark:text-white font-bold text-sm">Device Fulfillment</h3>
                            <p class="text-slate-500 text-xs mt-1">Nationwide delivery</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- Problem vs Solution Section -->
    <section class="py-20 lg:py-32 px-6 lg:px-20 bg-white dark:bg-background-dark">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 space-y-4">
                <h2
                    class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-navy-text dark:text-white tracking-tight">
                    From Missed Follow-Ups to <br class="hidden md:block" />
                    <span class="text-primary">Continuous Care</span>
                </h2>
                <p class="text-slate-500 dark:text-slate-400 text-lg">
                    Traditional monitoring ends after the appointment. RPM keeps care active every day.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-stretch">
                <!-- Problem -->
                <div
                    class="bg-slate-50 dark:bg-white/[0.02] rounded-3xl p-8 lg:p-12 border border-slate-100 dark:border-white/5 flex flex-col">
                    <div class="flex items-center gap-3 mb-10">
                        <div
                            class="size-12 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-500">
                            <span class="material-symbols-outlined">release_alert</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-600 dark:text-slate-300">The Problem</h3>
                    </div>

                    <ul class="space-y-8 flex-1">
                        <li class="flex gap-4">
                            <span class="material-symbols-outlined text-slate-400 mt-1">event_busy</span>
                            <div>
                                <h4 class="font-bold text-navy-text dark:text-white text-lg">Missed deterioration signs
                                </h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mt-1">
                                    Patients can decline silently between visits, leading to ER events and readmissions.
                                </p>
                            </div>
                        </li>

                        <li class="flex gap-4">
                            <span class="material-symbols-outlined text-slate-400 mt-1">assignment_late</span>
                            <div>
                                <h4 class="font-bold text-navy-text dark:text-white text-lg">Low adherence & compliance
                                </h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mt-1">
                                    Without consistent touchpoints, patients stop tracking vitals and following care
                                    plans.
                                </p>
                            </div>
                        </li>

                        <li class="flex gap-4">
                            <span class="material-symbols-outlined text-slate-400 mt-1">support_agent</span>
                            <div>
                                <h4 class="font-bold text-navy-text dark:text-white text-lg">Staff overwhelmed by
                                    follow-ups</h4>
                                <p class="text-slate-500 dark:text-slate-400 text-sm leading-relaxed mt-1">
                                    Manual outreach and reminders burn time and reduce clinical efficiency.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Solution -->
                <div
                    class="bg-blue-50/50 dark:bg-primary/5 rounded-3xl p-8 lg:p-12 border-2 border-primary/20 flex flex-col relative overflow-hidden">
                    <div class="absolute -top-24 -right-24 size-64 bg-primary/10 rounded-full blur-3xl"></div>

                    <div class="flex items-center gap-3 mb-10 relative">
                        <div class="size-12 rounded-full bg-primary/20 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-3xl font-bold">verified</span>
                        </div>
                        <h3 class="text-2xl font-bold text-navy-text dark:text-white">Our RPM Solution</h3>
                    </div>

                    <ul class="space-y-8 flex-1 relative">
                        <li class="flex gap-4">
                            <div
                                class="flex-shrink-0 size-8 rounded-full bg-primary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-lg">devices</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy-text dark:text-white text-lg">Connected device ecosystem
                                </h4>
                                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                    Track blood pressure, glucose, pulse ox, weight, and more through secure connected
                                    devices.
                                </p>
                            </div>
                        </li>

                        <li class="flex gap-4">
                            <div
                                class="flex-shrink-0 size-8 rounded-full bg-primary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-lg">notifications</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy-text dark:text-white text-lg">Smart alerts & clinical
                                    thresholds</h4>
                                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                    Trigger timely interventions with threshold-based alerts and escalation workflows.
                                </p>
                            </div>
                        </li>

                        <li class="flex gap-4">
                            <div
                                class="flex-shrink-0 size-8 rounded-full bg-primary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-lg">hub</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-navy-text dark:text-white text-lg">One dashboard for your team
                                </h4>
                                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mt-1">
                                    Review trends, message patients, and document engagement without jumping between
                                    systems.
                                </p>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-12 pt-8 border-t border-primary/10 relative">
                        <div class="flex items-center justify-between">
                            <span class="text-primary font-bold text-sm tracking-wide uppercase">
                                Outcome: fewer readmissions & stronger adherence
                            </span>
                            <span class="material-symbols-outlined text-primary">trending_up</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center">
                <p class="text-navy-text dark:text-slate-300 font-semibold text-lg italic opacity-80">
                    "RPM turns passive patients into actively managed outcomes."
                </p>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <main class="flex-1 flex flex-col items-center py-16 px-4" id="rpm-workflow">
        <div class="max-w-[960px] w-full text-center mb-12">
            <h1
                class="text-[#0e131b] dark:text-white tracking-tight text-4xl md:text-[42px] font-extrabold leading-[1.15] pb-4">
                How RPM Works — Simple Setup, Powerful Outcomes
            </h1>
            <p class="text-[#4e6d97] dark:text-slate-400 text-lg max-w-2xl mx-auto">
                From enrollment to monitoring, we keep the workflow clean for your staff and effortless for patients.
            </p>
        </div>

        <div class="max-w-[1100px] w-full grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
            <!-- Step 01 -->
            <div
                class="group relative flex flex-col gap-5 rounded-xl border border-[#d0d9e7] dark:border-slate-800 bg-white dark:bg-slate-900/50 p-8 shadow-sm transition-all hover:shadow-md hover:border-primary/30">
                <div
                    class="absolute top-4 right-6 text-[80px] font-black text-[#196ee6]/5 dark:text-primary/10 select-none pointer-events-none">
                    01</div>
                <div class="flex h-14 w-14 items-center justify-center rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">person_add</span>
                </div>
                <div class="flex flex-col gap-2 relative z-10">
                    <h2 class="text-[#0e131b] dark:text-white text-xl font-bold leading-tight">Enroll Patients</h2>
                    <p class="text-[#4e6d97] dark:text-slate-400 text-sm md:text-base font-normal leading-relaxed">
                        Enroll eligible patients quickly and assign devices and monitoring protocols in minutes.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div
                class="group relative flex flex-col gap-5 rounded-xl border border-[#d0d9e7] dark:border-slate-800 bg-white dark:bg-slate-900/50 p-8 shadow-sm transition-all hover:shadow-md hover:border-primary/30">
                <div
                    class="absolute top-4 right-6 text-[80px] font-black text-[#196ee6]/5 dark:text-primary/10 select-none pointer-events-none">
                    02</div>
                <div class="flex h-14 w-14 items-center justify-center rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">monitor_heart</span>
                </div>
                <div class="flex flex-col gap-2 relative z-10">
                    <h2 class="text-[#0e131b] dark:text-white text-xl font-bold leading-tight">Monitor Trends</h2>
                    <p class="text-[#4e6d97] dark:text-slate-400 text-sm md:text-base font-normal leading-relaxed">
                        Capture vitals daily and identify risk trends early with dashboards built for clinicians.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div
                class="group relative flex flex-col gap-5 rounded-xl border border-[#d0d9e7] dark:border-slate-800 bg-white dark:bg-slate-900/50 p-8 shadow-sm transition-all hover:shadow-md hover:border-primary/30">
                <div
                    class="absolute top-4 right-6 text-[80px] font-black text-[#196ee6]/5 dark:text-primary/10 select-none pointer-events-none">
                    03</div>
                <div class="flex h-14 w-14 items-center justify-center rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined text-3xl">support_agent</span>
                </div>
                <div class="flex flex-col gap-2 relative z-10">
                    <h2 class="text-[#0e131b] dark:text-white text-xl font-bold leading-tight">Engage & Intervene</h2>
                    <p class="text-[#4e6d97] dark:text-slate-400 text-sm md:text-base font-normal leading-relaxed">
                        Automate outreach, send alerts, and intervene early to prevent escalations and improve outcomes.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Benefits Grid -->
    <main class="flex-1">
        <div class="max-w-[1200px] mx-auto px-4 pt-16 pb-10 text-center">
            <h1
                class="text-[#0d1b12] dark:text-white tracking-tight text-[40px] md:text-[48px] font-extrabold leading-tight pb-3">
                Why Clinics Choose Our RPM Program
            </h1>
            <p class="text-[#4c9a66] dark:text-primary/80 text-lg font-medium max-w-2xl mx-auto">
                Reduce risk, increase adherence, and keep care consistent across your patient population.
            </p>
        </div>

        <div class="max-w-[1200px] mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div
                    class="group flex flex-col gap-4 rounded-xl border border-[#cfe7d7] dark:border-[#1e3a28] bg-white dark:bg-background-dark p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-3xl">visibility</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#0d1b12] dark:text-white text-xl font-bold leading-tight">Clinical Visibility
                        </h2>
                        <p class="text-[#4c9a66] dark:text-gray-400 text-sm leading-relaxed">
                            Track patient status continuously and detect changes before they become emergencies.
                        </p>
                    </div>
                </div>

                <div
                    class="group flex flex-col gap-4 rounded-xl border border-[#cfe7d7] dark:border-[#1e3a28] bg-white dark:bg-background-dark p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-3xl">task_alt</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#0d1b12] dark:text-white text-xl font-bold leading-tight">Better Adherence</h2>
                        <p class="text-[#4c9a66] dark:text-gray-400 text-sm leading-relaxed">
                            Patients stay engaged when monitoring becomes part of their routine with automated nudges.
                        </p>
                    </div>
                </div>

                <div
                    class="group flex flex-col gap-4 rounded-xl border border-[#cfe7d7] dark:border-[#1e3a28] bg-white dark:bg-background-dark p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-3xl">speed</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#0d1b12] dark:text-white text-xl font-bold leading-tight">Faster Intervention
                        </h2>
                        <p class="text-[#4c9a66] dark:text-gray-400 text-sm leading-relaxed">
                            Threshold-based alerts help your team act immediately when trends cross risk levels.
                        </p>
                    </div>
                </div>

                <div
                    class="group flex flex-col gap-4 rounded-xl border border-[#cfe7d7] dark:border-[#1e3a28] bg-white dark:bg-background-dark p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-3xl">support_agent</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#0d1b12] dark:text-white text-xl font-bold leading-tight">Less Staff Work</h2>
                        <p class="text-[#4c9a66] dark:text-gray-400 text-sm leading-relaxed">
                            Reduce manual calls and follow-ups with smart workflows that keep documentation clean.
                        </p>
                    </div>
                </div>

                <div
                    class="group flex flex-col gap-4 rounded-xl border border-[#cfe7d7] dark:border-[#1e3a28] bg-white dark:bg-background-dark p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-3xl">bar_chart</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#0d1b12] dark:text-white text-xl font-bold leading-tight">Outcome Reporting
                        </h2>
                        <p class="text-[#4c9a66] dark:text-gray-400 text-sm leading-relaxed">
                            Track trends over time and generate reports that support patient engagement and quality
                            programs.
                        </p>
                    </div>
                </div>

                <div
                    class="group flex flex-col gap-4 rounded-xl border border-[#cfe7d7] dark:border-[#1e3a28] bg-white dark:bg-background-dark p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="flex size-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined text-3xl">verified_user</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#0d1b12] dark:text-white text-xl font-bold leading-tight">Compliance & Security
                        </h2>
                        <p class="text-[#4c9a66] dark:text-gray-400 text-sm leading-relaxed">
                            HIPAA-compliant patient data workflows designed for real clinical operations.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- CTA Form -->
    <x-cta />
</x-app-layout>