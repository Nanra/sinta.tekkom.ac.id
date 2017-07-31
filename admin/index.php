<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Nanra Sukedy Hasibuan">
    <link rel="icon" type="image/png" href="img/fav.png">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.bundle.js"></script>
    <title>SINTA | SISTEM INFORMASI TUGAS AKHIR MAHASISWA TEKNIK KOMPUTER UNIKOM</title>
</head>

<body id="tinggi">

    <div class="navbar-fixed">
        <nav class="green">
            <!-- Menu Navbar -->
            <div class="container">
                <div class="nav-wrapper">
                    <a href="http://localhost/sinta.tekkom.ac.id/admin/" class="brand-logo">Admin Panel<i class="material-icons left">settings_input_antenna</i></a>
                    <a href="#" data-activates="menu-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

                    <!-- Menu Desktop -->
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="http://localhost/sinta.tekkom.ac.id/admin/">Beranda<i class="material-icons left">business</i></a></li>
                        <li><a href="http://localhost/sinta.tekkom.ac.id/admin/editTA.php">Edit TA<i class="material-icons left">picture_in_picture</i></a></li>
                        <li><a href="http://localhost/sinta.tekkom.ac.id/admin/editUser.php">Edit User<i class="material-icons left">accessibility</i></a></li>
                        <li><a href="#" class="dropdown-button" data-activates="dropdownMore">More<i class="material-icons right">arrow_drop_down_circle</i></a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Tutup Navbar -->
        
    </div>
    <!-- Navbar Fixed -->
    <!-- Menu Mobile-->
    <ul class="side-nav" id="menu-mobile">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">More</a></li>
    </ul>
    <!-- Penutup Menu Mobile -->

    <!-- DD MORE -->
    <ul id='dropdownMore' class='dropdown-content'>
        <li><a href="#!">Upload Jurnal</a></li>
    </ul>
    <!-- Penutup DDMORE -->

    <br><br><br><br><br><br><br><br><br>
    <div class="container center">
        <a href="editTA.php" class="waves-effect waves-light btn">EDIT/TAMBAH TA</a>
        <a href="http://localhost/sinta.tekkom.ac.id/admin/editUser.php" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>EDIT / TAMBAH USER</a>
        <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>UPLOAD JURNAL TA</a>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br>
    <!-- FLOATING Menu -->
    <!--
    <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large green">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
            <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
-->
    <!-- Penutup Floating -->

    <footer class="page-footer green darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <!--                <h5 class="white-text">Footer Content</h5>-->
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <img id="logo" style="width: 100px; height:100px;" src="img/unikom.png">
                    <p class="grey-text text-lighten-4 h3">Universitas Komputer Indonesia</p>
                    <ul>
                        <li class="grey-text text-lighten-4">Jalan Dipatiukur No. 112-116</li>
                        <li class="grey-text text-lighten-4"> Coblong, Lebakgede, Bandung,</li>
                        <li class="grey-text text-lighten-4">Kota Bandung, Jawa Barat 40132</li>
                    </ul>
                </div>
                <div class="col l4 offset-l2 s12">
                    <br>
                    <br>
                    <h5 class="white-text">LINK UNIKOM</h5>
                    <hr>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="http://www.unikom.ac.id/">UNIKOM OFFICIAL</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://tk.unikom.ac.id/index.php">TEKNIK KOMPUTER UNIKOM</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://digilib.unikom.ac.id/">DIGILAB UNIKOM</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://elib.unikom.ac.id/">PERPUSTAKAAN ONLINE UNIKOM</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright ">
            <div class="container ">
                &copy; SINTA TEKKOM
                <?php echo date('Y'); ?>
                <a class="grey-text text-lighten-4 right waves-effect waves-light" href="https://about.me/nanrasukedy">Made with <i class="material-icons">favorite</i> By TEAM</a>
            </div>
        </div>
    </footer>
</body>

</html>