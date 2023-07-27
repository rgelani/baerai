<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2200498270451356" crossorigin="anonymous"></script>
    <meta name="p:domain_verify" content="6014e6467cfd8495008ffbf9a9e78ca0"/>
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-7QQCRT4RVE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-7QQCRT4RVE');
    </script> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel=”canonical“ href=”https://baerai.com/” />
    <link rel=”canonical“ href=”https://www.baerai.com/” />
    <link rel=”canonical“ href=”https://www.baerai.com” />
    <link rel=”canonical“ href=”https://baerai.com/dashboard” />
    <link rel=”canonical“ href=”https://www.baerai.com/dashboard” />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased bg-slate-700" data-url="{{ config('app.url') }}">
    @inertia
</body>

</html>