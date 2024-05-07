<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Al-Khair</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="js/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html">
              <img src="img/logo.png" alt="" style="width: 50px; height: 40px;">
               <h5>Al-Khair<h5>
          </a>
          
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false" 
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/beranda') ? 'active' : ''; ?>">
                    <a class="nav-link" href="#banner">Beranda</a>
                </li>
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/visimisi') ? 'active' : ''; ?>">
                    <a class="nav-link" href="#visimisi">Visi & Misi</a>
                </li>
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/agenda') ? 'active' : ''; ?>">
                    <a class="nav-link" href="#agenda">Agenda</a>
                </li>
                <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/kontak') ? 'active' : ''; ?>">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    @yield('content')

  {{-- footer --}}
    
    <!--================ Start footer Area  =================-->
    <footer id="kontak" class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 single-footer-widget">
            <h4>Kontak</h4>
            <ul>
              <li>Whatsapp: 08xxxxxxxxxx</li>
              <li>Email: alkhair@gmail.com</li>
            </ul>

            <h4>Alamat</h4>
            <ul>
              <li>Alamat: 57WF+HVC, Kebun Kenanga, Kec. Ratu Agung</li>
              <li>Kota Bengkulu, Bengkulu 38222</li>
            </ul>
          </div>

          <!-- Kolom untuk peta di sebelah kanan -->
          <div class="col-lg-6 col-md-6">
            <iframe
              class="w-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0300917134136!2d102.27208057502162!3d-3.803570696170253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b013eaa85171%3A0xb69e46c515ca1f12!2sMasjid%20Al-Khair!5e0!3m2!1sid!2sid!4v1713943389686!5m2!1sid!2sid"
              height="400"
              style="border: 0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
        </div>
        
        <!-- Bagian bawah footer -->
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Masjid Al-Khair
          </p>
        </div>
      </div>
    </footer>

    
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
