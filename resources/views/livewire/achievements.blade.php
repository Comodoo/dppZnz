<div>
    <div class="achievements-section">
        {{-- <div class="section-header">
            <h1>Our Achievements</h1>
            <p>We are proud of our accomplishments in serving the community and ensuring justice for all.</p>
        </div> --}}

            <h2 class="text-4xl font-extrabold text-[#0D84BE] mb-12">
            <span class="text-yellow-400">Our</span> Achievements
        </h2>

        <div class="achievements-grid">
            @foreach($achievementCards as $index => $achievement)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <!-- Picture/Photo at the top of the card -->
                            <div class="card-picture">
                                @if($achievement['front_image'])
                                    <img
                                        src="{{ asset($achievement['front_image']) }}"
                                        alt="{{ $achievement['title'] }}"
                                        class="card-image"
                                        onerror="this.onerror=null; this.style.display='none'; this.parentElement.innerHTML='<i class=&quot;fas {{ $achievement['front_icon'] }} picture-icon&quot;></i>';"
                                    >
                                @else
                                    <i class="fas {{ $achievement['front_icon'] }} picture-icon"></i>
                                @endif
                            </div>
                            <div class="achievement-number">{{ $achievement['number'] }}<span class="plus-sign">+</span></div>
                            <div class="achievement-title">{{ $achievement['title'] }}</div>
                        </div>
                        <div class="flip-card-back">
                            <div class="card-picture">
                                @if($achievement['back_image'])
                                    <img
                                        src="{{ asset($achievement['back_image']) }}"
                                        alt="{{ $achievement['title'] }}"
                                        class="card-image"
                                        onerror="this.onerror=null; this.style.display='none'; this.parentElement.innerHTML='<i class=&quot;fas {{ $achievement['back_icon'] }} picture-icon&quot;></i>';"
                                    >
                                @else
                                    <i class="fas {{ $achievement['back_icon'] }} picture-icon"></i>
                                @endif
                            </div>
                            <div class="achievement-number">{{ $achievement['number'] }}<span class="plus-sign">+</span></div>
                            <div class="achievement-title">{{ $achievement['title'] }}</div>
                            <p class="achievement-description">{{ $achievement['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .achievements-section {
             background-color: #f5f5f5;
            padding: 80px 20px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .section-header {
            text-align: center;
            margin-bottom: 70px;
            max-width: 800px;
        }

        .section-header h1 {
            font-size: 3rem;
            color: #1e40af;
            margin-bottom: 20px;
            font-weight: 800;
            position: relative;
            display: inline-block;
        }

        .section-header h1::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, #3b82f6, #1e40af);
            border-radius: 3px;
        }

        .section-header p {
            font-size: 1.2rem;
            color: #64748b;
            margin: 30px auto 0;
            line-height: 1.7;
            max-width: 700px;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            width: 100%;
            max-width: 1300px;
        }

        /* Flip Card Container */
        .flip-card {
            background-color: transparent;
            perspective: 1000px;
            height: 340px;
            cursor: pointer;
        }

        /* Flip Card Inner Container */
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(30, 64, 175, 0.12);
        }

        /* Flip on hover */
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        /* Front and back sides */
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 25px;
        }

        /* Front side styling */
        .flip-card-front {
            background: linear-gradient(145deg, #3b82f6, #1e40af);
            color: white;
        }

        /* Back side styling */
        .flip-card-back {
            background: linear-gradient(145deg, #f0f9ff, #dbeafe);
            color: #1e40af;
            transform: rotateY(180deg);
            border: 3px solid #bfdbfe;
            justify-content: flex-start;
            padding-top: 50px;
        }

        /* Picture/Photo at the top of the card */
        .card-picture {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .flip-card-front .card-picture {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.15));
            border: 4px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .flip-card-back .card-picture {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.25), rgba(30, 64, 175, 0.15));
            border: 4px solid rgba(59, 130, 246, 0.4);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.2);
        }

        /* Image styling */
        .card-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .picture-icon {
            font-size: 52px;
            color: white;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .flip-card-back .picture-icon {
            color: #3b82f6;
        }

        .flip-card:hover .card-image,
        .flip-card:hover .flip-card-front .picture-icon {
            transform: scale(1.3) rotate(15deg);
        }

        .flip-card:hover .flip-card-back .picture-icon {
            transform: scale(1.3) rotate(-15deg);
        }

        /* Achievement number */
        .achievement-number {
            font-size: 3.2rem;
            font-weight: 900;
            margin-bottom: 10px;
            line-height: 1;
        }

        .flip-card-front .achievement-number {
            color: white;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .flip-card-back .achievement-number {
            color: #1e40af;
            margin-bottom: 20px;
        }

        /* Achievement title */
        .achievement-title {
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .flip-card-front .achievement-title {
            color: rgba(255, 255, 255, 0.95);
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .flip-card-back .achievement-title {
            color: #334155;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        /* Back side description */
        .achievement-description {
            font-size: 1rem;
            color: #475569;
            line-height: 1.6;
            margin-top: 10px;
            max-width: 90%;
        }

        /* Plus sign */
        .plus-sign {
            font-size: 2rem;
            font-weight: 800;
            vertical-align: top;
            margin-left: 5px;
        }

        .flip-card-front .plus-sign {
            color: rgba(255, 255, 255, 0.9);
        }

        .flip-card-back .plus-sign {
            color: #1e40af;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .achievements-grid {
                grid-template-columns: repeat(2, 1fr);
                max-width: 800px;
            }

            .flip-card {
                height: 330px;
            }
        }

        @media (max-width: 768px) {
            .achievements-section {
                padding: 60px 15px;
            }

            .section-header h1 {
                font-size: 2.5rem;
            }

            .section-header p {
                font-size: 1.1rem;
            }

            .achievements-grid {
                grid-template-columns: 1fr;
                max-width: 450px;
                gap: 25px;
            }

            .flip-card {
                height: 320px;
            }

            .achievement-number {
                font-size: 2.8rem;
            }

            .card-picture {
                width: 100px;
                height: 100px;
            }

            .picture-icon {
                font-size: 46px;
            }
        }

        @media (max-width: 480px) {
            .achievements-section {
                padding: 50px 15px;
            }

            .section-header {
                margin-bottom: 50px;
            }

            .section-header h1 {
                font-size: 2.2rem;
            }

            .section-header p {
                font-size: 1rem;
            }

            .flip-card {
                height: 300px;
            }

            .card-picture {
                width: 90px;
                height: 90px;
            }

            .picture-icon {
                font-size: 42px;
            }

            .achievement-number {
                font-size: 2.5rem;
            }
        }

        /* Animation for page load */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .flip-card {
            animation: fadeInUp 0.7s ease-out forwards;
            opacity: 0;
        }

        .flip-card:nth-child(1) { animation-delay: 0.1s; }
        .flip-card:nth-child(2) { animation-delay: 0.2s; }
        .flip-card:nth-child(3) { animation-delay: 0.3s; }
        .flip-card:nth-child(4) { animation-delay: 0.4s; }

        /* Mobile flip functionality */
        .mobile-flip {
            transform: rotateY(180deg) !important;
        }
    </style>

    <script>
        // Add click functionality for mobile devices
        document.addEventListener('DOMContentLoaded', function() {
            const flipCards = document.querySelectorAll('.flip-card');

            // For mobile devices, toggle flip on click
            if (window.innerWidth <= 768) {
                flipCards.forEach(card => {
                    card.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const inner = this.querySelector('.flip-card-inner');
                        inner.classList.toggle('mobile-flip');
                    });
                });

                // Close other cards when one is clicked
                flipCards.forEach(card => {
                    card.addEventListener('click', function() {
                        flipCards.forEach(otherCard => {
                            if (otherCard !== this) {
                                const otherInner = otherCard.querySelector('.flip-card-inner');
                                otherInner.classList.remove('mobile-flip');
                            }
                        });
                    });
                });
            }
        });
    </script>
</div>
