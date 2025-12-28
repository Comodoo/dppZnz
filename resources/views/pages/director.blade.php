<!DOCTYPE html>
<html lang="sw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dpp znz</title>
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
            display: flex;
            flex-wrap: wrap;
            min-height: 600px;
        }

        /* Director Info Sidebar */
        .director-sidebar {
            flex: 0 0 320px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            background: linear-gradient(to bottom, #f0f7ff 0%, #e6f2ff 100%);
        }

        .director-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: calc(100% - 220px);
            background: linear-gradient(to bottom, #f0f7ff 0%, #e6f2ff 100%);
            z-index: 0;
        }

        /* Director Photo - Updated for image support */
        .director-photo {
            width: 220px;
            height: 280px;
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            border-radius: 8px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .director-photo::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #003366, #0056b3);
        }

        .director-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
        }

        .director-photo:hover img {
            transform: scale(1.05);
        }

        .photo-placeholder {
            font-size: 4rem;
            color: #0056b3;
            opacity: 0.3;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
        }

        .director-info {
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .director-name {
            font-size: 1.4rem;
            font-weight: 700;
            color: #003366;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .director-title {
            font-size: 1.1rem;
            color: #0056b3;
            margin-bottom: 25px;
            font-weight: 600;
            padding-bottom: 15px;
            border-bottom: 2px solid #0056b3;
            width: 100%;
        }

        /* Contact Section */
        .director-contact {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            width: 100%;
            margin-top: 20px;
            border-left: 4px solid #0056b3;
            position: relative;
            z-index: 2;
        }

        .contact-title {
            font-size: 1rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 10px;
            text-align: left;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 0.95rem;
            color: #555;
            text-align: left;
        }

        .contact-icon {
            margin-right: 10px;
            color: #0056b3;
            font-size: 1.1rem;
            min-width: 20px;
        }

        /* Message Content */
        .message-content {
            flex: 1;
            padding: 40px;
            min-width: 300px;
            background: white;
        }

        .message-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e0e0e0;
        }

        .message-header h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 10px;
        }

        .message-date {
            color: #666;
            font-style: italic;
            font-size: 0.95rem;
        }

        .message-body {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #444;
        }

        .message-body p {
            margin-bottom: 25px;
            text-align: justify;
        }

        .message-body strong {
            color: #003366;
            font-weight: 700;
        }

        .highlight-box {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 25px;
            border-radius: 8px;
            border-left: 5px solid #0056b3;
            margin: 30px 0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .highlight-box p {
            margin: 0;
            font-style: italic;
            color: #003366;
            font-weight: 500;
        }

        .signature-section {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            text-align: right;
        }

        .signature {
            font-family: 'Brush Script MT', cursive;
            font-size: 2.5rem;
            color: #003366;
            margin-bottom: 10px;
        }

        .signature-name {
            font-weight: 700;
            color: #003366;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .signature-title {
            color: #666;
            font-size: 1rem;
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
                flex-direction: column;
            }

            .director-sidebar {
                flex: 1;
                width: 100%;
                padding: 25px;
            }

            .director-sidebar::before {
                height: 100%;
            }

            .message-content {
                padding: 30px;
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

            .director-sidebar,
            .message-content {
                padding: 20px;
            }

            .director-photo {
                width: 180px;
                height: 230px;
            }

            .message-body {
                font-size: 1rem;
            }

            .signature {
                font-size: 2rem;
            }
        }

        @media (max-width: 400px) {
            .hero-banner {
                height: 160px;
            }

            .hero-title {
                font-size: 1.4rem;
            }

            .director-name {
                font-size: 1.2rem;
            }

            .message-header h2 {
                font-size: 1.5rem;
            }
        }

        /* Swahili font styling */
        .swahili-text {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>
    <!-- Header Component -->
    @livewire('header')

    <!-- HERO BANNER - Same as About Us page -->
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
            <h1 class="hero-title">FROM THE DIRECTOR GENERAL</h1>
            <p class="hero-subtitle">Welcome Message and Information from the Director General</p>
        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Director Info Sidebar -->
                <div class="director-sidebar">
                    <!-- OPTION 1: With an actual image (uncomment this and comment out Option 2) -->

                    <div class="director-photo">
                        <img src="{{ asset('../images/director.jpg') }}" alt="Eng.  Mkurugenzi Mkuu">
                    </div>


                    {{-- <!-- OPTION 2: Placeholder with emoji (default) -->
                    <div class="director-photo">
                        <div class="photo-placeholder">👨‍⚖️</div>
                    </div> --}}

                    <div class="director-info">
                        <div class="director-name">Mh. Mgeni J. Jecha</div>
                        <div class="director-title">Director General</div>

                        {{-- <div class="director-contact">
                            <div class="contact-title">Mawasiliano:</div>
                            <div class="contact-item">
                                <span class="contact-icon">📧</span>
                                <span>info@dppznz.go.tz</span>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">📞</span>
                                <span>+255 24 223 1234</span>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">🏢</span>
                                <span>Ofisi ya Mkurugenzi Mkuu, Zanzibar</span>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">🌐</span>
                                <span>www.dppznz.go.tz</span>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <!-- Message Content -->
                <!-- Message Content -->
                <div class="message-content">
                    <div class="message-header">
                        <h2>Director of Public Prosecutions' Message</h2>
                        <div class="message-date">Date: </div>
                    </div>

                    <div class="message-body">
                        <p>
                            On behalf of the Director of Public Prosecutions Office, I would like to take this
                            opportunity to welcome
                            you all to our respectful website. This platform serves as our digital gateway to the
                            public, providing
                            transparent access to information about our operations, services, and commitment to justice.
                        </p>

                        <div class="highlight-box">
                            <p>
                                This website has been established for the purpose of enabling people to access
                                information concerning
                                our office in general and other important information on matters relating to the
                                prosecution of criminal cases.
                            </p>
                        </div>

                        <p>
                            The Office of the Director of Public Prosecutions Zanzibar (DPPZNZ) is a constitutionally
                            established
                            institution responsible for managing and conducting all criminal prosecutions on behalf of
                            the Government
                            of Zanzibar. We operate as an independent authority mandated to administer justice, ensure
                            fairness, and
                            uphold the rule of law in accordance with the legal framework of Zanzibar.
                        </p>

                        <p>
                            Our office plays a central role in the criminal justice system by guiding investigative
                            bodies, reviewing
                            case files, initiating prosecutions, and representing the state in all courts. We work in
                            close collaboration
                            with justice-sector institutions to strengthen peace, stability, and socio-economic
                            development through
                            proper administration of justice.
                        </p>

                        <p>
                            The Office of DPP will be grateful for those who visit this website and provide us with
                            their recommendations
                            and contributions for the purposes of improvement. We welcome all good and positive
                            contributions to this
                            website as we strive to enhance our services and public engagement.
                        </p>

                        <p>
                            We remain committed to delivering transparent, professional, and impartial prosecution
                            services that meet
                            national legal standards and uphold the rights of all individuals. The Office ensures that
                            all prosecutions
                            are conducted with integrity, accountability, and strict adherence to the laws of Zanzibar.
                        </p>

                        <p style="font-weight: 600; color: #003366; margin-top: 25px;">
                            Thank you all for visiting our website and for your continued support in our mission to
                            serve justice.
                        </p>
                    </div>

                    {{-- <div class="signature-section">
                        <div class="signature">Benedict B. Ndomba</div>
                        <div class="signature-name">Eng. Benedict B. Ndomba</div>
                        <div class="signature-title">Director of Public Prosecutions</div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    
    @livewire('footer')

    <script>
        // JavaScript function to update the director's photo
        function updateDirectorPhoto(imageUrl, altText = "Director Photo") {
            const directorPhotoDiv = document.querySelector('.director-photo');

            // Create image element
            const img = document.createElement('img');
            img.src = imageUrl;
            img.alt = altText;

            // Clear the current content and add the image
            directorPhotoDiv.innerHTML = '';
            directorPhotoDiv.appendChild(img);

            // Optional: Add loading state
            img.onload = function() {
                directorPhotoDiv.style.background = 'none';
            };

            img.onerror = function() {
                // If image fails to load, show placeholder
                directorPhotoDiv.innerHTML = '<div class="photo-placeholder">👨‍⚖️</div>';
                console.error('Failed to load director photo from:', imageUrl);
            };
        }

        // Example usage (uncomment to use):
        // updateDirectorPhoto('https://example.com/path/to/director-photo.jpg', 'Eng. Benedict B. Ndomba - Mkurugenzi Mkuu');

        // Or use with Laravel Blade syntax:
        // updateDirectorPhoto('{{ asset('storage/directors/benedict-ndomba.jpg') }}', 'Eng. Benedict B. Ndomba');
    </script>
</body>

</html>
