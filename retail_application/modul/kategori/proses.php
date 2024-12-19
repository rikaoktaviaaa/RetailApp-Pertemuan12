<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "../../koneksi.php";
    $aksi = $_GET['aksi'];
    if($aksi == "tambah"){
        $namakategori = $_POST['namakategori'];
        $status = $_POST['status'];
        $sql = "INSERT INTO kategori (nama_kategori, status)VALUES('$namakategori','$status')";
    }elseif($aksi == "edit"){
        $namakategori = $_POST['namakategori'];
        $status = $_POST['status'];
        $id = $_GET['id'];
        $sql = "UPDATE kategori SET nama_kategori='$namakategori', status='$status' WHERE id_kategori='$id'";
    }elseif($aksi == "hapus"){
        $id = $_GET['id'];
        $sql = "DELETE FROM kategori WHERE id_kategori='$id'";
    }
    $mysqli->query($sql);
}
header('location:../../dashboard.php?modul=kategori');