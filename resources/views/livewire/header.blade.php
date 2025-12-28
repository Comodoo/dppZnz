<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPP Zanzibar - Office of the Director of Public Prosecutions</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div>
        <!-- Header Section -->
        <div class="header-container">
            <!-- Logo ya kushoto -->
            <img src="{{ asset('images/logo_left.png') }}" alt="Logo Zanzibar" class="logo-left">

            <!-- Maandishi ya kati -->
            <div class="header-text">
                <h1>OFFICE OF THE DIRECTOR OF PUBLIC PROSECUTIONS ZANZIBAR</h1>
                <h5>Hakuna hatia bila ushahidi. Usidharau, Usikatae kutoa ushahidi</h5>
            </div>
            <!-- Logo ya kulia -->
            <img src="{{ asset('images/logo_right.png') }}" alt="Logo Zanzibar" class="logo-right">
        </div>

        <!-- Navigation Bar -->
        <div class="nav-bar">
            <div class="nav-container">
                <div class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="fas fa-home"></i> Home
                    </a>
                </div>

                <!-- About Us Dropdown -->
                <div class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">
                        <i class="fas fa-info-circle"></i> About Us <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="dropdown-menu about-dropdown">
                        <div class="dropdown-header">
                            <i class="fas fa-info-circle"></i>
                            About Us
                        </div>
                        <div class="dropdown-content">
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4>Who We Are</h4>
                                    <p>The Office of the Director of Public Prosecutions (DPP) is an independent office responsible for managing criminal prosecutions in Zanzibar.</p>
                                    <a href="{{ route('about') }}" class="read-more">→</a>
                                </div>
                            </div>

                            <!-- Departments Dropdown -->
                            <div class="dropdown-card has-nested">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <div class="nested-dropdown-trigger">
                                        <h4><i class="fas fa-building"></i> Departments <span class="nested-arrow">›</span></h4>
                                        <p>Various departments within the DPP Office structure.</p>
                                    </div>
                                    <div class="nested-dropdown department-dropdown">
                                        <!-- Department 1 -->
                                        <div class="nested-item has-division-dropdown">
                                            <div class="nested-icon">
                                                <i class="fas fa-user-shield text-primary"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Department of Crimes against Persons and Traffic Offenses <span class="division-arrow">›</span></h5>
                                                <p>Handles all criminal prosecutions</p>
                                                <div class="division-dropdown">
                                                    <a href="{{ route('human-crime') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-users text-red"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Crimes Against Persons</h6>
                                                            <p>Handles gender-based violence and crimes against individuals</p>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('road') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-car text-blue"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Road Safety</h6>
                                                            <p>Legal oversight of traffic-related offenses</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Department 2 -->
                                        <div class="nested-item has-division-dropdown">
                                            <div class="nested-icon">
                                                <i class="fas fa-chart-line text-success"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Department of Economic and Transnational Crime <span class="division-arrow">›</span></h5>
                                                <p>Manages economic and transnational crimes</p>
                                                <div class="division-dropdown">
                                                    <a href="{{ route('rushwa') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-money-bill-wave text-orange"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Corruption, Economic Sabotage, and Money Laundering</h6>
                                                            <p>Handles corruption and financial crimes</p>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('cyber') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-globe text-info"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Transnational Crimes, Drugs, and Cybercrime</h6>
                                                            <p>Manages cross-border and cyber-related offenses</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Department 3 -->
                                        <div class="nested-item has-division-dropdown">
                                            <div class="nested-icon">
                                                <i class="fas fa-tasks text-warning"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Department of Planning, Administration and Human Resources <span class="division-arrow">›</span></h5>
                                                <p>Handles planning, administration, and human resources</p>
                                                <div class="division-dropdown">
                                                    <a href="{{ route('div-planning') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-chart-bar text-purple"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Planning and Statistics</h6>
                                                            <p>Strategic planning and statistical analysis</p>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('utawala') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-users-cog text-teal"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Administration and Human Resources</h6>
                                                            <p>Staff management and administrative support</p>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('nyaraka') }}" class="division-item">
                                                        <div class="division-icon">
                                                            <i class="fas fa-archive text-brown"></i>
                                                        </div>
                                                        <div class="division-content">
                                                            <h6>Division of Records and Archives Management</h6>
                                                            <p>Document management and archival services</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4>Mission, Vision & Core Values</h4>
                                    <p>Our mission is to deliver effective and efficient prosecution services.</p>
                                    <a href="{{ route('mission') }}" class="read-more">→</a>
                                </div>
                            </div>

                            <!-- Units Dropdown -->
                            <div class="dropdown-card has-nested">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <div class="nested-dropdown-trigger">
                                        <h4><i class="fas fa-cubes"></i> Units <span class="nested-arrow">›</span></h4>
                                        <p>Specialized units within the DPP Office.</p>
                                    </div>
                                    <div class="nested-dropdown units-dropdown">
                                        <a href="{{ route('account') }}" class="nested-item">
                                            <div class="nested-icon">
                                                <i class="fas fa-calculator text-primary"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Account Unit</h5>
                                                <p>Handles financial and accounting matters</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('mashahidi') }}" class="nested-item">
                                            <div class="nested-icon">
                                                <i class="fas fa-eye text-success"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Witness Protection and Victims Support Unit</h5>
                                                <p>Manage witness protection and victim support programs</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('ununuzi') }}" class="nested-item">
                                            <div class="nested-icon">
                                                <i class="fas fa-shopping-cart text-warning"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Procurement Management Unit</h5>
                                                <p>Specialized in procurement and supply chain management</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('ict') }}" class="nested-item">
                                            <div class="nested-icon">
                                                <i class="fas fa-desktop text-info"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Information Communication and Technology Unit</h5>
                                                <p>Handles information and communication infrastructure</p>
                                            </div>
                                        </a>
                                        <a href="" class="nested-item">
                                            <div class="nested-icon">
                                                <i class="fas fa-bullhorn text-purple"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Public Relations Unit</h5>
                                                <p>Combats misinformation and manages public communication</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('audit') }}" class="nested-item">
                                            <div class="nested-icon">
                                                <i class="fas fa-search-dollar text-danger"></i>
                                            </div>
                                            <div class="nested-content">
                                                <h5>Internal Audit Unit</h5>
                                                <p>Handles internal audits and financial oversight</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- More About Us Cards -->
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-map-marker-alt"></i> Pemba Coordination Office</h4>
                                    <p>Regional coordination office for prosecution services in Pemba.</p>
                                    <a href="{{ route('pemba') }}" class="read-more">→</a>
                                </div>
                            </div>

                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-user-tie"></i> From the Director General's Desk</h4>
                                    <p>It is our duty to ensure that everyone receives equal justice under the law.</p>
                                    <a href="{{ route('director') }}" class="read-more">→</a>
                                </div>
                            </div>

                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-sitemap"></i> Organization Structure</h4>
                                    <p>Organizational hierarchy and reporting structure of DPP Office.</p>
                                    <a href="{{ route('organization') }}" class="read-more">→</a>
                                </div>
                            </div>

                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-gavel"></i> Mandate & Functions</h4>
                                    <p>Legal mandate and core functions of the DPP Office.</p>
                                    <a href="{{ route('mandate') }}" class="read-more">→</a>
                                </div>
                            </div>

                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-map-marked-alt"></i> Regional Prosecutions Offices</h4>
                                    <p>Regional offices and their jurisdictions.</p>
                                    <a href="{{ route('regional') }}" class="read-more">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Prosecutions Dropdown -->
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-balance-scale"></i> Prosecutions <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="dropdown-menu prosecutions-dropdown">
                        <div class="dropdown-header">
                            <i class="fas fa-balance-scale"></i>
                            Prosecutions
                        </div>
                        <div class="dropdown-content">
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-calendar-alt"></i> Prosecutions Plan</h4>
                                    <p>Annual prosecution plans and strategies.</p>
                                    <a href="" class="read-more">→</a>
                                </div>
                            </div>
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-users"></i> Prosecutions Forum</h4>
                                    <p>Platform for prosecutors to share knowledge and experiences.</p>
                                    <a href="" class="read-more">→</a>
                                </div>
                            </div>
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-handshake"></i> Delegated Prosecutions</h4>
                                    <p>Delegated prosecution powers and procedures.</p>
                                    <a href="" class="read-more">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News and Update -->
                <div class="nav-item">
                    <a href="{{ route('news') }}" class="nav-link">
                        <i class="fas fa-newspaper"></i>News & Update
                    </a>
                </div>

                <!-- Media Centre Dropdown -->
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-photo-video"></i> Media Centre <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="dropdown-menu media-dropdown">
                        <div class="dropdown-header">
                            <i class="fas fa-photo-video"></i>
                            Media Centre
                        </div>
                        <div class="dropdown-content">
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header new">New</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-images"></i> Photo Gallery</h4>
                                    <p>Collection of photos from DPP events and activities.</p>
                                    <a href="{{ route('photo') }}" class="read-more">→</a>
                                </div>
                            </div>
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-file-alt"></i> Newsletters</h4>
                                    <p>Monthly newsletters and publications.</p>
                                    <a href="" class="read-more">→</a>
                                </div>
                            </div>
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-download"></i> Downloads</h4>
                                    <p>Downloadable documents, forms, and publications.</p>
                                    <a href="{{ route('document') }}" class="read-more">→</a>
                                </div>
                            </div>
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-video"></i> Videos</h4>
                                    <p>Video recordings of press conferences and events.</p>
                                    <a href="{{ route('video') }}" class="read-more">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Management Dropdown -->
                <div class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-tie"></i> Management <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="dropdown-menu management-dropdown">
                        <div class="dropdown-header">
                            <i class="fas fa-user-tie"></i>
                            Management
                        </div>
                        <div class="dropdown-content">
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-users"></i> Top Management</h4>
                                    <p>Profiles and roles of top management officials.</p>
                                    <a href="{{ route('organization') }}" class="read-more">→</a>
                                </div>
                            </div>
                            <div class="dropdown-card">
                                <div class="card-header"><span class="badge-header">Special</span></div>
                                <div class="card-body">
                                    <h4><i class="fas fa-comments"></i> Consultative Committee</h4>
                                    <p>Committee members and their responsibilities.</p>
                                    <a href="{{ route('consultive') }}" class="read-more">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- E-Library -->
                <div class="nav-item">
                    <a href="http://elibrary.lsz.ac.tz/" class="nav-link" target="_blank">
                        <i class="fas fa-book-open"></i> E-Library
                    </a>
                </div>

                <!-- Contact Us -->
                <div class="nav-item">
                    <a href="{{ route('contacts') }}" class="nav-link">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>

        <style>
            /* Reset and Base Styles */
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f5f7fa;
            }

            /* Header Styles */
            .header-container {
                background-size: cover;
                padding: 15px 30px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
                overflow: hidden;
                min-height: 120px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
            }

            .header-container::before {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(rgba(183, 211, 253, 0.9), rgba(173, 205, 253, 0.9));
                z-index: 1;
            }

            .header-container>* {
                position: relative;
                z-index: 2;
            }

            .logo-left {
                width: 100px;
                height: auto;
                position: relative;
                z-index: 3;
                filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
            }

            .logo-right {
                width: 5%;
                height: auto;
                position: relative;
                z-index: 3;
                filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
            }

            .header-text {
                text-align: center;
                color: #0a2a66;
                margin: 0;
                padding: 0;
                flex-grow: 1;
                margin-left: 15px;
                margin-right: 15px;
                position: relative;
                z-index: 3;
            }

            .header-text h1 {
                font-size: 28px;
                font-weight: 800;
                color: #1d4ed8;
                line-height: 1.2;
                margin-bottom: 8px;
            }

            .header-text h5 {
                font-size: 1rem;
                font-weight: 600;
                margin: 0;
                letter-spacing: 0.3px;
                color: #0a2a66;
                opacity: 0.9;
            }

            /* Navigation Bar Styles */
            .nav-bar {
                background: linear-gradient(to right, #0D84BE, #1181BC);
                padding: 10px 0;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                position: relative;
                z-index: 100;
            }

            .nav-container {
                max-width: 1300px;
                margin: 0 auto;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 8px;
                padding: 0 15px;
            }

            .nav-item {
                position: relative;
                display: inline-block;
            }

            .nav-link {
                display: flex;
                align-items: center;
                gap: 8px;
                padding: 8px 15px;
                color: white;
                text-decoration: none;
                font-weight: 500;
                border-radius: 4px;
                transition: all 0.3s ease;
                background-color: rgba(255, 255, 255, 0.1);
                white-space: nowrap;
            }

            .nav-link:hover {
                background-color: rgba(255, 255, 255, 0.25);
                color: white;
                transform: translateY(-2px);
            }

            .nav-link i {
                font-size: 0.9rem;
            }

            .dropdown-arrow {
                margin-left: 4px;
                font-size: 0.7rem;
            }

            /* Main Dropdown Menu Styles - FIXED CENTERING */
            .dropdown-menu {
                position: absolute;
                top: 100%;
                background: white;
                border-radius: 8px;
                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
                padding: 20px;
                z-index: 1000;
                display: none;
                font-family: inherit;
            }

            /* About Us dropdown positioning - CENTERED */
            .about-dropdown {
                left: 140%;
                transform: translateX(-50%);
                width: 700px;
                max-width: 90vw;
            }

            /* Prosecutions dropdown positioning - CENTERED */
            .prosecutions-dropdown {
                left: 50%;
                transform: translateX(-50%);
                width: 700px;
                max-width: 90vw;
            }

            /* Media Centre dropdown positioning - CENTERED */
            .media-dropdown {
                left: 50%;
                transform: translateX(-50%);
                width: 700px;
                max-width: 90vw;
            }

            /* Management dropdown positioning - CENTERED */
            .management-dropdown {
                left: 50%;
                transform: translateX(-50%);
                width: 700px;
                max-width: 90vw;
            }

            .nav-item:hover .dropdown-menu {
                display: block;
            }

            .dropdown-header {
                background: #35afec;
                color: white;
                padding: 14px 20px;
                display: flex;
                align-items: center;
                gap: 12px;
                margin: -20px -20px 20px -20px;
                font-size: 1.1rem;
                font-weight: 600;
                border-radius: 8px 8px 0 0;
            }

            .dropdown-header i {
                font-size: 1.1rem;
            }

            .dropdown-content {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }

            .dropdown-card {
                border: 1px solid #eaeaea;
                overflow: visible !important;
                transition: all 0.25s ease;
                position: relative;
                border-radius: 6px;
            }

            .dropdown-card:hover {
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
                border-color: #ddd;
                transform: translateY(-2px);
            }

            .card-header {
                background: #f9f9f9;
                padding: 10px 15px;
                border-bottom: 1px solid #eee;
            }

            .badge-header {
                background: rgb(153, 209, 240);
                color: white;
                font-size: 0.72rem;
                padding: 4px 8px;
                font-weight: 600;
                display: inline-block;
                border-radius: 4px;
            }

            .badge-header.new {
                background: #28a745;
            }

            .card-body {
                padding: 14px;
                position: relative;
            }

            .card-body h4 {
                font-size: 0.95rem;
                margin: 0 0 8px 0;
                color: #222;
                font-weight: 600;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .card-body p {
                font-size: 0.82rem;
                color: #555;
                line-height: 1.4;
                margin: 0 0 10px 0;
            }

            .read-more {
                color: #1181BC;
                text-decoration: none;
                font-weight: 600;
                font-size: 0.85rem;
                float: right;
                transition: all 0.2s;
            }

            .read-more:hover {
                text-decoration: underline;
                transform: translateX(3px);
            }

            /* Nested Dropdown Styles */
            .has-nested {
                position: relative;
            }

            .has-nested .card-body {
                padding-bottom: 10px;
                position: relative;
            }

            .nested-dropdown-trigger {
                cursor: pointer;
                position: relative;
            }

            .nested-arrow {
                color: #1181BC;
                font-size: 1rem;
                transition: transform 0.2s ease;
            }

            /* Department and Units dropdowns - ALWAYS ON RIGHT SIDE */
            .department-dropdown,
            .units-dropdown {
                position: absolute;
                top: 0;
                left: 100%;
                background: white;
                border: 1px solid #eaeaea;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                width: 320px;
                padding: 15px;
                z-index: 10010 !important;
                display: none;
                opacity: 0;
                visibility: hidden;
                border-radius: 6px;
                transition: opacity 0.2s ease, visibility 0.2s ease;
                margin-left: 5px;
            }

            /* Ensure nested dropdowns appear on the RIGHT */
            .has-nested:hover .department-dropdown,
            .has-nested:hover .units-dropdown {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

            .department-dropdown:hover,
            .units-dropdown:hover {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

            .nested-item {
                display: flex;
                align-items: flex-start;
                padding: 10px;
                text-decoration: none;
                color: #333;
                border-radius: 4px;
                transition: all 0.2s ease;
                margin-bottom: 8px;
                position: relative;
            }

            .nested-item:hover {
                background: #f5f9ff;
                transform: translateX(3px);
            }

            .nested-item:last-child {
                margin-bottom: 0;
            }

            .nested-icon {
                font-size: 1.2rem;
                margin-right: 10px;
                flex-shrink: 0;
                margin-top: 2px;
            }

            .nested-content h5 {
                font-size: 0.85rem;
                margin: 0 0 4px 0;
                color: #1181BC;
                font-weight: 600;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .nested-content p {
                font-size: 0.75rem;
                color: #666;
                line-height: 1.3;
                margin: 0;
            }

            .division-arrow {
                color: #888;
                font-size: 0.9rem;
                margin-left: 5px;
                transition: transform 0.2s ease;
            }

            /* Division Dropdown Styles - ALWAYS ON RIGHT SIDE */
            .has-division-dropdown {
                position: relative;
            }

            .division-dropdown {
                position: absolute;
                top: 0;
                left: 100% !important; /* FORCE ALL TO RIGHT SIDE */
                background: white;
                border: 1px solid #eaeaea;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                width: 280px;
                padding: 12px;
                z-index: 10020 !important;
                display: none;
                opacity: 0;
                visibility: hidden;
                border-radius: 6px;
                transition: opacity 0.2s ease, visibility 0.2s ease;
                margin-left: 5px;
            }

            /* Ensure ALL division dropdowns appear on the RIGHT */
            .has-division-dropdown:hover .division-dropdown {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

            .division-dropdown:hover {
                display: block !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

            .division-item {
                display: flex;
                align-items: flex-start;
                padding: 8px;
                text-decoration: none;
                color: #333;
                border-radius: 4px;
                transition: all 0.2s ease;
                margin-bottom: 6px;
            }

            .division-item:hover {
                background: #f0f7ff;
                transform: translateX(3px);
            }

            .division-item:last-child {
                margin-bottom: 0;
            }

            .division-icon {
                font-size: 1rem;
                margin-right: 8px;
                flex-shrink: 0;
                margin-top: 2px;
            }

            .division-content h6 {
                font-size: 0.8rem;
                margin: 0 0 3px 0;
                color: #0D84BE;
                font-weight: 600;
            }

            .division-content p {
                font-size: 0.7rem;
                color: #666;
                line-height: 1.3;
                margin: 0;
            }

            /* Position adjustments for edge cases - REMOVED LEFT SIDE POSITIONING */
            /* ALL dropdowns now open to the RIGHT only */

            /* Ensure no overflow issues */
            .dropdown-menu,
            .dropdown-card,
            .department-dropdown,
            .units-dropdown,
            .division-dropdown {
                overflow: visible !important;
            }

            /* Color Classes for Icons */
            .text-primary { color: #1181BC; }
            .text-success { color: #28a745; }
            .text-warning { color: #ffc107; }
            .text-danger { color: #dc3545; }
            .text-info { color: #17a2b8; }
            .text-purple { color: #6f42c1; }
            .text-teal { color: #20c997; }
            .text-orange { color: #fd7e14; }
            .text-brown { color: #795548; }
            .text-red { color: #e74c3c; }
            .text-blue { color: #3498db; }

            /* Responsive Design */
            @media (max-width: 768px) {
                .dropdown-menu {
                    width: 95% !important;
                    left: 50% !important;
                    transform: translateX(-50%) !important;
                }

                .dropdown-content {
                    grid-template-columns: 1fr;
                }

                .department-dropdown,
                .units-dropdown {
                    position: static;
                    width: 100%;
                    margin: 10px 0 0 0;
                    box-shadow: none;
                    border: 1px solid #ddd;
                    background: #f9f9f9;
                    display: none;
                    opacity: 1;
                    visibility: visible;
                    z-index: auto;
                }

                .division-dropdown {
                    position: static;
                    width: 100%;
                    margin: 10px 0 0 0;
                    box-shadow: none;
                    border: 1px solid #ddd;
                    background: #f0f0f0;
                    display: none;
                }

                .has-nested:hover .department-dropdown,
                .has-nested:hover .units-dropdown,
                .has-division-dropdown:hover .division-dropdown {
                    display: none !important;
                }

                .nested-dropdown-trigger {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }

                .department-dropdown.active,
                .units-dropdown.active,
                .division-dropdown.active {
                    display: block !important;
                }

                .nav-link {
                    padding: 8px 10px;
                    font-size: 0.9rem;
                }

                .nav-link i {
                    font-size: 0.8rem;
                }
            }

            @media (max-width: 480px) {
                .header-text h1 {
                    font-size: 20px;
                }

                .header-text h5 {
                    font-size: 0.85rem;
                }

                .nav-container {
                    justify-content: flex-start;
                    overflow-x: auto;
                    padding: 0 10px;
                }

                .nav-item {
                    flex-shrink: 0;
                }

                .dropdown-menu {
                    width: 98% !important;
                    left: 50% !important;
                    transform: translateX(-50%) !important;
                    padding: 15px;
                }
            }
        </style>
    </div>

    <script>
        // JavaScript for nested dropdown functionality - SIMPLIFIED
        document.addEventListener('DOMContentLoaded', function() {
            const nestedCards = document.querySelectorAll('.dropdown-card.has-nested');
            const divisionItems = document.querySelectorAll('.nested-item.has-division-dropdown');

            // Desktop hover functionality
            if (window.innerWidth > 768) {
                // Handle department dropdowns
                nestedCards.forEach(card => {
                    const nestedDropdown = card.querySelector('.department-dropdown') ||
                                          card.querySelector('.units-dropdown');

                    if (nestedDropdown) {
                        card.addEventListener('mouseenter', function() {
                            nestedDropdown.style.display = 'block';
                            nestedDropdown.style.opacity = '1';
                            nestedDropdown.style.visibility = 'visible';
                        });

                        card.addEventListener('mouseleave', function() {
                            setTimeout(() => {
                                if (!card.matches(':hover') && !nestedDropdown.matches(':hover')) {
                                    nestedDropdown.style.display = 'none';
                                    nestedDropdown.style.opacity = '0';
                                    nestedDropdown.style.visibility = 'hidden';
                                }
                            }, 100);
                        });

                        nestedDropdown.addEventListener('mouseenter', function() {
                            this.style.display = 'block';
                            this.style.opacity = '1';
                            this.style.visibility = 'visible';
                        });

                        nestedDropdown.addEventListener('mouseleave', function() {
                            setTimeout(() => {
                                if (!card.matches(':hover') && !this.matches(':hover')) {
                                    this.style.display = 'none';
                                    this.style.opacity = '0';
                                    this.style.visibility = 'hidden';
                                }
                            }, 100);
                        });
                    }
                });

                // Handle division dropdowns
                divisionItems.forEach(item => {
                    const divisionDropdown = item.querySelector('.division-dropdown');

                    if (divisionDropdown) {
                        item.addEventListener('mouseenter', function() {
                            divisionDropdown.style.display = 'block';
                            divisionDropdown.style.opacity = '1';
                            divisionDropdown.style.visibility = 'visible';
                        });

                        item.addEventListener('mouseleave', function() {
                            setTimeout(() => {
                                if (!item.matches(':hover') && !divisionDropdown.matches(':hover')) {
                                    divisionDropdown.style.display = 'none';
                                    divisionDropdown.style.opacity = '0';
                                    divisionDropdown.style.visibility = 'hidden';
                                }
                            }, 100);
                        });

                        divisionDropdown.addEventListener('mouseenter', function() {
                            this.style.display = 'block';
                            this.style.opacity = '1';
                            this.style.visibility = 'visible';
                        });

                        divisionDropdown.addEventListener('mouseleave', function() {
                            setTimeout(() => {
                                if (!item.matches(':hover') && !this.matches(':hover')) {
                                    this.style.display = 'none';
                                    this.style.opacity = '0';
                                    this.style.visibility = 'hidden';
                                }
                            }, 100);
                        });
                    }
                });
            }

            // Mobile click functionality
            if (window.innerWidth <= 768) {
                const nestedTriggers = document.querySelectorAll('.nested-dropdown-trigger');
                const divisionTriggers = document.querySelectorAll('.has-division-dropdown');

                nestedTriggers.forEach(trigger => {
                    trigger.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        const parentCard = this.closest('.dropdown-card');
                        const nestedDropdown = parentCard.querySelector('.department-dropdown') ||
                                              parentCard.querySelector('.units-dropdown');
                        const isActive = nestedDropdown.classList.contains('active');

                        // Close all other nested dropdowns
                        document.querySelectorAll('.department-dropdown.active, .units-dropdown.active, .division-dropdown.active').forEach(dropdown => {
                            dropdown.classList.remove('active');
                        });

                        if (!isActive) {
                            nestedDropdown.classList.add('active');
                        }
                    });
                });

                divisionTriggers.forEach(trigger => {
                    trigger.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        const divisionDropdown = this.querySelector('.division-dropdown');
                        const isActive = divisionDropdown.classList.contains('active');

                        if (!isActive) {
                            divisionDropdown.classList.add('active');
                        } else {
                            divisionDropdown.classList.remove('active');
                        }
                    });
                });

                document.addEventListener('click', function(e) {
                    if (!e.target.closest('.has-nested, .has-division-dropdown')) {
                        document.querySelectorAll('.department-dropdown.active, .units-dropdown.active, .division-dropdown.active').forEach(dropdown => {
                            dropdown.classList.remove('active');
                        });
                    }
                });
            }

            // Close main dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.nav-item')) {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => {
                        menu.style.display = 'none';
                    });
                }
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                document.querySelectorAll('.department-dropdown, .units-dropdown, .division-dropdown').forEach(dropdown => {
                    if (window.innerWidth > 768) {
                        dropdown.classList.remove('active');
                        dropdown.style.display = '';
                        dropdown.style.opacity = '';
                        dropdown.style.visibility = '';
                    }
                });
            });
        });
    </script>
</body>
</html>
