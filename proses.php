<?php 
include 'koneksi.php';
$db = new koneksi();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['tmpt_lahir']);
 	header("location:index.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']);
	header("location:index.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['tmpt_lahir']);
 	header("location:index.php");
 }
?>