<?php 
require_once 'dbkoneksi.php';
?>
<?php
   $_nama = $_POST['nama'];
   $_alamat = $_POST['alamat'];
   $_tanggal = $_POST['tanggal'];
   $_produk = $_POST['produk_id'];
   $_quantity = $_POST['quantity'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; 
   $ar_data[]=$_alamat; 
   $ar_data[]=$_tanggal; 
   $ar_data[]=$_produk; 
   $ar_data[]=$_quantity;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (nama,alamat,tanggal,produk_id,quantity) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE pesanan SET nama=?,alamat=?,tanggal=?,produk_id=?,quantity=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location: backend/daftar_pesanan.php');
?>