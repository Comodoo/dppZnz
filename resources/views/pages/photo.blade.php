<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo - Dpp znz</title>
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

        /* HERO BANNER - Sawa na About Us page */
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
            color: white;
        }

        .hero-subtitle {
            font-size: 1.4rem;
            opacity: 0.9;
            font-weight: 300;
            color: white;
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

        /* Gallery Container - like news page */
        .gallery-container {
            max-width: 1200px;
            margin: -80px auto 40px;
            position: relative;
            z-index: 3;
            padding: 0 20px;
        }

        /* Main Card Container - overlapping hero banner */
        .main-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            position: relative;
            padding: 40px;
        }

        /* Filter section */
        .filter-section {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 5px solid #0057b7;
        }

        .filter-title {
            font-size: 1.2rem;
            color: #0057b7;
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
            border: 2px solid #0057b7;
            color: #0057b7;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #0057b7;
            color: white;
        }

        /* Gallery grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .gallery-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            border-top: 4px solid #0057b7;
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .gallery-image-container {
            position: relative;
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.05);
        }

        .image-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: rgba(0, 87, 183, 0.9);
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            z-index: 2;
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .image-overlay {
            transform: translateY(0);
        }

        .image-overlay h3 {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .image-overlay p {
            font-size: 14px;
            opacity: 0.9;
            line-height: 1.5;
        }

        .gallery-content {
            padding: 20px;
        }

        .image-title {
            font-size: 18px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .image-date {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .image-date::before {
            content: '📅';
            margin-right: 8px;
        }

        .view-btn {
            display: inline-flex;
            align-items: center;
            color: #0057b7;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 16px;
            background-color: #e6f2ff;
            border-radius: 6px;
            transition: all 0.2s;
            font-size: 15px;
            border: 1px solid #b3d7ff;
            width: 100%;
            justify-content: center;
        }

        .view-btn:hover {
            background-color: #0057b7;
            color: white;
            text-decoration: none;
            transform: translateX(5px);
            border-color: #0057b7;
        }

        .view-btn::after {
            content: '👁️';
            margin-left: 8px;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .view-btn:hover::after {
            transform: translateX(5px);
            color: white;
        }

        /* Stats section */
        .stats-section {
            display: flex;
            justify-content: space-around;
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            margin-top: 40px;
            margin-bottom: 40px;
            border-left: 5px solid #0057b7;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 800;
            color: #0057b7;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 16px;
            color: #6b7280;
            font-weight: 600;
        }

        /* Load More Button */
        .load-more-btn {
            background-color: #0057b7;
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            display: block;
            margin: 40px auto;
            min-width: 200px;
        }

        .load-more-btn:hover {
            background-color: #003f7f;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 87, 183, 0.3);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-banner {
                height: 220px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .gallery-container {
                margin: -60px auto 30px;
                padding: 0 15px;
            }

            .main-card {
                padding: 25px;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }

            .filter-buttons {
                justify-content: center;
            }

            .stats-section {
                flex-direction: column;
                gap: 25px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 0;
            }

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

            .gallery-container {
                margin: -50px auto 20px;
            }

            .main-card {
                padding: 20px;
                border-radius: 8px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .filter-buttons {
                flex-direction: column;
            }

            .filter-section {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Component -->
    @livewire('header')

    <!-- HERO BANNER - Sawa na About Us page -->
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
            <h1 class="hero-title">PHOTO GALLERY</h1>
            <p class="hero-subtitle">Visual stories and moments from Director of Public Prosecutions Zanzibar</p>
        </div>
    </div>

    <!-- MAIN CONTENT - Card that overlaps hero banner -->
    <div class="gallery-container">
        <div class="main-card">
            <!-- Filter section -->
            <div class="filter-section">
                <div class="filter-title">Filter by Category:</div>
                <div class="filter-buttons">
                    <button class="filter-btn active">All Photos</button>
                    <button class="filter-btn">Top Management</button>
                    <button class="filter-btn">Official Events</button>
                    <button class="filter-btn">Official Photograph</button>
                    <button class="filter-btn">Building Projects</button>
                    <button class="filter-btn">ZLRC Training Sessions</button>
                    <button class="filter-btn">Official Visit</button>
                    
                </div>
            </div>

            <!-- Gallery grid -->
            <div class="gallery-grid">
                <!-- Gallery Item 1 -->
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/building.jpg') }}" alt="DPP Building Opening"
                            class="gallery-image">
                        <div class="image-category">Building Projects</div>
                        <div class="image-overlay">
                            <h3>DPP Building Inauguration</h3>
                            <p>Official opening ceremony attended by the President of Zanzibar</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">President Opens New DPP Building</div>
                        <div class="image-date">August 5, 2025</div>
                        <p class="image-description">The Office of the Director of Public Prosecutions received a new
                            building to enhance their operational efficiency.</p>
                        <a target="_blank" href="{{ asset('images/photo/building.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/building1.jpg') }}" alt="DPP Building Opening"
                            class="gallery-image">
                        <div class="image-category">Building Projects</div>
                        <div class="image-overlay">
                            <h3>DPP Building Inauguration</h3>
                            <p>Official opening ceremony attended by the President of Zanzibar</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">President Opens New DPP Building</div>
                        <div class="image-date">August 5, 2025</div>
                        <p class="image-description">The Office of the Director of Public Prosecutions received a new
                            building to enhance their operational efficiency.</p>
                        <a target="_blank" href="{{ asset('images/photo/building1.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/building2.jpg') }}" alt="DPP Building Opening"
                            class="gallery-image">
                        <div class="image-category">Building Projects</div>
                        <div class="image-overlay">
                            <h3>DPP Building Inauguration</h3>
                            <p>Official opening ceremony attended by the President of Zanzibar</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">President Opens New DPP Building</div>
                        <div class="image-date">August 5, 2025</div>
                        <p class="image-description">The Office of the Director of Public Prosecutions received a new
                            building to enhance their operational efficiency.</p>
                        <a target="_blank" href="{{ asset('images/photo/building2.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/building3.jpg') }}" alt="DPP Building Opening"
                            class="gallery-image">
                        <div class="image-category">Building Projects</div>
                        <div class="image-overlay">
                            <h3>DPP Building Inauguration</h3>
                            <p>Official opening ceremony attended by the President of Zanzibar</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">President Opens New DPP Building</div>
                        <div class="image-date">August 5, 2025</div>
                        <p class="image-description">The Office of the Director of Public Prosecutions received a new
                            building to enhance their operational efficiency.</p>
                        <a target="_blank" href="{{ asset('images/photo/building3.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/general.jpg') }}"
                            alt="DPP Officials with Minister and Director" class="gallery-image">
                        <div class="image-category">Official Photograph</div>
                        <div class="image-overlay">
                            <h3>Official Group Photo</h3>
                            <p>DPP officials with the Minister and the Director</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">DPP Officials with Minister and Director</div>
                        <div class="image-date">June 30, 2025</div>
                        <p class="image-description">
                            A general official photograph showing employees of the Office of the Director of Public
                            Prosecutions together with the Minister and the Director.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/general.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/general1.jpg') }}"
                            alt="DPP Officials with Minister and Director" class="gallery-image">
                        <div class="image-category">Official Photograph</div>
                        <div class="image-overlay">
                            <h3>Official Group Photo</h3>
                            <p>DPP officials with the Minister and the Director</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">DPP Officials with Minister and Director</div>
                        <div class="image-date">June 30, 2025</div>
                        <p class="image-description">
                            A general official photograph showing employees of the Office of the Director of Public
                            Prosecutions together with the Minister and the Director.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/general1.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/general2.jpg') }}"
                            alt="DPP Officials with Minister and Director" class="gallery-image">
                        <div class="image-category">Official Photograph</div>
                        <div class="image-overlay">
                            <h3>Official Group Photo</h3>
                            <p>DPP officials with the Minister and the Director</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">DPP Officials with Minister and Director</div>
                        <div class="image-date">June 30, 2025</div>
                        <p class="image-description">
                            A general official photograph showing employees of the Office of the Director of Public
                            Prosecutions together with the Minister and the Director.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/general2.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/general3.jpg') }}"
                            alt="DPP Officials with Minister and Director" class="gallery-image">
                        <div class="image-category">Official Photograph</div>
                        <div class="image-overlay">
                            <h3>Official Group Photo</h3>
                            <p>DPP officials with the Minister and the Director</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">DPP Officials with Minister and Director</div>
                        <div class="image-date">June 30, 2025</div>
                        <p class="image-description">
                            A general official photograph showing employees of the Office of the Director of Public
                            Prosecutions together with the Minister and the Director.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/general3.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>


                <!-- Gallery Item 3 -->
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/training.jpg') }}" alt="Training Workshop"
                            class="gallery-image">
                        <div class="image-category">ZLRC Training Sessions</div>
                        <div class="image-overlay">
                            <h3>ZLRC Training Workshop</h3>
                            <p>Capacity building for ZLRC members</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">ZLRC Training Sessions</div>
                        <div class="image-date">July 15, 2025</div>
                        <p class="image-description">Internal training on case management and digital transformation
                            for prosecutors and staff.</p>
                        <a target="_blank" href="{{ asset('images/photo/training.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/training2.jpg') }}" alt="Training Workshop"
                            class="gallery-image">
                        <div class="image-category">ZLRC Training Sessions</div>
                        <div class="image-overlay">
                            <h3>ZLRC Training Workshop</h3>
                            <p>Capacity building for ZLRC members</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">ZLRC Training Sessions</div>
                        <div class="image-date">July 15, 2025</div>
                        <p class="image-description">Internal training on case management and digital transformation
                            for prosecutors and staff.</p>
                        <a target="_blank" href="{{ asset('images/photo/training2.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/training3.jpg') }}" alt="Training Workshop"
                            class="gallery-image">
                        <div class="image-category">ZLRC Training Sessions</div>
                        <div class="image-overlay">
                            <h3>ZLRC Training Workshop</h3>
                            <p>Capacity building for ZLRC members</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">ZLRC Training Sessions</div>
                        <div class="image-date">July 15, 2025</div>
                        <p class="image-description">Internal training on case management and digital transformation
                            for prosecutors and staff.</p>
                        <a target="_blank" href="{{ asset('images/photo/training3.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>



                <!-- Gallery Item 4 -->
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/guest.jpg') }}"
                            alt="Minister Visiting the Office of the DPP" class="gallery-image">
                        <div class="image-category">Official Visit</div>
                        <div class="image-overlay">
                            <h3>Minister’s Official Visit</h3>
                            <p>The Minister during an official visit to the Office of the Director of Public
                                Prosecutions</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Official Visit by the Minister</div>
                        <div class="image-date">May 20, 2025</div>
                        <p class="image-description">
                            The Minister paid an official visit to the Office of the Director of Public Prosecutions,
                            where he met with DPP leadership and staff and was briefed on the roles and operations of
                            the Office.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/guest.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/guest1.jpg') }}"
                            alt="Minister Visiting the Office of the DPP" class="gallery-image">
                        <div class="image-category">Official Visit</div>
                        <div class="image-overlay">
                            <h3>Minister’s Official Visit</h3>
                            <p>The Minister during an official visit to the Office of the Director of Public
                                Prosecutions</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Official Visit by the Minister</div>
                        <div class="image-date">May 20, 2025</div>
                        <p class="image-description">
                            The Minister paid an official visit to the Office of the Director of Public Prosecutions,
                            where he met with DPP leadership and staff and was briefed on the roles and operations of
                            the Office.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/guest1.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/guest2.jpg') }}"
                            alt="Minister Visiting the Office of the DPP" class="gallery-image">
                        <div class="image-category">Official Visit</div>
                        <div class="image-overlay">
                            <h3>Minister’s Official Visit</h3>
                            <p>The Minister during an official visit to the Office of the Director of Public
                                Prosecutions</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Official Visit by the Minister</div>
                        <div class="image-date">May 20, 2025</div>
                        <p class="image-description">
                            The Minister paid an official visit to the Office of the Director of Public Prosecutions,
                            where he met with DPP leadership and staff and was briefed on the roles and operations of
                            the Office.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/guest2.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/guest3.jpg') }}"
                            alt="Minister Visiting the Office of the DPP" class="gallery-image">
                        <div class="image-category">Official Visit</div>
                        <div class="image-overlay">
                            <h3>Minister’s Official Visit</h3>
                            <p>The Minister during an official visit to the Office of the Director of Public
                                Prosecutions</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Official Visit by the Minister</div>
                        <div class="image-date">May 20, 2025</div>
                        <p class="image-description">
                            The Minister paid an official visit to the Office of the Director of Public Prosecutions,
                            where he met with DPP leadership and staff and was briefed on the roles and operations of
                            the Office.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/guest3.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/guest4.jpg') }}"
                            alt="Minister Visiting the Office of the DPP" class="gallery-image">
                        <div class="image-category">Official Visit</div>
                        <div class="image-overlay">
                            <h3>Minister’s Official Visit</h3>
                            <p>The Minister during an official visit to the Office of the Director of Public
                                Prosecutions</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Official Visit by the Minister</div>
                        <div class="image-date">May 20, 2025</div>
                        <p class="image-description">
                            The Minister paid an official visit to the Office of the Director of Public Prosecutions,
                            where he met with DPP leadership and staff and was briefed on the roles and operations of
                            the Office.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/guest4.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>


                <!-- Gallery Item 5 -->
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting2.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting2.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting1.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting1.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting3.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting3.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting4.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting4.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting5.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting5.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting6.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting6.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting7.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting7.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting8.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting8.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting9.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting9.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting10.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting10.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting11.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting12.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/meeting10.jpg') }}" alt="Official Meeting"
                            class="gallery-image">
                        <div class="image-category">Official Events</div>
                        <div class="image-overlay">
                            <h3>Strategic Planning Meeting</h3>
                            <p>High-level discussions on e-government initiatives</p>
                        </div>
                    </div>
                    <div class="gallery-content">
                        <div class="image-title">Strategic Planning Session</div>
                        <div class="image-date">April 10, 2025</div>
                        <p class="image-description">Directors meeting to discuss future digital transformation
                            projects for Zanzibar government.</p>
                        <a target="_blank" href="{{ asset('images/photo/meeting12.jpg') }}" class="view-btn">View
                            Photo</a>
                    </div>
                </div>







                <!-- Gallery Item 6 -->
                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top1.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top1.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top2.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top2.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top3.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top3.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top4.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top4.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top5.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top5.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top6.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top6.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-image-container">
                        <img src="{{ asset('images/photo/top7.jpg') }}" alt="Director General with Minister"
                            class="gallery-image">
                        <div class="image-category">Top Management</div>
                        <div class="image-overlay">
                            <h3>Senior Leadership</h3>
                            <p>The Director General together with the Minister</p>
                        </div>
                    </div>

                    <div class="gallery-content">
                        <div class="image-title">Director General and Minister</div>
                        <div class="image-date">March 25, 2025</div>
                        <p class="image-description">
                            An official photograph showing the Director General of the Office of the Director of Public
                            Prosecutions together with the Minister during an official engagement.
                        </p>
                        <a target="_blank" href="{{ asset('images/photo/top7.jpg') }}" class="view-btn">
                            View Photo
                        </a>
                    </div>
                </div>

            </div>

            <!-- Statistics section -->
            <div class="stats-section">
                <div class="stat-item">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Total Photos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">6</div>
                    <div class="stat-label">Categories</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">2023-2025</div>
                    <div class="stat-label">Time Period</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Events Covered</div>
                </div>
            </div>

            <!-- Load More Button -->
            {{--  <button class="load-more-btn">Load More Photos →</button>  --}}
        </div>
    </div>

    @livewire('footer')

    <script>
        // JavaScript for filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.textContent.toLowerCase();

                    // Show/hide gallery items based on filter
                    galleryItems.forEach(item => {
                        const category = item.querySelector('.image-category').textContent
                            .toLowerCase();

                        if (filterValue === 'all photos' || filterValue === category) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Add hover effect to gallery items
            galleryItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Load More button functionality
            const loadMoreBtn = document.querySelector('.load-more-btn');
            loadMoreBtn.addEventListener('click', function() {
                alert('More photos would be loaded here in a real application!');
                this.textContent = 'Loading...';
                setTimeout(() => {
                    this.textContent = 'All Photos Loaded ✓';
                    this.disabled = true;
                }, 1500);
            });
        });
    </script>
</body>

</html>
