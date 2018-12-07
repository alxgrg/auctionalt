<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130436276-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130436276-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Auction Alternative" />
    <meta name="description" content="@yield('description')">
    <meta name="theme-color" content="#0faaf4"/>

    <link rel="canonical" href="https://auctionalternative.ca/">

    <!-- Social Media Tags -->
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ url('/img/twitter-card-image.png') }}" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:title" content="@yield('title')" />
    <meta property="twitter:description" content="@yield('description')" />
    <meta property="twitter:url" content="{{ url()->current() }}" />
    <meta property="twitter:image" content="{{ url('/img/twitter-card-image.png') }}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="icon" href="/img/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto: 400, 400bold" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token()
        ]) !!};
    </script>



    @yield('head')
</head>
<body>
<div id="app">
    @include ('layouts.nav')

    @yield('content')

    @include ('layouts.footer')

    <flash message="{{ session('flash') }}"></flash>
</div>





<!-- Scripts -->
{{-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
</body>
</html>