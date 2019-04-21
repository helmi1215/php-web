<?php

include('config.php');

$nama          = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_tanggal= $_POST['tempat_tanggal'];
$alamat        = $_POST['alamat'];
$hp            = $_POST['hp'];
$email    	   = $_POST['email'];
$tinggi     = $_POST['tinggi'];
$berat            = $_POST['berat'];
$pendidikan       = $_POST['pendidikan'];
$ipk  = $_POST['ipk'];
$query = mysql_query("INSERT INTO pelamar(nama, jenis_kelamin, tempat_tanggal, alamat, hp, email, tinggi, berat, berat, pendidikan, ipk) 
                      VALUES ('$nama', '$jenis_kelamin', '$tempat_tanggal', '$alamat', '$hp', '$email', '$tinggi', '$berat', '$pendidikan', '$ipk')");

if($query) {
    header('location:registrasi.php');
}
else {
    echo"<script>alert('gagal upload');window.location='regis.html'</script>";
	return false;
}

?>