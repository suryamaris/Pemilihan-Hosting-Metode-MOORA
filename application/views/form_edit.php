<div class="container">
	<div class="row mt-3">		
		<div class="card">
		  <h5 class="card-header">Edit Data Hosting</h5>
		  <a href="<?php echo base_url('admin')?>"><button class="btn btn-info">Kembali</button></a>
		  <div class="card-body">
			<table>
			<form method="post" action="<?php echo base_url('update'); ?>">
					<tr>
						<td>ID</td>
						<td>:</td>
						<td><input type="text" name="id" value="<?php echo $id; ?>" readonly></td>
					</tr>
					<tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
					</tr>
					<tr>
						<td>Penyedia</td>
						<td>:</td>
						<td><input type="text" name="penyedia" value="<?php echo $penyedia; ?>"></td>
					</tr>
					<tr>
						<td>SSD</td>
						<td>:</td>
						<td><input type="text" name="ssd" value="<?php echo $ssd; ?>"> GB</td>
					</tr>
					<tr>
						<td>RAM</td>
						<td>:</td>
						<td><input type="text" name="ram" value="<?php echo $ram; ?>"> GB</td>
					</tr>
					<tr>
						<td>CPU</td>
						<td>:</td>
						<td><input type="text" name="cpu" value="<?php echo $cpu; ?>"> Core</td>
					</tr>
					<tr>
						<td>Uptime</td>
						<td>:</td>
						<td><input type="text" name="uptime" value="<?php echo $uptime; ?>"> %</td>
					</tr>
					<tr>
						<td>Keamanan</td>
						<td>:</td>
						<td> <input type="text" name="Keamanan" value="<?php echo $keamanan; ?>"></td>
					</tr>
					<tr><td></td><td>Jumlah : </td>
						<td><input type="text" name="jumlah" style="width: 50px" value="<?php echo $jumlah;?>"></td>
					</tr>
					<tr>
						<td>Bandwith</td>
						<td>:</td>
						<td><input type="text" name="bandwith" value="<?php echo $bandwith; ?>"> GB</td>
					</tr>
					<tr>
						<td>inodes</td>
						<td>:</td>
						<td><input type="text" name="inode" value="<?php echo $inode; ?>"></td>
					</tr>
					<tr>
						<td>Support</td>
						<td>:</td>
						<td><input type="radio" name="support" value="Fast Support 24/7" <?php if($support=='Fast Support 24/7') echo 'Checked'; ?>> Fast 24/7
						<input type="radio" name="support" value="Slow Support 24/7" <?php if($support=='Slow Support 24/7') echo 'Checked'; ?>>Slow
						</td>
					</tr>
					<tr>
						<td>Fitur</td>
						<td>:</td>
						<td>Wordpress </td><td>:<input type="radio" name="wordpress" value="ya" > Ya
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
						<td><input type="text" name="garansi" value='<?php echo $garansi; ?>'">
						<input type="radio" name="syarat" value="ada"> Dengan Syarat</td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td>Rp <input type="text" name="harga" value='<?php echo $harga; ?>'"></td>
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