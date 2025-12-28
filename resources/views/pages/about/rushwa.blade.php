<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisheni ya Rushwa Uhujumu Uchumi na Utakatishaji Fedha Haramu - DPP Zanzibar</title>
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

        /* Overview Section */
        .overview-section {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .overview-section h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .overview-section p {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Crimes Grid */
        .crimes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .crime-item {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            text-align: center;
            transition: all 0.3s ease;
        }

        .crime-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-color: #0056b3;
        }

        .crime-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #0056b3;
        }

        .crime-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 10px;
        }

        /* Responsibilities Section */
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
            content: '⚖️';
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .important-note p {
            color: #92400e;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Strategic Objectives */
        .objectives-section {
            margin-top: 40px;
            background: linear-gradient(to right, #f0f9ff, #e6f7ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0ea5e9;
        }

        .objectives-section h3 {
            color: #0369a1;
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .objectives-section ul {
            margin-left: 20px;
            color: #444;
        }

        .objectives-section li {
            margin-bottom: 10px;
            line-height: 1.6;
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

            .crimes-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .responsibility-item {
                flex-direction: column;
                align-items: flex-start;
            }

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

            .overview-section {
                padding: 20px;
            }

            .crimes-grid {
                grid-template-columns: 1fr;
            }

            .responsibility-item {
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
            <h1 class="hero-title">DIVISHENI YA RUSHWA, UHUJUMU UCHUMI NA UTAKATISHAJI FEDHA HARAMU</h1>
            <p class="hero-subtitle">Kupambana na Ufisadi, Uhujumu Uchumi na Biashara ya Fedha Haramu</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Divisheni ya Rushwa, Uhujumu Uchumi na Utakatishaji Fedha Haramu</h1>
                    <p class="intro-text">
                        Divisheni hii ina jukumu muhimu la kukabiliana na aina mbali mbali za uhalifu wa kifedha 
                        na kiuchumi katika Jamhuri ya Muungano wa Tanzania, ikilenga kulinda mifumo ya kiuchumi 
                        na kudumisha uadilifu wa shughuli za kifedha.
                    </p>
                </div>

                <!-- Overview Section -->
                <div class="overview-section">
                    <h2>Utangulizi wa Divisheni</h2>
                    <p>
                        Divisheni ya Rushwa, Uhujumu Uchumi na Utakatishaji Fedha Haramu ni kitengo kinachohusika 
                        na jukumu la kupokea na kuyafanyia kazi kwa haraka majalada ya kesi yote yanayohusiana 
                        na makosa ya rushwa, uhujumu uchumi pamoja na utakatishaji fedha haramu.
                    </p>
                    <p>
                        Divisheni hii inatoa ushauri na mapendekezo kwa Serikali katika kukabiliana na makosa 
                        haya yanayodhuru uchumi na mifumo ya kiuchumi ya nchi. Lengo kuu la divisheni hii ni 
                        kuhakikisha kwamba shughuli za ufisadi, uhujumu uchumi na utakatishaji fedha haramu 
                        zinasimamiwa na kushtakiwa kwa ufanisi.
                    </p>
                    
                    <!-- Crimes Grid -->
                    <h3 style="margin-top: 30px; color: #003366;">Aina za Makosa Yanayoshughulikiwa</h3>
                    <div class="crimes-grid">
                        <div class="crime-item">
                            <div class="crime-icon">💰</div>
                            <div class="crime-title">Rushwa na Ufisadi</div>
                            <p style="font-size: 0.9rem; color: #555;">
                                Utoaji na kupokea rushwa, ufisadi wa umma, na ukiukaji wa kanuni za uadilifu
                            </p>
                        </div>
                        <div class="crime-item">
                            <div class="crime-icon">📉</div>
                            <div class="crime-title">Uhujumu Uchumi</div>
                            <p style="font-size: 0.9rem; color: #555;">
                                Uhalifu unaodhuru mifumo ya kiuchumi, kodi na biashara halali
                            </p>
                        </div>
                        <div class="crime-item">
                            <div class="crime-icon">💸</div>
                            <div class="crime-title">Utakatishaji Fedha Haramu</div>
                            <p style="font-size: 0.9rem; color: #555;">
                                Kusafisha pesa zilizopatikana kwa njia haramu kupitia mifumo ya kifedha
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Responsibilities Section -->
                <div class="responsibilities-section">
                    <h2>Majukumu ya Divisheni</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Divisheni ya Rushwa, Uhujumu Uchumi na Utakatishaji Fedha Haramu ina majukumu yafuatayo 
                        muhimu katika kukabiliana na makosa ya kifedha na kiuchumi:
                    </p>
                    
                    <div class="responsibilities-list">
                        <!-- Responsibility 1 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">1</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Kupokea na Kufanyia Kazi Majalada ya Kesi</div>
                                <p class="responsibility-description">
                                    Kupokea na kuyafanyia kazi majalada ya kesi yanayohusiana na makosa ya rushwa, 
                                    uhujumu uchumi na utakatishaji fedha haramu kwa haraka na ufanisi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">2</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Kushauri Vyombo vya Upelelezi</div>
                                <p class="responsibility-description">
                                    Kushauri na kupendekeza kwa vyombo vya kiupelelezi namna bora ya kupata ushahidi 
                                    wa makosa yanayohusiana na rushwa, uhujumu uchumi na utakatishaji fedha haramu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">3</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Kusimamia na Kuendesha Mashtaka</div>
                                <p class="responsibility-description">
                                    Kusimamia na kuendesha mashtaka kwa makosa yanayohusiana na rushwa, uhujumu uchumi 
                                    na utakatishaji fedha haramu katika vyombo vyote vya mahakama.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">4</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Kuandaa na Kutoa Ripoti</div>
                                <p class="responsibility-description">
                                    Kuandaa na kutoa ripoti ya majalada na kesi zinazohusiana na makosa ya rushwa, 
                                    uhujumu uchumi na utakatishaji fedha haramu kwa vyombo husika.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">5</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Utoaji wa Ushauri na Mapendekezo</div>
                                <p class="responsibility-description">
                                    Kutoa ushauri na mapendekezo ya njia bora ya kukabiliana na makosa ya rushwa, 
                                    uhujumu uchumi na Utakatishaji Fedha Haramu kwa Serikali na taasisi husika.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">6</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Ufuatiliaji wa Utendaji</div>
                                <p class="responsibility-description">
                                    Kufuatilia na kutathmini utendaji wa shughuli za kupambana na ufisadi, uhujumu 
                                    uchumi na utakatishaji fedha haramu katika nchi.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">7</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Ushirikiano na Taasisi</div>
                                <p class="responsibility-description">
                                    Kuanzisha na kuimarisha ushirikiano na taasisi za ndani na za kimataifa zinazoshughulikia 
                                    masuala ya rushwa, uhujumu uchumi na utakatishaji fedha haramu.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">8</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Utafiti na Uchambuzi</div>
                                <p class="responsibility-description">
                                    Kufanya utafiti na uchambuzi wa kina wa mienendo ya uhalifu wa kifedha na kiuchumi 
                                    na kupendekeza kanuni mbadala za kuzuia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Strategic Objectives -->
                <div class="objectives-section">
                    <h3>Malengo ya Kimkakati</h3>
                    <ul>
                        <li>Kuhakikisha usimamizi wa haraka na ufanisi wa kesi zote za rushwa na ufisadi</li>
                        <li>Kujenga uwezo wa kuchunguza na kushtaki kesi changamano za utakatishaji fedha haramu</li>
                        <li>Kutoa ushauri wa kitaalam kwa Serikali juu ya njia bora za kukabiliana na uhalifu wa kiuchumi</li>
                        <li>Kuimarisha ushirikiano na vyombo vya ndani na vya kimataifa vya kupambana na ufisadi</li>
                        <li>Kukuza uwazi na uadilifu katika shughuli za kiuchumi za umma</li>
                        <li>Kuhakikisha utekelezaji wa kanuni na mikataba ya kimataifa ya kupambana na ufisadi</li>
                    </ul>
                </div>

                <!-- Important Note -->
                <div class="important-note">
                    <h3>Umuhimu wa Divisheni</h3>
                    <p>
                        Divisheni ya Rushwa, Uhujumu Uchumi na Utakatishaji Fedha Haramu ina jukumu muhimu katika 
                        kulinda mifumo ya kiuchumi ya nchi. Kwa kukabiliana kwa ufanisi na uhalifu wa kifedha, 
                        divisheni hii inachangia katika kudumisha utulivu wa kiuchumi, kukuza uaminifu wa wafanyabiashara, 
                        na kuhakikisha kwamba rasilimali za umma zinatumika kwa manufaa ya taifa. Divisheni hii 
                        inafanya kazi kwa ushirikiano na taasisi zote husika katika kupambana na uhalifu huu.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>