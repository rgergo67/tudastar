<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:site_name" content="Beosztom.hu">
        <meta property="og:url" content="{{ request()->fullUrl() }}">
        <meta property="og:type" content="article">

        @sectionMissing('seo')
            <x-seo title="Oszd be a pénzed egyszerűen"
                   description="Csökkentsd az impulzus vásárlásaid, költekezz tudatosan, spórolj hatékonyan! Használd fél évig, és döntsd el utána, hogy megéri-e az árát."
                   image="/images/fb_cover.jpg" />
        @endif

        @yield('seo')

        <x-favicon />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
        <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
        </noscript>

        <x-serviceworker />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @stack('template_linked_css')
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @stack('footer-scripts')
        <x-google-analytics />
    </body>
</html>
