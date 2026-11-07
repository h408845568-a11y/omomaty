<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'أمومتي | رفيقتكِ من الحمل إلى أول عامين' }}</title>
    <meta name="description" content="منصة أمومتي - رفيقتكِ الذكية والموثوقة من بدايات الحمل وحتى إتمام طفلك عامه الثاني، متابعة نمو أسبوعية، جداول تطعيمات، وإرشادات طبية دقيقة.">

    <!-- Google Fonts: Tajawal & Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">

    <!-- Vite Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Head Injections -->
    {{ $head ?? '' }}
    @stack('styles')
</head>
<body class="bg-[#FFFDF9] text-[#2D3748] font-tajawal antialiased min-h-screen flex flex-col selection:bg-[#5F9B79]/20 selection:text-[#487B5E] overflow-x-hidden">
    <!-- Navbar Component -->
    <x-navbar />

    <!-- Main Content Area -->
    <main class="flex-grow">
        @if (isset($slot) && !empty((string)$slot))
            {{ $slot }}
        @else
            @yield('content')
        @endif
    </main>

    <!-- Footer Component -->
    <x-footer />

    <!-- Script for smooth animations and mobile menu state -->
    @stack('scripts')
</body>
</html>

