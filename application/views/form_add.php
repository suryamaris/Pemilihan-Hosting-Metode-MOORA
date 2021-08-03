<div class="container">
	<div class="row mt-3">		
		<div class="card">
		  <h5 class="card-header">Tambah Data Hosting</h5>
		  <a href="<?php echo base_url('admin')?>"><button class="btn btn-info">Kembali</button></a>
		  <div class="card-body">
			<table>
				<form method="post" action="<?php echo base_url('insert'); ?>">
					<tr>
						<td>ID</td>
						<td>:</td>
						<td><input type="text" name="id"></td>
					</tr>
					<tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Penyedia</td>
						<td>:</td>
						<td><input type="text" name="penyedia"></td>
					</tr>
					<tr>
						<td>SSD</td>
						<td>:</td>
						<td><input type="text" name="ssd"> GB</td>
					</tr>
					<tr>
						<td>RAM</td>
						<td>:</td>
						<td><input type="text" name="ram"> GB</td>
					</tr>
					<tr>
						<td>CPU</td>
						<td>:</td>
						<td><input type="text" name="cpu"> Core</td>
					</tr>
					<tr>
						<td>Uptime</td>
						<td>:</td>
						<td><input type="text" name="uptime"> %</td>
					</tr>
					<tr>
						<td>Keamanan</td>
						<td>:</td>
						<td> <input type="text" name="Keamanan"></td>
					</tr>
					<tr><td></td><td>Jumlah : </td>
						<td><input type="text" name="jumlah" style="width: 50px"></td>
					</tr>
					<tr>
						<td>Bandwith</td>
						<td>:</td>
						<td><input type="text" name="bandwith"> GB</td>
					</tr>
					<tr>
						<td>inodes</td>
						<td>:</td>
						<td><input type="text" name="inode"></td>
					</tr>
					<tr>
						<td>Support</td>
						<td>:</td>
						<td><input type="radio" name="support" value="Fast Support 24/7"> Fast 24/7
						<input type="radio" name="support" value="Slow Support 24/7">Slow
						</td>
					</tr>
					<tr>
						<td>Fitur</td>
						<td>:</td>
						<td>Wordpress </td><td>:<input type="radio" name="wordpress" value="ya"> Ya
						<input type="radio" name="wordpress" value="tidak"> Tidak</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>SSD  </td><td>:<input type="radio" name="fiturSSD" value="ya"> Ya
						<input type="radio" name="fiturSSD" value="tidak"> Tidak</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Litespeed  </td><td>:<input type="radio" name="litespeed" value="ya"> Ya
						<input type="radio" name="litespeed" value="tidak"> Tidak</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Auto Backup&Restore </td><td>:<input type="radio" name="auto" value="Harian"> Harian
						<input type="radio" name="auto" value="Mingguan"> Mingguan
						<input type="radio" name="auto" value="Bulanan"> Bulanan
						<input type="radio" name="auto" value="tidak"> Tidak
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Domain Gratis </td><td>:<input type="radio" name="domain" value="Terbatas"> Terbatas
						<input type="radio" name="domain" value="Unlimited"> Unlimited
						<input type="radio" name="domain" value="tidak"> Tidak
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Email</td> <td>:<input type="radio" name="email" value="Terbatas"> Terbatas
						<input type="radio" name="email" value="Unlimited"> Unlimited
						<input type="radio" name="email" value="tidak"> Tidak
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Addon Domain</td> <td>:<input type="radio" name="add" value="Terbatas"> Terbatas
						<input type="radio" name="add" value="Unlimited"> Unlimited
						<input type="radio" name="add" value="tidak"> Tidak
					</tr>

					
					
					<tr>
						<td>Garansi</td>
						<td>:</td>
						<td><input type="text" name="garansi">
						<input type="radio" name="syarat" value="ada"> Dengan Syarat</td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td>Rp <input type="text" name="harga"></td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="Simpan"  class="btn btn-primary"></td> </tr>
				</form>
				</table>
		  </div>
		</div>
	</div>
</div>
