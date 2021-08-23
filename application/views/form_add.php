<div class="container-fluid content-row">
	<div class="row">
		<div class="col-sm-12 col-lg-5">
			<!-- Card -->
			<div class="card mb-3" style="max-width: 700px; height:520px;background-color:#eeeeee">
				<div class="row g-0" style="background-color:#eeeeee">
					<div class="col-md">
						<div class="card-body">
							<h5 class="card-header" style="background-color: #eeeeee;">Tambah Data Hosting</h5>
							<a href="<?php echo base_url('datahosting/admin') ?>"><button class="btn btn-info">Kembali</button></a>
							<div class="card-body">
								<table>
									<form method="post" action="<?php echo base_url('datahosting/insert'); ?>">
										<tr>
											<td>ID</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="id"></td>
										</tr>
										<tr>
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="nama"></td>
										</tr>
										<tr>
											<td>Penyedia</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="penyedia"></td>
										</tr>
										<tr>
											<td>SSD</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="ssd"> GB</td>
										</tr>
										<tr>
											<td>RAM</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="ram"> GB</td>
										</tr>
										<tr>
											<td>CPU</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="cpu"> Core</td>
										</tr>
										<tr>
											<td>Uptime</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="uptime"> %</td>
										</tr>
										<tr>
											<td>Keamanan</td>
											<td>:</td>
											<td></td>
											<td> <input type="text" name="keamanan"></td>
										</tr>
										<tr>
											<td></td>
											<td>Jumlah : </td>
											<td></td>
											<td><input type="text" name="jumlah" style="width: 50px"></td>
										</tr>
										<tr>
											<td>Bandwidth</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="bandwidth"></td>
										</tr>
										<tr>
											<td>inodes</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="inode"></td>
										</tr>

										</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-lg-7">
			<!-- Card -->
			<div class="card mb-3" style="max-width: 700px; height : 520px;">
				<div class="row" style="background-color:#eeeeee">
					<div class="col-md">
						<div class="card-body">
							<table>
								<br>
								<br>
								<tr>
									<td>Support</td>
									<td>:</td>
									<td></td>
									<td><input type="radio" name="support" value="Fast Support 24/7"> Fast 24/7
										<input type="radio" name="support" value="Slow Support 24/7">Slow
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<td>Fitur</td>
									<td>:</td>
									<td>Wordpress </td>
									<td>:<input type="radio" name="wordpress" value="ya"> Ya
										<input type="radio" name="wordpress" value="tidak"> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Free SSL </td>
									<td>:<input type="radio" name="freessl" value="ya"> Ya
										<input type="radio" name="fressl" value="tidak"> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Litespeed </td>
									<td>:<input type="radio" name="litespeed" value="ya"> Ya
										<input type="radio" name="litespeed" value="tidak"> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Auto Backup & Restore </td>
									<td>:<input type="radio" name="auto" value="Harian"> Harian
										<input type="radio" name="auto" value="Mingguan"> Mingguan
										<input type="radio" name="auto" value="Bulanan"> Bulanan
										<input type="radio" name="auto" value="tidak"> Tidak
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Domain Gratis </td>
									<td>: Terbatas <input type="text" name="domain" style="max-width: 100px;">
										<input type="radio" name="domain" value="Unlimited"> Unlimited
										<input type="radio" name="domain" value="tidak"> Tidak
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Email</td>
									<td>: Terbatas <input type="text" name="email" style="max-width: 100px;">
										<input type="radio" name="email" value="Unlimited"> Unlimited
										<input type="radio" name="email" value="tidak"> Tidak
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Addon Domain</td>
									<td>: Terbatas <input type="text" name="add" style="max-width: 100px;">
										<input type="radio" name="add" value="Unlimited"> Unlimited
										<input type="radio" name="add" value="tidak"> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Sub Domain</td>
									<td>: Terbatas <input type="text" name="sub" style="max-width: 100px;">
										<input type="radio" name="sub" value="Unlimited"> Unlimited
										<input type="radio" name="sub" value="tidak"> Tidak
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<td>Garansi</td>
									<td></td>
									<td>:</td>
									<td><input type="text" name="garansi">
										<input type="radio" name="syarat" value="ada"> Dengan Syarat
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<td>Harga</td>
									<td></td>
									<td>: Rp</td>
									<td><input type="text" name="harga"></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
								</tr>
								</form>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>