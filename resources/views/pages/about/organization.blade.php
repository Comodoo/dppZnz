<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Structure - DPP Zanzibar</title>
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
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            position: relative;
        }

        /* Content Layout */
        .content-wrapper {
            padding: 40px;
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

        /* Leadership Section */
        .leadership-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .leadership-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            border-top: 4px solid #0056b3;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .leadership-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .leadership-card h3 {
            font-size: 1.4rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 700;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
        }

        .leadership-card p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        /* Departments Section */
        .departments-section {
            margin-bottom: 40px;
        }

        .departments-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
        }

        .department-category {
            margin-bottom: 30px;
        }

        .category-title {
            font-size: 1.5rem;
            color: #065f46;
            margin-bottom: 20px;
            font-weight: 600;
            padding-left: 15px;
            border-left: 4px solid #059669;
        }

        .department-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .department-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .department-card:hover {
            border-color: #0056b3;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .department-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #0056b3, #003366);
        }

        .department-card h4 {
            font-size: 1.2rem;
            color: #003366;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .department-card p {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .divisions-list {
            margin-top: 15px;
            padding-left: 20px;
        }

        .divisions-list li {
            margin-bottom: 8px;
            color: #444;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .division-title {
            font-weight: 600;
            color: #065f46;
            margin-top: 15px;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        /* SINGLE STRUCTURE IMAGE SECTION */
        .structure-image-section {
            margin-top: 40px;
        }

        .structure-image-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
            text-align: center;
        }

        .structure-image-container {
            background: linear-gradient(to right, #fef3c7, #fef9c3);
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid #d97706;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .structure-image-wrapper {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .structure-full-image {
            width: 100%;
            max-width: 1000px;
            height: auto;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: zoom-in;
        }

        .structure-full-image:hover {
            transform: scale(1.01);
        }

        .image-caption {
            color: #92400e;
            font-size: 1.1rem;
            margin-top: 15px;
            font-weight: 500;
        }

        .image-controls {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .image-btn {
            background: #0D84BE;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .image-btn:hover {
            background: #0a6a9e;
            transform: translateY(-2px);
        }

        /* Image Modal for Full View */
        .image-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .image-modal.active {
            display: flex;
        }

        .modal-content {
            background: transparent;
            max-width: 95%;
            max-height: 95vh;
            position: relative;
            text-align: center;
        }

        .modal-image {
            width: 100%;
            height: auto;
            max-height: 85vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
        }

        .modal-close {
            position: absolute;
            top: -40px;
            right: 0;
            background: none;
            border: none;
            color: white;
            font-size: 2.5rem;
            cursor: pointer;
            padding: 5px;
            transition: color 0.2s;
        }

        .modal-close:hover {
            color: #0D84BE;
        }

        .modal-download {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            background: #0D84BE;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .modal-download:hover {
            background: #0a6a9e;
        }

        /* Download Options */
        .download-options {
            display: none;
            position: absolute;
            bottom: -100px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            min-width: 200px;
            z-index: 2;
        }

        .download-options.show {
            display: block;
        }

        .download-options button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.2s;
        }

        .download-options button:hover {
            background: #e9ecef;
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

            .leadership-section {
                grid-template-columns: 1fr;
            }

            .department-grid {
                grid-template-columns: 1fr;
            }

            .structure-full-image {
                max-width: 100%;
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

            .overview-section,
            .structure-image-container {
                padding: 20px;
            }

            .leadership-card,
            .department-card {
                padding: 15px;
            }

            .image-controls {
                flex-direction: column;
                align-items: center;
            }

            .image-btn {
                width: 100%;
                max-width: 250px;
                justify-content: center;
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

                <!-- Scale of Justice Icons -->
                <g opacity="0.4">
                    <path d="M200,180 L240,180 M220,180 L220,200" stroke="white" stroke-width="1" />
                    <path d="M200,190 L240,190" stroke="white" stroke-width="1" />
                    <path d="M210,200 L230,200" stroke="white" stroke-width="1" />
                    
                    <path d="M500,180 L540,180 M520,180 L520,200" stroke="white" stroke-width="1" />
                    <path d="M500,190 L540,190" stroke="white" stroke-width="1" />
                    <path d="M510,200 L530,200" stroke="white" stroke-width="1" />
                    
                    <path d="M800,180 L840,180 M820,180 L820,200" stroke="white" stroke-width="1" />
                    <path d="M800,190 L840,190" stroke="white" stroke-width="1" />
                    <path d="M810,200 L830,200" stroke="white" stroke-width="1" />
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
            <h1 class="hero-title">ORGANIZATION STRUCTURE</h1>
            <p class="hero-subtitle">Office of the Director of Public Prosecutions - Zanzibar</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>DPP Organizational Structure</h1>
                    <p class="intro-text">
                        The current structure of the Office of the Director of Public Prosecutions (DPP) is designed 
                        to efficiently manage criminal prosecutions and ensure justice delivery across Zanzibar.
                    </p>
                </div>

                <!-- Overview Section -->
                <div class="overview-section">
                    <h2>DPP Structure Overview</h2>
                    <p>
                        The current structure of the Office of the Director of Public Prosecutions (DPP) is headed by 
                        the Director of Public Prosecutions, assisted by the Deputy Director of Public Prosecutions. 
                        The Office consists of nine departments and five Regional Prosecutorial Officers. These include 
                        five Regional Prosecution Departments, the Research and Advisory Department, the High Court 
                        and Court of Appeal Prosecution Department, and the Administration Department.
                    </p>
                    <p>
                        <strong>ORGANIZATION STRUCTURE OF THE OFFICE OF THE DIRECTOR OF PUBLIC PROSECUTIONS:</strong> 
                        The structure approved by the Government includes the Director of Public Prosecutions, the 
                        Deputy Director, three departments, the Pemba Coordination Office, Regional Prosecution 
                        Offices, and five independent units.
                    </p>
                </div>

                <!-- Leadership Section -->
                <div class="leadership-section">
                    <div class="leadership-card">
                        <h3>Director of Public Prosecutions (DPP)</h3>
                        <p>
                            The DPP is the Chief Executive of daily operations and is appointed by the President of 
                            Zanzibar and Chairman of the Revolutionary Council under Article 56A of the 1984 Zanzibar 
                            Constitution.
                        </p>
                        <p>
                            The DPP has overall responsibility for managing all criminal prosecutions and ensuring 
                            the proper administration of justice throughout Zanzibar.
                        </p>
                    </div>

                    <div class="leadership-card">
                        <h3>Deputy Director of Public Prosecutions</h3>
                        <p>
                            The Deputy DPP assists the Director in implementing the office's duties and is appointed 
                            by the President under Section 4(4) of the Director of Public Prosecutions Act No. 2 of 2010.
                        </p>
                        <p>
                            This position supports the DPP in strategic planning, operational management, and oversight 
                            of departmental activities.
                        </p>
                    </div>
                </div>

                <!-- Departments Section -->
                <div class="departments-section">
                    <h2>Departments under the Office of Director of Public Prosecutions</h2>
                    
                    <!-- Department 1 -->
                    <div class="department-category">
                        <div class="category-title">Department of Crimes against Persons and Traffic Offenses</div>
                        <div class="department-grid">
                            <div class="department-card">
                                <h4>Main Responsibilities:</h4>
                                <p>Manage and prosecute cases related to crimes against persons and traffic safety</p>
                                <p>Supervise and coordinate investigations in these categories</p>
                                <p>Handle appeals and legal reviews</p>
                                <p>Advise investigation institutions and prepare reports and recommendations</p>
                                <p>Provide legal education to the public</p>
                                
                                <div class="division-title">Divisions:</div>
                                <ul class="divisions-list">
                                    <li><strong>Division of Crimes Against Persons:</strong> Handles gender-based violence and other crimes against individuals.</li>
                                    <li><strong>Division of Road Safety:</strong> Focuses on legal oversight and prosecution of traffic-related offenses.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Department 2 -->
                    <div class="department-category">
                        <div class="category-title">Department of Transnational and Economic Crimes</div>
                        <div class="department-grid">
                            <div class="department-card">
                                <h4>Scope:</h4>
                                <p>Handles crimes such as corruption, economic sabotage, money laundering, drug trafficking, cybercrime, and cross-border offenses.</p>
                                
                                <div class="division-title">Divisions:</div>
                                <ul class="divisions-list">
                                    <li><strong>Division of Corruption, Economic Sabotage, and Money Laundering</strong></li>
                                    <li><strong>Division of Transnational Crimes, Drugs, and Cybercrime</strong></li>
                                </ul>
                                
                                <h4>Responsibilities:</h4>
                                <p>Manage and prosecute all the above crimes</p>
                                <p>Handle appeals and legal document preparation</p>
                                <p>Coordinate with regional and international institutions</p>
                                <p>Implement international treaties and protocols</p>
                                <p>Track and seize assets from criminal activities</p>
                                <p>Provide legal education and policy advice</p>
                                
                                <div class="division-title">Specific Division Functions:</div>
                                <ul class="divisions-list">
                                    <li><strong>Division of Corruption, Economic crime, and Money Laundering:</strong> Handle case related to corruption, economic crime, and money laundering offenses.</li>
                                    <li><strong>Division of Transnational Crimes, Drugs, and Cybercrime:</strong> Handle case related to Transnational Crimes, Drugs, and Cybercrime</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Department 3 -->
                    <div class="department-category">
                        <div class="category-title">Department of Planning, Operations, and Human Resources</div>
                        <div class="department-grid">
                            <div class="department-card">
                                <h4>Function:</h4>
                                <p>Coordinates administrative and planning activities to support office functions</p>
                                
                                <div class="division-title">Divisions:</div>
                                <ul class="divisions-list">
                                    <li><strong>Division of Planning and Statistics</strong></li>
                                    <li><strong>Division of Administration and Human Resources</strong></li>
                                    <li><strong>Division of Records and Archives Management</strong></li>
                                </ul>
                                
                                <h4>Responsibilities:</h4>
                                <p>Administrative and logistical services</p>
                                <p>Human resource management</p>
                                <p>Budget preparation and work plans</p>
                                <p>Monitoring and evaluation</p>
                                <p>Data and records management</p>
                                
                                <div class="division-title">Division Functions:</div>
                                <ul class="divisions-list">
                                    <li><strong>Division of Administration and HR:</strong> Handles staff discipline, training, benefits, and resource allocation.</li>
                                    <li><strong>Division of Planning and Statistics:</strong> Responsible for strategic plans, economic statistics, budget coordination, and reporting.</li>
                                    <li><strong>Division of Records and Archives:</strong> Ensures proper classification, storage, confidentiality, and retrieval of institutional records.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Pemba Coordination Office -->
                    <div class="department-category">
                        <div class="category-title">Pemba Coordination Office</div>
                        <div class="department-grid">
                            <div class="department-card">
                                <h4>Function:</h4>
                                <p>This office coordinates all DPP activities in Pemba.</p>
                                <p>Acts as the regional headquarters for DPP operations on Pemba Island.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Regional Prosecution Offices -->
                    <div class="department-category">
                        <div class="category-title">Regional Prosecution Offices</div>
                        <div class="department-grid">
                            <div class="department-card">
                                <h4>Accountability:</h4>
                                <p>Accountable to the DPP, these offices manage prosecutions in Regional and District Courts.</p>
                                
                                <h4>Responsibilities include:</h4>
                                <p>Prosecute criminal cases at the regional level</p>
                                <p>Prepare appeals and collect statistics</p>
                                <p>Provide public legal education</p>
                                <p>Address public complaints and coordinate with DPP headquarters</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Independent Units Section -->
                <div class="department-category">
                    <div class="category-title">Independent Units</div>
                    <p style="color: #555; margin-bottom: 20px;">
                        Five specialized units report directly to the DPP:
                    </p>
                    <div class="department-grid">
                        <!-- Accounting Unit -->
                        <div class="department-card">
                            <h4>Accounting Unit</h4>
                            <p>Handles financial records, reporting, payroll, pension contributions, and cost control.</p>
                        </div>

                        <!-- Internal Audit -->
                        <div class="department-card">
                            <h4>Internal Audit Unit</h4>
                            <p>Conducts audits, controls, risk assessments, and value-for-money reviews.</p>
                        </div>

                        <!-- ICT & PR -->
                        <div class="department-card">
                            <h4>ICT and Public Relations Unit</h4>
                            <p>Manages communication systems, data security, hardware/software support, and public engagement.</p>
                        </div>

                        <!-- Procurement Unit -->
                        <div class="department-card">
                            <h4>Procurement and Disposal Unit</h4>
                            <p>Manages purchases, tender processes, asset disposal, and vendor management.</p>
                        </div>

                        <!-- Witness Protection -->
                        <div class="department-card">
                            <h4>Witness Protection and Victim Support Unit</h4>
                            <p>Ensures the safety and psychological readiness of witnesses and supports crime victims.</p>
                        </div>
                    </div>
                </div>

                <!-- SINGLE STRUCTURE IMAGE SECTION -->
                <div class="structure-image-section">
                    <h2>Organization Structure Diagram</h2>
                    
                    <div class="structure-image-container">
                        <div class="structure-image-wrapper">
                            <!-- Single comprehensive organization structure image -->
                            <img src="{{ asset('images/back.jpg') }}" 
                                 alt="DPP Organizational Structure Diagram" 
                                 class="structure-full-image"
                                 id="structureImage">
                        </div>
                        
                        <p class="image-caption">
                            Comprehensive Organizational Structure of the Office of the Director of Public Prosecutions, Zanzibar
                        </p>
                        
                        <!-- Image Controls -->
                        <div class="image-controls">
                            <button class="image-btn" id="viewFullscreen">
                                🔍 View Fullscreen
                            </button>
                            <button class="image-btn" id="downloadImage">
                                📥 Download Diagram
                            </button>
                            <button class="image-btn" id="printImage">
                                🖨️ Print Diagram
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal for Full View -->
    <div class="image-modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" id="closeModal">&times;</button>
            <img id="modalImage" class="modal-image" src="{{ asset('images/back.jpg') }}" alt="DPP Organizational Structure Diagram">
            <button class="modal-download" id="modalDownload">
                📥 Download High Quality
            </button>
            <div class="download-options" id="downloadOptions">
                <button data-quality="high">High Quality (PDF)</button>
                <button data-quality="medium">Medium Quality (JPG)</button>
                <button data-quality="low">Low Quality (PNG)</button>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')

    <script>
        // Organization Structure Image Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const structureImage = document.getElementById('structureImage');
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const closeModal = document.getElementById('closeModal');
            const viewFullscreen = document.getElementById('viewFullscreen');
            const downloadImage = document.getElementById('downloadImage');
            const printImage = document.getElementById('printImage');
            const modalDownload = document.getElementById('modalDownload');
            const downloadOptions = document.getElementById('downloadOptions');
            
            // Image path
            const imagePath = '{{ asset("images/dpp-organization-structure.jpg") }}';
            
            // Click on image to view fullscreen
            structureImage.addEventListener('click', function() {
                modalImage.src = imagePath;
                imageModal.classList.add('active');
            });
            
            // View Fullscreen button
            viewFullscreen.addEventListener('click', function() {
                modalImage.src = imagePath;
                imageModal.classList.add('active');
            });
            
            // Download Image
            downloadImage.addEventListener('click', function() {
                downloadStructureImage('dpp-organization-structure.jpg');
            });
            
            // Print Image
            printImage.addEventListener('click', function() {
                printStructureImage();
            });
            
            // Modal Download
            modalDownload.addEventListener('click', function(e) {
                e.stopPropagation();
                downloadOptions.classList.toggle('show');
            });
            
            // Download Options
            downloadOptions.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function() {
                    const quality = this.getAttribute('data-quality');
                    downloadStructureImage(`dpp-organization-structure-${quality}.jpg`);
                    downloadOptions.classList.remove('show');
                });
            });
            
            // Close Modal
            closeModal.addEventListener('click', function() {
                imageModal.classList.remove('active');
                downloadOptions.classList.remove('show');
            });
            
            imageModal.addEventListener('click', function(e) {
                if (e.target === imageModal) {
                    imageModal.classList.remove('active');
                    downloadOptions.classList.remove('show');
                }
            });
            
            // Close download options when clicking outside
            document.addEventListener('click', function(e) {
                if (!modalDownload.contains(e.target) && !downloadOptions.contains(e.target)) {
                    downloadOptions.classList.remove('show');
                }
            });
            
            // Keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && imageModal.classList.contains('active')) {
                    imageModal.classList.remove('active');
                    downloadOptions.classList.remove('show');
                }
                if (e.key === 'f' || e.key === 'F') {
                    viewFullscreen.click();
                }
                if (e.key === 'p' || e.key === 'P') {
                    printStructureImage();
                }
            });
            
            // Download function
            function downloadStructureImage(filename) {
                const link = document.createElement('a');
                link.href = imagePath;
                link.download = filename;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                
                // Show download notification
                showNotification('Diagram download started...');
            }
            
            // Print function
            function printStructureImage() {
                const printWindow = window.open('', '_blank');
                printWindow.document.write(`
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>DPP Organization Structure - Print</title>
                        <style>
                            body { margin: 0; padding: 20px; font-family: Arial, sans-serif; }
                            .print-header { text-align: center; margin-bottom: 20px; }
                            .print-header h1 { color: #003366; margin-bottom: 5px; }
                            .print-header p { color: #666; }
                            .print-image { width: 100%; max-width: 1000px; margin: 0 auto; display: block; }
                            .print-footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
                            @media print {
                                body { padding: 0; }
                                .print-header { margin-bottom: 10px; }
                            }
                        </style>
                    </head>
                    <body>
                        <div class="print-header">
                            <h1>Office of the Director of Public Prosecutions - Zanzibar</h1>
                            <p>Organization Structure Diagram</p>
                            <p>Printed on: ${new Date().toLocaleDateString()}</p>
                        </div>
                        <img src="${imagePath}" alt="DPP Organizational Structure" class="print-image">
                        <div class="print-footer">
                            <p>© ${new Date().getFullYear()} Office of the Director of Public Prosecutions - Zanzibar</p>
                        </div>
                        <script>
                            window.onload = function() {
                                window.print();
                                setTimeout(function() {
                                    window.close();
                                }, 1000);
                            };
                        <\/script>
                    </body>
                    </html>
                `);
                printWindow.document.close();
            }
            
            // Notification function
            function showNotification(message) {
                const notification = document.createElement('div');
                notification.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: #0D84BE;
                    color: white;
                    padding: 15px 20px;
                    border-radius: 6px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                    z-index: 10000;
                    animation: slideIn 0.3s ease;
                `;
                notification.textContent = message;
                document.body.appendChild(notification);
                
                setTimeout(() => {
                    notification.style.animation = 'slideOut 0.3s ease';
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 300);
                }, 3000);
                
                // Add animation styles
                if (!document.querySelector('#notification-styles')) {
                    const style = document.createElement('style');
                    style.id = 'notification-styles';
                    style.textContent = `
                        @keyframes slideIn {
                            from { transform: translateX(100%); opacity: 0; }
                            to { transform: translateX(0); opacity: 1; }
                        }
                        @keyframes slideOut {
                            from { transform: translateX(0); opacity: 1; }
                            to { transform: translateX(100%); opacity: 0; }
                        }
                    `;
                    document.head.appendChild(style);
                }
            }
        });
    </script>
</body>
</html>