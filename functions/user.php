<?php

//Fungsi memasukkan data pendaftaran ke database

function register_user($nama, $pass, $nim, $email, $hp, $tanggal){
    global $link; //Variabel Koneksi Database dijadikan Variabel Global
    
    
    //Mencegah sql_injection
    $nama    = mysqli_real_escape_string($link, $nama);
    $pass    = mysqli_real_escape_string($link, $pass);
    $nim     = mysqli_real_escape_string($link, $nim);
    $email   = mysqli_real_escape_string($link, $email);
    $hp      = mysqli_real_escape_string($link, $hp);
    $tanggal = mysqli_real_escape_string($link, $tanggal);
    
    $query = "INSERT INTO user (nama, nim, email, tanggal, pass, hp) VALUES ('$nama','$nim','$email','$tanggal','$pass','$hp')";
    
    if (mysqli_query($link, $query) ){
        return true;
    }else {
        return false;
    }
}


//Menguji user apakah sudah terdaftar sebelumnya, yang dijadikan penguji adalah NIM

function register_cek_nim($nim) {
    global $link;
    $nim       = mysqli_real_escape_string($link, $nim);
    $query     = "SELECT * FROM user WHERE nim = '$nim'";
    if ($hasil = mysqli_query($link, $query) ){
        if (mysqli_num_rows($hasil) == 0) return true;
        else return false;
    }
    
}


//Mencari NIM & Pass User

function cek_data($nim, $pass){
    
    global $link;
    
    //Mencegah sql_injection
    $nama   = mysqli_real_escape_string($link, $nim);
    $pass   = mysqli_real_escape_string($link, $pass);
    
    $query  = "SELECT pass FROM user WHERE nim = '$nim'";
    $result = mysqli_query($link, $query);
    $passdb = mysqli_fetch_assoc($result)['pass'];
    //die($hash);
    
    //Digunakan untuk melihat password yang sudah di hash di database apakah ada
    if ( $pass == $passdb ){
        return true;
    }else {
        return false;
    }
              
}



?>