<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Dpp znz</title>
    <style>
        /* General Reset & Typography */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
        }

        /* HERO BANNER */
        .hero-banner {
             width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #003366 0%, #0057b7 50%, #007bff 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 60px;
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Digital Pattern Overlay */
        .digital-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .digital-pattern svg {
            width: 100%;
            height: 100%;
            fill: rgba(255, 255, 255, 0.1);
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: -80px auto 40px;
            position: relative;
            z-index: 3;
        }

        /* Main Card Container */
        .main-card {
            max-width: 1200px;
            margin: -100px auto 40px;
            /* Overlap slightly with hero */
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            z-index: 2;
        }

        h1,
        h2,
        h3 {
            color: #0057b7;
            font-weight: 600;
        }

        p {
            margin-bottom: 1rem;
        }

        .section-title {
            text-align: center;
            margin: 40px 0 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #0057b7;
            color: #0057b7;
            font-size: 1.8rem;
        }

        .about-text {
            margin-bottom: 40px;
            line-height: 1.7;
        }

        .about-text strong {
            color: #0057b7;
        }

        /* Card Grids */
        .values-grid,
        .vision-mission-motto {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        /* Shared Card Style with Enhanced Hover */
        .card {
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 30px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
            min-height: 280px;
        }

        /* Vision, Mission, Motto Cards come FIRST */
        .vision-mission-motto .card {
            border-left: 4px solid #0057b7;
            border-top: 4px solid #0057b7;
        }

        /* Core Values Cards */
        .values-grid .card {
            border-right: 4px solid #0057b7;
            border-bottom: 4px solid #0057b7;
        }

        /* Gradient Background on Hover - BOTTOM RIGHT to TOP LEFT */
        .card::before {
            content: '';
            position: absolute;
            bottom: -100%;
            right: -100%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, #0057b7 0%, #1e88e5 50%, #42a5f5 100%);
            transition: all 0.6s ease;
            z-index: 0;
            opacity: 0;
            transform: translate(50%, 50%) rotate(45deg);
        }

        .card:hover::before {
            opacity: 1;
            bottom: -50%;
            right: -50%;
            transform: translate(0, 0) rotate(45deg);
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: transparent;
            box-shadow: 0 20px 40px rgba(0, 87, 183, 0.2);
        }

        .card:hover .card-icon {
            color: white;
            transform: scale(1.2) rotate(5deg);
        }

        .card:hover .card-title,
        .card:hover .card-desc {
            color: white;
        }

        .card-content {
            position: relative;
            z-index: 1;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-icon {
            font-size: 1.5rem; /* Reduced from 2rem */
            color: #0057b7;
            margin-bottom: 15px; /* Reduced margin */
            transition: all 0.4s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-icon svg {
            width: 32px; /* Reduced from 40px+ */
            height: 32px;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: #0057b7;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.4s ease;
            text-align: center;
        }

        .card-desc {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            transition: all 0.4s ease;
            text-align: center;
            flex: 1;
        }

        /* Quality Policy Box */
        .quality-policy {
            background: linear-gradient(135deg, #e6f2ff 0%, #f0f7ff 100%);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0057b7;
            margin: 30px 0;
            box-shadow: 0 4px 12px rgba(0, 87, 183, 0.1);
        }

        .quality-policy h3 {
            color: #0057b7;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .main-card {
                padding: 30px;
            }

            .values-grid,
            .vision-mission-motto {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .hero-banner {
                height: 220px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .main-card {
                margin: -80px auto 30px;
                padding: 25px;
                border-radius: 10px;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .values-grid,
            .vision-mission-motto {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .card {
                padding: 20px;
                min-height: 250px;
            }

            .card-icon {
                font-size: 1.2rem; /* Smaller on mobile */
            }

            .card-icon svg {
                width: 28px;
                height: 28px;
            }

            .card-title {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            .hero-banner {
                height: 180px;
            }

            .hero-title {
                font-size: 1.6rem;
            }

            .section-title {
                font-size: 1.3rem;
            }

            .card {
                min-height: 220px;
                padding: 15px;
            }

            .card-icon {
                font-size: 1rem;
                margin-bottom: 10px;
            }

            .card-icon svg {
                width: 24px;
                height: 24px;
            }

            .card-title {
                font-size: 1.2rem;
                margin-bottom: 10px;
            }

            .card-desc {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Header Component -->
    @livewire('header')

    <!-- HERO BANNER -->
    <div class="hero-banner">
        <div class="digital-pattern">
            <!-- SVG Pattern: Dots, Lines, Locks -->
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1200 300">
                <!-- Wave Pattern -->
                <path d="M0,150 Q300,50 600,150 T1200,150 L1200,300 L0,300 Z" fill="none"
                    stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <path d="M0,100 Q300,200 600,100 T1200,100 L1200,300 L0,300 Z" fill="none"
                    stroke="rgba(255,255,255,0.1)" stroke-width="1" />

                <!-- Dot Grid -->
                <g opacity="0.3">
                    <circle cx="50" cy="50" r="2" />
                    <circle cx="150" cy="70" r="2" />
                    <circle cx="250" cy="40" r="2" />
                    <circle cx="350" cy="80" r="2" />
                    <circle cx="450" cy="60" r="2" />
                    <circle cx="550" cy="90" r="2" />
                    <circle cx="650" cy="50" r="2" />
                    <circle cx="750" cy="70" r="2" />
                    <circle cx="850" cy="40" r="2" />
                    <circle cx="950" cy="80" r="2" />
                    <circle cx="1050" cy="60" r="2" />
                    <circle cx="1150" cy="90" r="2" />
                </g>

                <!-- Lock Icons -->
                <g opacity="0.4">
                    <path
                        d="M100,200 M100,200 L100,220 M100,220 L90,220 M90,220 L90,230 M90,230 L110,230 M110,230 L110,220 M110,220 L100,220 Z M100,230 L100,240 M95,240 L105,240"
                        fill="none" stroke="white" stroke-width="1" />
                    <path
                        d="M300,200 M300,200 L300,220 M300,220 L290,220 M290,220 L290,230 M290,230 L310,230 M310,230 L310,220 M310,220 L300,220 Z M300,230 L300,240 M295,240 L305,240"
                        fill="none" stroke="white" stroke-width="1" />
                    <path
                        d="M500,200 M500,200 L500,220 M500,220 L490,220 M490,220 L490,230 M490,230 L510,230 M510,230 L510,220 M510,220 L500,220 Z M500,230 L500,240 M495,240 L505,240"
                        fill="none" stroke="white" stroke-width="1" />
                    <path
                        d="M700,200 M700,200 L700,220 M700,220 L690,220 M690,220 L690,230 M690,230 L710,230 M710,230 L710,220 M710,220 L700,220 Z M700,230 L700,240 M695,240 L705,240"
                        fill="none" stroke="white" stroke-width="1" />
                    <path
                        d="M900,200 M900,200 L900,220 M900,220 L890,220 M890,220 L890,230 M890,230 L910,230 M910,230 L910,220 M910,220 L900,220 Z M900,230 L900,240 M895,240 L905,240"
                        fill="none" stroke="white" stroke-width="1" />
                    <path
                        d="M1100,200 M1100,200 L1100,220 M1100,220 L1090,220 M1090,220 L1090,230 M1090,230 L1110,230 M1110,230 L1110,220 M1110,220 L1100,220 Z M1100,230 L1100,240 M1095,240 L1105,240"
                        fill="none" stroke="white" stroke-width="1" />
                </g>

                <!-- Network Lines -->
                <g opacity="0.2">
                    <line x1="20" y1="250" x2="80" y2="270" stroke="white" stroke-width="1" />
                    <line x1="120" y1="260" x2="180" y2="240" stroke="white" stroke-width="1" />
                    <line x1="220" y1="250" x2="280" y2="270" stroke="white" stroke-width="1" />
                    <line x1="320" y1="260" x2="380" y2="240" stroke="white" stroke-width="1" />
                    <line x1="420" y1="250" x2="480" y2="270" stroke="white" stroke-width="1" />
                    <line x1="520" y1="260" x2="580" y2="240" stroke="white" stroke-width="1" />
                    <line x1="620" y1="250" x2="680" y2="270" stroke="white"
                        stroke-width="1" />
                    <line x1="720" y1="260" x2="780" y2="240" stroke="white"
                        stroke-width="1" />
                    <line x1="820" y1="250" x2="880" y2="270" stroke="white"
                        stroke-width="1" />
                    <line x1="920" y1="260" x2="980" y2="240" stroke="white"
                        stroke-width="1" />
                    <line x1="1020" y1="250" x2="1080" y2="270" stroke="white"
                        stroke-width="1" />
                    <line x1="1120" y1="260" x2="1180" y2="240" stroke="white"
                        stroke-width="1" />
                </g>
            </svg>
        </div>
        <div class="hero-content">
    <h1 class="hero-title" style="color: white;" >Who We Are</h1>
    <p class="hero-subtitle">Introduction / Who We Are</p>
</div>

    </div>

    <!-- MAIN CONTENT CARD -->
    <div class="container">
<div class="main-card">

        <!-- About Us Text (First) -->
        <div class="section-title">WHO WE ARE</div>

        <div class="about-text">
            <h2>About Us</h2>
            <p>
                The Office of the Director of Public Prosecutions Zanzibar (DPPZNZ) is a
                constitutionally established institution responsible for managing and
                conducting all criminal prosecutions on behalf of the Government of Zanzibar.
                It operates as an independent authority mandated to administer justice,
                ensure fairness, and uphold the rule of law.
            </p>

            <p>
                The DPP plays a central role in the criminal justice system by guiding
                investigative bodies, reviewing case files, initiating prosecutions, and
                representing the state in all courts. The Office works in close collaboration
                with justice-sector institutions to strengthen peace, stability, and
                socio-economic development.
            </p>

            <div class="quality-policy">
                <h3>Our Commitment</h3>
                <p>
                    We are committed to delivering transparent, professional, and
                    impartial prosecution services that meet national legal standards
                    and uphold the rights of all individuals. The Office ensures that
                    all prosecutions are conducted with integrity, accountability, and
                    strict adherence to the laws of Zanzibar.
                </p>
            </div>
        </div>


        <!-- Vision, Mission, Motto - FIRST SECTION -->
        <div class="vision-mission-motto">
            <!-- Vision -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Vision</h3>
                    <p class="card-desc">To provide independent, impartial, and effective prosecution services in Zanzibar, ensuring justice is served for all.</p>
                </div>
            </div>

            <!-- Mission -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Mission</h3>
                    <p class="card-desc">To be a professional, accountable, and trusted prosecution authority that upholds the rule of law and promotes public confidence.</p>
                </div>
            </div>

            <!-- Motto -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h10m-4 8h4a2 2 0 002-2V7l-5-5H7a2 2 0 00-2 2v16a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Motto</h3>
                    <p class="card-desc">"Justice, Integrity, and Accountability".</p>
                </div>
            </div>
        </div>

        <!-- Core Values - SECOND SECTION -->
        <div class="section-title">OUR CORE VALUES</div>
        <p>The DPP Zanzibar has six core values that guide and direct the behavior of its officers at all levels.
        These values reflect the culture of the Office, ensuring that all officers conduct prosecutions with integrity,
         fairness, and accountability, and that the public can trust the DPP to 
         uphold justice in accordance with the law</p>

        <div class="values-grid">
            <!-- Integrity -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Integrity</h3>
                    <p class="card-desc">Personal character of officers working in the DPP's Office during and after office hours should reflect the judicious nature of the prosecution office.</p>
                </div>
            </div>

            <!-- Impartiality -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 8 4-16 3 8h4" />
                        </svg>
                    </div>
                    <h3 class="card-title">Impartiality</h3>
                    <p class="card-desc">Prosecution is not a vengeful mission; it is a mission to present the truth before the court of law as known by the witnesses.</p>
                </div>
            </div>

            <!-- Independence -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="card-title">Independence</h3>
                    <p class="card-desc">The 1984 Zanzibar Constitution guarantees independence of the prosecution authority. It is the duty of the prosecutors to uphold the independence by being honest.</p>
                </div>
            </div>

            <!-- Fairness -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m2 6l4-4m-6-2l2 2" />
                        </svg>
                    </div>
                    <h3 class="card-title">Fairness</h3>
                    <p class="card-desc">Prosecution should never be turned into persecution. It should never be used to achieve any other end except the end of justice.</p>
                </div>
            </div>

            <!-- Effectiveness -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Effectiveness</h3>
                    <p class="card-desc">Being timely, cooperative and pursuing each prosecution with necessary zeal to meet the end of justice.</p>
                </div>
            </div>

            <!-- Efficiency -->
            <div class="card">
                <div class="card-content">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.39 10.37a8 8 0 11-16.78 0 8 8 0 0116.78 0z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Efficiency</h3>
                    <p class="card-desc">Use of resources should be prudent and for the intended purpose.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    @livewire('footer')
    
</body>
</html>
