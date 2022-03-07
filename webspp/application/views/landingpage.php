<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php base_url() ?>assets/css/styles.css" !importart>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Halaman Utama</title>
</head>

<body>
    <!-- header -->
    <header class="l-header">
        <nav class="nav bd-grid" style="height: calc(3rem + 1rem) !important;">
            <div>
                <a class="nav__logo">Pembayaran SPP SMK 17</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="<?php echo base_url() ?>landingpage" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="<?php echo base_url() ?>authentication/auth/login" class="nav__link">Login</a></li>
                     <li class="nav__item"><a href="<?php echo base_url() ?>registration/register" class="nav__link">Register</a></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!-- halaman -->
        <section class="home bd-grid" id="home" style="row-gap: 7rem; padding : 8rem 0 2rem;
            max-width : 1064px
            !important;
            ">
            <div class="home__data">
                <h1 class="home__title">Selamat<br>Datang <span class="home__title-color">Di Website</span><br> Pembayaran SPP</h1>

                <a href="<?php echo base_url() ?>authentication/auth/login" class="button">Login</a>
            </div>

            <div class="home__social">
                <a href="https://instagram.com/ppdb_smkn17" class="home__social-icon"><i class='bx bxl-instagram-alt'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-facebook-circle'></i></a>

            </div>

            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 
                            107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137
                             65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z" />
                    </mask>
                    <g mask="url(#mask0)">
                        <image href="<?php echo base_url(); ?>assets/img/gambar.png" class="home__blob-img" x="10" y="80">
                    </g>
                </svg>
            </div>
        </section>



        <!--===== FOOTER =====-->
        <footer class="footer" style="padding: 12px 0; background-color : #22577E; color : #F5F2E7 !important;
            ">
            <center>
                <p class="footer__copy">&#169; SMK 17 JAKARTA BARAT | 2022-2023 </p>
            </center>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <!-- <script src="<?php base_url() ?>assets/js/main.js"></script> -->
</body>

</html>