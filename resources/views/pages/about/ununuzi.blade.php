<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitengo cha Ununuzi - DPP Zanzibar</title>
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

        /* HERO BANNER - Exactly like Witness Protection page */
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

        /* Digital Pattern Overlay - Exactly like Witness Protection page */
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

        /* Content Layout */
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

        /* Unit Section */
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

        /* Key Functions Section */
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
            content: '📋';
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

            .focus-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .focus-card {
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

            .focus-section {
                padding: 20px;
            }

            .focus-card {
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

    <!-- HERO BANNER - Exactly like Witness Protection page -->
    <div class="hero-banner">
        <div class="digital-pattern">
            <!-- SVG Pattern: Dots, Lines, Locks - SAME AS WITNESS PROTECTION PAGE -->
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
            <h1 class="hero-title">KITENGO CHA UNUNUZI</h1>
            <p class="hero-subtitle">Uendeshaji Bora wa Shughuli za Ununuzi na Ugavi Ndani ya Afisi ya DPP</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Kitengo cha Ununuzi</h1>
                    <p class="intro-text">
                        Kitengo hiki kinahusika na kutoa huduma za ununuzi na ugavi ndani ya Afisi ya DPP Zanzibar. 
                        Kinahakikisha ufanisi, uwazi na uadilifu katika shughuli zote za manunuzi kulingana na sheria, 
                        kanuni na taratibu zilizowekwa.
                    </p>
                </div>

                <!-- Unit Overview Section -->
                <div class="mandate-section">
                    <h2>Utangulizi wa Kitengo</h2>
                    <p>
                        Kitengo cha Ununuzi kina jukumu muhimu la kuhakikisha kuwa shughuli zote za ununuzi na ugavi 
                        ndani ya Afisi ya DPP Zanzibar zinafanyika kwa ufanisi, kwa mujibu wa sheria na taratibu 
                        zilizowekwa. Kitengo hiki kinasimamia mchakato wote wa ununuzi kutoka utambuzi wa mahitaji 
                        hadi upokeaji wa vifaa na huduma, kuhakikisha thamani kwa pesa na matumizi bora ya rasilimali.
                    </p>
                    <p>
                        Lengo kuu la kitengo hiki ni kuhakikisha kuwa Afisi ina vifaa, huduma na rasilimali mbalimbali 
                        zinazohitajika kwa utekelezaji bora wa majukumu yake, huku kikiwa na uwazi kamili na uadilifu 
                        katika mchakato wote wa ununuzi.
                    </p>
                </div>

                <!-- Focus Areas Section -->
                <div class="focus-section">
                    <h2>Maeneo ya Mkusanyiko</h2>
                    <p style="margin-bottom: 15px; color: #444;">
                        Kitengo hiki kinashughulikia nyanja kuu tatu za ununuzi na ugavi:
                    </p>
                    
                    <div class="focus-grid">
                        <!-- Focus Area 1 -->
                        <div class="focus-card">
                            <div class="focus-card-header">
                                <div class="focus-icon">🛒</div>
                                <div class="focus-title">Uendeshaji wa Shughuli za Ununuzi</div>
                            </div>
                            <div class="focus-content">
                                <p class="focus-description">
                                    Kufanya manunuzi yote ndani ya Afisi kwa mujibu wa sheria na taratibu zilizowekwa, 
                                    kuhakikisha ufanisi na thamani kwa pesa katika upatikanaji wa vifaa na huduma.
                                </p>
                            </div>
                        </div>

                        <!-- Focus Area 2 -->
                        <div class="focus-card">
                            <div class="focus-card-header">
                                <div class="focus-icon">📋</div>
                                <div class="focus-title">Utekelezaji wa Zabuni na Mikataba</div>
                            </div>
                            <div class="focus-content">
                                <p class="focus-description">
                                    Kusaidia utekelezaji wa majukumu ya Bodi ya Zabuni, kuitisha vikao, kuandaa 
                                    nyaraka za zabuni na kutekeleza maamuzi ya Bodi kwa ufanisi.
                                </p>
                            </div>
                        </div>

                        <!-- Focus Area 3 -->
                        <div class="focus-card">
                            <div class="focus-card-header">
                                <div class="focus-icon">📊</div>
                                <div class="focus-title">Mipango na Uwasilishaji wa Ripoti</div>
                            </div>
                            <div class="focus-content">
                                <p class="focus-description">
                                    Kuandaa Mpango wa Manunuzi wa Mwaka, kupanga shughuli za manunuzi na kuandaa 
                                    ripoti za utekelezaji wa kazi za kitengo kwa uwazi na usahihi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsibilities Section -->
                <div class="functions-section">
                    <h2>Majukumu ya Kitengo</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Kitengo cha Ununuzi kina majukumu yafuatayo:
                    </p>
                    
                    <div class="functions-list">
                        <!-- Responsibility 1 -->
                        <div class="function-item">
                            <div class="function-number">1</div>
                            <div class="function-content">
                                <div class="function-title">Kufanya Manunuzi Yote Ndani ya Afisi</div>
                                <p class="function-description">
                                    Kufanya manunuzi yote ya vifaa na huduma zinazohitajika ndani ya Afisi ya DPP.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="function-item">
                            <div class="function-number">2</div>
                            <div class="function-content">
                                <div class="function-title">Usimamizi wa Vifaa Chakavu</div>
                                <p class="function-description">
                                    Kusimamia na kutekeleza shughuli zote zinazohusiana na manunuzi na uondoshaji 
                                    wa vifaa chakavu vya Afisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="function-item">
                            <div class="function-number">3</div>
                            <div class="function-content">
                                <div class="function-title">Kusaidia Utekelezaji wa Majukumu ya Bodi ya Zabuni</div>
                                <p class="function-description">
                                    Kusaidia utekelezaji wa majukumu ya Bodi ya Zabuni kama vile kutayarisha 
                                    matangazo ya zabuni na kutayarisha nyaraka za zabuni.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="function-item">
                            <div class="function-number">4</div>
                            <div class="function-content">
                                <div class="function-title">Kutekeleza Maamuzi ya Bodi ya Zabuni</div>
                                <p class="function-description">
                                    Kutekeleza maamuzi ya Bodi ya Zabuni kwa ufanisi na kwa mujibu wa sheria na 
                                    taratibu zilizowekwa.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="function-item">
                            <div class="function-number">5</div>
                            <div class="function-content">
                                <div class="function-title">Huduma za Sekretarieti ya Bodi ya Zabuni</div>
                                <p class="function-description">
                                    Kutoa huduma za Sekretarieti ya Bodi ya Zabuni, kama vile kuitisha vikao, 
                                    kuandaa kumbukumbu na kutoa ushauri.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="function-item">
                            <div class="function-number">6</div>
                            <div class="function-content">
                                <div class="function-title">Kuandaa Mpango wa Manunuzi wa Mwaka</div>
                                <p class="function-description">
                                    Kuandaa Mpango wa Manunuzi wa Afisi wa Mwaka kwa mujibu ya mahitaji na bajeti 
                                    iliyokusanywa.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="function-item">
                            <div class="function-number">7</div>
                            <div class="function-content">
                                <div class="function-title">Kupanga Shughuli za Manunuzi</div>
                                <p class="function-description">
                                    Kupanga shughuli za manunuzi kwa utaratibu na kuhakikisha ushirikiano na 
                                    idara mbalimbali ndani ya Afisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="function-item">
                            <div class="function-number">8</div>
                            <div class="function-content">
                                <div class="function-title">Kuandaa Taarifa ya Mahitaji</div>
                                <p class="function-description">
                                    Kuandaa taarifa ya mahitaji ya manunuzi ya vifaa na huduma kwa Afisi 
                                    kulingana na mahitaji yaliyoainishwa.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 9 -->
                        <div class="function-item">
                            <div class="function-number">9</div>
                            <div class="function-content">
                                <div class="function-title">Kuratibu na Kutunza Kumbukumbu</div>
                                <p class="function-description">
                                    Kuratibu na kutunza kumbukumbu zinazohusiana na manunuzi na uondoshaji wa 
                                    vifaa chakavu ndani ya Afisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 10 -->
                        <div class="function-item">
                            <div class="function-number">10</div>
                            <div class="function-content">
                                <div class="function-title">Kutoa Ushauri Kuhusiana na Manunuzi</div>
                                <p class="function-description">
                                    Kutoa ushauri kuhusiana na manunuzi yanayofanyika ndani ya Afisi kwa 
                                    idara na watumishi mbalimbali.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 11 -->
                        <div class="function-item">
                            <div class="function-number">11</div>
                            <div class="function-content">
                                <div class="function-title">Kuandaa Ripoti ya Utekelezaji wa Kazi</div>
                                <p class="function-description">
                                    Kuandaa ripoti ya utekelezaji wa kazi za kitengo kwa ajili ya uwazi na 
                                    uchambuzi wa utendaji.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="important-note">
                    <h3>Umuhimu wa Kitengo cha Ununuzi</h3>
                    <p>
                        Kitengo cha Ununuzi kina jukumu muhimu katika kuhakikisha uendeshaji bora wa Afisi ya DPP. 
                        Kupitia shughuli zake za ununuzi na ugavi, kitengo hiki kinahakikisha kuwa Afisi ina vifaa, 
                        huduma na rasilimali muhimu zinazohitajika kwa utekelezaji wa majukumu yake ya kimsingi. 
                        Uwazi, uadilifu na ufanisi katika mchakato wa ununuzi ni muhimu kwa ajili ya matumizi bora 
                        ya fedha za umma na kujenga imani ya umma katika utendaji wa Afisi. Zaidi ya haye, kitengo 
                        hiki kinachangia kwa kiasi kikubwa katika ustawi wa watumishi wa Afisi kupatia upatikanaji 
                        wa vifaa na huduma muhimu kwa ajili ya utendaji wao wa kila siku.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>