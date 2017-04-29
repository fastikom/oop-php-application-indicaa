<?php 
include 'koneksi.php';
$db = new koneksi();
?>
<head>

	<style type="text/css">
		.style1 {
				background-color:#009900;
				color: #ff0000;
		}
	</style>
</head>
<body>

	<div align="center" class="style1">
		<h1 class="style1">Data Mahasiswa</h1>
	</div>
		

		<table width="914" border="0" align="center">
			<tr>
			<td colspan="5"> <a href="input.php"><img src="img/input.png"/></a> </td>
			</tr>
			<tr>
				<th width="218" height="56" bgcolor="#009900">NIM</th>
				<th width="193" bgcolor="#009900">Nama</th>
				<th width="193" bgcolor="#009900">Email</th>
				<th width="188" bgcolor="#009900">TTL</th>
				<th width="233" bgcolor="#009900">Menu</th>
			</tr>
<?php
$no = 1;
foreach($db->tampil_data2() as $x)
{
?>
			<tr>
				<td bgcolor="#FFFFFF"><div align="center"><strong><?php echo $x['nim']; ?></strong></div></td>
				<td bgcolor="#FFFFFF"><div align="center"><strong><?php echo $x['nama']; ?></strong></div></td>
				<td bgcolor="#FFFFFF"><div align="center"><strong><?php echo $x['email']; ?></strong></div></td>
				<td bgcolor="#FFFFFF"><div align="center"><strong><?php echo $x['tmpt_lahir']; ?></strong></div></td>
				<td bgcolor="#FFFFFF">
					<div align="center">
						<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit"><img src="img/edit.png"/></a>
						<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus"><img src="img/hapus.png"/></a>	        
					</div>
				</td>
			</tr>
<?php 
}
?>
		</table>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
	<div align="center" class="style1">
		<font size="3">&copy; 2017. All right reserved . indi home</h3>
	</div>