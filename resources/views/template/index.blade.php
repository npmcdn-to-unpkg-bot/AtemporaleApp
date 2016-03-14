<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="http://schema.org/CreativeWork" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:website="http://ogp.me/ns/website" prefix="fb: http://ogp.me/ns/ profile: http://ogp.me/ns/profile#" class="no-js"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="google" content="notranslate">
    <meta name="author" content="ae">
    <meta name="application-name" content="Atemporale Design - Estratégias Criativas de Comunicação e Design">
    <meta name="copyright" content="Atemporale Design">
    <!--Meta nameTemplate-->@yield('Title', '')
@yield('MetaDescription', '')
@yield('MetaKeywords', '')

    <!--Meta name og-->
    <meta property="og:title" content="Atemporale Design - Estratégias Criativas de Comunicação e Design">
    <meta property="og:description" content="Um buon Design é aquele que faz sen-ti-do e gera oportunidades. Todavia, um “Design affascinante” é aquele que, além disso, permanece no tempo sendo ATEMPORAL">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://atemporale.it">
    <meta property="og:image" content="#">
    <meta property="og:determiner" content="the">
    <meta property="og:locale" content="pt_BR">
    <meta property="fb:app_id" content="#">
    <meta name="copyright" content="Atemporale Design">
    <!--Meta name verify-->
    <meta name="google-site-verification" content="#">
    <!--Favicon.ico-->
    <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/favicon/apple_touch_icon_57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/img/favicon/apple_touch_icon_60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/favicon/apple_touch_icon_72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/favicon/apple_touch_icon_76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/favicon/apple_touch_icon_114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/favicon/apple_touch_icon_120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/favicon/apple_touch_icon_144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/favicon/apple_touch_icon_152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicon/apple_touch_icon_180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_16.png')}}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/favicon_96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicon/android_chrome_192.png')}}" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="{{ asset('/img/favicon/smalltile.png') }}">
    <meta name="msapplication-square150x150logo" content="{{ asset('/img/favicon/mediumtile.png') }}">
    <meta name="msapplication-wide310x150logo" content="{{ asset('/img/favicon/widetile.png') }}">
    <meta name="msapplication-square310x310logo" content="{{ asset('/img/favicon/largetile.png') }}">
    <!--Fonts external link-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,300italic,400italic,600italic,700italic|Droid+Serif:400,400italic">
    <!--Page CSS-->@yield('cssPagina', '')

  </head>
  <body itemtype="" itemscope>
    <!-- dinamic content-->@yield('content', '')

    <script type="text/javascript" src="{{asset('bower/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/royalslider/jquery.royalslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/mfp/jquery.mfp-0.9.9.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/mediaelement/mediaelement-and-player.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/gmap/gmap3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/isotope/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/form/jquery.form.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bower/plugins/form/jquery.validate.min.js')}}"></script>
    <!--Librerie hyidrogen-->
    <script type="text/javascript" src="{{asset('js/hydrogen.setup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/hydrogen.scripts.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/hydrogen.plugins.js')}}"></script>
    <!--Script interni per pagina-->@yield('jsPagina', '')

  </body>
</html>