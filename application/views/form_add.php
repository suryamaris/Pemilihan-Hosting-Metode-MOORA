<div class="container-fluid content-row">
	<div class="row">
		<div class="col-sm-12 col-lg-5">
			<!-- Card -->
			<div class="card mb-3" style="max-width: 700px; height:520px;background-color:#eeeeee">
				<div class="row g-0" style="background-color:#eeeeee">
					<div class="col-md">
						<div class="card-body" style="padding:0%;">
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
											<td>Jenis</td>
											<td>:</td>
											<td><input type="radio" name="jenis" value="Shared" id="Shared"> <label for="Shared">Shared</label>
											</td>
											<td> <input type="radio" name="jenis" value="Semi Dedicated" id="Semi Dedicated"> <label for="Semi Dedicated">Semi Dedicated</label>
												<input type="radio" name="jenis" value="Cloud" id="Cloud"> <label for="Cloud">Cloud</label>
												<input type="radio" name="jenis" value="Cloud" id="VPS"> <label for="VPS">VPS</label>
												<input type="radio" name="jenis" value="Dedicated" id="Dedicated"> <label for="Dedicated">Dedicated</label>
											</td>
										</tr>
										<tr>
											<td>Server</td>
											<td>:</td>
											<td><input type="radio" name="server" value="Indonesia" id="Indonesia"> <label for="Indonesia">Indonesia</label>
											</td>
											<td> <input type="radio" name="server" value="Singapore" id="Singapore"> <label for="Singapore">Singapore</label>
												<input type="radio" name="server" value="Eropa" id="Eropa"> <label for="Eropa">Eropa</label>
												<input type="radio" name="server" value="Bebas" id="Bebas"> <label for="Bebas">Bebas</label>
											</td>
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
			<br>
			<!-- Card -->
			<div class="card mb-3" style="max-width: 800px; height : 520px; position:relative; top:-20px;">
				<div class="row" style="background-color:#eeeeee; width:800px;position:relative ;left:12px;height:520px">
					<div class="col-md">
						<div class="card-body" style="padding-left:25px; height:500px;">
							<table>
								<br>
								<br>

								<tr>
									<td>Support</td>
									<td>:</td>
									<td></td>
									<td><input type="radio" name="support" value="Fast Support 24/7" id="Fast 24/7"> <label for="Fast 24/7">Fast 24/7</label>
										<input type="radio" name="support" value="Slow Support 24/7" id="Slow"> <label for="Slow">Slow</label>
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<td>Fitur</td>
									<td>:</td>
									<td>Wordpress </td>
									<td>:<input type="radio" name="wordpress" value="ya" id="Ya6"> <label for="Ya6">Ya</label>
										<input type="radio" name="wordpress" value="optimal" id="Optimal6"> <label for="Optimal6">Optimal</label>
										<input type="radio" name="wordpress" value="tidak" id="Tidak6"> <label for="Tidak6">Tidak</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Free SSL </td>
									<td>:<input type="radio" name="freessl" value="ya" id="Ya5"> <label for="Ya5">Ya</label>
										<input type="radio" name="freessl" value="tidak" id="Tidak5"> <label for="Tidak5">Tidak</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Litespeed </td>
									<td>:<input type="radio" name="litespeed" value="ya" id="Y4a"> <label for="Ya4">Ya</label>
										<input type="radio" name="litespeed" value="tidak" id="Tidak4"> <label for="Tidak4">Tidak</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Auto Backup & Restore </td>
									<td>:<input type="radio" name="auto" value="Harian" id="Harian3"> <label for="Harian3">Harian</label>
										<input type="radio" name="auto" value="Mingguan" id="Mingguan3"> <label for="Mingguan3">Mingguan</label>
										<input type="radio" name="auto" value="Bulanan" id="Bulanan3"> <label for="Bulanan3">Bulanan</label>
										<input type="radio" name="auto" value="tidak" id="Tidak3"> <label for="Tidak3">Tidak</label>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Domain Gratis </td>
									<td class="form-check">
										<input class="form-check-input" name="domain" type="checkbox" value="ya">
										Domain Gratis
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Email</td>
									<td>:
										<script type="text/javascript">
											function tampil(x) {
												if (x == 1)
													document.getElementById('batas1').style.display = 'block';
												else
													document.getElementById('batas1').style.display = 'none';
												return;
											}
										</script>
										<input type="radio" name="email" onclick="tampil(1)" value="batas1" id="Terbatas2"> <label for="Terbatas2">Terbatas</label>
										<input type="text" name="batas1" id="batas1" style="max-width: 80px;">
										<input type="radio" name="email" onclick="tampil(0)" value="Unlimited" id="Unlimited2"> <label for="Unlimited2">Unlimited</label>
										<input type="radio" name="email" onclick="tampil(0)" value="tidak" id="Tidak2"> <label for="Tidak2">Tidak</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Addon Domain</td>
									<td>:
										<script type="text/javascript">
											function text(x) {
												if (x == 1)
													document.getElementById('batas').style.display = 'block';
												else
													document.getElementById('batas').style.display = 'none';
												return;
											}
										</script>
										<input type="radio" name="add" onclick="text(1)" value="batas" id="Terbatas1"> <label for="Terbatas1">Terbatas</label>
										<input type="text" name="batas" id="batas" style="max-width: 80px;">
										<input type="radio" name="add" onclick="text(0)" value="Unlimited" id="Unlimited1"> <label for="Unlimited1">Unlimited</label>
										<input type="radio" name="add" onclick="text(0)" value="tidak" id="Tidak1"> <label for="Tidak1">Tidak</label>
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Sub Domain</td>
									<td>:
										<input type="radio" name="sub" value="Unlimited" id="Unlimited"> <label for="Unlimited">Unlimited</label>
										<input type="radio" name="sub" value="tidak" id="Tidak"> <label for="Tidak">Tidak</label>
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
										<input type="radio" name="syarat" value="ada" id="Dengan Syarat"> <label for="Dengan Syarat">Dengan Syarat</label>
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