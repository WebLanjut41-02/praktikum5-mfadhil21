<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($data as $key){ ?>
	<form action="<?php echo base_url(). 'index.php/Welcome/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="nim" value="<?php echo $key->nim ?>">
					<input type="text" name="nama" value="<?php echo $key->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $key->tanggal ?>"></td>
			</tr>
			<tr>
				<td>IPK</td>
				<td><input type="int" name="ipk" value="<?php echo $key->ipk ?>"></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td><input type="text" name="kelas" value="<?php echo $key->kelas ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>