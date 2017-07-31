<?php include_once "crud.php"; ?>

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
    <title>SINTA | SISTEM INFORMASI TUGAS AKHIR MAHASISWA TEKNIK KOMPUTER UNIKOM</title>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.bundle.js"></script>
</head>

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

<body>
    <!--
<div id="header">
    <label>By : <a href="http://cleartuts.blogspot.com/">Team</a></label>
</div>
-->
    <br>
    <a href="http://localhost/sinta.tekkom.ac.id/admin/editTA.php" title="EDIT TA">
        <h1 class="center">EDIT TA</h1>
    </a>
    <br>
    <div id="form">
        <form method="post">
            <table width="100%" border="1" cellpadding="15">
                <tr>
                    <td>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="nim" value="<?php if(isset($_GET['edit'])) echo $getROW['nim'];  ?>" id="nim" type="text" class="validate" required>
                                <label class="active" for="nim">NIM</label>
                            </div>


                            <div class="input-field col s6">
                                <input name="penulis" value="<?php if(isset($_GET['edit'])) echo $getROW['nim'];  ?>" id="penulis" type="text" class="validate" required>
                                <label class="active" for="penulis">Nama Penulis</label>
                            </div>


                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="pembimbing" value="<?php if(isset($_GET['edit'])) echo $getROW['pembimbing'];  ?>" id="pembimbing" type="text" class="validate" required>
                                    <label class="active" for="pembimbing">Nama Pembimbing</label>
                                </div>


                                <div class="input-field col s6">
                                    <input name="judul" value="<?php if(isset($_GET['edit'])) echo $getROW['judul'];  ?>" id="judul" type="text" class="validate" required>
                                    <label class="active" for="judul">Judul TA</label>
                                </div>


                            </div>
                        </div>
                    </td>
                </tr>

                <!-- Button for UPDATE/SUBMIT -->
                <tr>
                    <td>
                        <?php
                                if(isset($_GET['edit']))
                                {
                                ?>
                            <button class="btn" type="submit" name="update">UPDATE <i class="material-icons right">send</i></button>
                            <?php
                                }
                                else
                                {
                                ?>
                                <button class="btn" type="submit" name="save">SAVE</button>
                                <?php
                                }
                                ?>
                    </td>
                </tr>
            </table>
        </form>

        <br><br>

        <table border="1" class="striped bordered responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Penulis</th>
                    <th class="center">Judul</th>
                    <th colspan="1" class="right">Action</th>
                </tr>
            </thead>

            <?php
        
        $res = $MySQLiconn->query("SELECT * FROM ta");
        while($row=$res->fetch_array())
        {
        
        ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['penulis']; ?>
                        </td>
                        <td>
                            <?php echo $row['judul']; ?>
                        </td>
                        <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Anda Akan Mengedit Data ?');">Edit</a></td>
                        <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Yakin Untuk Menghapus !');">Delete</a></td>
                    </tr>
                </tbody>
                <?php
}
?>
        </table>
    </div>
    
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