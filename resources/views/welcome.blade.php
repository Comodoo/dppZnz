<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dpp znz</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles

    <style>
        body {
            margin: 0;
            background-color: #f5f5f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .slide {
            transition: opacity 1s ease-in-out;
        }
        .spider-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23d0d7e1' stroke-width='0.7'%3E%3Cpath d='M0 60h120M60 0v120M0 0l120 120M120 0L0 120'/%3E%3C/g%3E%3C/svg%3E");
        background-size: 150px 150px;
        opacity: 0.50;
        position: absolute;
        inset: 0;
        z-index: 0;
    }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- Header Component -->
    @livewire('header')

    <!-- ====================================================== -->
    <!--                      CAROUSEL SECTION                  -->
    <!-- ====================================================== -->
    <section class="relative w-full h-[530px] overflow-hidden">

        <!-- Slides Wrapper -->
        <div id="carousel" class="relative h-full w-full">

            <!-- --------------- SLIDE 1 --------------- -->
            <div class="slide absolute inset-0 opacity-100">

                <!-- BACKGROUND IMAGE -->
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('images/slider/image1.png') }}');">
                </div>

                <!-- BLUE OVERLAY -->
                <div class="absolute inset-0 bg-[#0D84BE]/70"></div>

                <!-- CIRCUIT PATTERN -->
                <div class="absolute inset-0 pointer-events-none opacity-20">
                    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <pattern id="circuit" width="100" height="100" patternUnits="userSpaceOnUse">
                                <path d="M0,0 L100,100 M0,100 L100,0" stroke="#fff" stroke-width="1"/>
                                <circle cx="50" cy="50" r="3" fill="#fff" />
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#circuit)" />
                    </svg>
                </div>

                <!-- TEXT -->
                <div class="relative z-20 max-w-6xl mx-auto px-6 h-full flex items-center">
                    <div class="text-white space-y-4 w-full md:w-2/3">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                            Criminal Justice <br>
System that Ensures <span class="text-yellow-400">Peace</span><br>
<span class="text-yellow-400">Stability & Growth </span>
                        </h1>
                        <p class="text-sm md:text-base leading-relaxed">
                        Committed to establishing a strong criminal justice system that protects national peace, stability, and socio-economic development.
                        </p>
                    </div>
                </div>

            </div>

            <!-- --------------- SLIDE 2 --------------- -->
            <div class="slide absolute inset-0 opacity-0">

                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('images/slider/image2.png') }}');">
                </div>

                <div class="absolute inset-0 bg-[#0D84BE]/70"></div>

                <div class="absolute inset-0 pointer-events-none opacity-20">
                    <svg width="100%" height="100%">
                        <rect width="100%" height="100%" fill="url(#circuit)" />
                    </svg>
                </div>

                <div class="relative z-20 max-w-6xl mx-auto px-6 h-full flex items-center">
                    <div class="text-white space-y-4 w-full md:w-2/3">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                            Delivering Fair <br>
Prosecutions with <span class="text-yellow-400">Integrity</span><br>
<span class="text-yellow-400">Excellence & Transparency </span>
                        </h1>
                        <p class="text-sm md:text-base leading-relaxed">
                           We provide independent, effective, and justice-oriented prosecution services on behalf of the People and the Government of Zanzibar.
                        </p>
                    </div>
                </div>

            </div>

            <!-- --------------- SLIDE 3 --------------- -->
            <div class="slide absolute inset-0 opacity-0">

                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('images/slider/image4.png') }}');">
                </div>

                <div class="absolute inset-0 bg-[#0D84BE]/70"></div>

                <div class="absolute inset-0 pointer-events-none opacity-20">
                    <svg width="100%" height="100%">
                        <rect width="100%" height="100%" fill="url(#circuit)" />
                    </svg>
                </div>

                <div class="relative z-20 max-w-6xl mx-auto px-6 h-full flex items-center">
                    <div class="text-white space-y-4 w-full md:w-2/3">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                            Upholding Justice <br>
Through <span class="text-yellow-400">Lawful</span><br>
<span class="text-yellow-400">Prosecution for All</span>
                        </h1>
                        <p class="text-sm md:text-base leading-relaxed">
                            “We lead all criminal prosecutions, guide investigative bodies, and ensure justice is delivered fairly, professionally, and without bias.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ====================================================== -->
    <!--                   PAGE CONTENT BELOW                   -->
    <!-- ====================================================== -->

    @livewire('huduma-zetu-slider')

    @livewire('guidelines')
    @livewire('news-component')
    @livewire('achievements')
    @livewire('footer')



    <!-- ====================================================== -->
    <!--                   JAVASCRIPT CAROUSEL                  -->
    <!-- ====================================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slides = document.querySelectorAll('.slide');
            let current = 0;

            function showSlide(i) {
                slides.forEach((s, index) => {
                    s.style.opacity = (index === i) ? '1' : '0';
                });
            }

            setInterval(() => {
                current = (current + 1) % slides.length;
                showSlide(current);
            }, 8000);

            showSlide(current);
        });
    </script>

    @livewireScripts
</body>
</html>
