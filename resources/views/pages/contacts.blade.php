<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - DPP Zanzibar</title>
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

        /* Digital Pattern Overlay - Same as other pages */
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
            max-width: 900px;
            margin: 0 auto;
        }

        /* Contact Layout Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        /* Contact Information Section */
        .contact-info-section {
            background: linear-gradient(to right, #f0f7ff, #e6f2ff);
            padding: 30px;
            border-radius: 10px;
            border-left: 5px solid #0056b3;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .contact-info-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #cce0ff;
            font-weight: 700;
        }

        /* Office Card */
        .office-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            border: 1px solid #e0e0e0;
        }

        .office-card:last-child {
            margin-bottom: 0;
        }

        .office-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .office-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: #0056b3;
        }

        .office-title {
            font-size: 1.4rem;
            color: #003366;
            font-weight: 700;
            margin: 0;
        }

        .office-details {
            display: grid;
            gap: 15px;
        }

        .detail-item {
            display: flex;
            align-items: flex-start;
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #0056b3, #003366);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .detail-icon i {
            color: white;
            font-size: 1.2rem;
        }

        .detail-content {
            flex-grow: 1;
        }

        .detail-label {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 5px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .detail-value {
            font-size: 1.1rem;
            color: #333;
            font-weight: 500;
            line-height: 1.4;
        }

        .detail-value a {
            color: #0056b3;
            text-decoration: none;
            transition: all 0.2s;
        }

        .detail-value a:hover {
            color: #003366;
            text-decoration: underline;
        }

        /* Map Section */
        .map-section {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e0e0e0;
        }

        .map-section h2 {
            font-size: 1.8rem;
            color: #003366;
            margin-bottom: 20px;
            padding: 20px 20px 10px;
            font-weight: 700;
        }

        .contact-map {
            width: 100%;
            height: 400px;
            position: relative;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .map-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .map-overlay h4 {
            color: #003366;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .map-overlay p {
            color: #555;
            font-size: 0.9rem;
            margin: 0;
        }

        /* Working Hours Section */
        .hours-section {
            background: linear-gradient(to right, #fff8e6, #fff3d9);
            padding: 25px;
            border-radius: 10px;
            margin-top: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border-left: 5px solid #f59e0b;
        }

        .hours-section h3 {
            color: #d97706;
            margin-bottom: 20px;
            font-size: 1.4rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .hours-section h3::before {
            content: '🕒';
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .hours-item {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ffe4b2;
        }

        .hours-item h4 {
            color: #d97706;
            font-size: 1rem;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .hours-item p {
            color: #92400e;
            font-size: 1rem;
            line-height: 1.5;
            margin: 0;
        }

        /* Contact Form Section */
        .form-section {
            background: linear-gradient(to right, #f0fff4, #e6ffe6);
            padding: 30px;
            border-radius: 10px;
            margin-top: 40px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border-left: 5px solid #28a745;
        }

        .form-section h3 {
            color: #28a745;
            margin-bottom: 20px;
            font-size: 1.4rem;
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .form-section h3::before {
            content: '✉️';
            margin-right: 10px;
            font-size: 1.4rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #555;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: linear-gradient(135deg, #0056b3, #003366);
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, #003366, #002244);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .submit-btn i {
            margin-left: 10px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                max-width: 95%;
            }
        }

        @media (max-width: 992px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .contact-map {
                height: 350px;
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

            .office-card {
                padding: 20px;
            }

            .contact-map {
                height: 300px;
            }

            .hours-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .hero-banner {
                height: 180px;
            }

            .hero-title {
                font-size: 1.6rem;
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

            .contact-info-section {
                padding: 20px;
            }

            .detail-item {
                flex-direction: column;
            }

            .detail-icon {
                margin-bottom: 10px;
                margin-right: 0;
            }

            .form-grid {
                grid-template-columns: 1fr;
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
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            <h1 class="hero-title">CONTACT US</h1>
            <p class="hero-subtitle">Get in Touch with the Office of the Director of Public Prosecutions Zanzibar</p>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="main-card">
            <div class="content-wrapper">
                <!-- Page Header -->
                <div class="page-header">
                    <h1>Contact the Office of DPP Zanzibar</h1>
                    <p class="intro-text">
                        We welcome inquiries, feedback, and communication from the public, legal professionals, 
                        and all stakeholders. Reach out to us through any of the following channels.
                    </p>
                </div>

                <!-- Contact Grid: Info + Map -->
                <div class="contact-grid">
                    <!-- Contact Information -->
                    <div class="contact-info-section">
                        <h2>Contact Information</h2>
                        
                        <div class="office-card">
                            <div class="office-header">
                                <div class="office-icon">🏛️</div>
                                <h3 class="office-title">Office of the DPP Zanzibar</h3>
                            </div>
                            
                            <div class="office-details">
                                <!-- Address -->
                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="detail-content">
                                        <div class="detail-label">Address</div>
                                        <div class="detail-value">
                                            P.O. Box 1327, Zanzibar, Tanzania
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Email -->
                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="detail-content">
                                        <div class="detail-label">Email Address</div>
                                        <div class="detail-value">
                                            <a href="mailto:dpp@dppznz.go.tz">dpp@dppznz.go.tz</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Telephone -->
                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="detail-content">
                                        <div class="detail-label">Telephone</div>
                                        <div class="detail-value">
                                            <a href="tel:+255242235567">+255 24 223 5567</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Fax -->
                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="fas fa-fax"></i>
                                    </div>
                                    <div class="detail-content">
                                        <div class="detail-label">Fax</div>
                                        <div class="detail-value">
                                            +255 24 223 55564
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Emergency -->
                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="detail-content">
                                        <div class="detail-label">Emergency Contact</div>
                                        <div class="detail-value">
                                            <a href="tel:+255777123456">+255 777 123 456</a> (24/7)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Section -->
                    <div class="map-section">
                        <h2>Our Location</h2>
                        <div class="contact-map">
                            <iframe 
                                title="ODPP Zanzibar Location" 
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d888.3733127615553!2d39.2011611!3d-6.1722259!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd08934d511bd%3A0x5b97cfbfcddcbcc6!2sDpp%20Office!5e1!3m2!1sen!2stz!4v1755862591893!5m2!1sen!2stz" 
                                width="100%" 
                                height="100%" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade" 
                                style="border: 0;">
                            </iframe>
                            <div class="map-overlay">
                                <h4>DPP Office Location</h4>
                                <p>Located in Zanzibar City center, easily accessible from main roads</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="hours-section">
                    <h3>Office Working Hours</h3>
                    <div class="hours-grid">
                        <div class="hours-item">
                            <h4>Monday - Thursday</h4>
                            <p>8:00 AM - 4:00 PM</p>
                        </div>
                        <div class="hours-item">
                            <h4>Friday</h4>
                            <p>8:00 AM - 12:30 PM</p>
                            <p>2:30 PM - 4:00 PM</p>
                        </div>
                        <div class="hours-item">
                            <h4>Saturday</h4>
                            <p>9:00 AM - 12:00 PM</p>
                            <p>(Emergency cases only)</p>
                        </div>
                        <div class="hours-item">
                            <h4>Sunday & Public Holidays</h4>
                            <p>Closed</p>
                            <p>(Emergency contact available)</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="form-section">
                    <h3>Send Us a Message</h3>
                    <form id="contact-form">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" required placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="case">Case Inquiry</option>
                                    <option value="complaint">Complaint</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="legal">Legal Advice</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required placeholder="Type your message here..."></textarea>
                        </div>
                        <button type="submit" class="submit-btn">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Component -->
    @livewire('footer')

    <script>
        // Form submission handling
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            
            // Show success message (in a real app, this would send to a server)
            alert(`Thank you ${name}! Your message regarding "${subject}" has been received. We will respond to ${email} within 2-3 working days.`);
            
            // Reset form
            this.reset();
        });

        // Make phone numbers clickable
        document.querySelectorAll('a[href^="tel:"]').forEach(link => {
            link.addEventListener('click', function(e) {
                const phoneNumber = this.getAttribute('href').replace('tel:', '');
                if (confirm(`Call ${phoneNumber}?`)) {
                    window.location.href = this.getAttribute('href');
                }
            });
        });

        // Make email links clickable
        document.querySelectorAll('a[href^="mailto:"]').forEach(link => {
            link.addEventListener('click', function(e) {
                const email = this.getAttribute('href').replace('mailto:', '');
                if (confirm(`Send email to ${email}?`)) {
                    window.location.href = this.getAttribute('href');
                }
            });
        });
    </script>
</body>
</html>