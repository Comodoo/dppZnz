<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video - MKURUGENZI ATEMBELEA CHUO CHA MAFUNZO PEMBA - DPP Zanzibar</title>
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

        /* Video Section */
        .video-section {
            margin-bottom: 50px;
        }

        .video-container {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            border-left: 5px solid #0056b3;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .video-title {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            text-align: center;
            font-weight: 700;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        /* VIDEO PLAYER STYLES */
        .video-player {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            background: #000;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-player iframe,
        .video-player video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #003366, #0057b7);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .video-placeholder.hidden {
            display: none;
        }

        .play-button {
            background: rgba(255, 255, 255, 0.9);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #0056b3;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background: white;
            transform: scale(1.1);
        }

        .video-description {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-top: 20px;
            padding: 0 20px;
        }

        /* Video Details */
        .video-details {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-top: 30px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #0056b3;
        }

        .detail-icon {
            background: #0056b3;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .detail-content h4 {
            color: #003366;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .detail-content p {
            color: #666;
            font-size: 0.95rem;
        }

        /* Share Section */
        .share-section {
            background: linear-gradient(to right, #fff8e6, #fff3d9);
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #f59e0b;
            margin-top: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .share-section h3 {
            color: #d97706;
            margin-bottom: 20px;
            font-size: 1.3rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .share-section h3::before {
            content: '📢';
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .share-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .share-button {
            display: inline-flex;
            align-items: center;
            padding: 12px 25px;
            background: white;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            text-decoration: none;
            color: #333;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .share-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .share-button.facebook {
            border-color: #1877f2;
            color: #1877f2;
        }

        .share-button.twitter {
            border-color: #1da1f2;
            color: #1da1f2;
        }

        .share-button.whatsapp {
            border-color: #25d366;
            color: #25d366;
        }

        .share-button.email {
            border-color: #ea4335;
            color: #ea4335;
        }

        .share-button .button-icon {
            margin-right: 8px;
            font-size: 1.2rem;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                max-width: 95%;
            }
        }

        @media (max-width: 992px) {
            .details-grid {
                grid-template-columns: 1fr;
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

            .video-title {
                font-size: 1.5rem;
            }

            .play-button {
                width: 60px;
                height: 60px;
                font-size: 2rem;
            }

            .share-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .share-button {
                justify-content: center;
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

            .video-container {
                padding: 20px;
            }

            .video-title {
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
            <!-- SVG Pattern with video/play icons -->
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

                <!-- Video/Play Icons -->
                <g opacity="0.4">
                    <!-- Play button triangles -->
                    <path d="M100,200 L120,210 L100,220 Z" fill="none" stroke="white" stroke-width="2" />
                    <path d="M300,200 L320,210 L300,220 Z" fill="none" stroke="white" stroke-width="2" />
                    <path d="M500,200 L520,210 L500,220 Z" fill="none" stroke="white" stroke-width="2" />
                    <path d="M700,200 L720,210 L700,220 Z" fill="none" stroke="white" stroke-width="2" />
                    <path d="M900,200 L920,210 L900,220 Z" fill="none" stroke="white" stroke-width="2" />
                    <path d="M1100,200 L1120,210 L1100,220 Z" fill="none" stroke="white" stroke-width="2" />
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
            <h1 class="hero-title">VIDEO: MKURUGENZI ATEMBELEA CHUO CHA MAFUNZO PEMBA</h1>
            <p class="hero-subtitle">Ziara ya Mkuu wa Mashtaka ya Umma Zanzibar kwenye Chuo cha Mafunzo Pemba</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>MKURUGENZI WA MASHTAKA ZANZIBAR MH. MGENI JAILANI JECHA ZIARANI ATEMBELEA CHUO CHA MAFUNZO PEMBA</h1>
                    <p class="intro-text">
                        Tazama video ya ziara rasmi ya Mkurugenzi wa Mashtaka ya Umma Zanzibar, Mh. Mgeni Jailani Jecha, 
                        kwenye Chuo cha Mafunzo Pemba. Ziara hii ililenga kuimarisha uhusiano na kujadili ushirikiano kati ya 
                        Ofisi ya DPP na taasisi ya elimu hii muhimu.
                    </p>
                </div>

                <!-- Video Section -->
                <div class="video-section">
                    <div class="video-container">
                        <h2 class="video-title">Video ya Ziara Rasmi</h2>
                        
                        <div class="video-wrapper">
                            <!-- Video Player - Can embed any video link -->
                            <div class="video-player" id="videoPlayer">
                                <!-- Placeholder that will be replaced with video -->
                                <div class="video-placeholder" id="videoPlaceholder">
                                    <div class="play-button">▶</div>
                                    <div style="position: absolute; top: 20px; left: 20px; font-size: 1rem; opacity: 0.8;">
                                        Bonyeza kucheza video
                                    </div>
                                </div>
                                <!-- Video will be embedded here -->
                            </div>
                        </div>
                        
                        <p class="video-description">
                            Video hii inaonyesha ziara kamili ya Mkurugenzi wa Mashtaka ya Umma Zanzibar kwenye Chuo cha Mafunzo Pemba, 
                            ikiwa na mazungumzo, mikutano, na shughuli mbalimbali zilizofanyika wakati wa ziara hii muhimu.
                        </p>
                    </div>

                    <!-- Video Details -->
                    <div class="video-details">
                        <h3 style="color: #003366; margin-bottom: 20px; font-size: 1.3rem;">Maelezo ya Video</h3>
                        
                        <div class="details-grid">
                            <!-- Detail 1 -->
                            <div class="detail-item">
                                <div class="detail-icon">📅</div>
                                <div class="detail-content">
                                    <h4>Tarehe ya Ziara</h4>
                                    <p>Ilichukuliwa hivi karibuni</p>
                                </div>
                            </div>

                            <!-- Detail 2 -->
                            <div class="detail-item">
                                <div class="detail-icon">⏱️</div>
                                <div class="detail-content">
                                    <h4>Muda wa Video</h4>
                                    <p>Dakika 15:30</p>
                                </div>
                            </div>

                            <!-- Detail 3 -->
                            <div class="detail-item">
                                <div class="detail-icon">🎬</div>
                                <div class="detail-content">
                                    <h4>Aina ya Video</h4>
                                    <p>Ziara rasmi na mazungumzo</p>
                                </div>
                            </div>

                            <!-- Detail 4 -->
                            <div class="detail-item">
                                <div class="detail-icon">📍</div>
                                <div class="detail-content">
                                    <h4>Mahali</h4>
                                    <p>Chuo cha Mafunzo Pemba</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Share Section -->
                    <div class="share-section">
                        <h3>Shiriki Video Hii</h3>
                        <div class="share-buttons">
                            <a href="#" class="share-button facebook">
                                <span class="button-icon">📘</span>
                                Facebook
                            </a>
                            <a href="#" class="share-button twitter">
                                <span class="button-icon">🐦</span>
                                Twitter
                            </a>
                            <a href="#" class="share-button whatsapp">
                                <span class="button-icon">💬</span>
                                WhatsApp
                            </a>
                            <a href="#" class="share-button email">
                                <span class="button-icon">✉️</span>
                                Barua pepe
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')

    <script>
        // Video loading functionality - PASTE YOUR VIDEO LINK HERE
        const YOUR_VIDEO_LINK = "PASTE_YOUR_VIDEO_LINK_HERE"; // Weka link ya video yako hapa
        
        document.addEventListener('DOMContentLoaded', function() {
            loadVideo(YOUR_VIDEO_LINK);
        });

        function loadVideo(videoUrl) {
            const videoPlayer = document.getElementById('videoPlayer');
            const videoPlaceholder = document.getElementById('videoPlaceholder');
            
            if (!videoUrl || videoUrl === "PASTE_YOUR_VIDEO_LINK_HERE") {
                // Video link haijaanza
                return;
            }
            
            // Validate URL
            try {
                new URL(videoUrl);
            } catch (e) {
                console.error('Link si sahihi:', videoUrl);
                return;
            }
            
            // Show loading state
            videoPlaceholder.innerHTML = '<div class="play-button">⏳</div><div style="position: absolute; top: 20px; left: 20px; font-size: 1rem; opacity: 0.8;">Inapakia...</div>';
            
            // Create video element based on URL type
            let videoElement;
            
            if (videoUrl.includes('youtube.com/watch') || videoUrl.includes('youtu.be/')) {
                // Extract YouTube video ID
                let videoId;
                if (videoUrl.includes('youtube.com/watch')) {
                    const urlParams = new URLSearchParams(new URL(videoUrl).search);
                    videoId = urlParams.get('v');
                } else if (videoUrl.includes('youtu.be/')) {
                    videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
                }
                
                if (videoId) {
                    videoElement = document.createElement('iframe');
                    videoElement.src = `https://www.youtube.com/embed/${videoId}?autoplay=0&rel=0`;
                    videoElement.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                    videoElement.allowFullscreen = true;
                }
            } else if (videoUrl.includes('vimeo.com/')) {
                // Extract Vimeo video ID
                const videoId = videoUrl.split('vimeo.com/')[1].split('?')[0];
                if (videoId) {
                    videoElement = document.createElement('iframe');
                    videoElement.src = `https://player.vimeo.com/video/${videoId}`;
                    videoElement.allow = 'autoplay; fullscreen; picture-in-picture';
                    videoElement.allowFullscreen = true;
                }
            } else if (videoUrl.match(/\.(mp4|webm|ogg|mov|avi|wmv|flv|mkv)$/i)) {
                // Direct video file
                videoElement = document.createElement('video');
                videoElement.controls = true;
                const source = document.createElement('source');
                source.src = videoUrl;
                source.type = getVideoType(videoUrl);
                videoElement.appendChild(source);
            } else if (videoUrl.includes('youtube.com/embed/')) {
                // YouTube embed link
                videoElement = document.createElement('iframe');
                videoElement.src = videoUrl;
                videoElement.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
                videoElement.allowFullscreen = true;
            }
            
            // If we couldn't create a video element, show error
            if (!videoElement) {
                videoPlaceholder.innerHTML = '<div class="play-button">❌</div><div style="position: absolute; top: 20px; left: 20px; font-size: 1rem; opacity: 0.8;">Link si sahihi au haijaungwa mkono</div>';
                setTimeout(() => {
                    videoPlaceholder.innerHTML = '<div class="play-button">▶</div><div style="position: absolute; top: 20px; left: 20px; font-size: 1rem; opacity: 0.8;">Bonyeza kucheza video</div>';
                }, 2000);
                return;
            }
            
            // Clear video player and add new video
            videoPlayer.innerHTML = '';
            videoPlayer.appendChild(videoElement);
            
            // Hide placeholder
            videoPlaceholder.classList.add('hidden');
            
            console.log('Video imepakiwa kwa mafanikio!');
        }
        
        function getVideoType(url) {
            if (url.includes('.mp4')) return 'video/mp4';
            if (url.includes('.webm')) return 'video/webm';
            if (url.includes('.ogg')) return 'video/ogg';
            if (url.includes('.mov')) return 'video/quicktime';
            return 'video/mp4';
        }
        
        // Play video when clicking placeholder
        document.getElementById('videoPlaceholder').addEventListener('click', function() {
            loadVideo(YOUR_VIDEO_LINK);
        });

        // Share functionality
        document.querySelectorAll('.share-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const platform = this.classList.contains('facebook') ? 'Facebook' :
                                this.classList.contains('twitter') ? 'Twitter' :
                                this.classList.contains('whatsapp') ? 'WhatsApp' : 'Barua pepe';
                
                alert('Video ingeshirikiwa kwenye ' + platform + '. Katika tovuti halisi, hii ingefungua kiungo cha kushiriki.');
            });
        });

        // Video details toggle (for mobile)
        document.addEventListener('DOMContentLoaded', function() {
            const detailsGrid = document.querySelector('.details-grid');
            const detailItems = document.querySelectorAll('.detail-item');
            
            detailItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        this.classList.toggle('active');
                    }
                });
            });
        });
    </script>
</body>
</html>