<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rooster Pizzeria and Grill — Auténtica Pizza a la Leña')</title>
    <meta name="description" content="Auténtica pizza a la leña en Rooster Pizzeria and Grill. Recetas tradicionales, ingredientes frescos y horno de leña.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    {{-- Tailwind via CDN: rápido para esta página informativa. Para producción, migrar a Vite (ver README). --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Poppins', 'sans-serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
<<<<<<< HEAD
                            50: '#fff4ef',
                            100: '#ffe1d0',
                            500: '#ff6b35',
                            600: '#f0551d',
                            700: '#c94315',
                        },
                        ink: '#000000',
=======
                            50: '#fef2f2',
                            100: '#fee2e2',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                        },
                        ink: '#0f172a',
>>>>>>> 612a93f8311e374c2858e7099edcaf171d296e7f
                    },
                },
            },
        };
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-sans text-slate-700 antialiased bg-white">

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
