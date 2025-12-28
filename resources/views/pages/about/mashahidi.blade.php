<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitengo cha Kulinda Mashahidi na Kusaidia Waathirika wa Jinai - DPP Zanzibar</title>
    <style>
        /* General Reset & Typography */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.7;
            color: #333;
            background-color: #f8f9fa;
        }

        /* HERO BANNER - Same as Mandate & Functions page */
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

        /* Digital Pattern Overlay - Same as Mandate & Functions page */
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
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            position: relative;
        }

        /* Content Layout - Modified for single column */
        .content-wrapper {
            padding: 40px;
            min-height: 600px;
        }

        /* Page Header */
        .page-header {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid #0056b3;
            text-align: center;
        }

        .page-header h1 {
            font-size: 2.2rem;
            color: #003366;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .page-header .intro-text {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Unit Section - Using same style as mandate-section */
        .mandate-section {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .mandate-section h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .mandate-section p {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Focus Areas Section */
        .focus-section {
            background: linear-gradient(to right, #e6f2ff, #d9e9ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .focus-section h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .focus-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .focus-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .focus-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-color: #0056b3;
        }

        .focus-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #0056b3, #003366);
        }

        .focus-card-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .focus-icon {
            background: linear-gradient(135deg, #0056b3, #003366);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .focus-title {
            font-size: 1.4rem;
            color: #003366;
            font-weight: 700;
            line-height: 1.3;
        }

        .focus-content {
            margin-top: 10px;
        }

        .focus-description {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* Support Services Section */
        .services-section {
            background: linear-gradient(to right, #fff0f6, #ffe6f0);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #e83e8c;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .services-section h2 {
            font-size: 1.6rem;
            color: #e83e8c;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .service-item {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #e83e8c;
        }

        .service-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #e83e8c, #d63384);
        }

        .service-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #e83e8c;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .service-title::before {
            content: '❤️';
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .service-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Responsibilities Section */
        .functions-section {
            margin-bottom: 40px;
        }

        .functions-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
        }

        .functions-list {
            display: grid;
            gap: 20px;
        }

        .function-item {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-start;
        }

        .function-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #0056b3;
        }

        .function-number {
            background: linear-gradient(135deg, #0056b3, #003366);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
            flex-shrink: 0;
            margin-right: 20px;
            margin-top: 2px;
        }

        .function-content {
            flex-grow: 1;
        }

        .function-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 8px;
        }

        .function-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Important Note Section */
        .important-note {
            background: linear-gradient(to right, #fff8e6, #fff3d9);
            padding: 20px;
            border-radius: 8px;
            border-left: 5px solid #f59e0b;
            margin-top: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .important-note h3 {
            color: #d97706;
            margin-bottom: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .important-note h3::before {
            content: '⚠️';
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .important-note p {
            color: #92400e;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                max-width: 95%;
            }
        }

        @media (max-width: 768px) {
            .hero-banner {
                height: 220px;
                margin-bottom: 40px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .container {
                margin: -60px auto 30px;
            }

            .content-wrapper {
                padding: 30px;
            }

            .page-header h1 {
                font-size: 1.8rem;
            }

            .focus-grid, .services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .focus-card, .service-item {
                padding: 20px;
            }

            .focus-card-header {
                flex-direction: column;
                align-items: flex-start;
                text-align: center;
            }

            .focus-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .focus-title {
                text-align: center;
                width: 100%;
            }

            .function-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .function-number {
                margin-bottom: 15px;
                margin-right: 0;
            }
        }

        @media (max-width: 600px) {
            .hero-banner {
                height: 180px;
            }

            .hero-title {
                font-size: 1.6rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .container {
                margin: -50px auto 20px;
            }

            .content-wrapper {
                padding: 20px;
            }

            .page-header h1 {
                font-size: 1.5rem;
            }

            .mandate-section {
                padding: 20px;
            }

            .focus-section, .services-section {
                padding: 20px;
            }

            .focus-card, .service-item {
                padding: 15px;
            }

            .function-item {
                padding: 15px;
            }
        }

        @media (max-width: 400px) {
            .hero-banner {
                height: 160px;
            }

            .hero-title {
                font-size: 1.4rem;
            }

            .page-header h1 {
                font-size: 1.3rem;
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
            <!-- SVG Pattern: Dots, Lines, Locks - SAME AS PREVIOUS PAGES -->
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

                <!-- Shield Icons for Protection Theme -->
                <g opacity="0.4">
                    <!-- Shield shapes for protection theme -->
                    <path d="M100,200 L90,210 L100,230 L110,210 Z" fill="none" stroke="white" stroke-width="1" />
                    <path d="M100,200 L90,210 L100,210 L110,210 Z" fill="none" stroke="white" stroke-width="1" />
                    
                    <path d="M300,200 L290,210 L300,230 L310,210 Z" fill="none" stroke="white" stroke-width="1" />
                    <path d="M300,200 L290,210 L300,210 L310,210 Z" fill="none" stroke="white" stroke-width="1" />
                    
                    <path d="M500,200 L490,210 L500,230 L510,210 Z" fill="none" stroke="white" stroke-width="1" />
                    <path d="M500,200 L490,210 L500,210 L510,210 Z" fill="none" stroke="white" stroke-width="1" />
                    
                    <path d="M700,200 L690,210 L700,230 L710,210 Z" fill="none" stroke="white" stroke-width="1" />
                    <path d="M700,200 L690,210 L700,210 L710,210 Z" fill="none" stroke="white" stroke-width="1" />
                    
                    <path d="M900,200 L890,210 L900,230 L910,210 Z" fill="none" stroke="white" stroke-width="1" />
                    <path d="M900,200 L890,210 L900,210 L910,210 Z" fill="none" stroke="white" stroke-width="1" />
                    
                    <path d="M1100,200 L1090,210 L1100,230 L1110,210 Z" fill="none" stroke="white" stroke-width="1" />
                    <path d="M1100,200 L1090,210 L1100,210 L1110,210 Z" fill="none" stroke="white" stroke-width="1" />
                </g>

                <!-- Network Lines -->
                <g opacity="0.2">
                    <line x1="20" y1="250" x2="80" y2="270" stroke="white" stroke-width="1" />
                    <line x1="120" y1="260" x2="180" y2="240" stroke="white" stroke-width="1" />
                    <line x1="220" y1="250" x2="280" y2="270" stroke="white" stroke-width="1" />
                    <line x1="320" y1="260" x2="380" y2="240" stroke="white" stroke-width="1" />
                    <line x1="420" y1="250" x2="480" y2="270" stroke="white" stroke-width="1" />
                    <line x1="520" y1="260" x2="580" y2="240" stroke="white" stroke-width="1" />
                    <line x1="620" y1="250" x2="680" y2="270" stroke="white" stroke-width="1" />
                    <line x1="720" y1="260" x2="780" y2="240" stroke="white" stroke-width="1" />
                    <line x1="820" y1="250" x2="880" y2="270" stroke="white" stroke-width="1" />
                    <line x1="920" y1="260" x2="980" y2="240" stroke="white" stroke-width="1" />
                    <line x1="1020" y1="250" x2="1080" y2="270" stroke="white" stroke-width="1" />
                    <line x1="1120" y1="260" x2="1180" y2="240" stroke="white" stroke-width="1" />
                </g>
            </svg>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">KITENGO CHA KULINDA MASHAHIDI NA KUSAIDIA WAATHIRIKA WA JINAI</h1>
            <p class="hero-subtitle">Ulinzi, Usaidizi na Ulinzi wa Haki za Washiriki wa Mfumo wa Haki</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Kitengo cha Kulinda Mashahidi na Kusaidia Waathirika wa Jinai</h1>
                    <p class="intro-text">
                        Kitengo hiki kina jukumu la kuwalinda mashahidi na kuwasaidia waathirika wa makosa ya jinai 
                        pamoja na kuhakikisha hifadhi ya taarifa binafsi za mashahidi na waathirika wa uhalifu na 
                        kutunza siri kwa ajili ya utekelezaji bora wa haki.
                    </p>
                </div>

                <!-- Unit Overview Section -->
                <div class="mandate-section">
                    <h2>Utangulizi wa Kitengo</h2>
                    <p>
                        Kitengo cha Kulinda Mashahidi na Kusaidia Waathirika wa Jinai kina jukumu muhimu la 
                        kuhakikisha usalama na usaidizi wa washiriki muhimu katika mfumo wa haki. Kitengo hiki 
                        kinatoa ulinzi, usaidizi wa kisaikolojia, na huduma mbalimbali kwa mashahidi na waathirika 
                        wa uhalifu ili kuhakikisha wanashiriki kwa ufanisi katika mchakato wa haki.
                    </p>
                    <p>
                        Lengo kuu la kitengo hiki ni kuhakikisha kwamba mashahidi na waathirika wa uhalifu wanapata 
                        ulinzi wa kutosha, usaidizi wa kisheria, na mazingira salama ya kutoa ushahidi na kupata haki 
                        zao katika mfumo wa haki.
                    </p>
                </div>

                <!-- Focus Areas Section -->
                <div class="focus-section">
                    <h2>Maeneo ya Mkusanyiko</h2>
                    <p style="margin-bottom: 15px; color: #444;">
                        Kitengo hiki kinashughulikia nyanja kuu tatu za ulinzi na usaidizi:
                    </p>
                    
                    <div class="focus-grid">
                        <!-- Focus Area 1 -->
                        <div class="focus-card">
                            <div class="focus-card-header">
                                <div class="focus-icon">🛡️</div>
                                <div class="focus-title">Ulinzi na Usalama wa Mashahidi</div>
                            </div>
                            <div class="focus-content">
                                <p class="focus-description">
                                    Kutoa ulinzi kamili wa usalama kwa mashahidi kabla, wakati na baada ya kutoa 
                                    ushahidi mahakamani, kuhakikisha usiri na hifadhi ya taarifa binafsi.
                                </p>
                            </div>
                        </div>

                        <!-- Focus Area 2 -->
                        <div class="focus-card">
                            <div class="focus-card-header">
                                <div class="focus-icon">🤝</div>
                                <div class="focus-title">Usaidizi wa Kisheria na Kisaikolojia</div>
                            </div>
                            <div class="focus-content">
                                <p class="focus-description">
                                    Kutoa usaidizi wa kisheria kwa waathirika wa uhalifu na usaidizi wa kisaikolojia 
                                    kwa mashahidi na waathirika ili kuwawezesha kushiriki kwa ufanisi katika mchakato 
                                    wa haki.
                                </p>
                            </div>
                        </div>

                        <!-- Focus Area 3 -->
                        <div class="focus-card">
                            <div class="focus-card-header">
                                <div class="focus-icon">📞</div>
                                <div class="focus-title">Uwasiliani na Elimu ya Jamii</div>
                            </div>
                            <div class="focus-content">
                                <p class="focus-description">
                                    Kupokea malalamiko kutoka kwa jamii, kutoa elimu kuhusu haki za mashahidi na 
                                    waathirika, na kuhakikisha uwazi katika mchakato wa haki.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Support Services Section -->
                <div class="services-section">
                    <h2>Huduma za Usaidizi Zinazotolewa</h2>
                    <p style="margin-bottom: 15px; color: #666;">
                        Kitengo hiki kinatoa huduma zifuatazo za usaidizi kwa mashahidi na waathirika wa uhalifu:
                    </p>
                    
                    <div class="services-grid">
                        <!-- Service 1 -->
                        <div class="service-item">
                            <div class="service-title">Ulinzi wa Usalama</div>
                            <p class="service-description">
                                Huduma za ulinzi wa usalama kabla, wakati na baada ya kutoa ushahidi mahakamani.
                            </p>
                        </div>

                        <!-- Service 2 -->
                        <div class="service-item">
                            <div class="service-title">Usaidizi wa Kisaikolojia</div>
                            <p class="service-description">
                                Kutoa usaidizi wa kisaikolojia na matibabu ya matatizo ya kisaikolojia yanayotokana na uhalifu.
                            </p>
                        </div>

                        <!-- Service 3 -->
                        <div class="service-item">
                            <div class="service-title">Utafiti wa Kisheria</div>
                            <p class="service-description">
                                Kuwasaidia waathirika kupata haki zao za kisheria na kufuatilia maendeleo ya kesi zao.
                            </p>
                        </div>

                        <!-- Service 4 -->
                        <div class="service-item">
                            <div class="service-title">Msaada wa Kiuchumi</div>
                            <p class="service-description">
                                Kutoa msaada wa kiuchumi kwa waathirika wa uhalifu waliopata hasara za kifedha.
                            </p>
                        </div>

                        <!-- Service 5 -->
                        <div class="service-item">
                            <div class="service-title">Elimu na Uhamasishaji</div>
                            <p class="service-description">
                                Kutoa elimu kwa jamii kuhusu haki za mashahidi na waathirika wa uhalifu.
                            </p>
                        </div>

                        <!-- Service 6 -->
                        <div class="service-item">
                            <div class="service-title">Usiri na Udhibiti wa Taarifa</div>
                            <p class="service-description">
                                Kuhakikisha usiri na hifadhi ya taarifa binafsi za mashahidi na waathirika.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Responsibilities Section -->
                <div class="functions-section">
                    <h2>Majukumu ya Kitengo</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Kitengo cha Kulinda Mashahidi na Kusaidia Waathirika wa Jinai kina majukumu yafuatayo:
                    </p>
                    
                    <div class="functions-list">
                        <!-- Responsibility 1 -->
                        <div class="function-item">
                            <div class="function-number">1</div>
                            <div class="function-content">
                                <div class="function-title">Kuhakikisha Usalama wa Mashahidi</div>
                                <p class="function-description">
                                    Kuhakikisha usalama wa mashahidi katika kesi husika (kabla na baada ya kutoa ushahidi).
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="function-item">
                            <div class="function-number">2</div>
                            <div class="function-content">
                                <div class="function-title">Kuwasaidia Kupata Haki za Kisheria</div>
                                <p class="function-description">
                                    Kuwasaidia mashahidi na waathirika wa makosa ya jinai kupata haki zao za Kisheria.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="function-item">
                            <div class="function-number">3</div>
                            <div class="function-content">
                                <div class="function-title">Hifadhi ya Taarifa na Usiri</div>
                                <p class="function-description">
                                    Kuhakikisha hifadhi ya taarifa binafsi za mashahidi na waathirika wa uhalifu na kutunza siri.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="function-item">
                            <div class="function-number">4</div>
                            <div class="function-content">
                                <div class="function-title">Utayarishaji wa Kisaikolojia</div>
                                <p class="function-description">
                                    Kuwatayarisha mashahidi na waathirika kisaikolojia ili waweze kutoa ushahidi bila ya hofu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="function-item">
                            <div class="function-number">5</div>
                            <div class="function-content">
                                <div class="function-title">Urejesho wa Taarifa kwa Waathirika</div>
                                <p class="function-description">
                                    Kutoa mrejesho kwa waathirika wa uhalifu juu ya hatua na maendeleo ya kesi zao.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="function-item">
                            <div class="function-number">6</div>
                            <div class="function-content">
                                <div class="function-title">Msaada wa Kisaikolojia</div>
                                <p class="function-description">
                                    Kutoa msaada wa kisaikolojia kwa waathirika wa Makosa ya Jinai.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="function-item">
                            <div class="function-number">7</div>
                            <div class="function-content">
                                <div class="function-title">Upokeaji wa Malalamiko</div>
                                <p class="function-description">
                                    Kupokea malalamiko kutoka kwa jamii.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="function-item">
                            <div class="function-number">8</div>
                            <div class="function-content">
                                <div class="function-title">Ufuatiliaji wa Waathirika</div>
                                <p class="function-description">
                                    Kufuatilia waathirika wa Makosa ya Jinai.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 9 -->
                        <div class="function-item">
                            <div class="function-number">9</div>
                            <div class="function-content">
                                <div class="function-title">Elimu kwa Jamii</div>
                                <p class="function-description">
                                    Kutoa elimu kwa jamii.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="important-note">
                    <h3>Umuhimu wa Ulinzi na Usaidizi wa Mashahidi na Waathirika</h3>
                    <p>
                        Kitengo cha Kulinda Mashahidi na Kusaidia Waathirika wa Jinai kina jukumu muhimu katika 
                        kuhakikisha utekelezaji bora wa haki. Mashahidi na waathirika wa uhalifu ni wahusika muhimu 
                        katika mfumo wa haki, na usalama wao na uwezo wao wa kushiriki kwa ufanisi ni msingi wa 
                        kupata haki. Ulinzi bora wa mashahidi na usaidizi wa waathirika husaidia kupunguza hofu, 
                        kuongeza ushiriki, na kuhakikisha kuwa ushahidi unatolewa kwa uhuru na bila shinikizo. Hii 
                        ni muhimu hasa katika kesi zenye utata au zenye wahusika wenye nguvu ambazo zinaweza kuwatia 
                        mashahidi na waathirika hatarini. Katika taasisi ya kisheria kama Ofisi ya DPP, kitengo hiki 
                        ni kiini cha uhakikisho wa haki kamili kwa wote wanaohusika katika mchakato wa haki.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>