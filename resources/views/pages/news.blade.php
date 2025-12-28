<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Dpp znz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
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
            margin-bottom: 40px;
        }

        .hero-content {
            z-index: 2;
            max-width: 800px;
        }

        .hero-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            font-weight: 300;
            max-width: 700px;
            margin: 0 auto;
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

        /* News Container */
        .news-container {
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
            padding: 40px;
        }

        /* Section header - kubadilishwa kwa kuwa katikati */
        .section-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px 0;
        }

        .guide {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 800;
            color: #0D84BE;
            margin-bottom: 15px;
        }

        .section-subtitle {
            font-size: 20px;
            font-weight: 800;
            color: #0D84BE;
            margin-bottom: 30px;
        }

        .badge {
            background-color: #e0f2fe;
            color: #0D84BE;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 15px;
            border: 2px solid #0D84BE;
        }

        .read-more-btn {
            background-color: #0D84BE;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.2s;
            font-size: 16px;
        }

        .read-more-btn:hover {
            background-color: #0a6a9e;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 132, 190, 0.3);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .news-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            border-top: 4px solid #0D84BE;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .news-image-container {
            position: relative;
            overflow: hidden;
        }

        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-card:hover .news-image {
            transform: scale(1.05);
        }

        .news-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: #0D84BE;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            z-index: 2;
        }

        .news-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .news-date {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }

        .news-date::before {
            content: '📅';
            margin-right: 8px;
        }

        .news-title {
            font-size: 18px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 16px;
            line-height: 1.5;
            flex-grow: 1;
        }

        .news-description {
            color: #4b5563;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .read-more-link {
            display: inline-flex;
            align-items: center;
            color: #0D84BE;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 16px;
            background-color: #e0f2fe;
            border-radius: 6px;
            transition: all 0.2s;
            font-size: 15px;
            border: 1px solid #bae6fd;
            margin-top: auto;
            width: fit-content;
        }

        .read-more-link:hover {
            background-color: #0D84BE;
            color: white;
            text-decoration: none;
            transform: translateX(5px);
            border-color: #0D84BE;
        }

        .read-more-link::after {
            content: '→';
            margin-left: 8px;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .read-more-link:hover::after {
            transform: translateX(5px);
            color: white;
        }

        /* Filter section */
        .filter-section {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 5px solid #0D84BE;
        }

        .filter-title {
            font-size: 1.2rem;
            color: #0D84BE;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .filter-btn {
            background: white;
            border: 2px solid #0D84BE;
            color: #0D84BE;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #0D84BE;
            color: white;
        }

        @media (max-width: 768px) {
            .hero-banner {
                height: 220px;
                margin-bottom: 30px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .news-container {
                margin: -60px auto 30px;
                padding: 0 15px;
            }

            .main-card {
                padding: 25px;
            }

            .news-grid {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 28px;
            }

            .section-subtitle {
                font-size: 18px;
            }

            .filter-buttons {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-banner {
                height: 180px;
                padding: 15px;
            }

            .hero-title {
                font-size: 1.6rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .news-container {
                margin: -50px auto 20px;
            }

            .main-card {
                padding: 20px;
                border-radius: 8px;
            }

            .section-title {
                font-size: 24px;
            }

            .news-card {
                border-radius: 8px;
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
            <h1 class="hero-title">LATEST NEWS & UPDATES</h1>
            <p class="hero-subtitle">Stay informed with the latest developments from the Office of Public Prosecutions
            </p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="news-container">
        <div class="main-card">
            <!-- Optional Filter Section -->
            <div class="filter-section">
                <div class="filter-title">Filter by Category:</div>
                <div class="filter-buttons">
                    <button class="filter-btn active">All News</button>
                    <button class="filter-btn">Official Announcements</button>
                    <button class="filter-btn">Legal Updates</button>
                    <button class="filter-btn">Community Events</button>
                    <button class="filter-btn">DPP Updates</button>
                </div>
            </div>

            <!-- News Grid -->
            <div class="news-grid">
                <!-- News Card 1: The president of Zanzibar Opens New DPP Building -->
                <div class="news-card">
                    <div class="news-image-container">
                        <img src="{{ asset('images/news/guest.jpg') }}" alt="DPP Building Opening"
                            class="news-image">
                        <div class="news-tag">Official Opening</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">August 5, 2025</div>
                        <div class="news-title">The President of Zanzibar Opens New DPP Building</div>
                        <p class="news-description">The Office of the Director of Public Prosecutions have received the
                            new building from the President of Zanzibar as the key to increase efficiency in their
                            works.</p>
                        <a href="#" class="read-more-link">Read More</a>
                    </div>
                </div>

                <!-- News Card 2: New Guidelines for Case Management -->
                <div class="news-card">
                    <div class="news-image-container">
                        <img src="{{ asset('images/news/general.jpg') }}" alt="Case Management Guidelines"
                            class="news-image">
                        <div class="news-tag">Legal Update</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">July 20, 2025</div>
                        <div class="news-title">New Guidelines for Case Management</div>
                        <p class="news-description">Updated case management procedures have been released to streamline
                            court processes and reduce backlog.</p>
                        <a href="#" class="read-more-link">Read More</a>
                    </div>
                </div>

                <!-- News Card 3: Community Outreach in Zanzibar North Region -->
                <div class="news-card">
                    <div class="news-image-container">
                        <img src="{{ asset('images/news/meeting2.jpg') }}" alt="Community Outreach"
                            class="news-image">
                        <div class="news-tag">Community</div>
                    </div>
                    <div class="news-content">
                        <div class="news-date">June 30, 2025</div>
                        <div class="news-title">Community Outreach in Zanzibar North Region</div>
                        <p class="news-description">Prosecutors visited local communities to raise awareness on
                            citizens' rights and the criminal justice process.</p>
                        <a href="#" class="read-more-link">Read More</a>
                    </div>
                </div>

                <!-- News Card 4: Additional News -->
                <div class="news-card">
                    <div class="news-image-container">
                        <img src="{{ asset('images/news/meeting1.jpg') }}"
                            alt="DPP Working Session" class="news-image">
                        <div class="news-tag">DPP UPDATE</div>
                    </div>

                    <div class="news-content">
                        <div class="news-date">August 22, 2025</div>
                        <div class="news-title">
                            Working session on strengthening criminal prosecution and case management
                        </div>
                        <p class="news-description">
                            Officials from the Office of the Director of Public Prosecutions held a working
                            session with key justice sector stakeholders to enhance prosecution procedures,
                            case coordination, and adherence to the rule of law.
                        </p>
                        <a href="#" class="read-more-link">Read More</a>
                    </div>
                </div>

            </div>

            <!-- Centered Read More button -->
            {{--  <div style="text-align: center; margin-top: 40px;">
                <button class="read-more-btn">View All News →</button>
            </div>  --}}
        </div>
    </div>

    @livewire('footer')
</body>

</html>
