@props(['title'])
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <link rel="manifest" href="assets/ico/site.webmanifest">
    <link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <title>{{ $title ?? 'Home' }} | Desa Kupang</title>
    <link rel="icon" href="https://pemdeskupang.com/baru/desa/logo/1699285161_logo-mojokerto.png" type="image/png">

    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="assets/libs/fullpage.js/dist/fullpage.min.css">
    <link rel="stylesheet" href="assets/libs/highlightjs/styles/codepen-embed.css">
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/libs/incline-icons/style.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">


  </head>
  <body>




    {{ $slot }}

 <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnKt8_N4-FKOnhI_pSaDL7g_g-XI1-R9E"></script>

    <!-- Plugins JS -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="assets/libs/jquery-parallax.js/parallax.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/waypoints/lib/shortcuts/inview.min.js"></script>
    <script src="assets/libs/fullpage.js/vendors/scrolloverflow.min.js"></script>
    <script src="assets/libs/fullpage.js/dist/fullpage.min.js"></script>
    <script src="assets/libs/highlightjs/highlight.pack.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

  </body>
</html>
