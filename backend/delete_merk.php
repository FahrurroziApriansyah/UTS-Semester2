<?php include "dbkoneksi.php";?>
 <?php

        $id_edit = $_GET['iddel'];
        var_dump($id_edit);
        $sql = "DELETE from merk where id=?";
	 	$st = $dbh->prepare($sql);
        $st->execute([$id_edit]);
        
   	header("location: list_merk.php");
 ?> 