<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo form_open('Welcome/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>IPK</th>
			<th>KELAS</th>	
		</tr>
			<?php foreach($data as $key) { ?>
				<tr>
					<td><?php echo $key->nim ?></td>
					<td><?php echo $key->nama ?></td>
					<td><?php echo $key->tanggal ?></td>
					<td><?php echo $key->ipk ?></td>
					<td><?php echo $key->kelas ?></td>
				</tr>
				<a href="<?=base_url();?>index.php/Welcome">back</a>
			<?php } ?>


	</table>
</body>
</html>