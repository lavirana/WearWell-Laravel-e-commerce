<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(135deg, #f7f7f7, #e9ecef);
        }
        .brand-logo {
            background-color: #f8f9fa;
    border: 1px solid #ffd700bd;
    padding: 6px 12px;
    /* border-radius: 8px; */
    font-size: 1.4rem;
    /* font-weight: bold; */
    letter-spacing: 1px;
    transition: all 0.3s ease-in-out;
        }
        .brand-logo:hover {
            background-color: #ffd7001a;
            transform: scale(1.05);
        }
        .brand-logo strong {
            color: #daa520;
        }
        .card-box {
            border: 1px solid #e5e7eb;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <!-- Brand / Logo -->
        <!-- <div>
            <a class="brand-logo" href="/">
                <strong>W</strong>ear<strong>W</strong>ell
            </a>
        </div> -->

        <!-- Auth Card -->
        <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white card-box">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
