<?php
include("config.php");

if(isset($_POST['login'])){

	$password= $_POST['password'];
	$username= $_POST['username'];

	// buat query
  $query = pg_query("select *from Artist where Username='$username' AND Password='$password'");
$cek = pg_num_rows($query);

	// apakah query simpan berhasil?
	if( $cek==1) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: http://localhost/TugasUAS/H3h3/Projekt/main.html?');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: gagal1.html?');
	}
} else {
	die("Akses dilarang...");
}


?>
