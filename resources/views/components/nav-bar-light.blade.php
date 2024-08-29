<!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-xl navbar-light  fixed-top">
        <div class="container">

          <!-- Brand -->
          <a class="navbar-brand" href="/">
            <img src="https://pemdeskupang.com/baru/desa/logo/1699285161_logo-mojokerto.png" alt="Logo Desa KUPANG" style="max-height: 25px;"> Desa Kupang
          </a>


          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="navbarCollapse">

            <!-- Social -->
            <ul class="navbar-nav mr-auto">
              <!-- ... existing social links ... -->
            </ul>

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Informasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarLandings">
                      <a class="dropdown-item " href="{{ route('profile-desa.show') }}">
                        Profil Desa
                      </a>
                      <a class="dropdown-item" href="">
                        Berita Desa X
                      </a>
                      <a class="dropdown-item " href="{{ route('dusun.visitors') }}">
                        Data Dusun
                      </a>
                      <a class="dropdown-item " href="{{ route('dashboard') }}">
                       Masuk Sebagai<br>
                         Perangkat Desa
                      </a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dusun
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarLandings">
                        <a class="dropdown-item " href="/dusun-wates">
                            Dusun wates
                          </a>
                          <a class="dropdown-item " href="/dusun-warugunung-tengah">
                            Dusun WaruGunung Tengah
                          </a>
                          <a class="dropdown-item " href="/dusun-warugunung-lor">
                            Dusun WaruGunung Lor
                          </a>
                          <a class="dropdown-item " href="/dusun-kupang">
                            Dusun Kupang
                          </a>
                          <a class="dropdown-item " href="/dusun-pasinan-kulon">
                            Dusun Pasinan Kulon
                          </a>
                          <a class="dropdown-item " href="/dusun-pasinan-wetan">
                            Dusun Pasinan Wetan
                          </a>

                    </div>
                  </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarLandings" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Unit Usaha
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarLandings">
                <a class="dropdown-item " href="{{ route('katalog.index') }}#umkm">
                  UMKM
                </a>
                <a class="dropdown-item" href="{{ route('katalog.index') }}#wisata">
                  Wisata
                </a>
                <a class="dropdown-item " href="{{ route('katalog.index') }}#katalog">
                  Bumdes
                </a>
              </div>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.public.index') }}">Administrasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.public.index') }}">Peta Interaktif</a>
              </li>
            </ul>

          </div> <!-- / .navbar-collapse -->

        </div> <!-- / .container -->
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
