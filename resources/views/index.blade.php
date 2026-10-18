<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Supahub.plate | Discover the World’s Top Designers & Templates</title>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mona Sans', sans-serif; }
        body { background-color: #ffffff; color: #0d0c22; padding-bottom: 4rem; overflow-x: hidden; }

        /* =========================================================
           1. FLOATING NAVBAR - SCROLL SENSITIVE & AUTO HIDE
           ========================================================= */
        .navbar-floating {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.9rem 2.5rem;
            border-bottom: 1px solid #f3f3f4;
            z-index: 999;
            transform: translateY(-100%);
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        }

        .navbar-floating.show {
            transform: translateY(0);
        }

        .logo { font-size: 1.6rem; font-weight: 800; font-style: italic; color: #0d0c22; text-decoration: none; letter-spacing: -0.5px; }

        .search-container-small { display: flex; align-items: center; background: #f3f3f4; border-radius: 999px; padding: 0.3rem 0.4rem 0.3rem 1rem; width: 320px; }
        .search-input-small { border: none; background: transparent; outline: none; font-size: 0.88rem; width: 100%; color: #0d0c22; }
        .search-btn-small { background: #ea4c89; color: #fff; border: none; width: 28px; height: 28px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 0.75rem; }

        .btn-action { background: #0d0c22; color: #fff; padding: 0.65rem 1.2rem; border-radius: 999px; text-decoration: none; font-size: 0.85rem; font-weight: 600; border: none; }
        .btn-action:hover { opacity: 0.9; }

        /* Static Top Header */
        .header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.2rem 3rem;
            background: #fff;
        }

        .nav-links { display: flex; gap: 1.8rem; list-style: none; }
        .nav-link { text-decoration: none; color: #6e6d7a; font-weight: 600; font-size: 0.9rem; }
        .nav-link:hover { color: #0d0c22; }

        /* =========================================================
           2. HERO SECTION WITH VIDEO
           ========================================================= */
        .hero-section {
            max-width: 1320px;
            margin: 1rem auto 3rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-left {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .pill-badges {
            display: flex;
            gap: 0.5rem;
            background: #f3f3f4;
            padding: 0.25rem;
            border-radius: 999px;
            width: fit-content;
        }

        .pill-btn {
            border: none;
            background: transparent;
            padding: 0.4rem 1rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            color: #6e6d7a;
            cursor: pointer;
            text-transform: uppercase;
        }

        .pill-btn.active {
            background: #fff;
            color: #0d0c22;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .hero-headline {
            font-size: 3.4rem;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1.5px;
            color: #0d0c22;
        }

        .hero-headline span {
            color: #ea4c89;
        }

        .hero-bullets {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .hero-bullets li {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: #555462;
            font-size: 0.98rem;
            font-weight: 500;
        }

        .hero-bullets li i {
            color: #ea4c89;
            font-size: 0.9rem;
        }

        .btn-cta {
            background: #0d0c22;
            color: #fff;
            padding: 0.95rem 1.8rem;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            width: fit-content;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            transition: background 0.2s;
        }

        .btn-cta:hover { background: #ea4c89; }

        .hero-media-wrapper {
            position: relative;
            width: 100%;
            height: 420px;
            border-radius: 28px;
            overflow: hidden;
            background: #f0f0f2;
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        .hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-tag-badge {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(8px);
            padding: 0.4rem 0.9rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            color: #0d0c22;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        /* =========================================================
           3. SEPARATOR & FILTER SEARCH BAR
           ========================================================= */
        .separator-section {
            max-width: 1320px;
            margin: 2rem auto 2.5rem auto;
            padding: 0 2rem;
        }

        .tab-menu {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.2rem;
            border-bottom: 1px solid #f3f3f4;
            padding-bottom: 0.8rem;
        }

        .tab-item {
            text-decoration: none;
            color: #6e6d7a;
            font-weight: 700;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid transparent;
        }

        .tab-item.active {
            color: #0d0c22;
            border-color: #0d0c22;
        }

        .big-search-box {
            background: #f3f3f4;
            border-radius: 16px;
            padding: 0.75rem 0.75rem 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            transition: all 0.2s;
        }

        .big-search-box:focus-within {
            background: #fff;
            box-shadow: 0 0 0 4px rgba(234, 76, 137, 0.15);
            border: 1px solid #ea4c89;
        }

        .big-search-input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 1rem;
            width: 100%;
            color: #0d0c22;
        }

        .big-search-btn {
            background: #ea4c89;
            color: #fff;
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 1rem;
        }

        .popular-tags-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .tags-list {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .tag-label {
            font-size: 0.85rem;
            font-weight: 700;
            color: #0d0c22;
            margin-right: 0.3rem;
        }

        .tag-pill {
            text-decoration: none;
            background: #fff;
            border: 1px solid #e0e0e0;
            color: #555462;
            padding: 0.35rem 0.85rem;
            border-radius: 999px;
            font-size: 0.8rem;
            font-weight: 600;
            transition: all 0.2s;
        }

        .tag-pill:hover, .tag-pill.active {
            background: #0d0c22;
            color: #fff;
            border-color: #0d0c22;
        }

        .sort-select {
            padding: 0.45rem 1rem;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            background: #fff;
            font-size: 0.85rem;
            font-weight: 700;
            outline: none;
            cursor: pointer;
        }

        /* =========================================================
           4. TEMPLATE GRID CONTENT & PRECISE CARD OVERLAY
           ========================================================= */
        .content-container { max-width: 1320px; margin: 0 auto; padding: 0 2rem; }
        .grid-container { display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 2.2rem 1.8rem; }
        .card { display: flex; flex-direction: column; gap: 0.75rem; }
        
        .card-thumbnail-wrapper { 
            position: relative; 
            width: 100%; 
            height: 250px; 
            border-radius: 12px; 
            overflow: hidden; 
            background: #e0e0e0; 
        }
        .card-img { width: 100%; height: 100%; object-fit: cover; }
        
        /* HOVER OVERLAY FIX */
        .card-overlay { 
            position: absolute; 
            inset: 0; 
            background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0) 100%); 
            display: flex; 
            align-items: flex-end; 
            justify-content: space-between; 
            padding: 1.25rem; 
            opacity: 0; 
            transition: opacity 0.25s ease; 
            z-index: 10;
        }
        .card-thumbnail-wrapper:hover .card-overlay { opacity: 1; }
        
        .overlay-title { 
            color: #fff; 
            font-weight: 600; 
            font-size: 0.95rem; 
            max-width: 50%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .overlay-action-btns {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .btn-overlay { 
            background: #ffffff; 
            color: #0d0c22; 
            padding: 0.45rem 0.85rem; 
            border-radius: 8px; 
            font-size: 0.8rem; 
            font-weight: 600; 
            text-decoration: none; 
            border: none; 
            cursor: pointer; 
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            line-height: 1;
            transition: all 0.2s;
        }
        .btn-overlay:hover { background: #ea4c89; color: #fff; }

        .card-meta { display: flex; align-items: center; justify-content: space-between; }
        .author-info { display: flex; align-items: center; gap: 0.5rem; }
        .avatar { width: 24px; height: 24px; border-radius: 50%; background: #ea4c89; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; font-weight: 800; }
        .author-name { font-size: 0.88rem; font-weight: 700; }
        .tech-badge { background: #f0f0f2; color: #555; font-size: 0.65rem; font-weight: 700; padding: 0.15rem 0.4rem; border-radius: 4px; }

        .stats { display: flex; align-items: center; gap: 0.8rem; color: #9e9ea7; font-size: 0.8rem; font-weight: 600; }
        .stat-item { display: flex; align-items: center; gap: 0.3rem; cursor: pointer; transition: color 0.2s; }
        .stat-item:hover, .stat-item.liked { color: #ea4c89; }
        .stat-item.bookmarked { color: #f39c12; }

        /* Modal Live Preview */
        .modal { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.85); z-index: 1000; flex-direction: column; }
        .modal-header { display: flex; justify-content: space-between; align-items: center; padding: 0.8rem 2rem; background: #0d0c22; color: #fff; }
        .device-switcher { display: flex; gap: 0.5rem; background: rgba(255,255,255,0.1); padding: 0.3rem; border-radius: 8px; }
        .dev-btn { background: transparent; color: #ccc; border: none; padding: 0.4rem 0.8rem; border-radius: 6px; cursor: pointer; font-size: 0.9rem; }
        .dev-btn.active { background: #ea4c89; color: #fff; }
        .modal-body { flex: 1; display: flex; justify-content: center; align-items: center; padding: 1rem; }
        .iframe-container { width: 100%; height: 100%; background: #fff; border-radius: 8px; transition: width 0.3s ease; }
        .close-modal { background: transparent; color: #fff; border: none; font-size: 1.5rem; cursor: pointer; }
    </style>
</head>
<body>

    <!-- 1. FLOATING NAVBAR -->
    <nav class="navbar-floating" id="floatingNav">
        <div style="display: flex; align-items: center; gap: 1.5rem;">
            <a href="{{ route('home') }}" class="logo">Supahub.plate</a>
            <form action="{{ route('home') }}" method="GET" class="search-container-small">
                <input type="text" name="search" class="search-input-small" placeholder="What are you looking for?" value="{{ request('search') }}">
                <button type="submit" class="search-btn-small"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div style="display: flex; align-items: center; gap: 1rem;">
            @auth
                <span style="font-weight: 700; font-size: 0.88rem;">Halo, {{ Auth::user()->name }}</span>
                @if(Auth::user()->is_admin)
                    <a href="{{ route('admin.index') }}" class="btn-action" style="background:#ea4c89;"><i class="fa-solid fa-gear"></i> Admin</a>
                @endif
                <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:transparent; border:none; color:#6e6d7a; font-weight:600; cursor:pointer;">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" style="text-decoration:none; color:#6e6d7a; font-weight:700; font-size:0.88rem;">Log in</a>
                <a href="{{ route('register') }}" class="btn-action">Sign up</a>
            @endauth
        </div>
    </nav>

    <!-- STATIC TOP HEADER -->
    <header class="header-top">
        <a href="{{ route('home') }}" class="logo">Supahub.plate</a>
        <ul class="nav-links">
            <li><a href="#" class="nav-link">Explore</a></li>
            <li><a href="#" class="nav-link">Hire Talent</a></li>
            <li><a href="#" class="nav-link">Get Hired</a></li>
            <li><a href="#" class="nav-link">Community</a></li>
        </ul>
        <div style="display: flex; align-items: center; gap: 1rem;">
            @auth
                @if(Auth::user()->is_admin)
                    <a href="{{ route('admin.index') }}" class="btn-action" style="background:#ea4c89;"><i class="fa-solid fa-gear"></i> Admin</a>
                @endif
            @else
                <a href="{{ route('login') }}" style="text-decoration:none; color:#0d0c22; font-weight:700; font-size:0.9rem;">Log in</a>
                <a href="{{ route('register') }}" class="btn-action">Sign up</a>
            @endauth
        </div>
    </header>

    <!-- 2. HERO SECTION -->
    <section class="hero-section">
        <div class="hero-left">
            <div class="pill-badges">
                <button class="pill-btn active">Hire Talent</button>
                <button class="pill-btn">Get Hired</button>
            </div>

            <h1 class="hero-headline">Work with the world’s best in <span>UX/UI design</span></h1>

            <ul class="hero-bullets">
                <li><i class="fa-solid fa-circle-check"></i> Generate your brief and receive proposals—for free</li>
                <li><i class="fa-solid fa-circle-check"></i> Browse real design and development work</li>
                <li><i class="fa-solid fa-circle-check"></i> Hire top-rated freelancers and agencies</li>
            </ul>

            <a href="#templates" class="btn-cta">
                <i class="fa-solid fa-wand-magic-sparkles"></i> Start Your Project Brief
            </a>
        </div>

        <div class="hero-media-wrapper">
            <video autoplay loop muted playsinline class="hero-video">
                <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
            </video>
            <div class="video-tag-badge">
                <i class="fa-solid fa-play"></i> 3D Motion Showcase
            </div>
        </div>
    </section>

    <!-- 3. SEPARATOR & FILTER SEARCH BAR -->
    <section class="separator-section" id="templates">
        <div class="tab-menu">
            <a href="#" class="tab-item active"><i class="fa-solid fa-image"></i> Shots</a>
            <a href="#" class="tab-item"><i class="fa-solid fa-users"></i> Designers</a>
            <a href="#" class="tab-item"><i class="fa-solid fa-briefcase"></i> Services</a>
        </div>

        <form action="{{ route('home') }}" method="GET" class="big-search-box">
            <input type="text" name="search" class="big-search-input" placeholder="What type of design or template are you interested in?" value="{{ request('search') }}">
            <button type="submit" class="big-search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <div class="popular-tags-bar">
            <div class="tags-list">
                <span class="tag-label">Popular:</span>
                <a href="{{ route('home') }}" class="tag-pill {{ !request('category') ? 'active' : '' }}">All</a>
                <a href="{{ route('home', ['category' => 'Portfolio']) }}" class="tag-pill {{ request('category') == 'Portfolio' ? 'active' : '' }}">portfolio</a>
                <a href="{{ route('home', ['category' => 'Landing Page']) }}" class="tag-pill {{ request('category') == 'Landing Page' ? 'active' : '' }}">landing page</a>
                <a href="{{ route('home', ['category' => 'Blog']) }}" class="tag-pill {{ request('category') == 'Blog' ? 'active' : '' }}">dashboard</a>
            </div>

            <form action="{{ route('home') }}" method="GET" id="sortForm">
                @if(request('category')) <input type="hidden" name="category" value="{{ request('category') }}"> @endif
                @if(request('search')) <input type="hidden" name="search" value="{{ request('search') }}"> @endif
                <select name="sort" class="sort-select" onchange="document.getElementById('sortForm').submit()">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Popular v</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Most Liked</option>
                    <option value="views" {{ request('sort') == 'views' ? 'selected' : '' }}>Most Viewed</option>
                </select>
            </form>
        </div>
    </section>

    <!-- 4. TEMPLATE CARDS CONTENT -->
    <main class="content-container">
        <div class="grid-container">
            <?php if (isset($templates) && count($templates) > 0): ?>
                <?php foreach ($templates as$item): ?>
                    <div class="card">
                        <div class="card-thumbnail-wrapper">
                            <img src="{{ $item->thumbnail }}" alt="{{ $item->judul }}" class="card-img">
                            <div class="card-overlay">
                                <span class="overlay-title">{{ $item->judul }}</span>
                                <div class="overlay-action-btns">
                                    <?php if($item->link_preview): ?>
                                        <button class="btn-overlay" onclick="openPreview('{{ $item->link_preview }}', '{{ $item->judul }}', {{$item->id }})">
                                            <i class="fa-solid fa-eye"></i> Demo
                                        </button>
                                    <?php endif; ?>
                                    <a href="{{ $item->link_github }}" target="_blank" class="btn-overlay"><i class="fa-brands fa-github"></i> Code</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-meta">
                            <div class="author-info">
                                <div class="avatar"><?= strtoupper(substr($item->judul, 0, 1)) ?></div>
                                <div>
                                    <span class="author-name"><?= $item->judul ?></span>
                                    <?php if($item->tech_stack): ?>
                                        <span class="tech-badge"><?= $item->tech_stack ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="stats">
                                <div class="stat-item" onclick="bookmarkTemplate(<?= $item->id ?>, this)">
                                    <i class="fa-solid fa-bookmark" id="bm-icon-<?= $item->id ?>"></i>
                                </div>
                                <div class="stat-item" onclick="likeTemplate(<?= $item->id ?>, this)">
                                    <i class="fa-solid fa-heart"></i>
                                    <span id="like-count-<?= $item->id ?>"><?= $item->likes ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align: center; grid-column: 1/-1; color: #9e9ea7; padding: 3rem 0;">Template tidak ditemukan, bre!</p>
            <?php endif; ?>
        </div>
    </main>

    <!-- Live Preview Modal -->
    <div class="modal" id="previewModal">
        <div class="modal-header">
            <h3 id="modalTitle">Template Preview</h3>
            <div class="device-switcher">
                <button class="dev-btn active" onclick="setDevice('desktop', this)"><i class="fa-solid fa-desktop"></i> Desktop</button>
                <button class="dev-btn" onclick="setDevice('tablet', this)"><i class="fa-solid fa-tablet-screen-button"></i> Tablet</button>
                <button class="dev-btn" onclick="setDevice('mobile', this)"><i class="fa-solid fa-mobile-screen"></i> Mobile</button>
            </div>
            <button class="close-modal" onclick="closePreview()">&times;</button>
        </div>
        <div class="modal-body">
            <iframe id="previewIframe" class="iframe-container" src="" frameborder="0"></iframe>
        </div>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        let isScrollingTimer = null;
        const floatingNav = document.getElementById('floatingNav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 120) {
                floatingNav.classList.add('show');
                clearTimeout(isScrollingTimer);

                isScrollingTimer = setTimeout(() => {
                    floatingNav.classList.remove('show');
                }, 1500);
            } else {
                floatingNav.classList.remove('show');
                clearTimeout(isScrollingTimer);
            }
        });

        function likeTemplate(id, element) {
            fetch(`/template/${id}/like`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    document.getElementById(`like-count-${id}`).innerText = data.likes;
                    element.classList.add('liked');
                }
            });
        }

        function openPreview(url, title, id) {
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('previewIframe').src = url;
            document.getElementById('previewModal').style.display = 'flex';

            fetch(`/template/${id}/view`, {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
            });
        }

        function closePreview() {
            document.getElementById('previewModal').style.display = 'none';
            document.getElementById('previewIframe').src = '';
        }

        function setDevice(device, btn) {
            document.querySelectorAll('.dev-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const iframe = document.getElementById('previewIframe');
            if(device === 'desktop') iframe.style.width = '100%';
            if(device === 'tablet') iframe.style.width = '768px';
            if(device === 'mobile') iframe.style.width = '375px';
        }

        function bookmarkTemplate(id, element) {
            let bookmarks = JSON.parse(localStorage.getItem('bookmarks') || '[]');
            if(bookmarks.includes(id)) {
                bookmarks = bookmarks.filter(bId => bId !== id);
                element.classList.remove('bookmarked');
            } else {
                bookmarks.push(id);
                element.classList.add('bookmarked');
            }
            localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
        }

        document.addEventListener('DOMContentLoaded', () => {
            let bookmarks = JSON.parse(localStorage.getItem('bookmarks') || '[]');
            bookmarks.forEach(id => {
                let icon = document.getElementById(`bm-icon-${id}`);
                if(icon) icon.parentElement.classList.add('bookmarked');
            });
        });
    </script>

</body>
</html>