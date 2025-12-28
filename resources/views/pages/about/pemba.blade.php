<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afisi ya Uratibu Pemba - Ofisi ya Mkurugenzi wa Mashtaka</title>
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
            max-width: 800px;
            margin: 0 auto;
        }

        /* Office Description Section */
        .office-description {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            margin-bottom: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .office-description h2 {
            font-size: 1.6rem;
            color: #003366;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .office-description p {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.8;
            margin-bottom: 15px;
        }

        /* Single Image Section */
        .single-image-section {
            margin-top: 40px;
            text-align: center;
        }

        .single-image-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
            text-align: center;
        }

        .single-image-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            position: relative;
            border-top: 4px solid #0057b7;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .single-image-container:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        }

        .single-image-wrapper {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .single-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .single-image-container:hover .single-image {
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

        .single-image-container:hover .image-overlay {
            transform: translateY(0);
        }

        .image-overlay h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .image-overlay p {
            font-size: 15px;
            opacity: 0.9;
            line-height: 1.5;
        }

        .single-image-content {
            padding: 25px;
            text-align: left;
        }

        .single-image-title {
            font-size: 20px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 10px;
            line-height: 1.4;
            text-align: center;
        }

        .single-image-date {
            color: #6b7280;
            font-size: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .single-image-date::before {
            content: '📅';
            margin-right: 8px;
        }

        .single-image-description {
            color: #4b5563;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: center;
        }

        .view-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #0D84BE;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.2s;
            border: 2px solid #0D84BE;
            width: fit-content;
            margin: 0 auto;
            display: block;
            max-width: 200px;
        }

        .view-btn:hover {
            background-color: white;
            color: #0D84BE;
            text-decoration: none;
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

            .single-image-wrapper {
                height: 350px;
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

            .office-description {
                padding: 20px;
            }

            .single-image-wrapper {
                height: 300px;
            }

            .single-image-content {
                padding: 20px;
            }

            .single-image-title {
                font-size: 18px;
            }

            .single-image-description {
                font-size: 15px;
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

            .single-image-container {
                border-radius: 8px;
            }

            .single-image-wrapper {
                height: 250px;
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

                <!-- Palm Tree Icons (for Pemba theme) -->
                <g opacity="0.4">
                    <path d="M150,180 Q160,150 170,180 T190,180" stroke="white" stroke-width="1" fill="none" />
                    <path d="M170,200 L170,220" stroke="white" stroke-width="1" />
                    <path d="M450,180 Q460,150 470,180 T490,180" stroke="white" stroke-width="1" fill="none" />
                    <path d="M470,200 L470,220" stroke="white" stroke-width="1" />
                    <path d="M750,180 Q760,150 770,180 T790,180" stroke="white" stroke-width="1" fill="none" />
                    <path d="M770,200 L770,220" stroke="white" stroke-width="1" />
                    <path d="M1050,180 Q1060,150 1070,180 T1090,180" stroke="white" stroke-width="1" fill="none" />
                    <path d="M1070,200 L1070,220" stroke="white" stroke-width="1" />
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
            <h1 class="hero-title">AFISI YA URATIBU PEMBA</h1>
            <p class="hero-subtitle">Ofisi ya Mkurugenzi wa Mashtaka - Tawi la Pemba</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Afisi ya Uratibu Pemba</h1>
                    <p class="intro-text">
                        Kituo muhimu cha usimamizi na uratibu wa shughuli za kiutendaji kwenye Kisiwa cha Pemba
                    </p>
                </div>

                <!-- Office Description Section -->
                <div class="office-description">
                    <h2>Jukumu na Madhumuni</h2>
                    <p>
                        <strong>Afisi ya Uratibu Pemba</strong> itahusika na uratibu wa shughuli zote za 
                        Afisi ya Mkurugenzi wa Mashtaka Pemba. Kituo hiki kinachukua jukumu muhimu katika 
                        kuhakikisha usimamizi bora na utekelezaji wa mashtaka kwenye Kisiwa cha Pemba.
                    </p>
                    <p>
                        Kama tawi la Ofisi ya Mkurugenzi wa Mashtaka Zanzibar, Afisi ya Uratibu Pemba 
                        inalenga kuleta huduma za kitaalamu za kisheria karibu na wananchi, kuharakisha 
                        utaratibu wa mashtaka, na kuhakikisha haki inatolewa kwa wakati na usawa.
                    </p>
                </div>

                <!-- Single Image Section -->
                <div class="single-image-section">
                    <h2>Jengo la Afisi ya Uratibu Pemba</h2>
                    
                    <div class="single-image-container">
                        <div class="single-image-wrapper">
                            <img src="{{ asset('images/photo/branch.jpg') }}"
                                 alt="Afisi ya Uratibu Pemba" class="single-image">
                            <div class="image-category">Afisi Rasmi</div>
                            <div class="image-overlay">
                                <h3>Afisi ya Uratibu Pemba</h3>
                                <p>Jengo rasmi la Ofisi ya Mkurugenzi wa Mashtaka Pemba</p>
                            </div>
                        </div>
                        <div class="single-image-content">
                            <div class="single-image-title">Jengo la Afisi ya Uratibu Pemba</div>
                            <div class="single-image-date">Inatumika tangu 2020</div>
                            <p class="single-image-description">
                                Jengo hili linatumika kama makao makuu ya uratibu wa shughuli za kiutendaji 
                                na usimamizi wa mashtaka kwenye Kisiwa cha Pemba. Jengo limebuniwa kwa 
                                ustadi na linatoa mazingira mazuri kwa wafanyakazi na wateja.
                            </p>
                            <a target="_blank" href="{{ asset('images/pemba/pemba-office.jpg') }}" class="view-btn">Tazama Picha</a>
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