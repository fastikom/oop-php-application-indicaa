<?php 
include 'koneksi.php';
$db = new koneksi();
?><head>

		<style type="text/css">
		.style1 {
				background-color:#009900;
		}
		.style2 {
				background-color:#009900;
				width: 100px;
				height: 50px;
				color:#FFFFFF;
				font-size:18px;
		}
		</style>
	</head>

	<div align="center" class="style1">
		<h1 class="style1">Edit Data Mahasiswa</h1>
	</div>
 
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>

<table align="center">
	<tr>
		<td width="37" bgcolor="#009900"><strong>NIM</strong></td>
		<td width="370">
			
          <div align="right">
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
            <input type="text" size="50" name="nim" value="<?php echo $d['nim'] ?>">
          </div></td>
	</tr>
	<tr>
		<td bgcolor="#009900"><strong>Nama</strong></td>
		<td>
		  
          <div align="right">
            <input name="nama" type="text" value="<?php echo $d['nama'] ?>" size="50">
            </div></td>
	</tr>
	<tr>
		<td bgcolor="#009900"><strong>Email</strong></td>
		<td>
		  
          <div align="right">
            <input name="email" type="text" value="<?php echo $d['email'] ?>" size="50">
            </div></td>
	</tr>
	<tr>
		<td bgcolor="#009900"><strong>TTL</strong></td>
		<td>
		  
          <div align="right">
            <input name="tmpt_lahir" type="text" value="<?php echo $d['tmpt_lahir'] ?>" size="50">
            </div></td>
	</tr>
	<tr>
		<td></td>
		<td>
		  
	      <div align="center">
	        <input type="submit" class="style2" value="Simpan">
          </div></td>
	</tr>
</table>
<?php } ?>
</form>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <div align="center" class="style1">
		<font size="3">&copy; 2017. All right reserved . indi home</h3>
	</div>