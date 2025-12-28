<div>
    {{-- The whole world belongs to you. --}}
    <style>
     .news-section-wrapper {
    position: relative;
    background-color: #f8f8f8;
    padding: 80px 20px;
    overflow: hidden;
}

.spider-pattern {
    background-image: url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23d0d7e1' stroke-width='0.7'%3E%3Cpath d='M0 60h120M60 0v120M0 0l120 120M120 0L0 120'/%3E%3C/g%3E%3C/svg%3E");
    background-size: 150px 150px;
    opacity: 0.5;
    position: absolute;
    inset: 0;
    z-index: 0;
}
   
    .news-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .guide {
        text-align: center;
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 36px;
        font-weight: 800;
        color: #0D84BE;
        margin-bottom: 10px;
    }

    .section-subtitle {
        font-size: 18px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 15px;
    }

    .badge {
        background-color: #e0f2fe;
        color: #0D84BE;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
        border: 2px solid #0D84BE;
        display: inline-block;
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    .news-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        overflow: hidden;
        transition: all 0.3s ease;
        border-top: 4px solid #0D84BE;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 22px rgba(0,0,0,0.15);
    }

    .news-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .news-tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #0D84BE;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
    }

    .news-content {
        padding: 20px;
    }

    .news-date {
        font-size: 14px;
        color: #6b7280;
        margin-bottom: 10px;
    }

    .news-title {
        font-size: 18px;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .read-more-link {
        display: inline-flex;
        align-items: center;
        color: #0D84BE;
        font-weight: 600;
        text-decoration: none;
        padding: 8px 14px;
        background: #e0f2fe;
        border-radius: 6px;
        transition: all 0.2s;
    }

    .read-more-link:hover {
        background: #0D84BE;
        color: white;
        transform: translateX(5px);
    }

    .read-more-btn {
        background: #0D84BE;
        color: white;
        padding: 12px 24px;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
    }

    .read-more-btn:hover {
        background: #0a6a9e;
    }
</style>

<div class="news-section-wrapper">
    <!-- Spider Pattern Background -->
    <div class="spider-pattern"></div>

    <!-- Content -->
    <div class="news-container relative z-10">
        <!-- Section Header -->
        <div class="guide">
            <h2 class="section-title text-4xl font-extrabold text-[#0D84BE] mb-12">
                <span class="text-yellow-400">Latest</span> News
            </h2>

            <h5 class="text-xl font-extrabold text-[#0D84BE] mb-8">
                Stay updated with the latest news from the Office of the Director of Public Prosecutions Zanzibar
            </h5>

            <div class="badge">DPP Zanzibar Updates</div>
        </div>

        <!-- News Grid -->
        <div class="news-grid">
            @foreach($news as $item)
                <div class="news-card">
                    <div style="position: relative;">
                        <img src="{{ $item['image'] }}" alt="News Image" class="news-image">
                        <div class="news-tag">{{ $item['tag'] }}</div>
                    </div>

                    <div class="news-content">
                        <div class="news-date">{{ $item['date'] }}</div>
                        <div class="news-title">{{ $item['title'] }}</div>
                        <a href="{{ $item['link'] }}" class="read-more-link">Read More →</a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- View All -->
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('news') }}" class="read-more-btn">View All News →</a>
        </div>
    </div>
</div>


</div>
