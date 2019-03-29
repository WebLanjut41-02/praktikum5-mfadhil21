<!DOCTYPE html>
<html>
	<head>
		<title>Input Data</title>
	</head>
	<body>
		<center>
			<h3>Tambah data baru</h3>
		</center>
		<form action="<?php echo base_url(). 'index.php/Welcome/aksi'; ?>" method="post">
			<table style=”margin:40px auto;”>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" id="nim"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" id="nama"></td>
				</tr>
				<tr>
					<td>Tanggal lahir</td>
					<td><input type="date" name="tanggal" id="tgl" ></td>
				</tr>
				<tr>
					<td>IPK</td>
					<td><input type="int" name="ipk" id="ipk" ></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas" id="kelas" ></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Tambah"></td>
				</tr>
			</table>
		</form>
	</body>
</html>