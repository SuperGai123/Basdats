<?php
$db=pg_connect('host=localhost port=5432 dbname=uas user=postgres password=erlang123');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
