<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>
<div class="row"></div>
<div class="text-lighten-5 container">
    <h4> Silahkan Isi Data Anda Dengan Benar</h4>
</div>

<?php 
require_once "core/init.php";

if( isset($_POST['submit']) ){
    
    $nama    = $_POST['nama'];
    $pass    = $_POST['password'];
    $nim     = $_POST['nim'];
    $email   = $_POST['email'];
    $hp      = $_POST['hp'];
    $tanggal = $_POST['tanggal'];
    
    if(!empty(trim($nama)) && !empty(trim($pass))){
        
        
        if (register_cek_nim($nim) ){
            
     if ( register_user($nama, $pass, $nim, $email, $hp, $tanggal)){
         echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({
            
            dismissible: false,
            opacity: .4,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal3').modal('open');
            });
            </script>"; //BERHASIL
     }else {
         echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({
            
            dismissible: false,
            opacity: .7,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal4').modal('open');
            });
            </script>"; //GAGAL DATABASE
     }
        }else {
            echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({
            
            dismissible: false,
            opacity: .8,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal1').modal('open');
            });
            </script>";//NIM SUDAH TERDAFTAR
        }
        
    } else {
        echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({
            
            dismissible: false,
            opacity: .8,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal2').modal('open');
            });
            </script>";//FORM TIDAK BOLEH KOSONG
    }
}
?>

<!-- FORM -->
<div class="jarak"></div>
<div class="container">
    <div class="row">
        <form class="col s12" method="post" action="daftar.php">
            <div class="row">
                <div class="input-field col s6">
                    <input id="nama" type="text" name="nama" class="validate" required>
                    <label for="nama">Full Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="nim" type="text" name="nim" class="validate" required>
                    <label for="nim">NIM</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6 m6">
                    <input id="password" type="password" name="password" class="validate" required>
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="tanggal" type="date" name="tanggal" class="datepicker">
                    <label for="tanggal">Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6 m6">
                    <input id="email" type="email" name="email" class="validate" required>
                    <label for="email" data-error="Salah">Email</label>
                </div>
                <div class="input-field col s12 l6 m6">
                    <input id="hp" type="tel" name="hp" class="validate" required>
                    <label for="hp">Nomor HP</label>
                </div>
            </div>
            <div class="row">
                <button class="btn" type="submit" name="submit">DAFTAR<i class="material-icons right">send</i></button>
            </div>
        </form>
    </div>
</div>
<!-- Tutup Form -->

<!-- MODAL DAFTAR GAGAL -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h5>MAAF, NIM SUDAH TERDAFTAR !!!</h5>
        <div class="divider"></div>
        <p>Mohon Pastikan NIM Yang Anda Masukkan Belum Terdaftar Sebelumnya.</p>
    </div>
    <div class="modal-footer">
        <a href="daftar.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>


<!-- MODAL FORM TIDAK BOLEH KOSONG -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h5>MAAF, FORM TIDAK BOLEH KOSONG !!!</h5>
        <div class="divider"></div>
        <p>Mohon Pastikan Semua Form Sudah Terisi Dengan Benar.</p>
    </div>
    <div class="modal-footer">
        <a href="daftar.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>


<!-- MODAL DAFTAR BERHASIL -->
<div id="modal3" class="modal">
    <div class="modal-content">
        <h5>SUKSES !!!</h5>
        <div class="divider"></div>
        <p>Selamat Akun Anda Berhasil Dibuat.</p>
        <p>Selanjutnya Silahkan Login Untuk Mendownload Jurnal TA !</p>
    </div>
    <div class="modal-footer">
        <a href="login.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>


<!-- MODAL DAFTAR BERHASIL -->
<div id="modal4" class="modal">
    <div class="modal-content">
        <h5>Peringatan !!!</h5>
        <div class="divider"></div>
        <p>Terdapat Kesalahan Dalam Database, Silahkan Hubungi Administrator Anda !</p>
    </div>
    <div class="modal-footer">
        <a href="daftar.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>


<?php require_once "view/footer.php" ?>