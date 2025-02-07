<head>
    {{-- INI META BASIC --}}
    <meta name="description" content="@yield('meta_description', 'Yayasan Baitus saadah Amanah adalah lembaga sosial yang peduli terhadap anak yatim, menampung dan membina 120 anak yatim dengan memberikan pendidikan, kebutuhan pokok, serta bimbingan moral dan spiritual. Kami berkomitmen untuk menciptakan lingkungan yang penuh kasih dan mendukung masa depan mereka agar lebih cerah.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Yayasan Baitus saadah Amanah, anak yatim, donasi yatim, santunan yatim, peduli yatim, bantuan sosial, pendidikan yatim, sedekah yatim, yayasan sosial, infak yatim, bimbingan yatim, lembaga sosial, zakat yatim, wakaf yatim')">
    <meta name="author" content="Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- INI META OPEN GRAPH --}}
    <meta property="og:title" content="@yield('title', "Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim")">
    <meta property="og:description" content="@yield('meta_description', 'Yayasan Baitus saadah Amanah adalah lembaga sosial yang peduli terhadap anak yatim, menampung dan membina 120 anak yatim dengan memberikan pendidikan, kebutuhan pokok, serta bimbingan moral dan spiritual. Kami berkomitmen untuk menciptakan lingkungan yang penuh kasih dan mendukung masa depan mereka agar lebih cerah.')">
    <meta property="og:image" content="@yield('meta_image', asset('assets/images/logo/logo.png'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim">

    {{-- INI META TWITTER --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', "Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim")">
    <meta name="twitter:description" content="@yield('meta_description', 'Yayasan Baitus saadah Amanah adalah lembaga sosial yang peduli terhadap anak yatim, menampung dan membina 120 anak yatim dengan memberikan pendidikan, kebutuhan pokok, serta bimbingan moral dan spiritual. Kami berkomitmen untuk menciptakan lingkungan yang penuh kasih dan mendukung masa depan mereka agar lebih cerah.')">
    <meta name="twitter:image" content="@yield('meta_image', asset('assets/images/logo/logo.png'))">
    <meta name="twitter:site" content="@Baitussaadah_">

    {{-- gambar tab browser --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo/logo.png') }}">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "@yield('title', "Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim")",
        "description": "@yield('meta_description', 'Yayasan Baitus saadah Amanah adalah lembaga sosial yang peduli terhadap anak yatim, menampung dan membina 120 anak yatim dengan memberikan pendidikan, kebutuhan pokok, serta bimbingan moral dan spiritual. Kami berkomitmen untuk menciptakan lingkungan yang penuh kasih dan mendukung masa depan mereka agar lebih cerah.')",
        "image": "@yield('meta_image', asset('assets/images/logo/logo.png'))",
        "author": {
            "@type": "Organization",
            "name": "Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim"
        },
        "datePublished": "{{ now()->toIso8601String() }}",
        "dateModified": "{{ now()->toIso8601String() }}",
        "publisher": {
            "@type": "Organization",
            "name": "Yayasan Baitus Sa'adah Amanah - Peduli & Membantu Anak Yatim",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('assets/images/logo/logo.png') }}"
            }
        }
    }
    </script>

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @livewireStyles
</head>
