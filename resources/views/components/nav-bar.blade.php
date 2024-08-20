<nav class="nav">
    <div class="container">
        <div class="logo">
          <img src="https://pemdeskupang.com/baru/desa/logo/1699285161_logo-mojokerto.png" alt="Logo Desa KUPANG">
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="{{ route('profile-desa.show') }}">Profil</a></li>
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