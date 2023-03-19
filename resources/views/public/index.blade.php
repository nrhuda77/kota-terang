<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" type="image/x-icon" href="{{ asset('landingpage/assets/images/logo/favicon.ico') }}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet" />

    <title>Kota Terang</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('landingpage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('landingpage/assets/css/templatemo-chain-app-dev.css')}}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/animated.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/owl.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/custom.css') }}" />

    <style></style>
  </head>

  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header
      class="header-area header-sticky wow slideInDown"
      data-wow-duration="0.70s"
      data-wow-delay="0s">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->
              <a href="/" class="logo">
                <img
                  src="{{ asset('landingpage/assets/images/logo.png') }}"
                  style="max-width: 155px"
                  alt="Chain App Dev" />
              </a>
              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li class="scroll-to-section">
                  <a href="#top" class="active">Home</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#services">Services</a>
                </li>
                <li class="scroll-to-section"><a href="#about">Peta</a></li>
                <li class="scroll-to-section">
                  <a href="#pricing">Bantuan</a>
                </li>
                <li class="scroll-to-section">
                  <a href="#newsletter">Tentang Kami</a>
                </li>
                <!-- <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Sign In Now</a></div></li>  -->
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="modal" class="popupContainer" style="display: none">
      <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
      </div>

      <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
          <div class="">
            <a href="#" class="social_box fb">
              <span class="icon"><i class="fab fa-facebook"></i></span>
              <span class="icon_title">Connect with Facebook</span>
            </a>

            <a href="#" class="social_box google">
              <span class="icon"><i class="fab fa-google-plus"></i></span>
              <span class="icon_title">Connect with Google</span>
            </a>
          </div>

          <div class="centeredText">
            <span>Or use your Email address</span>
          </div>

          <div class="action_btns">
            <div class="one_half">
              <a href="#" id="login_form" class="btn">Login</a>
            </div>
            <div class="one_half last">
              <a href="#" id="register_form" class="btn">Sign up</a>
            </div>
          </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
          <form>
            <label>Email / Username</label>
            <input type="text" />
            <br />

            <label>Password</label>
            <input type="password" />
            <br />

            <div class="checkbox">
              <input id="remember" type="checkbox" />
              <label for="remember">Remember me on this computer</label>
            </div>

            <div class="action_btns">
              <div class="one_half">
                <a href="#" class="btn back_btn"
                  ><i class="fa fa-angle-double-left"></i> Back</a
                >
              </div>
              <div class="one_half last">
                <a href="#" class="btn btn_red">Login</a>
              </div>
            </div>
          </form>

          <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
          <form>
            <label>Full Name</label>
            <input type="text" />
            <br />

            <label>Email Address</label>
            <input type="email" />
            <br />

            <label>Password</label>
            <input type="password" />
            <br />

            <div class="checkbox">
              <input id="send_updates" type="checkbox" />
              <label for="send_updates">Send me occasional email updates</label>
            </div>

            <div class="action_btns">
              <div class="one_half">
                <a href="#" class="btn back_btn"
                  ><i class="fa fa-angle-double-left"></i> Back</a
                >
              </div>
              <div class="one_half last">
                <a href="#" class="btn btn_red">Register</a>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>

    <div
      class="main-banner wow fadeIn"
      id="top"
      data-wow-duration="1s"
      data-wow-delay="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div
                  class="left-content show-up header-text wow fadeInLeft"
                  data-wow-duration="1s"
                  data-wow-delay="1s">
                  <div class="row">
                    <div class="col-lg-12">
                      <h2>Kota Terang</h2>
                      <p>
                        Aplikasi yang ingin dibuat merupakan sebuah platform digital yang dirancang untuk membantu mengatasi masalah kemiskinan di kota. Aplikasi ini akan menyediakan berbagai fitur yang memungkinkan pengguna untuk berpartisipasi dalam upaya penanggulangan kemiskinan, baik sebagai donatur maupun relawan.
                      </p>
                    </div>
                    <!-- <div class="col-lg-12">
                      <div class="white-button first-button scroll-to-section">
                        <a href="#contact"
                          >Free Quote <i class="fab fa-apple"></i
                        ></a>
                      </div>
                      <div class="white-button scroll-to-section">
                        <a href="#contact"
                          >Free Quote <i class="fab fa-google-play"></i
                        ></a>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div
                  class="right-image wow fadeInRight"
                  data-wow-duration="1s"
                  data-wow-delay="0.5s">
                  <!-- <img src="assets/images/slider-dec.png" alt=""> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="services" class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div
              class="section-heading wow fadeInDown"
              data-wow-duration="1s"
              data-wow-delay="0.5s">
              <h4> <em>Servis &amp; Fitur</em></h4>
              <img src="{{ asset('landingpage/assets/images/heading-line-dec.png') }}" alt="" />
              <p>
                Aplikasi kami menawarkan berbagai layanan dan fitur yang akan memudahkan Anda dalam Memfilter masyarakat. Dengan aplikasi kami, Anda dapat:

              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="service-item first-service">
              <div class="icon"></div>
              <h4>Maps</h4>
              <p>
                Pemetaan lokasi bantuan: Aplikasi menyediakan peta interaktif yang menunjukkan lokasi tempat-tempat yang membutuhkan bantuan terkait kemiskinan. kami memberikan melalui visual data
              </p>
              <div class="text-button">
                <!-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-item second-service">
              <div class="icon"></div>
              <h4>Filter</h4>
              <p>
                Filter : Sistem ini menyediakan fitur untuk memfilter masyarakat yang lebih membutuhkan . dan juga memberikan kemungkinan yang lebih tepat
              </p>
              <div class="text-button">
                <!-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-item third-service">
              <div class="icon"></div>
              <h4>Komunitas</h4>
              <p>
               Komunitas relawan: Aplikasi juga menyediakan fitur untuk menjadi relawan dalam program-program penanggulangan kemiskinan. Pengguna dapat bergabung dengan komunitas relawan dan berpartisipasi dalam kegiatan-kegiatan sosial yang diselenggarakan oleh aplikasi.
              </p>
              <div class="text-button">
                <!-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-item fourth-service">
              <div class="icon"></div>
              <h4>WhatsApp</h4>
              <p>
                Whatsapp: sistem ini dapat mengundang masyarakat untuk berkumpul atau melakukan program program
                yang telah disediakan .
              </p>
              <div class="text-button">
                <!-- <a href="#">Read More <i class="fa fa-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="about" class="about-us section">
      <div class="container">
        <div class="row">
          <center>
          <div class="section-heading">
            <h4><em>Peta</em> Sebaran</h4>
            <img src="{{ asset('landingpage/assets/images/heading-line-dec.png') }}" alt="" />
            <p>
              Peta sebaran  digunakan untuk menunjukkan lokasi dan informasi seputar daerah-daerah yang membutuhkan bantuan.
            </p>
          </div>
          </center>
          <div
            class="col-lg-8 align-self-center"
            style="display: flex; justify-content: center;z-index: 2;">

              <?xml version="1.0" encoding="UTF-8"?>
              <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
              <!-- Creator: CorelDRAW 2021 (64-Bit) -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="svg-maps"
                xml:space="preserve"
                width="6in"
                height="6in"
                version="1.1"
                style="
                  shape-rendering: geometricPrecision;
                  text-rendering: geometricPrecision;
                  image-rendering: optimizeQuality;
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                "
                viewBox="0 0 8500 8500"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                <defs>
                  <style type="text/css">
                    <![CDATA[
                      .fil0 {fill:white}
                      .fil1 {
                          fill : #4b8ef1
                      }
                      .fil2 {fill:#EFA099}
                      .fil3 {fill:#FFE9AE}
                      .fil4 {fill:#B3E5BE}
                    ]]>
                  </style>
                </defs>
                <g id="Layer_x0020_1">
                  <metadata id="CorelCorpID_0Corel-Layer" />
                  <g id="_2361743239696">
                    <path
                      class="fil0"
                      d="M2543.57 6689.3c-2.72,-39.71 -4.91,-79.72 -5.33,-119.42 -0.29,-27.44 0.06,-56.91 4.63,-84.02 6.7,-39.7 19.41,-61.28 49.96,-83.18 0.02,-0.06 0.04,-0.11 0.06,-0.14l-20.2 -2.74 -13.9 -9.56c-170.64,-117.31 -215.15,-343.2 -196.31,-537l3.83 -39.48 35.67 -17.37c23.93,-11.65 48.04,-21.54 73.02,-30.61 4.91,-1.78 12.08,-4.05 18.56,-6.48 0.14,-2.83 0.21,-5.94 0.23,-9.18 -1.8,-0.23 -3.49,-0.49 -5.04,-0.72 -13.95,-1.35 -30.78,-1.62 -45.77,-1.87l-351.31 6.28c-27.51,3.2 -56.15,7.02 -83.68,8.3 -26.79,1.26 -50.95,-1.7 -72.98,-18.72 -28.83,-22.27 -9.54,-19.61 -49.6,-37.54 -42.13,-18.85 -123.85,-13.63 -171.07,-14.71l-71.19 -1.6 1.93 -71.17c1.64,-60.39 16.57,-99.47 42.04,-152.44 13.29,-27.61 20.18,-44.38 15.99,-76.08 -4.46,-33.61 -17.05,-47.48 -31.31,-76.08 -28.59,-57.41 -27.38,-115.37 -18.28,-177.54 6.77,-46.22 15.8,-91.03 27.2,-136.27 9.13,-36.15 19.03,-71.91 26.88,-108.4 12.03,-55.94 25.91,-110.89 40.61,-166.16 7.73,-29.02 16.91,-60.55 20.69,-90.32 7.43,-58.54 -19.54,-125.36 -39.61,-179.03 -14.87,-39.78 -65.08,-170.58 -103.05,-196.78 -22.17,-15.27 -35.48,-21.5 -48.4,-48.05 -14.01,-28.78 -13.8,-66.4 -13.57,-97.04 -0.87,-49.81 0.2,-99.2 0.8,-148.96 0.32,-26.47 0.9,-56.17 -3.83,-82.28 -9.69,-53.58 -58.37,-105.56 -93.49,-144.32 -84.62,-93.35 -197.11,-214.85 -244.42,-331.56 -10.57,-26.07 -48.01,-125.42 -73.98,-140.61 -14.51,-8.48 -39.84,-15.3 -55.98,-20.73 -45.04,-15.1 -87.76,-32.48 -130.52,-53.29 -45.71,-22.25 -87.41,-51.45 -115.03,-94.99 -16.3,-25.65 -20.6,-46.4 -32.28,-72.08 -4.05,-8.93 -8.87,-11.49 -18.04,-15.59 -37.2,-16.71 -100.76,-22.65 -140.86,-25.93l-44.81 -3.66 -64.55 -172.04c-26.21,-0.76 -52.27,-0.18 -78.87,1.71 -31.04,2.2 -62.58,6.2 -93.73,4.7 -92.16,-4.46 -160.17,-64.13 -224.27,-124.57l-19.68 -18.56 -2.3 -26.95c-7.56,-88.2 26.44,-184.43 60.69,-264.48 31.97,-74.78 71.65,-147.31 101.76,-222.33 59.21,-147.67 107.89,-300.14 173.74,-445.09l18.54 -40.85 44.84 -0.72c41.74,-0.67 82.59,1.89 123.22,11.92 25.24,6.23 49.04,15.54 73.94,22.41 86.51,23.87 214.02,12.3 301.47,4.05 21.35,-2.01 38.74,-6.86 59.25,-12.43 18.87,-5.13 37.2,-9.16 55.72,-12.33 0.9,-5 1.6,-10.03 2.09,-15.09 1.89,-20.2 2.18,-34.94 8.93,-54.84 9.27,-27.37 27.17,-52.71 44.45,-75.59 32.75,-43.37 69.08,-85.48 104.35,-126.82 4.09,-4.81 15.39,-18.33 17.27,-24.59 0.29,-2.65 -0.11,-6.27 -0.17,-8.94 -0.29,-11.17 0.06,-21.8 1.87,-32.87 5.57,-34.24 23.3,-64.02 44.14,-91.15 10.33,-13.45 19.44,-22.7 30.57,-31.47 0.17,-5.69 0.14,-11.43 0.2,-15.95 0.4,-29.51 -0.02,-59.14 -0.27,-88.67l-0.3 -34.58 27.07 -21.51c39.95,-31.74 79.96,-54.78 123.9,-79.83 36.15,-20.59 66.81,-40.4 97.4,-69.04l62.76 -58.78 45.73 72.83c6.59,10.5 13.88,22.09 20.31,34.31 3.5,1.41 6.97,2.88 10.41,4.39 6.16,2.72 14.06,6.37 21.43,9.13 13.13,-0.27 26.57,3.08 38.87,10.61 4.23,2.57 7.91,5.47 11.74,8.57 10.8,8.68 21.73,17.18 32.74,25.57 109.77,83.65 307.96,16.24 408.31,142.02 27.03,33.87 41.26,65.69 56.04,105.69 0.7,1.87 1.37,3.71 2.06,5.53 9.22,-9.13 20.02,-17.44 32.46,-25.78 34.39,-23.04 74.61,-43.23 117.22,-35.54 16.27,2.94 30.17,9.27 43.89,18.18 3.06,2 6.99,5.04 10.28,6.88 9.24,1.82 20.57,4.29 32.15,6.57 18.26,-16.98 43.08,-24.78 68.42,-29.04 22.7,-3.81 39.27,-3.17 59.62,3.3 12.1,-2.29 30.18,-8.91 39.72,-12.26 109.82,-38.58 277.87,-114.03 343.53,-211.78l26 -38.73 45.85 8.57c30.34,5.67 76.19,13.83 101.72,31.81 9.34,6.57 16.64,14.19 22,22.4 0.27,0.04 0.52,0.09 0.77,0.13 36.42,5.83 73.31,10.26 109.95,14.55l38.31 4.5 17.04 34.61c12.8,26 22.81,52.37 30.28,80.33 1.69,6.32 3.33,14.67 5.2,22.31 29.13,5.51 90.76,7.11 110.09,8 66.81,3.07 124.91,17.83 167.67,72.61 21.03,26.93 32.37,53.27 55.15,77.91 36.01,8.23 93.98,-2.29 126.15,-9.76 24.14,-5.6 48.05,-12.5 71.58,-20.25 12.41,-4.11 25.77,-9.65 38.15,-13.16 17.3,-4.9 42.47,-6.64 60.55,-8.52 30.8,-3.22 61.68,-6.04 92.54,-8.77 31.47,-2.77 62.94,-5.4 94.45,-7.76 19.55,-1.46 40.8,-3.53 60.37,-3.5l37.07 0.09 21.07 30.5c14.58,21.11 25.38,43.73 31.29,68.75 1.14,4.79 1.89,9.44 2.54,14.01 3.74,0.83 8.87,1.98 13.88,2.84 10.28,-10.26 20.87,-17.71 37.32,-24.24 32.33,-12.8 71.08,-12.06 105.18,-9.07 89.62,7.85 147.83,43.55 181.48,97.76l7.26 -2.17c101.23,-30.04 200.67,-23.83 231.15,93.26 13.17,50.61 10.07,115.12 37.07,160.2 41.5,69.22 49.45,142.46 68.65,218.41 3.26,12.93 6.86,27.31 12.11,40.85 3.24,-6.41 6.61,-12.67 10.2,-18.71 6.83,-11.47 14.74,-22.04 25.15,-30.54 29.7,-24.23 72.27,-23.96 100.59,2.54 25.85,24.2 29.25,60.08 30.52,93.3 2.79,73.71 6.64,58.13 51.42,115.91 31,40.02 53.58,91.61 87.52,127.25 45.24,47.53 75.58,85.66 97.31,147.59 12.24,34.91 35.81,56.28 62.81,81.11l22.54 18.88 35.45 7.8c92.59,20.34 183.53,63.82 271.13,99.72 71.72,29.37 160.14,63.35 238.44,62.33 19.34,-0.96 69.44,-19.78 89.14,-26.37 52.39,-17.57 105.46,-34.8 159.94,-44.67 132.31,-23.97 246.24,9.23 285.02,133.69 120.39,27.89 209.71,89.5 262.87,210.48 31.98,72.75 45.8,159.73 80.42,231.21 82.39,8.3 181.19,22.9 247.91,64.06 5.33,3.27 16.13,11.37 22.4,13.01 16.72,4.39 50,1.98 66.97,0.83 50.84,-3.44 99.09,-11.57 146.1,-31.67 36.64,-15.67 66.4,-34.26 107.18,-39.25 57.54,-7.04 113.85,16.61 164.07,42.13 95.96,48.78 192.91,114.49 282.55,174.04 9.73,6.46 25.67,17.28 41.84,27.28l87.5 -161.58 14.6 236.37c11.57,23.67 37.27,58.48 50.75,77.56 5.33,7.56 9.24,12.19 15.77,18.47 14.15,13.63 25.74,27.53 37.45,43.33l16.38 22.14 -2.86 27.41c-7.81,74.71 -34.07,132.99 -75.24,194.64 -23.37,34.98 -55.22,74.32 -68.24,114.72 -38.84,120.5 0,275.08 -11.94,402.42 -5.31,56.71 -31.67,124.84 -52.44,178 -20.33,52.07 -44.22,105.25 -61.61,158.14 -5.46,16.6 -14.28,42.71 -15.48,60.35 -0.67,9.7 1.33,20.34 0.7,31.13 -1.6,27.28 -11.8,55.27 -21.8,80.46 -21.71,54.66 -48.14,109.18 -73.65,162.16l-17.07 35.45 -39.1 4.26c-18.35,2 -36.74,3.57 -55.07,5.58 -3.33,0.36 -8,0.8 -12.33,1.43 -8.57,16.83 -19.14,47.3 -24.84,60.98 -37.05,88.88 -54.52,128.96 -138.06,183.37 -114.2,74.39 -229.21,149.72 -340.07,229.02 -37.34,26.7 -79.96,56.66 -113.48,88.19 -12.84,12.07 -23.14,25.47 -36.62,37.08 -26.57,22.88 -63.79,43.41 -94.11,60.87l-11.25 6.48 -12.8 2.07c-16.5,2.67 -72.25,12.71 -91.33,23.96 -0.56,8.51 0.21,21.04 0.06,27.94 -0.7,29.33 -5.96,55.98 -19.04,82.48 -40.6,82.24 -145.4,131.76 -226.16,163.76 -8.87,3.51 -19.26,7.06 -28.94,10.86 -7.1,15.37 -14.03,29.2 -23.91,45.27 -43.87,71.35 -85.79,99.65 -164.9,117.72 -52.5,12.01 -74.23,27.93 -109.23,71.01 -83.16,102.35 -245.21,258.19 -362.48,316.72 -64.22,32.04 -126.76,65.91 -189.07,101.43 -20.83,11.87 -49.71,29.94 -76.44,40.38l-31.4 26.65c-70.65,59.95 -159.8,104.98 -238.73,153.7 -50.3,31.04 -114.18,73.69 -174.3,79.56 -19.37,1.89 -39.12,0.9 -58.58,1.44 -18.78,0.54 -37.5,2.13 -56.17,4.39 -13.94,21.21 -33.97,38.58 -56.94,50.2 -8.98,4.54 -18.51,8.21 -28.34,10.68 -5.43,17.7 -10.46,30.91 -23.82,46.79 -18,21.44 -44.2,36.53 -68.63,49.51 -43.44,23.07 -89.42,43.7 -134.13,64.17 -93.13,42.65 -184.65,88.56 -275.96,134.94 -74.28,37.72 -129.23,50.79 -209.13,25.64 -52.41,-16.5 -77.72,-13.04 -131.86,4.61 -46.23,15.07 -85.48,27.98 -126.65,54.7 -7.58,4.93 -22.24,13.67 -30.2,20.43 -1.43,4.5 -2.57,9.97 -3.64,14.06 -4.1,16.06 -8.44,31.9 -13.39,47.74l-13.07 41.74 -43.15 7.04c-47.2,7.7 -89.64,7.6 -135.79,-5.61 -31.11,-8.9 -60.37,-22.22 -91.85,-30.57 -77,-20.45 -152.4,-11.43 -230.84,-14.96l-81.69 -3.67 2.29 -12.03c-42.65,13 -88.36,15.77 -132.63,16.89 -69.85,1.74 -140.37,0.25 -210.39,0.27 -83.59,29.8 -161.13,57.15 -250.28,70.43 -125.77,18.74 -256.32,8.39 -381.57,-9.6 -121,-12.31 -201.9,-36.74 -245.95,-161.26 -16.2,-45.77 -35.02,-88.2 -42.89,-136.69 -11.18,-68.95 4.74,-132.67 59.86,-179.1 30.5,-25.69 58.14,-44.7 93.33,-52.75 1.13,-3.1 2.2,-6.07 3.15,-8.64 9.78,-26.43 18.87,-53.22 28.04,-79.88 9.29,-26.98 19.78,-52.91 32.64,-78.39 4.32,-8.57 10.86,-19.41 13.84,-28.43 8.17,-24.74 1.4,-110.82 -0.09,-136.74l-4.21 -74.02 32.87 -0.4 0.02 0z" />
                  </g>
                  <g id="_2361743241232">
                    <a
                      data-toggle="tooltip"
                      data-placement="Balikpapan Barat"
                      class="tag-maps"
                      title="Balikpapan Barat"
                      href="#">
                      <path
                        class="fil2"
                        id="balikpapan-barat"
                        d="M1465.9 1118.05c1.71,197.77 -0.14,121.26 -45.17,179.87 -65.66,85.46 4.03,79 -65.37,160.4 -198.33,232.57 -110.72,148.46 -157.57,290.46 -90.45,8.44 -103.56,25.46 -164.48,31.2 -393.18,37.07 -310.7,-41.17 -504.16,-38.08 -61.75,135.96 -117.72,305.61 -172.47,442.17 -51.13,127.5 -169.31,317.89 -157.61,454.36 174.74,164.8 169.96,82.22 398.39,101.63l64.96 173.16c330.17,26.9 139.83,122.22 331.47,215.5 211.63,103.02 200.09,17.27 295.15,251.73 42.24,104.19 156.27,227.87 231.24,310.58 146.5,161.62 110.49,175.79 114.89,422.35 -1.03,156.27 31.04,-28.77 160.56,317.87 80.53,215.56 41.77,193.43 -18.8,475.2 -18.15,84.42 -37.3,131.16 -53.25,240.05 -22.04,150.31 36.38,133.43 49.71,234.03 13.83,104.26 -54.34,125.5 -57.43,239.74 66.07,1.5 141.96,-4.4 198.41,20.87 107.29,48.02 5.76,61.05 172.58,41.84l355.97 -6.37c8.83,0.14 47.91,1.46 55.2,2.5 135.5,19.46 -93.08,-24.61 33.43,7.36l30.93 11.45c7.94,145.13 -5.44,101.72 -129.46,162.14 -20.57,211.67 42.37,386.79 165.91,471.74l419.27 56.87c-124.87,-180.13 -78.79,-143.49 37.71,-334.11l-63.55 -33.22c-11.94,-251.85 43.57,-161.85 -108.63,-304.64 -13.18,-129.97 45.1,-130.37 120.93,-188.1 110.98,-84.51 76.88,-91.05 246.54,-88.67l-34.03 -27.81c-54.71,-53.2 -45.85,-70.57 -41.39,-146.09 266.39,-134.89 98.12,-217.45 144,-341.33 16.98,-45.88 29.34,-55.44 113.66,-109.96 36.81,-23.82 44.22,-16.06 84.92,-36.55 -46.09,-119.15 -36.5,5.02 -160.34,-165.98 -48.32,-66.72 -59.75,-41.43 -153.76,-184.93 -62.64,-95.62 -46.25,-22.87 -141.67,-80.82 12.2,-79.81 30.31,-56.71 88.81,-112.63 -44.51,-134.15 -68.91,2 -51.72,-166.46 17.83,-174.76 13.2,-44.78 -41.73,-152.63 17.34,-34.01 56.98,-101.81 75.69,-133.39 53.96,-91.12 45.48,-26.25 76.08,-146.89 48.11,-189.7 100.98,-99.98 82.76,-342.24 -14.01,-186.23 142.86,-292.93 218.2,-430.15 145,-264.05 92.11,-87.06 236.34,-175.98 40.45,-24.93 67.33,-67.77 94.99,-94.05 74.95,-71.24 203.07,-34.98 263.09,-109.93 88.42,-110.4 -24.52,-198.6 216.91,-346.57 222.44,-136.29 60.42,-109.46 191.58,-184.47 66.79,-38.2 224.47,-5.73 254.86,-310.46 12.91,-129.56 -20,-214.31 -151.63,-225.84 -140.16,-12.26 -51.07,54.64 -166.66,28.81 -80.62,-18.02 -28.61,-43.23 -75.72,-111.44 -29.37,-0.07 -270.26,20.74 -288.42,25.87 -7.2,2.04 -196.37,76.95 -293.17,37.09 -80.84,-74.32 -51.2,-135.5 -188.08,-141.83 -225.03,-10.39 -140.41,-17.08 -205.91,-150.15 -338.31,-39.68 -36.24,-31.67 -239.23,-69.62 -71.01,105.72 -233.63,188.12 -378.87,239.15 -98.18,34.48 -65.21,4.3 -111.09,12.01 -97.2,16.33 58.49,57.88 -127.14,21.89 -42.41,-8.23 -38.87,-52.35 -117.09,0.06 -72.38,48.48 1.24,57.2 -95.96,69.3 -48.68,-58.21 -40.11,-107.57 -89.46,-169.4 -73.74,-92.42 -271.08,-34.75 -395.86,-129.84 -80.22,-61.14 5.4,-3.15 -90.42,-45.37 -68.28,-30.1 -4.03,26.74 -62.17,-65.87 -79.22,74.19 -140.92,85.3 -225.65,152.63l0 0.01z" />
                    </a>
                    <a
                      data-toggle="tooltip"
                      data-placement="Balikpapan Utara"
                      class="tag-maps"
                      title="Balikpapan Utara"
                      href="#">
                      <path
                        class="fil1"
                        id="balikpapan-utara"
                        d="M5185.85 2069.75c-130.76,-39.34 -96.25,-222.52 -166.68,-340.02 -72.37,-120.77 15.13,-282.01 -187.26,-221.95 -20.83,55.76 -8.01,367.96 -167.56,445.95 -110.78,54.15 -115.15,-15.52 -185.65,113.93 -92.78,170.37 -225.8,55.6 -287.39,329.2 -58.65,260.55 -151.97,88.28 -358.13,280.77 -127.96,119.49 -63.41,58.11 -222.83,94.34 -97.47,239.27 -276.33,290.89 -264.89,560.85 7.74,182.45 -152.58,441.15 -159.21,461.62 -21.17,65.5 25.96,61.79 53.44,139.13l-61.68 65.01c-2.27,2.27 -7.07,6.57 -10.39,10.08 31.78,63.41 19.64,20.78 76.34,75.07l-18.33 92.25c-1.6,61.59 10.17,-15.43 1.53,40.57 -8.17,52.81 16.53,17.1 -87.48,92.45 3.66,2.68 10.43,0.49 12.23,5.96 11.16,34.11 27.56,-32.98 101.69,101.74 35.11,63.81 61.84,84.33 111.22,133.32 190,188.46 203.41,132.5 204.04,273.19 -105.92,50.37 -134.47,-54.68 -170.89,240.8 -3.19,25.89 -5.7,56.93 -13.23,78.75l-32.41 58.68c-73.02,120.41 -44.4,29.69 -124.93,102.37 14.81,138.74 113.33,25.26 102.75,213.91 -121.33,25.46 -102.28,-88.72 -238.82,2.54 -61.19,40.91 -142.73,95.26 -162.25,158.97 96.25,155.73 103.7,-7.24 111.39,281.56 3.96,3.4 11.6,1.03 13.67,7.63 14.85,47.39 -3.91,-8.7 25.51,15.61 25.03,20.67 63.22,33.85 9.45,116.11 -51.92,79.41 -87.93,64.09 -88.4,179.73 20.25,42.13 59.97,105.82 116.77,130.17 106.76,18.13 228.02,-231.84 356.47,-12.5 274.43,-47.22 146.3,146.59 381.57,39.95 93.62,-42.44 86.81,-21.34 169.97,-75.62 53.24,-34.77 114.15,-54.89 162,-82.01 32.91,-207.87 -72.11,-146.26 47.17,-289.97 143.43,-172.8 69.89,-74.77 239.41,-173.86 53.2,-31.11 58.87,-59.32 87.81,-116.86 48.48,-96.43 22.83,-51.22 114.2,-93.08 80.19,-36.73 166.48,-130.35 257.22,-155.36 100.35,-27.65 75.72,22.5 165.1,-0.06 109.46,-27.64 11.27,-21.24 192.64,-224.67 71.85,-80.6 50.35,-90.22 75.74,-132.83 33.5,-56.22 79.04,-51.17 127.95,-79.07l270.49 -348.5c-40.88,-53.97 -144.62,-321.6 -217.21,-386.04 -215.25,-191.07 -104.66,-342.94 -87.86,-402.31 -155.3,-63.37 -42.97,25.21 -127.03,-94.05 -35.9,-50.95 -95.19,-59.5 -91.69,-147.5l78.5 -414.89c2.14,-33.75 41.82,-415.15 43.57,-420.13 47.38,-134.72 189.9,-42.7 240.22,-256.09l-24.21 -20.29c-127.46,-117.28 -38.76,-100.86 -164.68,-233.11 -40.04,-42.07 -57.63,-88.09 -92.2,-132.7 -50.2,-64.78 -62.58,-60.02 -66.22,-156.63 -4.1,-107.36 -37.77,0 -70.5,67.91l-0.04 0.01z" />
                    </a>
                    <a
                      data-toggle="tooltip"
                      data-placement="Balikpapan Timur"
                      class="tag-maps"
                      title="Balikpapan Timur"
                      href="#">
                      <path
                        class="fil3"
                        id="balikpapan-timur"
                        d="M5510.74 3844.57c14.51,119.89 -62.56,77.19 -40.78,213.92 4.34,27.26 27.51,82.8 40.67,106.71 65.42,118.92 55.68,7.47 125.43,158.47 117.56,254.5 131.32,194.11 212.44,229.31 13.99,142.19 -63.05,163.94 -140.63,264.08 -128.69,166.1 -112.89,205.05 -176.85,236.48 -79.18,38.91 -81.88,2.43 -125.83,80.82 -114.49,204.22 -123.72,120.03 -169.43,245.18 -39.79,108.96 -6.99,45.31 -97.63,111.95 10.94,77.29 238.28,461.24 293.32,555.18l152.69 279.85c59.9,111.43 54.61,3.81 104.82,100.41 70.19,135.05 -58.71,16.65 87.48,134.46 -20.96,217.48 -91.39,185.84 261.23,9.87 112.38,-56.08 273.6,-217.36 339.14,-298 121.59,-149.67 184.67,-44.36 268.76,-181.15 46.78,-76.1 4,-51.96 87.12,-84.89 384.04,-152.2 33.67,-250.79 351.28,-302.21 203.73,-117.36 -83.93,19.93 580.96,-413.15 67.75,-44.15 77.63,-70.45 111.32,-151.25 46.74,-112.09 28.28,-97.92 149.99,-111.17 148.51,-308.37 52.07,-159.13 106.76,-325.47 27.5,-83.57 103.35,-240.98 110.81,-320.61 12.17,-129.93 -28.74,-281.74 15.04,-417.56 32.08,-99.52 125.79,-155.05 140.43,-294.99 -29.73,-40.17 -31.24,-30.61 -54.15,-63.12 -140.97,-199.77 32.11,-23.19 -176,-161.44 -520.52,-345.76 -324.3,-155.99 -655.9,-133.57 -186.84,12.64 -34.74,-50.05 -386.02,-81.56 -105.69,-169.87 -45.04,-400.17 -358.61,-447.9 -32.94,-260.15 -384.44,-53.76 -473.77,-52.59 -171.59,2.25 -363.41,-127.99 -525.85,-163.69 -47.78,58.85 -18.51,74.35 -90.09,131.72 -50.39,40.37 -121.02,53.04 -150.93,93.62 -22.04,29.92 -55.52,345.61 -59.12,409.3 -7.98,141.06 -49.65,268.98 -71.84,400.87 -16.81,100.03 21.03,86.61 73.62,141.6 16.27,17.01 34.17,45.87 51.18,58.39 28.37,20.87 45.35,10.76 88.94,42.17l-0.01 -0.05z" />
                    </a>
                    <a
                      data-toggle="tooltip"
                      data-placement="Balikpapan Selatan"
                      class="tag-maps"
                      title="Balikpapan Selatan"
                      href="#">
                      <path
                        class="fil4"
                        id="balikpapan-selatan"
                        d="M5726.53 6749.07c-13.93,-59.41 -11.77,-53.24 -21.78,-112.4 -13.81,-81.61 -55.28,-164.71 -115.67,-219.47l-164.75 -286.62c-327.33,-548.31 -306.06,-767.07 -633.8,-541.91 -277.89,190.91 -85.25,7.13 -232.23,218.01 -89.22,128 -97.2,-7.34 -265.61,185.4 -106.87,122.32 -24.2,143.07 -70.7,344.07 -43.98,18 -59.31,12.57 -109.98,35.27l-303.65 152.43c7.87,120.59 73.38,194.58 149.76,243.65 -3.83,161 -32.7,164.17 -126.28,264.62 -170.8,183.33 -47.42,114.29 -23.94,261.31 -36.74,51.29 -167.17,144.59 -177.5,199.07 89.88,4.05 156.02,-6.59 245.84,17.27 78.48,20.83 103.95,50.07 198.04,34.73 26.5,-84.58 7.56,-75.91 76.28,-120.5 48.38,-31.4 88.86,-44.88 143.26,-62.61 192.46,-62.76 164.24,58.57 330.87,-26.05 98.35,-49.94 185.87,-93.75 278.53,-136.18 250.23,-114.61 152.71,-79.99 215.11,-174.67 1.26,28.07 73.11,0 75.91,-46.57 194.3,-31.74 126.98,26.74 302.21,-81.38 69.65,-42.98 169.29,-95.82 230.09,-147.42l0.02 -0.04z" />
                    </a>
                    <a
                      data-toggle="tooltip"
                      data-placement="Balikpapan Tengah"
                      class="tag-maps"
                      title="Balikpapan Tengah"
                      href="#">
                      <path
                        class="fil1"
                        id="balikpapan-tengah"
                        d="M2615.91 6707.49c82.71,3.04 139.85,-30.77 197.5,25.28 57.68,56.08 -25.11,28.23 140.23,124.12 327.2,189.76 58.01,417.29 361.1,391.17 -3.06,-109.93 -27.17,-157.5 30.59,-251.08 119.78,-16 48.35,12.51 149.77,36.03 54.78,-62.81 68.78,-38.42 175.3,-143.2 110.02,-108.2 -18.4,-115.94 116.07,-185.2l27.1 -11.83c-45.52,-81.43 -41.5,-149.4 -134.34,-204.45 -169.36,-100.39 -104.46,-35.81 -234.91,6.75l-38.6 -123.35c-239.21,-0.21 -125.56,164.86 -470.8,51.74 -32.82,-10.77 -240.13,-39.71 -267.02,-35.16 -22,149.17 -78.3,-42.11 -52,319.17l0.01 0.02z" />
                    </a>
                    <a
                      data-toggle="tooltip"
                      data-placement="Balikpapan Kota"
                      class="tag-maps"
                      title="Balikpapan Kota"
                      href="#">
                      <path
                        class="fil1"
                        id="balikpapan-kota"
                        d="M3747.89 7293.42c-20.81,-130.24 -127.86,-95.51 15.63,-254.56 56.57,-62.69 136.56,-125.61 144.3,-241.38l-114.97 -33.54c-55.41,67.51 6.84,61.47 -95.24,170.58 -48.21,51.52 -27.07,52.46 -89.33,83.21l-134.36 86.56c-87.21,-34.91 4.74,-30.63 -93.81,-60.02 -136.27,209.58 205.71,155.93 -206.38,301 -21.98,-25.81 -81.69,-170.11 -85.91,-203.78 -31.92,-254.36 -142.14,-185.71 -267.14,-320.11 -93.93,-100.98 -80.35,-63.61 -235,-61.74 11.83,207.61 -4.14,136.9 -50.14,270.65 -75.72,220.11 -27.98,73.11 -145.87,172.41 -73.41,61.81 -22.81,161.66 4.17,237.92 31.71,89.59 82.08,103.9 187.74,114.52 324.23,46.74 438.84,0 610.92,-61.32 390.79,-1.07 336.94,23.66 555.42,-200.45l-0.02 0.04z" />
                    </a>
                  </g>
                </g>
              </svg>
            </div>

            <div class="col-lg-4">
              <div class="right-image" style="margin-top: 200px;">
                <!-- <img src="assets/images/about-right-dec.png" alt=""> -->
                <h3 style="color: #4b8ef1;">Description</h3>
                <p class="description-maps" >Berikut ulasannya:</p>
                <ul style="list-style-type: none; margin-left: 20px;margin-top: 10px;">
                  <li class="tips-maps"> <div class="kotak" style="background: #ff605c;"></div>Butuh Perhatian Lebih</li>
                  <li class="tips-maps"><div class="kotak" style="background: #ffbd44;"></div>Peringatan</li>
                  <li class="tips-maps"><div class="kotak" style="background: #4b8ef1;"></div>Normal</li>
                  <li class="tips-maps"><div class="kotak" style="background: #00ca4e;"></div>Baik</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="pricing" class="pricing-tables">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading">
              <h4><em>Bantuan - bantuan</em> yang lagi berjalan</h4>
              <img src="{{ asset("landingpage/assets/images/heading-line-dec.png") }}" alt="" />
              <p>
                Bantuan adalah dukungan yang diberikan secara sukarela oleh individu atau kelompok dalam situasi darurat atau kegiatan sosial
              </p>
            </div>
          </div>
          <!-- <div class="col-md-12 card-playlist" style="height: 700px">
            <div class="container">
              <input type="radio" name="slider" id="item-1" checked />
              <input type="radio" name="slider" id="item-2" />
              <input type="radio" name="slider" id="item-3" />
              <div class="cards">
                <label class="card" for="item-1" id="song-1">
                  <img
                    src="https://images.unsplash.com/photo-1530651788726-1dbf58eeef1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80"
                    alt="song" />
                </label>
                <label class="card" for="item-2" id="song-2">
                  <img
                    src="https://images.unsplash.com/photo-1559386484-97dfc0e15539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
                    alt="song" />
                </label>
                <label class="card" for="item-3" id="song-3">
                  <img
                    src="https://images.unsplash.com/photo-1533461502717-83546f485d24?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                    alt="song" />
                </label>
              </div>
              <div class="player">
                <div class="upper-part">
                  <div class="play-icon">
                    <svg
                      width="20"
                      height="20"
                      fill="#2992dc"
                      stroke="#2992dc"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      class="feather feather-play"
                      viewBox="0 0 24 24">
                      <defs />
                      <path d="M5 3l14 9-14 9V3z" />
                    </svg>
                  </div>
                  <div class="info-area" id="test">
                    <label class="song-info" id="song-info-1">
                      <div class="title">Bunker</div>
                      <div class="sub-line">
                        <div class="subtitle">Balthazar</div>
                        <div class="time">4.05</div>
                      </div>
                    </label>
                    <label class="song-info" id="song-info-2">
                      <div class="title">Words Remain</div>
                      <div class="sub-line">
                        <div class="subtitle">Moderator</div>
                        <div class="time">4.05</div>
                      </div>
                    </label>
                    <label class="song-info" id="song-info-3">
                      <div class="title">Falling Out</div>
                      <div class="sub-line">
                        <div class="subtitle">Otzeki</div>
                        <div class="time">4.05</div>
                      </div>
                    </label>
                  </div>
                </div>
                <div class="progress-bar">
                  <span class="progress"></span>
                </div>
              </div>
            </div>
          </div> -->

          <div
            class="col-sm-12"
            style="
              height: 500px;
              display: flex;
              justify-content: center;
              align-items: center;
            ">
            <div class="carousel">
              <div class="carousel__nav">
                <span id="moveLeft" class="carousel__arrow">
                  <svg
                    class="carousel__icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24">
                    <path
                      fill="white"
                      d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                  </svg>
                </span>
                <span id="moveRight" class="carousel__arrow">
                  <svg
                    class="carousel__icon"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24">
                    <path
                      fill="white"
                      d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                  </svg>
                </span>
              </div>

              @foreach ($bantuan as $btn )



              <div class="carousel-item carousel-item--{{$loop->iteration}}">
                <div class="carousel-item__image" style="background-image: url({{ $btn->gambar }}) !important; "></div>
                <div class="carousel-item__info">
                  <div class="carousel-item__container">
                    <h2 class="carousel-item__subtitle">The grand moment</h2>
                    <h1 class="carousel-item__title">{{ $btn->judul_bantuan }}</h1>
                    <p class="carousel-item__description">
                      {{ $btn->deskripsi }}
                    </p>
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop{{ $loop->iteration }}"
                      href="#"
                      class="carousel-item__btn"
                      >Lihat Detail</a
                    >
                  </div>
                </div>
              </div>

              @endforeach
              <div class="carousel-item carousel-item--2">
                <div class="carousel-item__image"></div>
                <div class="carousel-item__info">
                  <div class="carousel-item__container">
                    <h2 class="carousel-item__subtitle">The big window</h2>
                    <h1 class="carousel-item__title">Minimal window</h1>
                    <p class="carousel-item__description">
                      Clear Glass Window With Brown and White Wooden Frame iste
                      natus error sit voluptatem accusantium doloremque
                      laudantium.
                    </p>
                    <a
                      data-bs-toggle="modal"
                      data-bs-target="#staticBackdrop"
                      href="#"
                      class="carousel-item__btn"
                      >Read the article</a
                    >
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="clients" class="the-clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading">
              <h4><em>Donatur & Relawan</em></h4>
              <img src="{{ asset('landingpage/assets/images/heading-line-dec.png') }}" alt="" />
              <p>
                Donatur dan Relawan adalah pihak yang memberikan sumbangan atau dukungan finansial secara sukarela kepada suatu organisasi atau individu yang membutuhkan baik dalam hal tenaga , uang dan barang.
              </p>
            </div>
          </div>
          <div class="col-lg-12 full-relawan">
            <div class="row">
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col-md-3"
                style="display: flex; justify-content: center">
                <div class="book">
                  <div class="row">
                    <h5 class="title-description">Pertamina</h5>
                    <p class="donatur-description">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Provident ratione et at! Magni veniam inventore aperiam
                      officia dicta rerum odio numquam
                    </p>
                  </div>
                  <div class="cover">
                    <!-- <p>Hover Me</p> -->
                    <img
                      src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                      alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="clients" class="the-clients">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading">
              <h4><em>Didukung Oleh</em></h4>
              <img src="{{ asset('landingpage/assets/images/heading-line-dec.png') }}" alt="" />
              <p>
                Aplikasi yang kami buat di dukung oleh
              </p>
            </div>
          </div>
          <div class="col-lg-12">
            <section class="customer-logos slider">
              <div class="slide">
                <img
                  src="https://smktelkom-pwt.sch.id/wp-content/uploads/2018/10/logo-telkom-indonesia.jpg" />
              </div>
              <div class="slide">
                <img
                  src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/56e83c6db8cd5587e87161281dfba75b.png" />
                </div>
                <div class="slide">
                  <img
                    src="https://rekreartive.com/wp-content/uploads/2018/12/Logo-Balikpapan-Kota-Balikpapan-Kalimantan-Timur.png" />
                </div>
              <div class="slide">
                <img
                  src="data:image/jpeg;base64,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" />
              </div>
              <div class="slide">
                <img
                  src="https://asset-relasio.s3-ap-southeast-1.amazonaws.com/userfiles/company/725/logo/thumbs/39f82446744fd5769a62daebacc214a7.jpg" />
              </div>
              <div class="slide">
                <img
                  src="http://jckharisma.id/wp-content/uploads/2020/12/logo3-300x117.png" style="margin-top: 30px;" />
              </div>

            </section>
          </div>
        </div>
      </div>
    </div>

    <footer id="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading">
              <h4>
                <!-- Join our mailing list to receive the news &amp; latest trends -->
              </h4>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-3">
            <!-- <form id="search" action="#" method="GET">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <fieldset>
                    <input
                      type="address"
                      name="address"
                      class="email"
                      placeholder="Email Address..."
                      autocomplete="on"
                      required />
                  </fieldset>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <fieldset>
                    <button type="submit" class="main-button">
                      Subscribe Now <i class="fa fa-angle-right"></i>
                    </button>
                  </fieldset>
                </div>
              </div>
            </form> -->
            <br />
            <br />
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="footer-widget">
              <h4>Contact Us</h4>
              <p>Balikpapan</p>
              <p><a href="tel:+62895705013398">No Telp : 010-020-0340</a></p>
              <p><a href="mailto:orang@gmail.com">Email to : orang@gmail.com</a></p>

              <p><a href="https://chat.whatsapp.com/F15SvbPOMMF8g0IwP7fZkj" style="font-size: 20px;
    font-weight: 500;">Grup <i class="fab fa-whatsapp-square"></i></a></p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="footer-widget">
              <h4>menu</h4>
              <ul>
                <li><a href="#top">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">Peta</a></li>
                <li><a href="#pricing">Bantuan</a></li>
                <li><a href="#newsletter" style="font-weight: 450 !important;">Tentang Kami</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="footer-widget">
              <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('landingpage/assets/images/logo/logo-polos-nobg.png') }}" style="width: 100px !important;" alt="" />
              </div>
              <center>
              <h4>Kota Terang</h4>
              </center>
              <p>
                Aplikasi yang ingin dibuat merupakan sebuah platform digital yang dirancang untuk membantu mengatasi masalah kemiskinan di kota Balikpapan.
              </p>
            </div>
          </div>
          <div class="col-lg-12"></div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    @foreach ($bantuan as $btn )


    <div
      class="modal fade"
      id="staticBackdrop{{ $loop->iteration }}"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 0.7rem">
          <div class="modal-header" style="border-bottom: none; padding: 0">
            <div class="tools" style="">
              <div class="circle" style="">
                <span class="red box" style="background-color: #ff605c"></span>
              </div>
              <div class="circle">
                <span
                  class="yellow box"
                  style="background-color: #ffbd44"></span>
              </div>
              <div class="circle">
                <span
                  class="green box"
                  style="background-color: #00ca4e"></span>
              </div>
            </div>
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              style="padding: 0.5rem 0.5rem; margin: 1rem 1rem"></button>
          </div>
          <div class="modal-body">
            <img
              style="border-radius: 10px"
              src="storage/{{ $btn->gambar }}"
              alt="" />
            <div class="description-modal" style="padding: 1rem">
              <h4 class="title-donation-modal">{{ $btn->judul_bantuan }}</h4>
              <div class="row">
                <div class="col-sm-2">
                  <img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" class="modal-logo-donatur" alt="">
                </div>
                <div class="col-sm-2">
                  <img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" class="modal-logo-donatur" alt="">
                </div>
                <div class="col-sm-2">
                  <img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" class="modal-logo-donatur" alt="">
                </div>
              </div>
              <p style="description-modal" style="margin-top: 20px;">
               {{ $btn->deskripsi }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <!-- Scripts -->
    <script src="{{ asset('landingpage/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/animation.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/popup.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
      $(function () {
        $(".carousel-item").eq(0).addClass("active");
        var total = $(".carousel-item").length;
        var current = 0;
        $("#moveRight").on("click", function () {
          var next = current;
          current = current + 1;
          setSlide(next, current);
        });
        $("#moveLeft").on("click", function () {
          var prev = current;
          current = current - 1;
          setSlide(prev, current);
        });
        function setSlide(prev, next) {
          var slide = current;
          if (next > total - 1) {
            slide = 0;
            current = 0;
          }
          if (next < 0) {
            slide = total - 1;
            current = total - 1;
          }
          $(".carousel-item").eq(prev).removeClass("active");
          $(".carousel-item").eq(slide).addClass("active");
          setTimeout(function () {}, 800);

          console.log("current " + current);
          console.log("prev " + prev);
        }
      });
    </script>

    <script>
      $(document).ready(function () {
        $(".customer-logos").slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 4,
              },
            },
            {
              breakpoint: 520,
              settings: {
                slidesToShow: 3,
              },
            },
          ],
        });
      });
      $(
        ".no-touch .project-list li:nth-child(3), .no-touch .project-list li:nth-child(8)"
      ).hover(function (e) {
        $(this)
          .parents(".client-meta")
          .next(".overflow-wrapper")
          .find("img:nth-child(1)")
          .toggleClass("show-image");
      });

      $(
        ".no-touch .project-list li:nth-child(4), .no-touch .project-list li:nth-child(9)"
      ).hover(function (e) {
        $(this)
          .parents(".client-meta")
          .next(".overflow-wrapper")
          .find("img:nth-child(2)")
          .toggleClass("show-image");
      });

      $(
        ".no-touch .project-list li:nth-child(5), .no-touch .project-list li:nth-child(9)"
      ).hover(function (e) {
        $(this)
          .parents(".client-meta")
          .next(".overflow-wrapper")
          .find("img:nth-child(3)")
          .toggleClass("show-image");
      });

      $(
        ".no-touch .project-list li:nth-child(6), .no-touch .project-list li:nth-child(10)"
      ).hover(function (e) {
        $(this)
          .parents(".client-meta")
          .next(".overflow-wrapper")
          .find("img:nth-child(4)")
          .toggleClass("show-image");
      });

      $(
        ".no-touch .project-list li:nth-child(7), .no-touch .project-list li:nth-child(11)"
      ).hover(function (e) {
        $(this)
          .parents(".client-meta")
          .next(".overflow-wrapper")
          .find("img:nth-child(5)")
          .toggleClass("show-image");
      });

      // Reset
      $(".touch .client-wrap").click(function (event) {
        var target = $(event.target);
        if (target.hasClass("client-close")) {
          $(".client-wrap div.client").addClass("reset");
        } else {
          $(".client-wrap div.client").removeClass("reset");
        }
      });

      // White BG for client top
      $(".no-touch .project-list li").hover(function (e) {
        $(this)
          .parents(".client-meta")
          .next(".overflow-wrapper")
          .toggleClass("white-bg");
        $(".touch .client-wrap").toggleClass(".solid");
      });

      // David Walsh simple lazy loading
      [].forEach.call(
        document.querySelectorAll("img[data-src]"),
        function (img) {
          img.setAttribute("src", img.getAttribute("data-src"));
          img.onload = function () {
            img.removeAttribute("data-src");
          };
        }
      );

      // For the demo
      $(".hover .toggle-switch").click(function (e) {
        $(".hover .toggle-switch").toggleClass("switched-off");
        $(".client-wrap").toggleClass("opacity-focus");
      });
    </script>
  </body>
</html>
