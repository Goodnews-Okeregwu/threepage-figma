<x-guest-layout>


    <!-- Hero -->
    <section class="relative flex items-center h-[450px] px-8 md:px-16 bg-cover bg-center"
        style="background-image: linear-gradient(rgba(3,4,5,0.85), rgba(3,4,5,0.75)), url('{{ asset('asset/background.jpg') }}');">
        <div class="max-w-xl text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                We Build <br>
                <span class="text-white">Scalable & Smart</span> <br>
                Softwares
            </h1>
            <p class="mt-4 text-lg text-gray-300">
                Custom apps, enterprise solutions, and digital products for forward thinking businesses.
            </p>
            <div class="mt-6 flex flex-col sm:flex-row gap-4">
                <a href="#"
                    class="px-6 py-3 bg-orange-500 text-black font-bold rounded-lg hover:bg-orange-400 transition text-center">
                    Start Your Project
                </a>
                <a href="#"
                    class="px-6 py-3 bg-orange-500 text-black font-bold rounded-lg hover:bg-orange-400 transition text-center">
                    View Case Studies
                </a>
            </div>

    </section>


    <!-- Search Bar -->
    <div class="flex justify-center my-10 px-4">
        <input type="text" placeholder="Search..."
            class="w-full max-w-md px-4 py-2 rounded-full text-sm text-black outline-none" />
    </div>

    <!-- Services -->
    <section class="flex flex-wrap justify-center gap-6 px-6 py-10">
        <div class="w-44 text-center bg-white/5 p-5 rounded-xl backdrop-blur-sm">
            <img src="{{ asset('asset/cloud_software.jpg') }}" alt="Cloud Solutions"
                class="w-full h-28 object-cover rounded-lg" />
            <p class="mt-3 font-semibold">Cloud Solutions</p>
        </div>

        <div class="w-44 text-center bg-white/5 p-5 rounded-xl backdrop-blur-sm">
            <img src="https://picsum.photos/200/120?tech2" alt="App Development"
                class="w-full h-28 object-cover rounded-lg" />
            <p class="mt-3 font-semibold">App Development</p>
        </div>

        <div class="w-44 text-center bg-white/5 p-5 rounded-xl backdrop-blur-sm">
            <img src="{{ asset('asset/UI_design.jpg') }}" alt="UI/UX Design"
                class="w-full h-28 object-cover rounded-lg" />
            <p class="mt-3 font-semibold">UI/UX Design</p>
        </div>

        <div class="w-44 text-center bg-white/5 p-5 rounded-xl backdrop-blur-sm">
            <img src="{{ asset('asset/App_web.jpg') }}" alt="Web App Development"
                class="w-full h-28 object-cover rounded-lg" />
            <p class="mt-3 font-semibold">Web App Development</p>
        </div>
    </section>


    <!-- Why Choose Us -->
    <section class="flex flex-col md:flex-row items-center gap-10 px-8 md:px-16 py-16">
        <img src="{{ asset('asset/laptop - Copy.jpg') }}" alt="Workspace" class="w-full md:w-2/5 rounded-lg" />
        <div class="flex-1">
            <h2 class="text-3xl font-bold mb-6">Why Choose Us</h2>
            <p class="text-gray-300">We design software interfaces that combine simplicity, functionality, and
                innovation.</p>
            <ul class="list-disc list-inside mt-6 space-y-2 text-gray-200">
                <li>User-focused, intuitive designs</li>
                <li>Scalable and future-ready solutions</li>
                <li>A balance of creativity and technical precision</li>
                <li>Proven expertise across industries</li>
                <li>Transparent, reliable process</li>
            </ul>
            <a href="#"
                class="inline-block mt-6 px-6 py-3 bg-orange-500 text-black font-bold rounded-lg hover:bg-orange-400 transition">Start
                Your Project</a>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="bg-gray-100 text-black text-center px-6 py-12 space-y-8">
        <div>
            <p class="italic">“They turned our idea into a fully functional mobile app within weeks. The design is
                clean, fast, and our users love it.”</p>
            <span class="block mt-3 font-bold">- Client, CEO of Fintech</span>
        </div>
        <div>
            <p class="italic">“From UI design to backend development, everything was handled with precision. Sales have
                increased by 45% since launching our new platform.”</p>
            <span class="block mt-3 font-bold">- Manager, Retail Company</span>
        </div>
        <div>
            <p class="italic">“Their team helped us migrate our system to the cloud seamlessly. Zero downtime, improved
                security, and better performance.”</p>
            <span class="block mt-3 font-bold">- David Kim, IT Director at GlobalCo</span>
        </div>
    </section>

</x-guest-layout>
