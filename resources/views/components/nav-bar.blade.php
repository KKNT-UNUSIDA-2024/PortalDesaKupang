<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- link font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="nav">
    <div class="container">
        <div class="logo">
          <img src="https://pemdeskupang.com/baru/desa/logo/1699285161_logo-mojokerto.png" alt="Logo Desa KUPANG">
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="{{ url('/') }}">Profil</a></li>
                <li><a href="{{ route('katalog.index') }}">Bumdes</a></li>
                <li><a href="{{ route('bumdes.public.index') }}">Wisata</a></li>
                <li><a href="{{ route('profile.public.index') }}">Administrasi</a></li>
                <li><a href="{{ route('profile.public.index') }}">Peta Interaktif</a></li>
            </ul>
        </div>
    </div>
 </nav>

<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script >
  $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

document.addEventListener("DOMContentLoaded", function() {
            var listItems = document.querySelectorAll('.navlinks li');
            listItems.forEach(function(item, index) {
                setTimeout(function() {
                    item.classList.add('show');
                }, 100 * index); // Delay per item
            });
        });

        $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
        }
    });

</script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
 {{ $slot }}
</script>
</body>
</html>