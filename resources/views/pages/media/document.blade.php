<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyaraka za Kupakua - DPP Zanzibar</title>
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
            max-width: 800px;
            margin: 0 auto;
        }

        /* Documents Section */
        .documents-section {
            margin-bottom: 50px;
        }

        .documents-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            font-weight: 700;
        }

        .documents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .document-card {
            background: linear-gradient(to right, #f8fafc, #f1f5f9);
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .document-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-color: #0056b3;
            background: linear-gradient(to right, #ffffff, #f8fafc);
        }

        .document-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #0056b3, #003366);
        }

        .document-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }

        .document-icon {
            background: linear-gradient(135deg, #0056b3, #003366);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-right: 20px;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(0, 86, 179, 0.2);
        }

        .document-title {
            font-size: 1.5rem;
            color: #003366;
            font-weight: 700;
            line-height: 1.3;
        }

        .document-content {
            margin-top: 15px;
        }

        .document-description {
            font-size: 1.1rem;
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .document-details {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            border-left: 4px solid #0056b3;
        }

        .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 1rem;
            color: #555;
        }

        .detail-item:last-child {
            margin-bottom: 0;
        }

        .detail-icon {
            color: #0056b3;
            margin-right: 12px;
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        .download-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 28px;
            background: linear-gradient(135deg, #0056b3, #003366);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 86, 179, 0.2);
        }

        .download-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 86, 179, 0.3);
            background: linear-gradient(135deg, #0066cc, #004488);
        }

        .download-button .button-icon {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* File Types Styling */
        .file-type {
            display: inline-flex;
            align-items: center;
            padding: 4px 12px;
            background: #e6f2ff;
            color: #0056b3;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-right: 10px;
        }

        /* Download Instructions */
        .instructions {
            background: linear-gradient(to right, #fff8e6, #fff3d9);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #f59e0b;
            margin-top: 50px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .instructions h3 {
            color: #d97706;
            margin-bottom: 15px;
            font-size: 1.3rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .instructions h3::before {
            content: '📥';
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .instructions p {
            color: #92400e;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .instructions ul {
            list-style-type: none;
            padding-left: 20px;
            margin-top: 15px;
        }

        .instructions li {
            color: #92400e;
            line-height: 1.6;
            margin-bottom: 8px;
            position: relative;
            padding-left: 25px;
        }

        .instructions li::before {
            content: '✓';
            color: #f59e0b;
            font-size: 1.2rem;
            position: absolute;
            left: 0;
            top: 0;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                max-width: 95%;
            }
        }

        @media (max-width: 992px) {
            .documents-grid {
                grid-template-columns: 1fr;
                gap: 25px;
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

            .document-card {
                padding: 25px;
            }

            .document-header {
                flex-direction: column;
                align-items: flex-start;
                text-align: center;
            }

            .document-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }

            .document-title {
                text-align: center;
                width: 100%;
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

            .document-card {
                padding: 20px;
            }

            .document-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .document-title {
                font-size: 1.3rem;
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
            <!-- SVG Pattern with document/download icons -->
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

                <!-- Document/Download Icons -->
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
            <h1 class="hero-title">NYARAKA ZA KUPUKUTUA</h1>
            <p class="hero-subtitle">Pakua Nyaraka Muhimu za Ofisi ya Mkurugenzi wa Mashtaka ya Umma - Zanzibar</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Nyaraka za Kupakua</h1>
                    <p class="intro-text">
                        Pakua nyaraka muhimu za Ofisi ya Mkurugenzi wa Mashtaka ya Umma Zanzibar. Nyaraka hizi ni muhimu 
                        kwa utafiti, ushirikiano na kujua zaidi kuhusu utendaji wa ofisi yetu na sheria zinazotumika.
                    </p>
                </div>

                <!-- Documents Section -->
                <div class="documents-section">
                    <h2>Nyaraka Zilizopo</h2>
                    
                    <div class="documents-grid">
                        <!-- Document 1: HOTUBA -->
                        <div class="document-card">
                            <div class="document-header">
                                <div class="document-icon">📜</div>
                                <div class="document-title">HOTUBA</div>
                            </div>
                            <div class="document-content">
                                <p class="document-description">
                                    Hotuba mbalimbali zilizotolewa na Mkurugenzi wa Mashtaka ya Umma kuhusu utendaji wa 
                                    ofisi, maadili ya haki, na masuala muhimu ya jinai nchini Zanzibar.
                                </p>
                                
                                <div class="document-details">
                                    <div class="detail-item">
                                        <span class="detail-icon">📄</span>
                                        <span>Inajumuisha hotuba 5 muhimu</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-icon">📅</span>
                                        <span>Hotuba za miaka 2020-2023</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-icon">⚖️</span>
                                        <span>Masuala ya haki na jinai</span>
                                    </div>
                                </div>
                                
                                <a href="#" class="download-button">
                                    <span class="button-icon">⬇️</span>
                                    Pakua Hotuba (PDF)
                                </a>
                                <span class="file-type">PDF</span>
                                <span class="file-type">5MB</span>
                            </div>
                        </div>

                        <!-- Document 2: Annual Report -->
                        <div class="document-card">
                            <div class="document-header">
                                <div class="document-icon">📊</div>
                                <div class="document-title">RIPOTI YA Mwaka</div>
                            </div>
                            <div class="document-content">
                                <p class="document-description">
                                    Ripoti za mwaka za Ofisi ya DPP zinazoelezea utendaji, mafanikio, changamoto 
                                    na mipango ya baadaye ya ofisi hii muhimu ya kisheria.
                                </p>
                                
                                <div class="document-details">
                                    <div class="detail-item">
                                        <span class="detail-icon">📈</span>
                                        <span>Takwimu na uchambuzi wa utendaji</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-icon">📅</span>
                                        <span>Ripoti za miaka 2019-2023</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-icon">🎯</span>
                                        <span>Mafanikio na malengo ya baadaye</span>
                                    </div>
                                </div>
                                
                                <a href="#" class="download-button">
                                    <span class="button-icon">⬇️</span>
                                    Pakua Ripoti ya Mwaka
                                </a>
                                <span class="file-type">PDF</span>
                                <span class="file-type">8MB</span>
                            </div>
                        </div>

                        <!-- Document 3: DPP Act -->
                        <div class="document-card">
                            <div class="document-header">
                                <div class="document-icon">⚖️</div>
                                <div class="document-title">SHERIA YA DPP</div>
                            </div>
                            <div class="document-content">
                                <p class="document-description">
                                    Sheria ya Ofisi ya Mkurugenzi wa Mashtaka ya Umma, Sheria Na. 2 ya 2010. 
                                    Sheria hii inafafanua madaraka, wajibu na utaratibu wa ofisi hii muhimu.
                                </p>
                                
                                <div class="document-details">
                                    <div class="detail-item">
                                        <span class="detail-icon">📚</span>
                                        <span>Sheria Na. 2 ya 2010</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-icon">📖</span>
                                        <span>Vifungu 40 vyote</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-icon">⚖️</span>
                                        <span>Sheria rasmi ya serikali</span>
                                    </div>
                                </div>
                                
                                <a href="#" class="download-button">
                                    <span class="button-icon">⬇️</span>
                                    Pakua Sheria ya DPP
                                </a>
                                <span class="file-type">PDF</span>
                                <span class="file-type">3MB</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Download Instructions -->
                <div class="instructions">
                    <h3>Maelekezo ya Kupakua</h3>
                    <p>
                        Ili kuhakikisha kupakua kwa usalama na ufanisi, fuata maelekezo haya:
                    </p>
                    <ul>
                        <li>Bonyeza kitufe cha "Pakua" kilicho chini ya kila nyaraka</li>
                        <li>Hifadhi faili mahali salama kwenye kifaa chako</li>
                        <li>Faili zote ni katika muundo wa PDF zinazoweza kusomwa kwenye programu zozote za kusoma PDF</li>
                        <li>Kwa matatizo yoyote ya kupakua, wasiliana nasi kupitia mawasiliano yaliyo kwenye ukurasa</li>
                        <li>Nyaraka zote ni za umma na zinapatikana kwa wote bila malipo</li>
                    </ul>
                    <p style="margin-top: 15px; font-weight: 600;">
                        ⚠️ Kumbuka: Uhakika wa nyaraka hizi ni wa taarifa tu. Kwa matumizi rasmi, tafadhali rejelea nakala halisi za serikali.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')

    <script>
        // JavaScript for download functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Sample document URLs - Replace with actual file paths
            const documents = {
                'HOTUBA': '/documents/hotuba.pdf',
                'Annual Report': '/documents/annual-report.pdf',
                'DPP Act': '/documents/dpp-act.pdf'
            };

            // Add download functionality to buttons
            const downloadButtons = document.querySelectorAll('.download-button');
            
            downloadButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get the document title from the parent card
                    const card = this.closest('.document-card');
                    const titleElement = card.querySelector('.document-title');
                    const documentTitle = titleElement.textContent.trim();
                    
                    // Get the corresponding document URL
                    let downloadUrl = '';
                    if (documentTitle.includes('HOTUBA')) {
                        downloadUrl = documents['HOTUBA'];
                    } else if (documentTitle.includes('RIPOTI')) {
                        downloadUrl = documents['Annual Report'];
                    } else if (documentTitle.includes('SHERIA')) {
                        downloadUrl = documents['DPP Act'];
                    }
                    
                    // Create temporary download link
                    if (downloadUrl) {
                        const link = document.createElement('a');
                        link.href = downloadUrl;
                        link.download = documentTitle.toLowerCase().replace(/\s+/g, '-') + '.pdf';
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                        
                        // Show download confirmation
                        const originalText = this.innerHTML;
                        this.innerHTML = '📥 Inapakua...';
                        this.style.background = 'linear-gradient(135deg, #28a745, #20c997)';
                        
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.style.background = 'linear-gradient(135deg, #0056b3, #003366)';
                        }, 2000);
                    }
                });
            });
        });
    </script>
</body>
</html>