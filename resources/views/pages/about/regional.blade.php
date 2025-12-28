<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regional Prosecutions Offices - DPP Zanzibar</title>
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
            max-width: 900px;
            margin: 0 auto;
        }

        /* Offices Overview Section */
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

        /* Regions Grid Section */
        .regions-section {
            margin-bottom: 40px;
        }

        .regions-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
        }

        .regions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .region-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .region-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: #0056b3;
        }

        .region-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, #0056b3, #003366);
        }

        .region-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .region-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: #0056b3;
        }

        .region-title {
            font-size: 1.3rem;
            color: #003366;
            font-weight: 700;
            margin: 0;
        }

        .region-description {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .region-features {
            list-style: none;
            padding-left: 0;
        }

        .region-features li {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
            font-size: 0.95rem;
            color: #666;
        }

        .region-features li::before {
            content: '✓';
            color: #28a745;
            font-weight: bold;
            margin-right: 10px;
        }

        /* Contact Info Section */
        .contact-section {
            background: linear-gradient(to right, #e6f7ff, #d6f0ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-top: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .contact-section h3 {
            color: #003366;
            margin-bottom: 15px;
            font-size: 1.4rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .contact-section h3::before {
            content: '📞';
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 15px;
        }

        .contact-item {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }

        .contact-item h4 {
            color: #0056b3;
            font-size: 1rem;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .contact-item p {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
            margin: 0;
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

            .responsibility-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .responsibility-number {
                margin-bottom: 15px;
                margin-right: 0;
            }

            .regions-grid {
                grid-template-columns: 1fr;
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

            .responsibility-item {
                padding: 15px;
            }

            .region-card {
                padding: 20px;
            }

            .contact-info {
                grid-template-columns: 1fr;
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
            <h1 class="hero-title">REGIONAL PROSECUTIONS OFFICES</h1>
            <p class="hero-subtitle">Extending Justice Services Across All Regions of Zanzibar</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Regional Prosecutions Offices</h1>
                    <p class="intro-text">
                        The Regional Prosecutions Offices are responsible to the Director of Public Prosecutions and 
                        have the role of managing criminal cases heard by Regional and District Courts, preparing 
                        Appeals from Regional Courts and submitting them to the Coordination Division of the High 
                        Court and Court of Appeal.
                    </p>
                </div>

                <!-- Overview Section -->
                <div class="overview-section">
                    <h2>Overview</h2>
                    <p>
                        The Regional Prosecutions Offices are decentralized units of the DPP Office strategically 
                        located across Zanzibar to ensure accessible and efficient prosecution services at the 
                        regional level.
                    </p>
                    <p>
                        These offices serve as the primary interface between the DPP Office and local communities, 
                        ensuring that justice is administered fairly and efficiently throughout all regions of 
                        Zanzibar.
                    </p>
                </div>

                <!-- Responsibilities Section -->
                <div class="responsibilities-section">
                    <h2>Key Responsibilities</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        Regional Prosecutions Offices have the following key responsibilities:
                    </p>
                    
                    <div class="responsibilities-list">
                        <!-- Responsibility 1 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">1</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Manage Criminal Cases</div>
                                <p class="responsibility-description">
                                    Manage criminal cases heard by Regional and District Courts.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">2</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Supervise and Coordinate Prosecution Activities</div>
                                <p class="responsibility-description">
                                    Supervise and coordinate prosecution activities in the respective region.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">3</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Prepare and Handle Appeals</div>
                                <p class="responsibility-description">
                                    Prepare and handle Appeals in District and Regional Courts.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 4 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">4</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Prepare Appeals for Higher Courts</div>
                                <p class="responsibility-description">
                                    Prepare Appeals from Regional Courts and submit them to the relevant division 
                                    according to the specific case.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 5 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">5</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Monitor and Evaluate Reported Cases</div>
                                <p class="responsibility-description">
                                    Monitor and evaluate reported errors and opened Prosecutions in District and 
                                    Regional Courts.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 6 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">6</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Analyze Court Judgments</div>
                                <p class="responsibility-description">
                                    Analyze Judgments issued by District and Regional Courts and advise appropriate 
                                    actions to the Director of Public Prosecutions and Department Heads.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 7 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">7</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Collect Case Statistics</div>
                                <p class="responsibility-description">
                                    Collect statistics of cases handled in the respective region.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 8 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">8</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Conduct Prosecution Work with Departments</div>
                                <p class="responsibility-description">
                                    Conduct prosecution work in collaboration with relevant departments.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 9 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">9</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Handle Citizen Complaints</div>
                                <p class="responsibility-description">
                                    Handle citizen complaints in the respective region.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 10 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">10</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Provide Criminal Justice Education</div>
                                <p class="responsibility-description">
                                    Provide education regarding Criminal Justice in the respective region.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 11 -->
                        <div class="responsibility-item">
                            <div class="responsibility-number">11</div>
                            <div class="responsibility-content">
                                <div class="responsibility-title">Prepare Regional Prosecution Reports</div>
                                <p class="responsibility-description">
                                    Prepare Regional Prosecution Reports and submit them to the Director of 
                                    Public Prosecutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regions Grid Section -->
                {{--  <div class="regions-section">
                    <h2>Regional Offices Coverage</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        The DPP Office has established Regional Prosecutions Offices in key locations across Zanzibar:
                    </p>
                    
                    <div class="regions-grid">
                        <!-- Urban-West Region -->
                        <div class="region-card">
                            <div class="region-header">
                                <div class="region-icon">🏙️</div>
                                <h3 class="region-title">Urban-West Region</h3>
                            </div>
                            <p class="region-description">
                                Serving the urban and western districts including Zanzibar City and surrounding areas.
                            </p>
                            <ul class="region-features">
                                <li>Handles major urban criminal cases</li>
                                <li>Coordinates with central police departments</li>
                                <li>Specialized in commercial crimes</li>
                                <li>High case volume management</li>
                            </ul>
                        </div>

                        <!-- North Region -->
                        <div class="region-card">
                            <div class="region-header">
                                <div class="region-icon">🌊</div>
                                <h3 class="region-title">North Region</h3>
                            </div>
                            <p class="region-description">
                                Covering the northern districts including Nungwi, Kendwa, and coastal communities.
                            </p>
                            <ul class="region-features">
                                <li>Tourism-related cases</li>
                                <li>Maritime and coastal crimes</li>
                                <li>Community justice initiatives</li>
                                <li>Fisheries regulation enforcement</li>
                            </ul>
                        </div>

                        <!-- South Region -->
                        <div class="region-card">
                            <div class="region-header">
                                <div class="region-icon">🌴</div>
                                <h3 class="region-title">South Region</h3>
                            </div>
                            <p class="region-description">
                                Serving the southern districts including Makunduchi, Kizimkazi, and rural communities.
                            </p>
                            <ul class="region-features">
                                <li>Agricultural crime cases</li>
                                <li>Land dispute prosecutions</li>
                                <li>Traditional community mediation</li>
                                <li>Resource protection cases</li>
                            </ul>
                        </div>

                        <!-- Pemba Region -->
                        <div class="region-card">
                            <div class="region-header">
                                <div class="region-icon">🏝️</div>
                                <h3 class="region-title">Pemba Region</h3>
                            </div>
                            <p class="region-description">
                                Independent coordination office serving both North and South Pemba districts.
                            </p>
                            <ul class="region-features">
                                <li>Autonomous regional coordination</li>
                                <li>Local case management</li>
                                <li>Cross-island collaboration</li>
                                <li>Special Pemba Circuit Court cases</li>
                            </ul>
                        </div>
                    </div>
                </div>  --}}

                <!-- Contact Information -->
                {{--  <div class="contact-section">
                    <h3>Contact Regional Offices</h3>
                    <p style="color: #555; margin-bottom: 15px;">
                        For inquiries related to regional prosecution matters, please contact the respective 
                        regional office or the central coordination unit.
                    </p>
                    
                    <div class="contact-info">
                        <div class="contact-item">
                            <h4>Central Coordination</h4>
                            <p>Office of the Director of Public Prosecutions<br>
                            Zanzibar City<br>
                            Email: dpp@zanzibar.go.tz<br>
                            Phone: +255 24 223 0123</p>
                        </div>
                        
                        <div class="contact-item">
                            <h4>Regional Support Desk</h4>
                            <p>For general regional office inquiries<br>
                            Email: regional@dppzanzibar.go.tz<br>
                            Phone: +255 24 223 0456<br>
                            Hours: 8:00 AM - 4:00 PM</p>
                        </div>
                        
                        <div class="contact-item">
                            <h4>Emergency Legal Assistance</h4>
                            <p>24/7 Emergency Line<br>
                            Phone: +255 777 123 456<br>
                            For urgent prosecution matters<br>
                            Available all regions</p>
                        </div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>