<?php include "dbkoneksi.php";?>
 <?php

        $id_edit = $_GET['iddel'];
        var_dump($id_edit);
        $sql = "DELETE from pesanan where id=?";
	 	$st = $dbh->prepare($sql);
        $st->execute([$id_edit]);
        
   	header("location: daftar_pesanan.php");
 ?> 
               