<style>
	body {
		background-color: #ddd;
	}

	table {
		position: relative;
		top: 60px;
		left: 50px;
		background-color: #eee;
	}
</style>

<div class="position-relative">
	<div class="position-absolute top-0 start-50 translate-middle-x">
		<h2 style="text-decoration: underline; padding-left:50px;">Manipulasi Data</h2>
	</div>
</div>

<table class="table" style="width: max-content; font-size:small;">
	<form>
		<!-- Heading Tabel -->
		<tr>
			<th scope="col" style="width: 10px;">ID</th>
			<th scope="col">Nama</th>
			<th scope="col">Penyedia</th>
			<th scope="col" style="width: 50px;">Jenis</th>
			<th scope="col">Server</th>
			<th scope="col">ssd</th>
			<th scope="col" style="width: 30px;">ram</th>
			<th scope="col" style="width: 30px;">cpu</th>
			<th scope="col">Uptime</th>
			<th scope="col" style="width: 150px;">Keamanan</th>
			<th scope="col">Bandwith</th>
			<th scope="col">Inodes</th>
			<th scope="col" style="width:80px;">Support</th>
			<th scope="col" style="width: 240px;">Fitur</th>
			<th scope="col" style="width: 20px;">Garansi</th>
			<th scope="col" style="width: 50px;">Harga</th>
		</tr>
		<?php foreach ($data as $hosting) { ?>
			<!-- Isi Tabel -->
			<tr>
				<td>
					<?php echo $hosting['id']; ?>
				</td>
				<td scope="row"><?php echo $hosting['nama']; ?></td>
				<td scope="row"><?php echo $hosting['penyedia']; ?></td>
				<td scope="row"><?php echo $hosting['jenis']; ?></td>
				<td scope="row"><?php echo $hosting['server']; ?></td>
				<td scope="row"><?php echo $hosting['ssd']; ?> <?php if ($hosting['ssd'] != 'Unlimited') echo (' GB');  ?></td>
				<td scope="row"><?php echo $hosting['ram']; ?> GB</td>
				<td scope="row"><?php echo $hosting['cpu']; ?> core</td>
				<td scope="row"><?php echo $hosting['uptime']; ?> %</td>
				<td scope="row"><?php echo $hosting['keamanan']; ?></td>
				<td scope="row"><?php echo $hosting['bandwidth']; ?></td>
				<td scope="row"><?php echo $hosting['inode']; ?> </td>
				<td scope="row"><?php echo $hosting['support']; ?></td>
				<td scope="row"><?php echo $hosting['fitur']; ?></td>
				<td scope="row"><?php echo $hosting['garansi']; ?> Hari</td>
				<td scope="row"><?php echo "Rp " . number_format($hosting['harga'], 0); ?></td>
				<td scope="row" style="width: 100px;">
					<table>
						<tr><a href="<?= base_url('datahosting/edit_data/') . $hosting['id']; ?>" style="color: white;"><button class="btn btn-info" style="width: 70px;">Edit</a></button></tr>
						<tr><button class="btn btn-danger"><a href="<?= base_url('datahosting/delete_data/') . $hosting['id']; ?>" style="color: white;">Hapus</button></a></tr>
					</table>
				</td>

			</tr>
		<?php } ?>
	</form>
</table>
<!-- Button Tambah Data -->
<div id="down" style="position: relative; padding-left:50px; top:50px;">
	<!-- Pagination -->
	<?= $this->pagination->create_links(); ?>
	<a href="<?php echo base_url('datahosting/add_data'); ?>"><button class="btn btn-primary">Tambah</button></a></td>
</div>