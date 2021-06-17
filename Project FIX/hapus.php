<?php
include("config.php");
if( isset($_GET['id']) ){

    //ambil id dari query string
    $itemid = $_GET['id'];

    // buat query hapus
    $query = pg_query("DELETE FROM item WHERE itemid=$itemid");

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: http://localhost/TugasUAS/H3h3/Projekt/Main2.html?');
    } else {
        header('Location: http://localhost/TugasaUAS/H3h3/Projekt/gallery1.html');
    }

} else {
    die("akses dilarang...");
}
?>