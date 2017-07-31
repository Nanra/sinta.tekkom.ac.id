<?php
global $MySQLiconn;

include_once 'db.php';

/* Untuk Masukkan Data */
if(isset($_POST['save']))
{

     $nim = $MySQLiconn->real_escape_string($_POST['nim']);
     $penulis = $MySQLiconn->real_escape_string($_POST['username']);
     $judul = $MySQLiconn->real_escape_string($_POST['password']);
     $pembimbing = $MySQLiconn->real_escape_string($_POST['email']);
	
	 $SQL = $MySQLiconn->query("INSERT INTO user(nama,nim,penulis,pembimbing) VALUES('$penulis','$nim','$pembimbing','$judul')");
	 
	 if(!$SQL)
	 {
		 echo $MySQLiconn->error;
	 } 
}
/* Penutup Masukkan Data */



/* Untuk Hapus Data */
if(isset($_GET['del']))
{
	$SQL = mysqli_query($MySQLiconn,"DELETE FROM user WHERE id=".$_GET['del']);
	header("Location: index.php");
}
/* Penutup Hapus Data */



/* Untuk Penutup Data */
if(isset($_GET['edit']))
{
	$SQL = mysqli_query($MySQLiconn,"SELECT * FROM user WHERE id=".$_GET['edit']);
	$getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL = mysqli_query($MySQLiconn,"UPDATE user SET judul='".$_POST['judul']."', nim='".$_POST['nim']."' , penulis='".$_POST['penulis']."' , pembimbing='".$_POST['pembimbing']."' WHERE id=".$_GET['edit']);
    
	header("Location: index.php");
}
/* Penutup Update Data */

?>