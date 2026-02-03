<x-app-layout>
    <main class="flex-1 bg-white dark:bg-background-dark">
        <!-- HERO -->
        <section class="px-6 lg:px-20 pt-14 pb-14 lg:pt-20 lg:pb-20 max-w-7xl mx-auto">
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
                        Contact Us
                    </div>

                    <div class="flex flex-col gap-5">
                        <h1
                            class="text-navy-text dark:text-white text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] tracking-tight">
                            Let’s Talk <span class="text-primary">Healthcare</span>
                        </h1>

                        <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl leading-relaxed max-w-xl">
                            Have a question, need support, or want to see the platform in action?
                            Send us a message and we’ll get back to you fast.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                            Book a Demo
                        </button>
                        <button
                            class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-xl h-14 px-8 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-slate-50 dark:hover:bg-white/5 transition-all">
                            Support Center
                        </button>
                    </div>

                    <!-- Contact Highlights -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 max-w-xl">
                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">schedule</span>
                                <div>
                                    <p class="text-navy-text dark:text-white font-bold text-sm">Fast Response</p>
                                    <p class="text-slate-500 dark:text-slate-400 text-xs">Usually within 24 hours</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="rounded-2xl border border-slate-100 dark:border-white/10 p-4 bg-white dark:bg-white/5">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-primary">verified_user</span>
                                <div>
                                    <p class="text-navy-text dark:text-white font-bold text-sm">Secure &amp; Private</p>
                                    <p class="text-slate-500 dark:text-slate-400 text-xs">HIPAA-aligned workflows</p>
                                </div>
                            </div>
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
                        class="relative rounded-3xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 shadow-2xl overflow-hidden p-8">
                        <div class="flex flex-col gap-6">
                            <div>
                                <h2 class="text-navy-text dark:text-white text-2xl font-extrabold tracking-tight">
                                    Send us a message
                                </h2>
                                <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                                    Fill out the form and our team will contact you shortly.
                                </p>
                            </div>

                            <form class="flex flex-col gap-4">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div class="flex flex-col gap-2">
                                        <label class="text-sm font-bold text-navy-text dark:text-white">First
                                            Name</label>
                                        <input type="text" placeholder="John"
                                            class="h-12 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark px-4 text-sm text-navy-text dark:text-white placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-primary/40 transition-all" />
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <label class="text-sm font-bold text-navy-text dark:text-white">Last
                                            Name</label>
                                        <input type="text" placeholder="Doe"
                                            class="h-12 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark px-4 text-sm text-navy-text dark:text-white placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-primary/40 transition-all" />
                                    </div>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-navy-text dark:text-white">Email</label>
                                    <input type="email" placeholder="john@clinic.com"
                                        class="h-12 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark px-4 text-sm text-navy-text dark:text-white placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-primary/40 transition-all" />
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-navy-text dark:text-white">Phone
                                        (Optional)</label>
                                    <input type="tel" placeholder="+1 (555) 000-0000"
                                        class="h-12 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark px-4 text-sm text-navy-text dark:text-white placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-primary/40 transition-all" />
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-navy-text dark:text-white">Reason for
                                        Contact</label>
                                    <select
                                        class="h-12 rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark px-4 text-sm text-navy-text dark:text-white outline-none focus:ring-2 focus:ring-primary/40 transition-all">
                                        <option selected disabled>Select an option</option>
                                        <option>Request a Demo</option>
                                        <option>Technical Support</option>
                                        <option>Partnership Inquiry</option>
                                        <option>Billing &amp; Account</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-2">
                                    <label class="text-sm font-bold text-navy-text dark:text-white">Message</label>
                                    <textarea rows="5" placeholder="Tell us what you need..."
                                        class="rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-background-dark px-4 py-3 text-sm text-navy-text dark:text-white placeholder:text-slate-400 outline-none focus:ring-2 focus:ring-primary/40 transition-all resize-none"></textarea>
                                </div>

                                <button type="submit"
                                    class="mt-2 flex w-full cursor-pointer items-center justify-center rounded-xl h-14 px-8 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                                    Send Message
                                </button>

                                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed text-center">
                                    By submitting this form, you agree to be contacted by our team. No spam. No
                                    nonsense.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT INFO CARDS -->
        <section
            class="py-16 lg:py-24 px-6 lg:px-20 bg-slate-50 dark:bg-white/5 border-y border-slate-100 dark:border-white/10">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14 space-y-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-navy-text dark:text-white tracking-tight">
                        Other Ways to Reach Us
                    </h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg max-w-2xl mx-auto">
                        Pick the fastest route. Our team is here to help.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">mail</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Email</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Send us an email and we’ll reply as soon as possible.
                        </p>
                        <p class="text-primary font-bold mt-4 text-sm">support@znbsolutions.com</p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">call</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Phone</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Prefer talking to a human? We respect that.
                        </p>
                        <p class="text-primary font-bold mt-4 text-sm">+1 (510) 290-2229</p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-100 dark:border-white/10 bg-white dark:bg-white/5 p-8 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all">
                        <div
                            class="flex size-12 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                            <span class="material-symbols-outlined text-3xl">location_on</span>
                        </div>
                        <h3 class="text-navy-text dark:text-white text-xl font-bold mt-4">Office</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm mt-2 leading-relaxed">
                            Our headquarters location for operations and support.
                        </p>
                        <p class="text-primary font-bold mt-4 text-sm">
                            1090 La playa drive Hayward<br /> CA 94545
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
                    Want a Walkthrough Before You Decide?
                </h2>
                <p class="text-[#4c6b57] dark:text-gray-400 text-lg md:text-xl max-w-2xl leading-relaxed">
                    We’ll show you the workflow, answer questions, and help you launch without headaches.
                </p>

                <div class="flex flex-wrap justify-center gap-4 pt-2">
                    <button
                        class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-10 bg-primary text-white text-base font-bold hover:shadow-lg hover:shadow-primary/30 transition-all transform hover:-translate-y-0.5">
                        Book a Demo
                    </button>
                    <button
                        class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-xl h-14 px-10 border-2 border-slate-200 dark:border-white/10 text-navy-text dark:text-white text-base font-bold hover:bg-white/60 dark:hover:bg-white/5 transition-all">
                        View Who We Serve
                    </button>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>