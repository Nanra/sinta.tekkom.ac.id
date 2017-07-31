<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>
<?php require_once "core/init.php"; ?>
<!-- ISI KONTENT -->

<br>
<fieldset>
    <legend>
        <h1>Cari Judul TA</h1>
    </legend>
    <div style="margin-bottom:15px;" align="right">
        <form action="" method="post">
            <input type="text" name="input_cari" placeholder="Masukkan Keyword" class="css-input" style="width:400px;" required/>
            <input type="submit" name="cari" value="Cari" class="btn" />
        </form>
    </div>
    <span class="right">
            <p>Anda bisa memasukkan keyword
               <ol>
                <li>Nama Dari Pembimbing</li>
                <li>Nama Dari Penulis</li>
                <li>Judul TA</li>
            </ol>
        </span>


    <table class="striped bordered responsive-table">
        <tr style="background-color:#abb;">
            <th>Judul TA</th>
            <th>Penulis</th>
            <th>Pembimbing</th>
        </tr>
        <?php 

     global $link;
   $input_cari = @$_POST['input_cari']; 
   $cari = @$_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysqli_query($link,"SELECT * FROM ta WHERE judul like '%$input_cari%' OR penulis like '%$input_cari%' OR pembimbing like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysqli_query($link,"SELECT * FROM ta") or die (mysql_error());
    }
    } else {
    $sql = mysqli_query($link,"SELECT * FROM ta") or die (mysql_error());
    }

   // mengecek data
   $cek = mysqli_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
        <tr>
            <!--muncul peringata bahwa data tidak di temukan-->
            <td colspan="7" align="center" style="padding:10px;">
                <h4>Data Tidak Ditemukan</h4>
            </td>
        </tr>
        <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysqli_fetch_array($sql)) {

   ?>
            <tr>
                <td>
                    <?php echo $data['judul'] ?>
                </td>
                <td>
                    <?php echo $data['penulis'] ?>
                </td>

                <!--Hanya pemanis tampilan-->
                <td align="center">
                    <?php echo $data['pembimbing'] ?>
                </td>
            </tr>
            <?php 

  } 
 }
?>
    </table>
</fieldset>
<br>


<?php require_once "view/footer.php" ?>