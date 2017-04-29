<?php 

class koneksi{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "crud_oop";

	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
	
	function tampil_data2(){
	$data = mysql_query("select * from biodata");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
	}
	
	function input($nim,$nama,$email,$tmpt_lahir){
	mysql_query("insert into biodata values('','$nim','$nama','$email','$tmpt_lahir')");
	}
	
	function hapus($id){
	mysql_query("delete from biodata where id='$id'");
	}
	
	function edit($id){
	$data = mysql_query("select * from biodata where id='$id'");
	while($d = mysql_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
}
 
	function update($id,$nim,$nama,$email,$tmpt_lahir){
	mysql_query("update biodata set nim='$nim', nama='$nama',email='$email', tmpt_lahir='$tmpt_lahir' where id='$id'");
}
}
?>