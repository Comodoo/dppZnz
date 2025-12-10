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
        <img src="https://via.placeholder.com/100x50/1181BC/FFFFFF?text=Gov" alt="Government of Zanzibar" class="logo-right">
    </div>

    <!-- Navigation Bar -->
    <div class="nav-bar">
        <div class="nav-container">
            <div class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
            </div>

            <!-- About Us Dropdown -->
            <div class="nav-item">
                <a href="{{ route('about') }}" class="nav-link">About Us <span class="dropdown-arrow">▼</span></a>
                <div class="dropdown-menu">
                    <div class="dropdown-header">
                        <svg viewBox="0 0 24 24" fill="white" width="22" height="22">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        About Us
                    </div>
                    <div class="dropdown-content">
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>who we are</h4>
                                <p>Ofisi ya Mkurugenzi wa Mashtaka (DPP) ni ofisi huru inayosimamia mashtaka ya kijinai Zanzibar.</p>
                                <a href="{{ route('about') }}" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Organization Structure</h4>
                                <p>Wajibu wetu ni kuhakikisha kuwa mashtaka yanafanyika kwa haki na bila ubaguzi.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Mission, Vision & Core Values</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Mandate & Functions</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Departments</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Pemba Cordination Office</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Units</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Regional Prosecutions Offices</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-item">
                <a href="{{ route('services') }}" class="nav-link">Prosecutions<span class="dropdown-arrow">▼</a>
                <div class="dropdown-menu">
                    <div class="dropdown-header">
                        <svg viewBox="0 0 24 24" fill="white" width="22" height="22">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        Prosecutions
                    </div>
                    <div class="dropdown-content">
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Prosecutions Plan</h4>
                                <p>Ofisi ya Mkurugenzi wa Mashtaka (DPP) ni ofisi huru inayosimamia mashtaka ya kijinai Zanzibar.</p>
                                <a href="{{ route('about') }}" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Prosecutions Forum</h4>
                                <p>Wajibu wetu ni kuhakikisha kuwa mashtaka yanafanyika kwa haki na bila ubaguzi.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Delegated prosecutions</h4>
                                <p>"Ni jukumu letu kuhakikisha kuwa kila mtu anapata haki sawa chini ya sheria."</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- News and Update Dropdown -->
            <div class="nav-item">
                <a href="{{ route('guidelines') }}" class="nav-link">News and Update </span></a>
                {{-- <div class="dropdown-menu">
                    <div class="dropdown-header">
                        <svg viewBox="0 0 24 24" fill="white" width="22" height="22">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        Habari na Sasisho
                    </div>
                    <div class="dropdown-content">
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge new">Mpya</span></div>
                            <div class="card-body">
                                <h4>Mtangazo wa Viongozi</h4>
                                <p>Mtangazo mpya kuhusu mashtaka ya umma yanayosimamiwa na DPP.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Matukio</h4>
                                <p>Semina na mafunzo ya sheria yanayofanyika kila mwezi.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Toaoni la Umma</h4>
                                <p>Maelezo ya rasmi kuhusu mashtaka makubwa ya kijinai.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="nav-item">
                <a href="{{ route('guidelines') }}" class="nav-link">Media Centre <span class="dropdown-arrow">▼</span></a>
                <div class="dropdown-menu">
                    <div class="dropdown-header">
                        <svg viewBox="0 0 24 24" fill="white" width="22" height="22">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        Media Centre
                    </div>
                    <div class="dropdown-content">
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge new">Mpya</span></div>
                            <div class="card-body">
                                <h4>Photo Gallery</h4>
                                <p>Mtangazo mpya kuhusu mashtaka ya umma yanayosimamiwa na DPP.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Newsleters</h4>
                                <p>Semina na mafunzo ya sheria yanayofanyika kila mwezi.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Downloads</h4>
                                <p>Maelezo ya rasmi kuhusu mashtaka makubwa ya kijinai.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Videos</h4>
                                <p>Maelezo ya rasmi kuhusu mashtaka makubwa ya kijinai.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management Dropdown -->
            <div class="nav-item">
                <a href="{{ route('news') }}" class="nav-link">Management <span class="dropdown-arrow">▼</span></a>
                <div class="dropdown-menu">
                    <div class="dropdown-header">
                        <svg viewBox="0 0 24 24" fill="white" width="22" height="22">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                        Management
                    </div>
                    <div class="dropdown-content">
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Top Management</h4>
                                <p>Wasifu na majukumu ya ofisi ya Mkurugenzi Mkuu wa Mashtaka.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        <div class="dropdown-card">
                            <div class="card-header"><span class="badge">Maalum</span></div>
                            <div class="card-body">
                                <h4>Consultative Committee</h4>
                                <p>Wakala wawili wa DPP na majukumu yao.</p>
                                <a href="#" class="read-more">→</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- E-Library Dropdown -->
            <div class="nav-item">
                <a href="{{ route('news') }}" class="nav-link">E-Library</a>
            </div>

            <div class="nav-item">
                <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
            </div>
        </div>
    </div>

    <style>
        .header-container {
            background: url('{{ asset("images/header4.png") }}') no-repeat center center;
            background-size: cover;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
            min-height: 120px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .header-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg,
                rgba(255,255,255,0.9) 0%,
                rgba(255,255,255,0.7) 15%,
                rgba(13,132,190,0.7) 50%,
                rgba(255,255,255,0.7) 85%,
                rgba(255,255,255,0.9) 100%);
            z-index: 1;
        }

        .logo-left {
            width: 100px;
            height: auto;
            position: relative;
            z-index: 3;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .header-text {
            text-align: center;
            color: #0D84BE;
            margin: 0;
            padding: 0;
            flex-grow: 1;
            margin-left: 15px;
            margin-right: 15px;
            position: relative;
            z-index: 3;
            text-shadow: 0 1px 3px rgba(255,255,255,0.8);
        }

        .header-text h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 0 0 3px 0;
            letter-spacing: 0.5px;
            color: #0D84BE;
        }

        .header-text h5 {
            font-size: 1.05rem;
            font-weight: 600;
            margin: 0;
            letter-spacing: 0.3px;
            color: #1181BC;
        }

        .logo-right {
            width: 80px;
            height: auto;
            position: relative;
            z-index: 3;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
        }

        .nav-bar {
            background: linear-gradient(to right, #0D84BE, #1181BC);
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
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
            display: block;
            padding: 8px 15px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            border-radius: 4px;
            transition: all 0.3s ease;
            background-color: rgba(255,255,255,0.1);
        }

        .nav-link:hover {
            background-color: rgba(255,255,255,0.25);
            color: white;
            transform: translateY(-2px);
        }

        .dropdown-arrow {
            margin-left: 4px;
            font-size: 0.7rem;
        }

        /* ========== DROPDOWN MENUS ========== */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            border-radius: 0px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
            width: 620px;
            padding: 20px;
            z-index: 1000;
            display: none;
            font-family: inherit;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .dropdown-header {
            background: #35afec;
            color: white;
            padding: 14px 20px;
            /* border-radius: 6px 6px 0 0; */
            display: flex;
            align-items: center;
            gap: 12px;
            margin: -20px -20px 20px -20px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .dropdown-content {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .dropdown-card {
            border: 1px solid #eaeaea;
            /* border-radius: 8px; */
            overflow: hidden;
            transition: all 0.25s ease;
        }

        .dropdown-card:hover {
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            border-color: #ddd;
        }

        .card-header {
            background: #f9f9f9;
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
        }

        .badge {
            background: rgb(153, 209, 240);
            color: white;
            font-size: 0.72rem;
            padding: 4px 8px;
            /* border-radius: 4px; */
            font-weight: 600;
            display: inline-block;
        }

        .badge.new {
            background: #28a745;
        }

        .card-body {
            padding: 14px;
        }

        .card-body h4 {
            font-size: 0.95rem;
            margin: 0 0 8px 0;
            color: #222;
            font-weight: 600;
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
        }

        .read-more:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                padding: 12px;
                min-height: 140px;
                background-size: contain;
            }

            .header-text {
                margin: 10px 0;
            }

            .header-text h1 {
                font-size: 1.5rem;
            }

            .header-text h5 {
                font-size: 0.95rem;
            }

            .logo-left {
                width: 80px;
            }

            .logo-right {
                width: 60px;
            }

            .nav-container {
                justify-content: flex-start;
                overflow-x: auto;
                padding: 8px;
            }

            .nav-link {
                padding: 6px 10px;
                font-size: 0.85rem;
                white-space: nowrap;
            }

            /* Dropdown responsive */
            .dropdown-menu {
                width: 95vw;
                left: 2.5%;
                transform: none;
                padding: 18px;
            }

            .dropdown-header {
                margin: -18px -18px 18px -18px;
                padding: 12px 18px;
                font-size: 1rem;
            }

            .dropdown-content {
                grid-template-columns: 1fr;
            }

            .card-body h4 {
                font-size: 0.9rem;
            }

            .card-body p {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .header-container {
                min-height: 120px;
            }

            .header-text h1 {
                font-size: 1.3rem;
            }

            .header-text h5 {
                font-size: 0.85rem;
            }

            .logo-left {
                width: 70px;
            }

            .logo-right {
                width: 50px;
            }

            .nav-link {
                padding: 5px 8px;
                font-size: 0.8rem;
            }
        }
    </style>
</div>
