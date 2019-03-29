<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
<h1>Mahasiswa</h1>

	<?php echo form_open('Welcome/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>
	
	<?php echo form_open('Welcome/tambah') ?>
		<input type="submit" name="Tambah" value="Tambah">
	<?php echo form_close() ?>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>IPK</th>
			<th>KELAS</th>	
			<th>AKSI</th>	
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($data as $key){ 
		?>
		<tr>
			<td><?php echo $key->nim ?></td>
			<td><?php echo $key->nama ?></td>
			<td><?php echo $key->tanggal ?></td>
			<td><?php echo $key->ipk ?></td>
			<td><?php echo $key->kelas ?></td>
			<td>	
				<?php echo anchor('Welcome/edit/'.$key->nim,'Edit'); ?>
				<?php echo anchor('Welcome/hapus/'.$key->nim,'Hapus'); ?>	
			</td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
</body>
</html>
