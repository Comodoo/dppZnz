<div class="py-16 px-6 bg-[#F7F8FA] relative overflow-hidden">

    <!-- SPIDER WEB PATTERN -->
    <div class="spider-pattern"></div>

    <!-- Keep everything else on top -->
    <div class="relative z-10">

        <!-- Section Title -->
        <div class="text-center ">
            <h2 class="text-4xl font-extrabold text-[#0D84BE] mb-12">
                <span class="text-yellow-400">Our</span> Services
            </h2>

        </div>

        <!-- Carousel Container -->
        <div class="relative max-w-7xl mx-auto overflow-hidden">

            <!-- SLIDES WRAPPER -->
            <div class="flex transition-all duration-700" style="transform: translateX(-{{ $currentSlide * 33.333 }}%);">

                @foreach ($slides as $slide)
                    <div class="w-full md:w-1/2 lg:w-1/3 p-4 flex-shrink-0">

                        <div
                            class="bg-white rounded-2xl shadow-md hover:shadow-xl border border-gray-100 overflow-hidden">

                            <!-- Image -->
                            <div class="h-48 w-full overflow-hidden">
                                <img src="{{ $slide['icon'] }}" class="w-full h-full object-cover" />
                            </div>

                            <!-- Text -->
                            <div class="p-6 space-y-4">
                                <h3 class="text-xl font-bold text-gray-900">
                                    {{ $slide['title'] }}
                                </h3>

                                <p class="text-gray-600 leading-relaxed line-clamp-3">
                                    {{ $slide['description'] }}
                                </p>

                                <a href="#"
                                    class="inline-block bg-[#0D84BE] text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                                    Tazama Huduma →
                                </a>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Navigation Buttons -->
            <button wire:click="prevSlide"
                class="absolute top-1/2 -left-4 transform -translate-y-1/2 bg-white shadow-xl p-3 rounded-full text-[#0D84BE] hover:scale-110 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button wire:click="nextSlide"
                class="absolute top-1/2 -right-4 transform -translate-y-1/2 bg-white shadow-xl p-3 rounded-full text-[#0D84BE] hover:scale-110 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

        </div>
    </div>
</div>
