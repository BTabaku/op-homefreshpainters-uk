<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>{{ $title ?? 'HomeFreshPainters – Painting & Renovation Services' }}</title>

    <!-- social media visibility -->
    <meta property="og:title" content="{{ $title ?? 'HomeFreshPainters – Painting & Renovation Services' }}">
    <meta property="og:description" content="{{ $meta_description ?? 'Our goal is to become your go-to resource for all of your painting requirements!' }}">
    <meta property="og:image" content="{{ asset('assets/images/Homefresh150x150.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <link rel="alternate" type="application/rss+xml" title="Home Fresh Painters &raquo; Feed" href="{{ url('feed') }}">
    <link rel="alternate" type="application/rss+xml" title="Home Fresh Painters &raquo; Comments Feed" href="{{ url('comments/feed') }}">

    <!-- WordPress emoji support -->
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/www.paintsplatter.oxacor.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"
            }
        };
    </script>

    <!-- Paint Splatter Theme CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marcellus%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CInter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/elementor-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elementor-frontend.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elementor-animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/widget-icon-box.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @stack('styles')
</head>

<body class="{{ $body_class ?? 'home page-template page-template-elementor_header_footer page page-id-200 wp-custom-logo elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-200' }}">
    
    <!-- WordPress-style Header -->
    @include('partials.wp-header')
    
    <!-- Main Content -->
    @yield('content')
    
    <!-- WordPress-style Footer -->
    @include('partials.wp-footer')
    
    <!-- Paint Splatter Theme Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/elementor-frontend.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @stack('scripts')
</body>
</html>
