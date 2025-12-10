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
     /* Main footer wrapper - Single background for entire footer */
        .footer-wrapper {
            position: relative;
            width: 100%;
            margin-top: 100px;
            background: linear-gradient(135deg, #1e88e5, #1976d2);
            color: white;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
        }



        /* Modern top border effect */
        .footer-top-border {
            position: relative;
            width: 100%;
            height: 40px;
            background: linear-gradient(135deg, #1e88e5, #1976d2);
            overflow: hidden;
            border-bottom: 2px solid rgba(255, 215, 0, 0.3);
        }

        .footer-top-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg,
                transparent 0%,
                #ffd700 20%,
                #ffd700 80%,
                transparent 100%);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        /* Main footer content section - Removed background */
        .footer-main {
            position: relative;
            padding: 80px 20px 40px;
            z-index: 2;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 3;
        }

        .footer-column h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: #ffd700;
            border-radius: 2px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column li {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .footer-column a {
            color: rgba(255,255,255,0.9);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-column a:hover {
            color: #ffd700;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            margin: 8px 0;
            line-height: 1.6;
        }

        .phone-numbers {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }

        .phone-number {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffd700;
            font-weight: 500;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            justify-content: center;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .social-icon:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-3px);
        }

        .social-icon i {
            color: white;
            font-size: 1.2rem;
        }

        /* Copyright section - Updated to match main footer background */
        .copyright {
            position: relative;
            padding: 40px 20px 30px;

            z-index: 2;
        }

        .copyright-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 30px;
            position: relative;
            z-index: 3;
        }

        .copyright-column h4 {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            color: #ffd700;
        }

        .copyright-column h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background: #ffd700;
            border-radius: 2px;
        }

        .copyright-column p {
            margin: 0 0 10px 0;
            font-size: 0.9rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .copyright-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .copyright-links li {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .copyright-links a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.2s ease;
            font-size: 0.9rem;
        }

        .copyright-links a:hover {
            color: #ffd700;
        }

        .copyright-bottom {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        /* Floating buttons */
        .floating-buttons {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }

        .floating-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ffd700;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e88e5;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .floating-btn:hover {
            transform: scale(1.1);
            background: #ffca28;
        }

        .floating-btn i {
            pointer-events: none;
        }

        /* Grid lines effect */
        .grid-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 1;
        }

        .grid-line {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
        }

        .grid-line.vertical {
            width: 1px;
            height: 100%;
        }

        .grid-line.horizontal {
            width: 100%;
            height: 1px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .copyright-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .floating-buttons {
                right: 10px;
                top: 90%;
                transform: translateY(-90%);
            }

            .footer-main {
                padding: 70px 15px 30px;
            }

            .footer-top-border {
                height: 30px;
            }

            .copyright {
                padding: 30px 15px 20px;
            }
        }

        @media (max-width: 480px) {
            .floating-buttons {
                display: none;
            }

            .footer-main {
                padding: 60px 15px 20px;
            }

            .footer-top-border {
                height: 20px;
            }

            .phone-numbers {
                flex-direction: column;
                gap: 10px;
            }

            .copyright {
                padding: 20px 15px 15px;
            }
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
    <section class="relative w-full h-[430px] overflow-hidden">

        <!-- Slides Wrapper -->
        <div id="carousel" class="relative h-full w-full">

            <!-- --------------- SLIDE 1 --------------- -->
            <div class="slide absolute inset-0 opacity-100">

                <!-- BACKGROUND IMAGE -->
                <div class="absolute inset-0 bg-cover bg-center"
                     style="background-image: url('{{ asset('images/image1.png') }}');">
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
                     style="background-image: url('{{ asset('images/image2.png') }}');">
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
                     style="background-image: url('{{ asset('images/image4.png') }}');">
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
