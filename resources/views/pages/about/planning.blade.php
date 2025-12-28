<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idara ya Mipango Uendeshaji na Rasilimali Watu - DPP Zanzibar</title>
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

        /* HERO BANNER - Same as About Us page */
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

        /* Digital Pattern Overlay - Same as About Us page */
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

        /* Mandate Section */
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

        /* Functions Section */
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
            <!-- SVG Pattern: Dots, Lines, Locks - EXACTLY LIKE MANDATE PAGE -->
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

                <!-- Lock Icons - EXACTLY LIKE MANDATE PAGE -->
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
            <h1 class="hero-title">IDARA YA MIPANGO UENDESHAJI NA RASILIMALI WATU</h1>
            <p class="hero-subtitle">Uongozi wa Utawala, Uratibu wa Mipango na Usimamizi wa Rasilimali Watu</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Idara ya Mipango Uendeshaji na Rasilimali Watu</h1>
                    <p class="intro-text">
                        Idara hii inahusika na jukumu la kusimamia na kuratibu shughuli za Utawala na Mipango katika 
                        taasisi ili kuiwezesha kutekeleza majukumu yake kwa ufanisi na usahihi.
                    </p>
                </div>

                <!-- Overview Section -->
                <div class="mandate-section">
                    <h2>Utangulizi wa Idara</h2>
                    <p>
                        Idara ya Mipango Uendeshaji na Rasilimali Watu ina jukumu muhimu la kusimamia na kuratibu 
                        shughuli za Utawala na Mipango katika taasisi ili kuiwezesha kutekeleza majukumu yake kwa ufanisi. 
                        Idara hii imegawanyika katika divisheni tatu kuu ambazo zinashughulikia nyanja mbalimbali za 
                        utawala, mipango, na usimamizi wa rasilimali watu.
                    </p>
                    <p>
                        Lengo kuu la idara hii ni kuhakikisha usimamizi bora wa rasilimali, ufanisi katika utekelezaji wa 
                        mipango, na utawala imara unaoendana na malengo ya taasisi.
                    </p>
                </div>

                <!-- Divisions Section -->
                <div class="functions-section">
                    <h2>Divisheni za Idara</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Idara ya Mipango Uendeshaji na Rasilimali Watu imegawanyika katika divisheni tatu kuu 
                        zilizoundwa kwa usahihi ili kushughulikia nyanja maalum za utendaji:
                    </p>
                    
                    <div class="functions-list">
                        <!-- Division 1 -->
                        <div class="function-item">
                            <div class="function-number">1</div>
                            <div class="function-content">
                                <div class="function-title">Divisheni ya Mipango na Takwimu</div>
                                <p class="function-description">
                                    Divisheni hii inahusika na uandaaji, ufuatiliaji, na tathmini ya mipango ya 
                                    taasisi pamoja na ukusanyaji, uchambuzi, na utoaji wa takwimu muhimu za utendaji.
                                </p>
                            </div>
                        </div>

                        <!-- Division 2 -->
                        <div class="function-item">
                            <div class="function-number">2</div>
                            <div class="function-content">
                                <div class="function-title">Divisheni ya Utawala na Rasilimali Watu</div>
                                <p class="function-description">
                                    Divisheni hii inashughulikia masuala yote ya utawala, usimamizi wa rasilimali watu, 
                                    stahiki za wafanyikazi, na uendeshaji wa shughuli za kitaasisi kwa ujumla.
                                </p>
                            </div>
                        </div>

                        <!-- Division 3 -->
                        <div class="function-item">
                            <div class="function-number">3</div>
                            <div class="function-content">
                                <div class="function-title">Divisheni ya Utunzaji Kumbukumbu na Nyaraka</div>
                                <p class="function-description">
                                    Divisheni hii inalenga uhifadhi bora, utunzaji, na usimamizi wa kumbukumbu na 
                                    nyaraka muhimu za taasisi kwa mujibu wa kanuni za utawala na usimamizi wa taarifa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsibilities Section -->
                <div class="functions-section">
                    <h2>Majukumu ya Idara</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Idara ya Mipango Uendeshaji na Rasilimali Watu ina majukumu yafuatayo:
                    </p>
                    
                    <div class="functions-list">
                        <!-- Responsibility 1 -->
                        <div class="function-item">
                            <div class="function-number">1</div>
                            <div class="function-content">
                                <div class="function-title">Huduma za kiutawala na mipango</div>
                                <p class="function-description">
                                    Kutoa huduma za kiutawala na mipango katika Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="function-item">
                            <div class="function-number">2</div>
                            <div class="function-content">
                                <div class="function-title">Masuala ya Rasilimali Watu</div>
                                <p class="function-description">
                                    Kushughulikia masuala mbalimbali ya Rasilimali Watu na stahiki zao kiujumla.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="function-item">
                            <div class="function-number">3</div>
                            <div class="function-content">
                                <div class="function-title">Usimamizi wa vifaa</div>
                                <p class="function-description">
                                    Kusimamia matumizi na matunzo ya vifaa vya taasisi ikiwemo usafiri, magari, mitambo, samani, vifaa vya kuandikia na vifaa vya mawasiliano.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="function-item">
                            <div class="function-number">4</div>
                            <div class="function-content">
                                <div class="function-title">Usimamizi wa majengo na mali</div>
                                <p class="function-description">
                                    Kusimamia majengo na mali nyengine zisizohamishika.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="function-item">
                            <div class="function-number">5</div>
                            <div class="function-content">
                                <div class="function-title">Uendeshaji wa maghala</div>
                                <p class="function-description">
                                    Kusimamia shughuli za kiufundi na uendeshaji wa maghala ya Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="function-item">
                            <div class="function-number">6</div>
                            <div class="function-content">
                                <div class="function-title">Uandaaji na utekelezaji wa kazi</div>
                                <p class="function-description">
                                    Kuratibu uandaaji, utekelezaji na kufanya ufuatiliaji na tathmini ya kazi za Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="function-item">
                            <div class="function-number">7</div>
                            <div class="function-content">
                                <div class="function-title">Mfumo wa ufuatiliaji na tathmini</div>
                                <p class="function-description">
                                    Kuandaa mfumo wa ufuatiliaji na tathmini pamoja na kutoa ushauri wa kitaalam katika utekelezaji wake.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="function-item">
                            <div class="function-number">8</div>
                            <div class="function-content">
                                <div class="function-title">Muongozo wa mipango</div>
                                <p class="function-description">
                                    Kutoa muongozo na utaalamu wakati wa uandaaji wa mipango, viashiria vya utekelezaji (key performance indicators) pamoja na taarifa za utekelezaji wa kazi za Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 9 -->
                        <div class="function-item">
                            <div class="function-number">9</div>
                            <div class="function-content">
                                <div class="function-title">Mfumo wa ukusanyaji wa taarifa</div>
                                <p class="function-description">
                                    Kuandaa mfumo wa ukusanyaji wa taarifa na ripoti za utekelezaji.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 10 -->
                        <div class="function-item">
                            <div class="function-number">10</div>
                            <div class="function-content">
                                <div class="function-title">Ukusanyaji na uchambuzi wa taarifa</div>
                                <p class="function-description">
                                    Kukusanya taarifa mbalimbali, kufanya uchambuzi na kutambua masuala mbalimbali yanayopaswa kujumuishwa katika takwimu za Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 11 -->
                        <div class="function-item">
                            <div class="function-number">11</div>
                            <div class="function-content">
                                <div class="function-title">Tathmini ya utekelezaji</div>
                                <p class="function-description">
                                    Kufanya tathmini ya utekelezaji wa mipango na programu mbalimbali na kutambua matokeo yake.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 12 -->
                        <div class="function-item">
                            <div class="function-number">12</div>
                            <div class="function-content">
                                <div class="function-title">Viwango vya ubora</div>
                                <p class="function-description">
                                    Kuratibu viwango vya Ubora kulingana na kazi ya Idara husika.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 13 -->
                        <div class="function-item">
                            <div class="function-number">13</div>
                            <div class="function-content">
                                <div class="function-title">Uhifadhi wa kumbukumbu</div>
                                <p class="function-description">
                                    Kuandaa mfumo bora wa uhifadhi na utunzaji kumbukumbu na nyaraka.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 14 -->
                        <div class="function-item">
                            <div class="function-number">14</div>
                            <div class="function-content">
                                <div class="function-title">Uandaaji wa bajeti</div>
                                <p class="function-description">
                                    Kusimamia uandaaji wa Bajeti na Mpango Kazi kwa kila mwaka wa Fedha.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 15 -->
                        <div class="function-item">
                            <div class="function-number">15</div>
                            <div class="function-content">
                                <div class="function-title">Ufuatiliaji wa mpango kazi</div>
                                <p class="function-description">
                                    Kufuatilia utekelezaji wa Mpango Kazi wa Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 16 -->
                        <div class="function-item">
                            <div class="function-number">16</div>
                            <div class="function-content">
                                <div class="function-title">Programu na miradi ya maendeleo</div>
                                <p class="function-description">
                                    Kuibua na kupendekeza Programu na Miradi ya utekelezaji ya maendeleo.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 17 -->
                        <div class="function-item">
                            <div class="function-number">17</div>
                            <div class="function-content">
                                <div class="function-title">Utaalamu wa mipango na viashiria</div>
                                <p class="function-description">
                                    Kutoa mwongozo na utaalamu wakati wa uandaaji wa mipango, viashiria vya utekelezaji (key performance indicators) pamoja na taarifa za utekelezaji wa kazi za Taasisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 18 -->
                        <div class="function-item">
                            <div class="function-number">18</div>
                            <div class="function-content">
                                <div class="function-title">Uchambuzi wa takwimu</div>
                                <p class="function-description">
                                    Kukusanya taarifa mbalimbali, kufanya uchambuzi, na kutambua masuala mbalimbali yanayopaswa kujumuishwa katika takwimu za Taasisi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Important Note -->
                <div class="important-note">
                    <h3>Ujumbe Muhimu</h3>
                    <p>
                        Idara ya Mipango Uendeshaji na Rasilimali Watu inafanya kazi kwa kushirikiana na idara zote 
                        za taasisi kuhakikisha usimamizi bora wa rasilimali, utekelezaji wa mipango kwa ufanisi, na 
                        utawala imara unaowezesha taasisi kutimiza malengo yake ya kimkakati.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>