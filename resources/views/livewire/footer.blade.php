<footer>
    <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
        } */

        /* Main footer wrapper with background image and gradient overlay */
        .footer-wrapper {
            position: relative;
            width: 100%;
            margin-top: 100px;
            color: white;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
            background:
                /* Gradient overlay - same color */
                linear-gradient(135deg, rgba(30, 136, 229, 0.90), rgba(25, 118, 210, 0.90)),
                /* Background image */
                url('{{ asset('images/footer.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Modern top border effect */
        .footer-top-border {
            position: relative;
            width: 100%;
            height: 40px;
            background: linear-gradient(135deg, rgba(30, 136, 229, 0.8), rgba(25, 118, 210, 0.8));
            overflow: hidden;
            border-bottom: 2px solid rgba(255, 215, 0, 0.3);
        }

        .footer-top-border::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg,
                    transparent 0%,
                    #ffd700 20%,
                    #ffd700 80%,
                    transparent 100%);
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.5);
        }

        /* Main footer content section */
        .footer-main {
            position: relative;
            padding: 80px 20px 40px;
            z-index: 2;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 3;
        }

        .footer-column h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: #ffd700;
            border-radius: 2px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column li {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .footer-column a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-column a:hover {
            color: #ffd700;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            margin: 8px 0;
            line-height: 1.6;
        }

        .phone-numbers {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }

        .phone-number {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffd700;
            font-weight: 500;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
            justify-content: center;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .social-icon:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .social-icon i {
            color: white;
            font-size: 1.2rem;
        }

        /* Copyright section */
        .copyright {
            position: relative;
            padding: 40px 20px 30px;
            z-index: 2;
        }

        .copyright-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 30px;
            position: relative;
            z-index: 3;
        }

        .copyright-column h4 {
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            color: #ffd700;
        }

        .copyright-column h4::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background: #ffd700;
            border-radius: 2px;
        }

        .copyright-column p {
            margin: 0 0 10px 0;
            font-size: 0.9rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .copyright-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .copyright-links li {
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .copyright-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.2s ease;
            font-size: 0.9rem;
        }

        .copyright-links a:hover {
            color: #ffd700;
        }

        .copyright-bottom {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        /* Floating buttons
        .floating-buttons {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }

        .floating-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ffd700;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1e88e5;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: transform 0.2s ease, background 0.2s ease;
        }

        .floating-btn:hover {
            transform: scale(1.1);
            background: #ffca28;
        }

        .floating-btn i {
            pointer-events: none;
        } */

        /* Grid lines effect */
        .grid-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 1;
        }

        .grid-line {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
        }

        .grid-line.vertical {
            width: 1px;
            height: 100%;
        }

        .grid-line.horizontal {
            width: 100%;
            height: 1px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .copyright-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            /* .floating-buttons {
                right: 10px;
                top: 90%;
                transform: translateY(-90%);
            } */

            .footer-main {
                padding: 70px 15px 30px;
            }

            .footer-top-border {
                height: 30px;
            }

            .copyright {
                padding: 30px 15px 20px;
            }

            .footer-wrapper {
                background-attachment: scroll;
            }
        }

        @media (max-width: 480px) {
            .floating-buttons {
                display: none;
            }

            .footer-main {
                padding: 60px 15px 20px;
            }

            .footer-top-border {
                height: 20px;
            }

            .phone-numbers {
                flex-direction: column;
                gap: 10px;
            }

            .copyright {
                padding: 20px 15px 15px;
            }

            .footer-wrapper {
                background:
                    linear-gradient(135deg, rgba(30, 136, 229, 0.95), rgba(25, 118, 210, 0.95)),
                    url('{{ asset('images/footer.jpg') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        }
    </style>

    <div class="footer-wrapper">
        <!-- Top border effect -->
        <div class="footer-top-border"></div>

        <!-- Main Footer Content -->
        <div class="footer-main">
            <!-- Grid lines for modern look - BADILISHA HAPA -->
            <div class="grid-lines" id="footer-grid-lines"></div>

            <div class="footer-container">
                <!-- WASILIANA NASI -->
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>{{ $contactInfo['office'] }}</li>
                        {{-- <li>{{ $contactInfo['address'] }}</li> --}}
                        <li>{{ $contactInfo['postal'] }}</li>
                        <li>Email: <a href="mailto:{{ $contactInfo['email'] }}">{{ $contactInfo['email'] }}</a></li>
                        <li>Tel: {{ $contactInfo['phone'] }}</li>
                        <li>Fax: {{ $contactInfo['fax'] }}</li>
                    </ul>

                    {{-- <div class="contact-info">
                        <h3>FIKA TIMU YETU</h3>
                        <p>{{ $supportInfo['description'] }}</p>
                        <div class="phone-numbers">
                            @foreach ($supportInfo['phones'] as $phone)
                            <div class="phone-number">
                                <i class="fas fa-phone"></i> {{ $phone }}
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                </div>

                <!-- TOVUTI MASHUHURI -->
                <div class="footer-column">
                    <h3>Related Links</h3>
                    <ul>
                        @foreach ($popularSites['sites'] as $site => $mcit_site)
                            <li><a target="_blank" href="{{ $mcit_site }}">{{ $site }}</a></li>
                        @endforeach
                    </ul>


                </div>

                <!-- HUDUMA MTANDAO -->
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        @foreach ($onlineServices as $service => $links)
                            <li><a target="_blank" href="{{$links}}">{{ $service }}</a></li>
                        @endforeach
                    </ul>

                    <div class="social-icons" style="margin-top: 30px; text-align: center;">
                        <h3 style="color: white; font-size: 0.9rem; margin-bottom: 10px;">UNGA NA SISI</h3>
                        <a href="{{ $socialLinks['facebook'] }}" class="social-icon"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="{{ $socialLinks['twitter'] }}" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $socialLinks['youtube'] }}" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="{{ $socialLinks['instagram'] }}" class="social-icon"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            {{-- <!-- Floating Buttons -->
            <div class="floating-buttons">
                <div class="floating-btn" title="Search">
                    <i class="fas fa-search"></i>
                </div>
                <div class="floating-btn" title="Support">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="floating-btn" title="Chat">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="floating-btn" title="Report">
                    <i class="fas fa-flag"></i>
                </div>
                <div class="floating-btn" title="Language">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="floating-btn" title="Settings">
                    <i class="fas fa-cog"></i>
                </div>
            </div> --}}
        </div>

        <!-- Copyright Section -->
        <div class="copyright">
            <div class="copyright-container">
                <!-- Column 1: Copyright info -->
                <div class="copyright-column">
                    <h4>© 2025 Office of the Director of Public Prosecutions Zanzibar (DPPZNZ). All Rights Reserved.
                    </h4>
                    <p>All rights reserved. All materials on this website are the property of the Office of the Director
                        of Public Prosecutions Zanzibar.</p>


                </div>

                {{-- <!-- Column 2: Quick links -->
                <div class="copyright-column">
                    <h4>VIUNGO VYA HARAKA</h4>
                    <ul class="copyright-links">
                        <li><a href="#">Sera ya Faragha</a></li>
                        <li><a href="#">Masharti ya Matumizi</a></li>
                        <li><a href="#">Sera ya Cookies</a></li>
                        <li><a href="#">Ramani ya Tovuti</a></li>
                    </ul>
                </div> --}}

                <!-- Column 3: Additional info -->
                {{-- <div class="copyright-column">
                    <h4>TAARIFA ZAIDI</h4>
                    <ul class="copyright-links">
                        <li><a href="#">Wasiliana Nasi</a></li>
                        <li><a href="#">Maswali Yanayoulizwa Mara kwa Mara (FAQ)</a></li>
                        <li><a href="#">Vidokezo vya Usalama</a></li>
                        <li><a href="#">Matangazo ya Serikali</a></li>
                    </ul>
                </div> --}}
            </div>

            <!-- Bottom copyright line -->
            <div class="copyright-bottom">
                <p>This website is managed by the Office of the Director
                    of Public Prosecutions Zanzibar.</p>
            </div>
        </div>
    </div>

    <script>
        // Generate grid lines dynamically - BADILISHA HAPA
        document.addEventListener('DOMContentLoaded', function() {
            const gridLines = document.getElementById('footer-grid-lines');
            if (gridLines) {
                const columns = 12;
                const rows = 8;

                // Create vertical lines
                for (let i = 1; i < columns; i++) {
                    const line = document.createElement('div');
                    line.className = 'grid-line vertical';
                    line.style.left = `${(i / columns) * 100}%`;
                    gridLines.appendChild(line);
                }

                // Create horizontal lines
                for (let i = 1; i < rows; i++) {
                    const line = document.createElement('div');
                    line.className = 'grid-line horizontal';
                    line.style.top = `${(i / rows) * 100}%`;
                    gridLines.appendChild(line);
                }
            }
        });
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</footer>
