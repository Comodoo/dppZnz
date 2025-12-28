<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisheni ya Makosa dhidi ya Binadamu - DPP Zanzibar</title>
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

        /* Division Section - Using same style as mandate-section */
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

        /* Crime Types Section - Updated to match blue theme */
        .crime-types-section {
            background: linear-gradient(to right, #e6f2ff, #d9e9ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .crime-types-section h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .crime-types-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .crime-type-item {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .crime-type-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #0056b3;
        }

        .crime-type-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #0056b3, #003366);
        }

        .crime-type-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .crime-type-title::before {
            content: '👥';
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .crime-type-description {
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

            .crime-types-grid {
                grid-template-columns: 1fr;
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

            .crime-types-section {
                padding: 20px;
            }

            .crime-type-item {
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

    <!-- HERO BANNER - Updated to match previous page -->
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

                <!-- Lock Icons - SAME AS PREVIOUS PAGES -->
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
            <h1 class="hero-title">DIVISHENI YA MAKOSA DHIDI YA BINADAMU</h1>
            <p class="hero-subtitle">Ulinzi wa Haki za Binadamu na Kupambana na Ukatili</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Divisheni ya Makosa dhidi ya Binadamu</h1>
                    <p class="intro-text">
                        Divisheni hii ina jukumu muhimu la kusimamia na kuendesha majalada ya kesi yanayohusiana 
                        na makosa dhidi ya Binadamu, kuhakikisha kuwa haki za kila mtu zinadumishwa na kwamba 
                        uhalifu dhidi ya binadamu unashughulikiwa kwa uadilifu na ufanisi.
                    </p>
                </div>

                <!-- Division Overview Section -->
                <div class="mandate-section">
                    <h2>Utangulizi wa Divisheni</h2>
                    <p>
                        Divisheni ya Makosa dhidi ya Binadamu ina jukumu la kusimamia na kuendesha majalada ya 
                        kesi yanayohusiana na makosa dhidi ya Binadamu. Divisheni hii inashughulikia aina mbalimbali 
                        za uhalifu unaodhuru haki, usalama na maisha ya binadamu, kuhakikisha kwamba wahalifu 
                        wanafikishwa mbele ya sheria.
                    </p>
                    <p>
                        Lengo kuu la divisheni hii ni kulinda usalama wa raia, kuhakikisha uadilifu katika mfumo wa 
                        haki, na kutoa haki kwa wahasiriwa wa uhalifu dhidi ya binadamu.
                    </p>
                </div>

                <!-- Crime Types Section - Updated with blue theme -->
                <div class="crime-types-section">
                    <h2>Aina za Makosa Yanayoshughulikiwa</h2>
                    <p style="margin-bottom: 15px; color: #444;">
                        Divisheni hii inashughulikia aina zifuatazo za makosa dhidi ya binadamu:
                    </p>
                    
                    <div class="crime-types-grid">
                        <!-- Crime Type 1 -->
                        <div class="crime-type-item">
                            <div class="crime-type-title">Mauaji na Kupigana</div>
                            <p class="crime-type-description">
                                Kesi zote za mauaji, kupigana na majeraha makubwa yanayopelekea kifo au kudhurika kwa mwili.
                            </p>
                        </div>

                        <!-- Crime Type 2 -->
                        <div class="crime-type-item">
                            <div class="crime-type-title">Ubakaji na Udhalilishaji</div>
                            <p class="crime-type-description">
                                Makosa ya kingono kama vile ubakaji, udhalilishaji, na shughuli zingine za kijinsia 
                                zisizokubalika kisheria.
                            </p>
                        </div>

                        <!-- Crime Type 3 -->
                        <div class="crime-type-item">
                            <div class="crime-type-title">Ukatili wa Kaya</div>
                            <p class="crime-type-description">
                                Uhalifu unaotendwa ndani ya familia au kati ya watu walio na uhusiano wa karibu.
                            </p>
                        </div>

                        <!-- Crime Type 4 -->
                        <div class="crime-type-item">
                            <div class="crime-type-title">Ujambazi na Wizi</div>
                            <p class="crime-type-description">
                                Kesi za wizi na unyang'anyi wa mali kwa kutumia nguvu au vitisho.
                            </p>
                        </div>

                        <!-- Crime Type 5 -->
                        <div class="crime-type-item">
                            <div class="crime-type-title">Kutoweka kwa Watu</div>
                            <p class="crime-type-description">
                                Kesi za watu kukosekana bila maelezo, hasa pale ambapo kuna tuhuma za uhalifu.
                            </p>
                        </div>

                        <!-- Crime Type 6 -->
                        <div class="crime-type-item">
                            <div class="crime-type-title">Udhalilishaji wa Watoto</div>
                            <p class="crime-type-description">
                                Makosa yote yanayohusiana na udhalilishaji, utumiaji na unyanyasaji wa watoto.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Responsibilities Section -->
                <div class="functions-section">
                    <h2>Majukumu ya Divisheni</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Divisheni ya Makosa dhidi ya Binadamu ina majukumu yafuatayo:
                    </p>
                    
                    <div class="functions-list">
                        <!-- Responsibility 1 -->
                        <div class="function-item">
                            <div class="function-number">1</div>
                            <div class="function-content">
                                <div class="function-title">Usimamizi na Uendeshaji wa Kesi</div>
                                <p class="function-description">
                                    Kusimamia na kuendesha kesi za Makosa dhidi ya binadamu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="function-item">
                            <div class="function-number">2</div>
                            <div class="function-content">
                                <div class="function-title">Ukaguzi wa Majalada</div>
                                <p class="function-description">
                                    Kuyapitia majalada ya kesi za makosa ya dhidi ya binadamu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="function-item">
                            <div class="function-number">3</div>
                            <div class="function-content">
                                <div class="function-title">Ushauri wa Kimaendeleo</div>
                                <p class="function-description">
                                    Kutoa ushauri na mapendekezo kwa Idara juu ya namna bora katika kukabiliana na makosa dhidi ya binadamu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="function-item">
                            <div class="function-number">4</div>
                            <div class="function-content">
                                <div class="function-title">Uratibu wa Upelelezi</div>
                                <p class="function-description">
                                    Kusimamia na kuratibu upelelezi wa makosa dhidi ya binadamu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="function-item">
                            <div class="function-number">5</div>
                            <div class="function-content">
                                <div class="function-title">Uandaji wa Ripoti za Majalada</div>
                                <p class="function-description">
                                    Kuandaa ripoti za majalada na kesi za makosa ya dhidi ya binadamu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="function-item">
                            <div class="function-number">6</div>
                            <div class="function-content">
                                <div class="function-title">Usimamiji wa Kesi za Udhalilishaji</div>
                                <p class="function-description">
                                    Kusimamia na kuendesha kesi za makosa ya udhalilishaji.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="function-item">
                            <div class="function-number">7</div>
                            <div class="function-content">
                                <div class="function-title">Ushauri kwa Udhalilishaji</div>
                                <p class="function-description">
                                    Kutoa ushauri na mapendekezo kwa Idara juu ya namna bora katika kukabiliana na makosa ya udhalilishaji.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="function-item">
                            <div class="function-number">8</div>
                            <div class="function-content">
                                <div class="function-title">Uratibu wa Upelelezi wa Udhalilishaji</div>
                                <p class="function-description">
                                    Kusimamia na kuratibu upelelezi wa makosa ya udhalilishaji.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 9 -->
                        <div class="function-item">
                            <div class="function-number">9</div>
                            <div class="function-content">
                                <div class="function-title">Uimarishaji wa Mfumo wa Kupambana na Udhalilishaji</div>
                                <p class="function-description">
                                    Kuendeleza na kuimarisha mfumo wa kupambana na makosa ya udhalilishaji nchini.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 10 -->
                        <div class="function-item">
                            <div class="function-number">10</div>
                            <div class="function-content">
                                <div class="function-title">Uandaji wa Ripoti za Udhalilishaji</div>
                                <p class="function-description">
                                    Kuandaa ripoti za majalada na kesi za makosa ya udhalilishaji.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="important-note">
                    <h3>Umuhimu wa Ulinzi wa Haki za Binadamu</h3>
                    <p>
                        Divisheni ya Makosa dhidi ya Binadamu ina jukumu muhimu katika kuhakikisha kwamba haki za msingi za 
                        binadamu zinadumishwa katika jamii. Kwa kushughulikia makosa dhidi ya binadamu kwa uadilifu na 
                        ufanisi, divisheni hii inachangia katika kujenga jamii salama, yenye haki ambapo kila mtu anaweza 
                        kuishi kwa usalama na heshima. Divisheni hii inafanya kazi kwa ushirikiano wa karibu na taasisi 
                        nyingine za haki, wadau wa jamii, na mashirika ya kiraia ili kuhakikisha ulinzi kamili wa haki 
                        za binadamu.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>