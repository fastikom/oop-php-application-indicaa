<head>

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
	<h1>Tambah Data Mahasiswa</h1>
	</div>
 
<form action="proses.php?aksi=tambah" method="post">
	
<table width="405" align="center">
	<tr>
		<td width="40" bgcolor="#009900"><strong>NIM</strong></td>
		<td width="353">
		  <div align="right">
		    <input name="nim" type="text" size="50">
	      </div></td>
	</tr>
	<tr>
		<td bgcolor="#009900"><strong>Nama</strong></td>
		<td>
		  <div align="right">
		    <input name="nama" type="text" size="50">
	      </div></td>
	</tr>
	<tr>
		<td bgcolor="#009900"><strong>Email</strong></td>
		<td>
		  <div align="right">
		    <input name="email" type="text" size="50">
	      </div></td>
	</tr>
	<tr>
		<td bgcolor="#009900"><strong>TTL</strong></td>
		<td>
		  <div align="right">
		    <input name="tmpt_lahir" type="text" size="50">
	      </div></td>
	</tr>
	<tr>
		<td></td>
		<td><div align="center">
		  <input type="submit" value="Simpan" class="style2">
	    </div></td>
	</tr>
</table>
</form>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <div align="center" class="style1">
		<font size="3">&copy; 2017. All right reserved . indi home</h3>
	</div>