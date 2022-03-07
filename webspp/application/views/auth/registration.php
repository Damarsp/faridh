<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url();?>assets/fonts/font-awesome" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap.min2.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Halaman Utama</title>

        <style>
        .form-signin
        {
            max-width: 330px;
           
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="text"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .login-title
        {
            color: #0d1730;
            font-size: 24px;
            font-weight: 400;
            display: block;
        }

    </style>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid"  style="
            height: calc(3rem + 1rem)
            
            !important;
            "
            >
                <div>
                    <a  class="nav__logo">Pembayaran SPP SMK 17</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="<?php echo base_url() ?>landingpage" class="nav__link">Home</a></li>
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
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home"
            style="
            padding : 5rem 0 1rem;
            row-gap: 2rem
            !important;
            ">
            <form class="form-signin" method="post" action="<?php echo base_url('registration/post'); ?>" 
            style="
            max-width: 340px
            !important;
            ">
            <center><h1 class="login-title"> <b>Daftar Akun Baru</b> </h1></center>
            <br>
                <div class="form-group">
                                <tr>
                                <td width="130">Nama Lengkap</td>
                             <td>
                             <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" autocomplete="off" required>
                             </td>
                                </tr>
                                </div>

                                <div class="form-group">
                                <tr>
                                <td width="130">Username</td>
                                <td>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username" autocomplete="off" required>
                                </td>
                                </tr>
                                </div>

                                <div class="form-group">
                                <tr>
                                <td width="130">Password</td>
                                <td>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" autocomplete="off" required>
                                </td>
                                </tr>
                                </div>

                                <div class="form-group" required>
                                <tr><td width="130">Level</td>
					        <td><div class="col-sm-4"" required>
					        	<select name="level" class="form-control" >
									<option value=''>Pilih Kelas</option>
									 <option value='pelanggan'>XII</option>
					               <option value='pelanggan'>XI</option>
									<option value="pelanggan">X</option>
					            </select>
					       </td></tr>
                                </div>

                                <br>
                                 <div class="form-group">
                                <tr>
                                <td>
                               <input type='radio' name='active' value='1' required /><span style="font-size: 14px;"> Saya terima persyaratan yang berlaku</span>
                                </td>
                                </tr>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="register"> <b>Buat Akun</b></button>
                            </form>
                           <br>

                <div class="home__data">
                
                <a href="<?php echo base_url() ?>authentication/auth/login" class="button">Login</a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 
                            107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137
                             65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path  d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 
                            477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 
                            361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image href="<?php echo base_url();?>assets/img/pendaftaran1.png" class="home__blob-img" x="70" y="10">

                        </g>
                    </svg>
                </div>
            </section>

           
           
        <!--===== FOOTER =====-->
        <footer class="footer"  style="
            padding: 12px 0;
            background-color : #e90e09;
            color : white 
            !important;
            ">
          <center><p class="footer__copy">&#169; SMK 17 JAKARTA BARAT | 2022-2023 </p></center>  
        </footer>

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <!-- <script src="<?php echo base_url();?>assets/js/main.js" rel="stylesheet"></script> -->
    </body>
</html>
