<x-guest-layout>
    {{-- HERO --}}
    <section class="relative">
        <div class="h-[420px] md:h-[520px] bg-cover bg-center"
            style="background-image: url('{{ asset('asset/background.jpg') }}')">

            <div class="h-[420px] md:h-[520px] bg-cover bg-center"
                style="background-image: url('/images/services-bg.jpg')">
                <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

                <div class="relative z-10 max-w-7xl mx-auto px-6 h-full flex flex-col items-center justify-center">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white drop-shadow-lg text-center">Our Services
                    </h1>
                    <p class="mt-4 text-white/70 text-center max-w-2xl">Design-led engineering and scalable solutions for
                        web
                        & mobile.</p>
                    <a id="start-project" href="#contact"
                        class="mt-8 inline-block bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold shadow-lg">Start
                        Your Project</a>
                </div>
            </div>
    </section>

    {{-- SERVICES GRID --}}
    <section class="py-14">

        <div class="max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Card 1 --}}
                <div
                    class="p-6 bg-gradient-to-b from-white/3 to-white/2 rounded-xl border border-white/5 backdrop-blur-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-40 h-28 mb-4 rounded-xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('asset/cloud_software.jpg') }}" alt="App Development"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold">App Development</h3>
                        <p class="mt-2 text-sm text-white/60 max-w-md">Secure cloud infrastructure and migration
                            services.</p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div
                    class="p-6 bg-gradient-to-b from-white/3 to-white/2 rounded-xl border border-white/5 backdrop-blur-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-40 h-28 mb-4 rounded-xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('asset/cloud_software.jpg') }}" alt="App Development"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold">App Development</h3>
                        <p class="mt-2 text-sm text-white/60 max-w-md">Engaging iOS & Android apps with
                            seamless UX.</p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div
                    class="p-6 bg-gradient-to-b from-white/3 to-white/2 rounded-xl border border-white/5 backdrop-blur-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-40 h-28 mb-4 rounded-xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('asset/UI_design.jpg') }}" alt="UI/UX Design"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold">UI/UX Design</h3>
                        <p class="mt-2 text-sm text-white/60 max-w-md">Human-centered, modern and intuitive
                            interfaces.</p>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div
                    class="p-6 bg-gradient-to-b from-white/3 to-white/2 rounded-xl border border-white/5 backdrop-blur-md">
                    <div class="flex flex-col items-center text-center">
                        <div class="relative w-40 h-28 mb-4 rounded-xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('asset/App_web.jpg') }}" alt="Web App Development"
                                class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold">Web App Development</h3>
                        <p class="mt-2 text-sm text-white/60 max-w-md">Scalable, responsive web platforms
                            tailored to your business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="py-10">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h4 class="text-xl font-semibold mb-8">Why Choose Us</h4>

            <div class="flex items-center justify-center gap-10 text-white">
                {{-- Fast Delivery --}}
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-2">
                        <!-- Bolt Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <p class="text-sm text-white/70">Fast Delivery</p>
                </div>

                {{-- Secure --}}
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-2">
                        <!-- Shield Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <p class="text-sm text-white/70">Secure</p>
                </div>

                {{-- Data Driven --}}
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-2">
                        <!-- Chart Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19V6h2v13H9zm4 0V10h2v9h-2zm4 0V4h2v15h-2z" />
                        </svg>
                    </div>
                    <p class="text-sm text-white/70">Data Driven</p>
                </div>

                {{-- Trusted Partner --}}
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 rounded-full bg-white/5 flex items-center justify-center mb-2">
                        <!-- Handshake Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l2-2 4 4m0 0l-2 2m2-2H7l-2 2m9-8V6a2 2 0 10-4 0v4" />
                        </svg>
                    </div>
                    <p class="text-sm text-white/70">Trusted Partner</p>
                </div>
            </div>


        </div>
    </section>

    {{-- BOTTOM CTA --}}
    <section class="py-10">
        <div class="max-w-3xl mx-auto px-6 text-center">
            <a href="#contact"
                class="inline-block bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold shadow-lg">Start Your
                Project</a>
        </div>
    </section>
</x-guest-layout>
