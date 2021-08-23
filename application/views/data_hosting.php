<table class="table">
	<form>
		<!-- Heading Tabel -->
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nama</th>
			<th scope="col">Penyedia</th>
			<th scope="col">Jenis</th>
			<th scope="col">ssd</th>
			<th scope="col">ram</th>
			<th scope="col">cpu</th>
			<th scope="col">Uptime</th>
			<th scope="col">Keamanan</th>
			<th scope="col">Bandwith</th>
			<th scope="col">Inodes</th>
			<th scope="col">Support</th>
			<th scope="col">Fitur</th>
			<th scope="col">Garansi</th>
			<th scope="col">Harga</th>
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
				<td scope="row">
					<table>
						<tr><a href="edit_data/<?= $hosting['id']; ?>"><button class="btn btn-info" style="width: 70px;">Edit</a></button></tr>
						<tr><button class="btn btn-danger"><a href="delete_data/<?= $hosting['id']; ?>">Hapus</button></a></tr>
					</table>
				</td>

			</tr>
		<?php } ?>
	</form>
</table>
<!-- Pagination -->
<?= $this->pagination->create_links(); ?>
<!-- Button Tambah Data -->
<div id="down">
	<a href="<?php echo base_url('datahosting/add_data'); ?>"><button class="btn btn-primary">Tambah</button></a></td>
</div>