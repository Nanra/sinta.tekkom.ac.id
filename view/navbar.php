<div class="navbar-fixed">
    <nav class="hoverable light-blue darken-3 z-depth-5">
        <!-- Menu Navbar -->
        <div class="container">
            <div class="nav-wrapper">
                <span class="col offset-s12 hide-on-med-down"><img id="logo" style="width: 50px; height:50px;" src="img/unikom.png"></span>
                <span> &nbsp;</span>
                <a href="index.php" class="brand-logo">SISTEM INFORMASI TA</a>
                <span> &nbsp;</span>
                <span> &nbsp;</span>
                <a href="#" data-activates="menu-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

                <!-- Menu Desktop -->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="waves-effect"><a href="index.php">Beranda<i class="material-icons left">home</i></a></li>
                    <li class="waves-effect"><a href="carijudul.php">Cari Judul TA<i class="material-icons left">search</i></a></li>
                    <?php 
                    
                    require_once "core/init.php";
                    
                    
                    if ( !isset($_SESSION['user']) ) {
                        
                        echo "<li class='waves-effect waves-light dropdown-button' data-activates='ddlogin'><a href='#'>Login/Daftar<i class='material-icons left'>account_circle</i></a></li>";
                    } else {
                        echo "<li class='waves-effect waves-light dropdown-button' data-activates='ddlogout'><a href='#'>".$_SESSION['user']."<i class='material-icons left'>account_circle</i></a></li>";
                    }

                    
                    
                     ?>
                    <li><a href="#" class="dropdown-button waves-effect waves-light" data-activates="dropdownMore">More<i class="material-icons right">arrow_drop_down_circle</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Tutup Navbar -->
</div>
<!-- Navbar Fixed -->
<!-- Menu Mobile-->
<ul class="side-nav" id="menu-mobile">
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Cari Judul TA</a></li>
</ul>
<!-- Penutup Menu Mobile -->

<!-- DD MORE -->
<ul id='dropdownMore' class='dropdown-content active' style="width: 219px; position: absolute; top: 1px; left: 921.562px; opacity: 1;">
    <li><a href="caridosen.php">Cari Dosen</a></li>
    <li><a href="downloadTA.php">Download Jurnal TA</a></li>
<!--    <li><a href="pengumuman.php">Pengumuman<i class="material-icons right">new_releases</i></a></li>-->
    <li><a href="about.php">Tentang</a></li>
</ul>
<!-- Penutup DDMORE -->


<!-- DD Login/Daftar -->
<ul id='ddlogin' class='dropdown-content' style="width: 219px; position: absolute; top: 1px; left: 921.562px; opacity: 1;">
    <li><a href="daftar.php">Daftar<i class="material-icons right">fiber_new</i></a></li>
    <li><a href="login.php">Login</a></li>
</ul>
<!-- Penutup Login/Daftar -->

<!-- DD Logout -->
<ul id='ddlogout' class='dropdown-content' style="width: 219px; position: absolute; top: 1px; left: 921.562px; opacity: 1;">
    <li><a href="logout.php">Logout</a></li>
</ul>
<!-- Penutup Logout -->