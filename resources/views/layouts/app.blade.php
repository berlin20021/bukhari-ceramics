<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>معرض البخاري | @yield('title', 'الرئيسية')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@300;400;700;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Alexandria', sans-serif; }
    </style>
</head>
<body class="bg-bukhari-black text-white antialiased selection:bg-bukhari-gold selection:text-black flex flex-col min-h-screen">

    @include('components.navbar')

    <div class="animate-page-content flex-grow flex flex-col">
        
        <main class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer')
        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // إضافة كلاس 'loaded' لتفعيل الظهور التدريجي
            requestAnimationFrame(() => {
                document.body.classList.add('loaded');
            });
        });

        // إعادة التفعيل عند الرجوع للصفحة (Back Button)
        window.addEventListener('pageshow', (event) => {
            if (event.persisted) {
                document.body.classList.add('loaded');
            }
        });
    </script>

</body>
</html>