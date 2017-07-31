<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>
<!-- ISI KONTENT -->
<br>
<br>

<?php 

require_once "core/init.php";

if( isset($_POST['submit']) ){
    
    $pass    = $_POST['password'];
    $nim     = $_POST['nim'];
    
    if(!empty(trim($nim)) && !empty(trim($pass))){
        
        if (cek_data($nim, $pass) ){
            
            echo "
            <script type='text/javascript'>
            $(document).ready(function(){
            $('.modal').modal({
            
            dismissible: false,
            opacity: .8,
            in_duration: 400,
            out_duration: 100,
            });
            $('#modal3').modal('open');
            });
            </script>";//Berhasil Login
            
            $_SESSION['user'] = $nim;
            $nama_login = $_SESSION['user'];
            
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
            $('#modal1').modal('open');
            });
            </script>";//USER BELUM TERDAFTAR
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

<!-- MODAL FORM TIDAK BOLEH KOSONG -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <h5>MAAF, FORM TIDAK BOLEH KOSONG !!!</h5>
        <div class="divider"></div>
        <p><b>Kenapa Pop-up ini muncul ?</b></p>
        <ol>
            <li style="list-style-type:square">Karena Form Password Anda Biarkan Kosong Atau Anda Isikan Dengan SPASI.</li>
        </ol>
        <p><b>Solusi</b></p>
        <ol>
            <li style="list-style-type:square">Mohon Pastikan Semua Form Sudah Terisi Dengan Benar.</li>
        </ol>
    </div>
    <div class="modal-footer">
        <a href="login.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>

<!-- USER TIDAK ADA -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h5>MAAF, USER BELUM TERDAFTAR !!!</h5>
        <div class="divider"></div>
        <p>Silahkan melakukan pendaftaran terlebih dahulu !</p>
    </div>
    <div class="modal-footer">
        <a href="daftar.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>

<!-- BERHASIL LOGIN -->
<div id="modal3" class="modal">
    <div class="modal-content">
        <h5>LOGIN SUKSES !!!</h5>
        <div class="divider"></div>
        <p>Sekarang anda bisa mendownload dan mengakses Jurnal TA lebih leluasa.</p>
    </div>
    <div class="modal-footer">
        <a href="downloadTA.php" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
</div>



<div class="text-lighten-5 center container collection with-header">
    <h4> Silahkan Masukkan NIM & Password Anda</h4>
</div>
<form class="col s6 container collection with-header" method="post" action="login.php">
    <div class="row">
        <div class="input-field col s5 offset-s3 ">
            <input id="nim" type="text" name="nim" class="validate" required>
            <label for="nim">NIM</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s5 offset-s3">
            <input name="password" id="password" type="password" class="validate" required>
            <label for="password">PASSWORD</label>
        </div>
    </div>
    <div class="row">
        <button class="btn col offset-s3" type="submit" name="submit">Masuk<i class="material-icons right">send</i></button>
    </div>
</form>
<br>
<br>



<?php require_once "view/footer.php" ?>