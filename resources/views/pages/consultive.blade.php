<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Consultative Committee - DPP Zanzibar</title>
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

        /* HERO BANNER - Same as other pages */
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

        /* Committee Overview Section */
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

        /* Members Section */
        .members-section {
            background: linear-gradient(to right, #e6f2ff, #d9e9ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .members-section h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .members-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .member-card {
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-color: #0056b3;
        }

        .member-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #0056b3, #003366);
        }

        .member-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .member-icon {
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

        .member-title {
            font-size: 1.4rem;
            color: #003366;
            font-weight: 700;
            line-height: 1.3;
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

        /* Additional Members Section */
        .additional-members {
            background: linear-gradient(to right, #fff8e6, #fff3d9);
            padding: 20px;
            border-radius: 8px;
            border-left: 5px solid #f59e0b;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .additional-members h3 {
            color: #d97706;
            margin-bottom: 15px;
            font-size: 1.2rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .additional-members h3::before {
            content: '👥';
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .additional-members ul {
            list-style-type: none;
            padding-left: 20px;
        }

        .additional-members li {
            color: #92400e;
            line-height: 1.6;
            margin-bottom: 8px;
            position: relative;
            padding-left: 25px;
        }

        .additional-members li::before {
            content: '•';
            color: #f59e0b;
            font-size: 1.5rem;
            position: absolute;
            left: 0;
            top: -2px;
        }

        /* Important Note Section */
        .important-note {
            background: linear-gradient(to right, #e6f4ec, #d9eee4);
            padding: 20px;
            border-radius: 8px;
            border-left: 5px solid #2d6a4f;
            margin-top: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .important-note h3 {
            color: #1b4332;
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
            color: #1b4332;
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

            .members-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .member-card {
                padding: 20px;
            }

            .member-header {
                flex-direction: column;
                align-items: flex-start;
                text-align: center;
            }

            .member-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .member-title {
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

            .members-section {
                padding: 20px;
            }

            .member-card {
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
            <!-- SVG Pattern with committee/meeting icons -->
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

                <!-- Committee/Meeting Icons -->
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
            <h1 class="hero-title">THE CONSULTATIVE COMMITTEE</h1>
            <p class="hero-subtitle">Enhancing the Criminal Justice System and Prosecution Management</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>The Consultative Committee</h1>
                    <p class="intro-text">
                        The Consultative Committee has been established under Section 23(1) of the Office of Director of Public Prosecutions Act, Act No. 2 of 2010. 
                        For the time being, the Committee constitutes the following members:
                    </p>
                </div>

                <!-- Committee Overview Section -->
                <div class="mandate-section">
                    <h2>Committee Establishment</h2>
                    <p>
                        The Consultative Committee operates under the legal framework established by the Office of Director of Public Prosecutions Act, 
                        Act No. 2 of 2010, Section 23(1). This committee plays a crucial role in the oversight and improvement of the prosecution service 
                        and criminal justice system in Zanzibar.
                    </p>
                </div>

                <!-- Members Section -->
                <div class="members-section">
                    <h2>Committee Members</h2>
                    
                    <div class="members-grid">
                        <!-- Member 1 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">👑</div>
                                <div class="member-title">Chairman</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Chairman who has been appointed by the Minister
                                </p>
                            </div>
                        </div>

                        <!-- Member 2 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">⚖️</div>
                                <div class="member-title">Judge of High Court</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Judge of High Court recommended by the Chief Justice and appointed by the Minister
                                </p>
                            </div>
                        </div>

                        <!-- Member 3 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">👨‍⚖️</div>
                                <div class="member-title">Director of Public Prosecutions</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Director of Public Prosecutions
                                </p>
                            </div>
                        </div>

                        <!-- Member 4 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">🏢</div>
                                <div class="member-title">Commissioner of Offenders Educational Centre</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Commissioner of Offenders Educational Centre
                                </p>
                            </div>
                        </div>

                        <!-- Member 5 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">🕵️</div>
                                <div class="member-title">Deputy Director of Criminal Investigation</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Deputy Director of Criminal Investigation
                                </p>
                            </div>
                        </div>

                        <!-- Member 6 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">📚</div>
                                <div class="member-title">Registrar of High Court</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Registrar of High Court
                                </p>
                            </div>
                        </div>

                        <!-- Member 7 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">🔬</div>
                                <div class="member-title">Chief Government Chemist</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Chief Government Chemist
                                </p>
                            </div>
                        </div>

                        <!-- Member 8 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">🏥</div>
                                <div class="member-title">Chief Medical Officer</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Chief Medical Officer
                                </p>
                            </div>
                        </div>

                        <!-- Member 9 -->
                        <div class="member-card">
                            <div class="member-header">
                                <div class="member-icon">⚖️</div>
                                <div class="member-title">Representative of the Zanzibar Law Society</div>
                            </div>
                            <div class="member-content">
                                <p class="member-description">
                                    Representative of the Zanzibar Law Society
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Members Section -->
                <div class="additional-members">
                    <h3>Three other members appointed by the Minister</h3>
                    <p style="color: #92400e; margin-bottom: 15px; line-height: 1.6;">
                        Three other members appointed by the Minister to represent organizations or institutions having interest in the prosecution service or criminal justice in general, currently represented by:
                    </p>
                    <ul>
                        <li>The Director General of the Anti-Corruption and Economic Crimes Authority</li>
                        <li>The Commissioner General of Drugs Control and Enforcement Authority</li>
                    </ul>
                </div>

                <!-- Functions Section -->
                <div class="functions-section">
                    <h2>Functions of the Committee</h2>
                    <p style="margin-bottom: 25px; color: #555;">
                        According to Section 23 (8) of the Act, the Committee shall have the following functions:
                    </p>
                    
                    <div class="functions-list">
                        <!-- Function 1 -->
                        <div class="function-item">
                            <div class="function-number">1</div>
                            <div class="function-content">
                                <div class="function-title">To review the administration of Criminal Justice in general and conduct of prosecution in particular</div>
                            </div>
                        </div>

                        <!-- Function 2 -->
                        <div class="function-item">
                            <div class="function-number">2</div>
                            <div class="function-content">
                                <div class="function-title">To develop and oversee standards of performance to be met by each institution involved in the administration of Criminal Justice</div>
                            </div>
                        </div>

                        <!-- Function 3 -->
                        <div class="function-item">
                            <div class="function-number">3</div>
                            <div class="function-content">
                                <div class="function-title">To deliberate on problems facing the administration of Criminal Justice and advise the government through the Minister on interventions required to remove or minimize those problems</div>
                            </div>
                        </div>

                        <!-- Function 4 -->
                        <div class="function-item">
                            <div class="function-number">4</div>
                            <div class="function-content">
                                <div class="function-title">To issue directives, not inconsistent with constitutional independence of the judiciary and other institutions, on measures to be taken to minimize delays and backlog of cases</div>
                            </div>
                        </div>

                        <!-- Function 5 -->
                        <div class="function-item">
                            <div class="function-number">5</div>
                            <div class="function-content">
                                <div class="function-title">To do any other thing incidental to the above functions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')
</body>
</html>