<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idara ya Makosa Yanayovuka Mipaka na Uhujumu Uchumi - DPP Zanzibar</title>
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

        /* Department Section - Using same style as mandate-section */
        .department-section {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .department-section h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .department-section p {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Divisions Section - NOW USING function-item STYLE LIKE THE PLANNING PAGE */
        .divisions-section {
            margin-bottom: 40px;
        }

        .divisions-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
        }

        .divisions-list {
            display: grid;
            gap: 20px;
        }

        .division-item {
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

        .division-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #0056b3;
        }

        .division-number {
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

        .division-content {
            flex-grow: 1;
        }

        .division-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #003366;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .division-description {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Responsibilities Section - Using same style as functions-section */
        .responsibilities-section {
            margin-bottom: 40px;
        }

        .responsibilities-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
        }

        .responsibilities-list {
            display: grid;
            gap: 20px;
        }

        .responsibility-item {
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

        .responsibility-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #0056b3;
        }

        .responsibility-number {
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

        .responsibility-content {
            flex-grow: 1;
        }

        .responsibility-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 8px;
        }

        .responsibility-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }

        /* Important Note Section - Using same style as important-note */
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

            .division-item,
            .responsibility-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .division-number,
            .responsibility-number {
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

            .department-section {
                padding: 20px;
            }

            .division-item,
            .responsibility-item {
                padding: 15px;
            }

            .division-title {
                font-size: 1.2rem;
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

    <!-- HERO BANNER - Same as Mandate & Functions page -->
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
            <h1 class="hero-title">IDARA YA MAKOSA YANAYOVUKA MIPAKA NA UHUJUMU UCHUMI</h1>
            <p class="hero-subtitle">Kupambana na Makosa ya Kimataifa na Uchumi</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Idara ya Makosa Yanayovuka Mipaka na Uhujumu Uchumi</h1>
                    <p class="intro-text">
                        Idara hii inahusika na usimamizi na uendeshaji wa mashtaka yanayohusiana na rushwa, uhujumu uchumi, 
                        utakasaji wa fedha haramu, dawa za kulevya, uhalifu wa kimtandao na makosa yanayovuka mipaka 
                        ili kuhakikisha haki na utulivu wa kiuchumi katika Zanzibar.
                    </p>
                </div>

                <!-- Department Overview Section -->
                <div class="department-section">
                    <h2>Utangulizi wa Idara</h2>
                    <p>
                        Idara hii itahusika na Usimamizi na uendeshaji wa mashtaka katika makosa yanayohusiana na rushwa, 
                        uhujumu uchumi, utakasaji wa fedha haramu, dawa za kulevya, uhalifu wa kimtandao na makosa yanayovuka 
                        mipaka.
                    </p>
                    <p>
                        Idara hii itakuwa na Divisheni mbili (2) ambazo ni:
                    </p>
                    <ul style="margin: 15px 0 15px 20px; color: #444; line-height: 1.8;">
                        <li><strong>Divisheni ya Rushwa, Uhujumu Uchumi na Utakatishaji Fedha Haramu</strong></li>
                        <li><strong>Divisheni ya Makosa Yanayovuka Mipaka, Dawa za Kulevya na Uhalifu wa Mtandao</strong></li>
                    </ul>
                </div>

                <!-- Divisions Section - UPDATED TO MATCH PLANNING PAGE STYLE -->
                <div class="divisions-section">
                    <h2>Divisheni za Idara</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Idara hii imepangwa katika divisheni mbili maalumu, ambazo kila moja inalenga aina maalum za makosa:
                    </p>
                    
                    <div class="divisions-list">
                        <!-- Division 1 -->
                        <div class="division-item">
                            <div class="division-number">1</div>
                            <div class="division-content">
                                <div class="division-title">Divisheni ya Rushwa, Uhujumu Uchumi na Utakatishaji Fedha Haramu</div>
                                <p class="division-description">
                                    Divisheni hii inashughulikia kesi zote zinazohusiana na rushwa, makosa ya kiuchumi, 
                                    na utakatishaji wa fedha haramu. Inalenga kulinda uadilifu wa kiuchumi wa Zanzibar 
                                    kwa kushtaki makosa ya kifedha na kurejesha mali zilizopatikana kwa njia haramu.
                                </p>
                                <p>
                                    <strong>Maeneo ya Mkusanyiko:</strong> Rushwa, wizi wa fedha za umma, udanganyifu, 
                                    ukiukaji wa kodi, uhujumu uchumi, na mipango ya kutakasa fedha haramu.
                                </p>
                            </div>
                        </div>

                        <!-- Division 2 -->
                        <div class="division-item">
                            <div class="division-number">2</div>
                            <div class="division-content">
                                <div class="division-title">Divisheni ya Makosa Yanayovuka Mipaka, Dawa za Kulevya na Uhalifu wa Mtandao</div>
                                <p class="division-description">
                                    Divisheni hii inashughulikia shughuli za uhalifu zinazovuka mipaka, biashara ya dawa za 
                                    kulevya, na makosa yanayohusiana na mtandao. Inashirikiana na mashirika ya kimataifa 
                                    kupambana na mitandao ya uhalifu ulioandaliwa kupitia mipaka.
                                </p>
                                <p>
                                    <strong>Maeneo ya Mkusanyiko:</strong> Biashara ya kimataifa ya dawa za kulevya, biashara 
                                    ya watu, ufadhili wa ugaidi, udanganyifu wa mtandao, na uhalifu ulioandaliwa kupitia mipaka.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsibilities Section -->
                <div class="responsibilities-section">
                    <h2>Majukumu ya Idara</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Idara hii ina majukumu yafuatayo muhimu katika kupambana na makosa yanayovuka mipaka na makosa ya kiuchumi:
                    </p>
                    
                    <div class="responsibilities-list">
                        <!-- Responsibility 1 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">1</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Usimamizi na Uendeshaji wa Mashtaka</div>
                                <p class="responsibility-description">
                                    Kusimamia Uendeshaji Mashtaka katika makosa yanayohusiana na rushwa, uhujumu uchumi, 
                                    utakatishaji wa fedha haramu, dawa za kulevya, uhalifu wa kimtandao na makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">2</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Uchambuzi wa Kisheria na Uandishi wa Nyaraka</div>
                                <p class="responsibility-description">
                                    Kuzifanyia uchambuzi hukumu au maamuzi madogo ya Mahkama pamoja na kuandaa nyaraka 
                                    zinazohitajika katika hatua ya Rufaa, Mapitio au Marejeo ya Mienendo ya Kesi pale inapohitajika.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">3</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Usimamizi wa Rufaa</div>
                                <p class="responsibility-description">
                                    Kusimamia na Kuendesha Rufaa husika zilizofunguliwa katika Mahkama kuhusiana na makosa 
                                    ya rushwa, uhujumu uchumi, utakatishaji wa fedha haramu, dawa za kulevya, uhalifu wa 
                                    kimtandao na makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">4</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Ushauri kwa Taasisi za Upelelezi</div>
                                <p class="responsibility-description">
                                    Kutoa Maelekezo na Ushauri kwa Taasisi zinazofanya Upelelezi wa makosa ya rushwa, 
                                    uhujumu uchumi, utakatishaji wa fedha haramu, dawa za kulevya, uhalifu wa kimtandao 
                                    na makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">5</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Utekelezaji wa Makubaliano ya Kimataifa</div>
                                <p class="responsibility-description">
                                    Kusimamia utekelezaji wa Mikataba ya Kimataifa na Kikanda pamoja na nyenzo nyengine 
                                    ambazo zinajikita katika kuzuia, kudhibiti pamoja na kuendesha Mashtaka katika makosa 
                                    ya rushwa, uhujumu uchumi, utakatishaji wa fedha haramu, dawa za kulevya, uhalifu wa 
                                    kimtandao na makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">6</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Ukamataji na Urejeshaji wa Mali</div>
                                <p class="responsibility-description">
                                    Kusimamia na kuendesha maombi ya kuzuia, ukamataji na utaifishaji wa Mali za Wahalifu 
                                    zilizopatikana kwa makosa ya rushwa, uhujumu uchumi, utakatishaji wa fedha haramu, dawa 
                                    za kulevya, uhalifu wa Kimtandao na Makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">7</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Ushirikiano wa Kikanda na Kimataifa</div>
                                <p class="responsibility-description">
                                    Kuanzisha na kuendeleza mashirikiano na Taasisi za Kikanda na Kimataifa zinazojikita 
                                    katika kuzuia, kudhibiti makosa yanayohusiana na makosa yanayopangwa na yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">8</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Ushauri wa Kisheria kwa Afisi</div>
                                <p class="responsibility-description">
                                    Kuiwashauri Afisi kuhusiana na makosa ya rushwa, uhujumu uchumi, utakatishaji wa fedha 
                                    haramu, dawa za kulevya, uhalifu wa kimtandao na makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 9 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">9</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Uratibu wa Divisheni</div>
                                <p class="responsibility-description">
                                    Kusimamia na kuratibu utendaji wa Divisheni zilizo chini ya Idara.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 10 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">10</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Utafiti na Uhakiki wa Kisheria</div>
                                <p class="responsibility-description">
                                    Kufanya Utafiti, Mapitio na kuandaa mapendekezo kuhusu ubora na nafasi ya Sheria mbali 
                                    mbali zinazohusiana na makosa ya Rushwa, uhujumu uchumi, utakatishaji wa fedha haramu, 
                                    dawa za kulevya, uhalifu wa kimtandao na Makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 11 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">11</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Elimu ya Kisheria kwa Jamii</div>
                                <p class="responsibility-description">
                                    Kutoa elimu kwa jamii kuhusiana na Sheria za makosa ya Rushwa, uhujumu uchumi, 
                                    utakatishaji wa fedha haramu, dawa za kulevya, uhalifu wa kimtandao na makosa yanayovuka mipaka.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="important-note">
                    <h3>Umuhimu wa Kimkakati</h3>
                    <p>
                        Idara hii ina jukumu muhimu katika kudumisha utulivu wa kiuchumi na usalama wa taifa katika Zanzibar. 
                        Kwa kupambana na makosa yanayovuka mipaka na makosa ya kiuchumi, inalinda mfumo wa kifedha, 
                        huhifadhi rasilimali za umma, na kuhakikisha kwamba Zanzibar inabaki salama kutokana na mitandao ya 
                        uhalifu inayofanya kazi kupitia mipaka. Idara hii inafanya kazi kwa ushirikiano wa karibu na 
                        washirika wa kikanda na kimataifa ili kushughulikia kwa ufanisi asili changamano ya makosa haya.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>