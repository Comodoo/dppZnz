<div>
    <div class="section-container">
        <div class="content-wrapper">
            <h2 class="text-4xl font-extrabold text-[#0D84BE] mb-12">
            <span class="text-yellow-400">Our Strategic</span>  Partners
        </h2>
        <h5 class="text-xl font-extrabold text-[#0D84BE] mb-8">The Zanzibar Law Resource Centre (ZLRC) is currently offer the following Courses.</h5>
        <br>
            
            <div class="grid">
                @foreach($items as $item)
                    <div class="card" 
                         data-color="{{ $item['color'] }}"
                         wire:click="openPage('{{ $item['title'] }}')">

                        <div class="card-header">
                            <div class="icon icon-{{ $item['color'] }}">{{ $item['icon'] }}</div>
                            <h2 class="card-title">{{ $item['title'] }}</h2>
                        </div>

                        <div class="card-content">
                            {{ $item['description'] }}
                        </div>

                        <a  target="_blank" href="{{$item['link']}}" 
                           class="read-guide" 
                           wire:click.stop="openGuide('{{ $item['title'] }}')">
                            Read Guide
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        /* Section container with white background covering full width */
        .section-container {
            background-color: white;
            width: 100%;
            padding: 40px 0;
            margin: 0;
        }
        
        /* Content wrapper with max-width and centered */
        .content-wrapper {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        /* Card with NO background color - transparent */
        .card {
            background-color: transparent;
            border-radius: 8px;
            padding: 25px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            /* Shadow only on hover */
            box-shadow: none;
            border: 1px solid #e2e8f0;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            border-color: transparent;
        }

        /* Hover background color based on card color - now visible since card is transparent */
        .card[data-color="blue"]:hover {
            background-color: rgba(66, 153, 225, 0.05);
            border-left: 4px solid #4299e1;
        }

        .card[data-color="green"]:hover {
            background-color: rgba(72, 187, 120, 0.05);
            border-left: 4px solid #48bb78;
        }

        .card[data-color="purple"]:hover {
            background-color: rgba(159, 122, 234, 0.05);
            border-left: 4px solid #9f7aea;
        }

        .card[data-color="orange"]:hover {
            background-color: rgba(245, 158, 11, 0.05);
            border-left: 4px solid #f59e0b;
        }

        /* Hover animation lines - TOP LINE */
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, currentColor, transparent);
            transition: left 0.5s ease-in-out;
        }

        /* Hover animation lines - BOTTOM LINE */
        .card::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, currentColor, transparent);
            transition: right 0.5s ease-in-out;
        }

        /* Animation on hover - TOP LINE moves forward */
        .card:hover::before {
            left: 100%;
        }

        /* Animation on hover - BOTTOM LINE moves forward */
        .card:hover::after {
            right: 100%;
        }

        /* Animation when hover ends - TOP LINE moves backward */
        .card:not(:hover)::before {
            transition: left 0.8s ease-in-out;
        }

        /* Animation when hover ends - BOTTOM LINE moves backward */
        .card:not(:hover)::after {
            transition: right 0.8s ease-in-out;
        }

        /* Color for each card based on icon color */
        .card[data-color="blue"]::before,
        .card[data-color="blue"]::after {
            color: #4299e1;
        }

        .card[data-color="green"]::before,
        .card[data-color="green"]::after {
            color: #48bb78;
        }

        .card[data-color="purple"]::before,
        .card[data-color="purple"]::after {
            color: #9f7aea;
        }

        .card[data-color="orange"]::before,
        .card[data-color="orange"]::after {
            color: #f59e0b;
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-weight: bold;
            transition: transform 0.3s ease;
            font-size: 18px;
        }

        .card:hover .icon {
            transform: scale(1.1);
        }

        .icon-blue {
            background-color: #4299e1;
        }

        .icon-green {
            background-color: #48bb78;
        }

        .icon-purple {
            background-color: #9f7aea;
        }

        .icon-orange {
            background-color: #f59e0b;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2d3748;
            transition: color 0.3s ease;
        }

        /* Change title color on hover based on card color */
        .card[data-color="blue"]:hover .card-title {
            color: #4299e1;
        }

        .card[data-color="green"]:hover .card-title {
            color: #48bb78;
        }

        .card[data-color="purple"]:hover .card-title {
            color: #9f7aea;
        }

        .card[data-color="orange"]:hover .card-title {
            color: #f59e0b;
        }

        .card-content {
            color: #4a5568;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .read-guide {
            display: inline-flex;
            align-items: center;
            color: #4299e1;
            text-decoration: none;
            font-weight: 500;
            padding: 10px 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
            background-color: rgba(66, 153, 225, 0.05);
            font-size: 0.95rem;
        }

        /* Change read-guide color based on card color */
        .card[data-color="blue"] .read-guide {
            color: #4299e1;
            background-color: rgba(66, 153, 225, 0.05);
        }

        .card[data-color="green"] .read-guide {
            color: #48bb78;
            background-color: rgba(72, 187, 120, 0.05);
        }

        .card[data-color="purple"] .read-guide {
            color: #9f7aea;
            background-color: rgba(159, 122, 234, 0.05);
        }

        .card[data-color="orange"] .read-guide {
            color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.05);
        }

        .read-guide:hover {
            text-decoration: underline;
            transform: translateX(5px);
        }

        /* Change read-guide hover color based on card color */
        .card[data-color="blue"] .read-guide:hover {
            background-color: rgba(66, 153, 225, 0.15);
        }

        .card[data-color="green"] .read-guide:hover {
            background-color: rgba(72, 187, 120, 0.15);
        }

        .card[data-color="purple"] .read-guide:hover {
            background-color: rgba(159, 122, 234, 0.15);
        }

        .card[data-color="orange"] .read-guide:hover {
            background-color: rgba(245, 158, 11, 0.15);
        }

        .read-guide::after {
            content: '→';
            margin-left: 8px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .read-guide:hover::after {
            transform: translateX(5px);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .section-container {
                padding: 30px 0;
            }
            
            .content-wrapper {
                padding: 0 15px;
            }
            
            h1 {
                font-size: 1.8rem;
                margin-bottom: 25px;
            }
            
            .grid {
                gap: 20px;
            }
            
            .card {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .section-container {
                padding: 20px 0;
            }
            
            h1 {
                font-size: 1.5rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
            }
            
            .icon {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }
            
            .card-title {
                font-size: 1.1rem;
            }
        }
    </style>

    <script>
        // Optional: Add JavaScript functionality
        document.addEventListener('livewire:initialized', function() {
            // Any additional JavaScript can go here
        });
    </script>
</div>