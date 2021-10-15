<style>
	.card {
		position: relative;
		width: 650px;
	}
</style>

<div class="container-fluid content-row">
	<div class="row">
		<div class="col-sm-12 col-lg-5">
			<!-- Card -->
			<div class="card mb-3" style="max-width: 700px; height:520px;background-color:#eeeeee">
				<div class="row g-0" style="background-color:#eeeeee">
					<div class="col-md">
						<div class="card-body">
							<h5 class="card-header" style="background-color: #eeeeee;">Edit Data Hosting</h5>
							<a href="<?php echo base_url('datahosting/admin') ?>"><button class="btn btn-info">Kembali</button></a>
							<div class="card-body">
								<table>
									<form method="post" action="<?php echo base_url('datahosting/update'); ?>">
										<tr>
											<td>ID</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="id" value="<?= $id ?>" readonly></td>
										</tr>
										<tr>
										<tr>
											<td>Nama</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="nama" value="<?= $nama ?>"></td>
										</tr>
										<tr>
											<td>Penyedia</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="penyedia" value="<?= $penyedia ?>"></td>
										</tr>
										<tr>
											<td>Jenis</td>
											<td>:</td>
											<td><input type="radio" name="jenis" value="Shared" <?php if ($jenis == 'Shared') echo 'checked'; ?>> Shared
											</td>
											<td> <input type="radio" name="jenis" value="Semi Dedicated" <?php if ($jenis == 'Semi Dedicated') echo 'checked'; ?>> Semi Dedicated
												<input type="radio" name="jenis" value="CLoud" <?php if ($jenis == 'Cloud') echo 'checked'; ?>> Cloud
												<input type="radio" name="jenis" value="VPS" <?php if ($jenis == 'VPS') echo 'checked'; ?>> VPS
												<input type="radio" name="jenis" value="Dedicated" <?php if ($jenis == 'Dedicated') echo 'checked'; ?>> Dedicated
											</td>
										</tr>
										<tr>
											<td>Server</td>
											<td>:</td>
											<td><input type="radio" name="server" value="Indonesia" <?php if ($server == 'Indonesia') echo 'checked'; ?>> Indonesia
											</td>
											<td> <input type="radio" name="server" value="Singapore" <?php if ($server == 'Singapore') echo 'checked'; ?>> Singapore
												<input type="radio" name="server" value="Eropa" <?php if ($server == 'Eropa') echo 'checked'; ?>> Eropa
												<input type="radio" name="server" value="Bebas" <?php if ($server == 'Bebas') echo 'checked'; ?>> Bebas
											</td>
										</tr>
										<tr>
											<td>SSD</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="ssd" value="<?= $ssd ?>"> GB</td>
										</tr>
										<tr>
											<td>RAM</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="ram" value="<?= $ram ?>"> GB</td>
										</tr>
										<tr>
											<td>CPU</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="cpu" value="<?= $cpu ?>"> Core</td>
										</tr>
										<tr>
											<td>Uptime</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="uptime" value="<?= $uptime ?>"> %</td>
										</tr>
										<tr>
											<td>Keamanan</td>
											<td>:</td>
											<td></td>
											<td> <input type="text" name="keamanan" value="<?= $keamanan ?>"></td>
										</tr>
										<tr>
											<td></td>
											<td>Jumlah : </td>
											<td></td>
											<td><input type="text" name="jumlah" style="width: 50px" value="<?= $jumlah ?>"></td>
										</tr>
										<tr>
											<td>Bandwidth</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="bandwidth" value="<?= $bandwidth ?>"></td>
										</tr>
										<tr>
											<td>inodes</td>
											<td>:</td>
											<td></td>
											<td><input type="text" name="inode" value="<?= $inode ?>"></td>
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
			<div class="card mb-3" style="width: 800px; height : 540px; position:relative;left:50px;">
				<div class="row" style="background-color:#eeeeee; width: 800px; height : 540px; position:relative;left:10px;">
					<div class=" col-md">
						<div class="card-body">
							<table>
								<br>
								<br>
								<tr>
									<td>Support</td>
									<td>:</td>
									<td></td>
									<td><input type="radio" name="support" <?php if ($support == "Fast Support 24/7") {
																				echo "checked";
																			} ?> value="Fast Support 24/7"> Fast 24/7
										<input type="radio" name="support" <?php if ($support == "Slow Support 24/7") {
																				echo "checked";
																			} ?> value="Slow Support 24/7">Slow
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<!-- Fitur  -->
									<td>Fitur</td>
									<td>:</td>
									<td>Wordpress </td>
									<td>:<input type="radio" name="wordpress" value="ya" <?php if ($wordpress == "Wordpress") {
																								echo "checked";
																							} ?>> Ya
										<input type="radio" name="wordpress" value="optimal" <?php if ($wordpress == "optimal") {
																									echo "checked";
																								} ?>> Optimal
										<input type="radio" name="wordpress" value="tidak" <?php if ($wordpress == "tidak") {
																								echo "checked";
																							} ?>> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Free SSL </td>
									<td>:<input type="radio" name="freessl" value="ya" <?php if ($freessl == "Free SSL") {
																							echo "checked";
																						} ?>> Ya
										<input type="radio" name="freessl" value="tidak" <?php if ($freessl == "tidak") {
																								echo "checked";
																							} ?>> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Litespeed </td>
									<td>:<input type="radio" name="litespeed" value="ya" <?php if ($litespeed == "Litespeed") {
																								echo "checked";
																							} ?>> Ya
										<input type="radio" name="litespeed" value="tidak" <?php if ($litespeed == "tidak") {
																								echo "checked";
																							} ?>> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Auto Backup & Restore </td>
									<td>:<input type="radio" name="auto" value="Harian" <?php if ($auto == "Harian") {
																							echo "checked";
																						} ?>> Harian
										<input type="radio" name="auto" value="Mingguan" <?php if ($auto == "Mingguan") {
																								echo "checked";
																							} ?>> Mingguan
										<input type="radio" name="auto" value="Bulanan" <?php if ($auto == "Bulanan") {
																							echo "checked";
																						} ?>> Bulanan
										<input type="radio" name="auto" value="tidak" <?php if ($auto == "tidak") {
																							echo "checked";
																						} ?>> Tidak
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Domain Gratis </td>
									<td class="form-check">
										<input class="form-check-input" name="domain" type="checkbox" value="ya" <?php if ($domain == 'ya') echo 'checked'; ?>>
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

										<input type="radio" name="email" onclick="tampil(1)" value="batas" <?php if ($email != "Unlimited" && $email != "tidak") {
																												echo "checked";
																											} ?>> Terbatas
										<input type="text" name="batas1" id="batas1" style="max-width: 80px;" value="<?php if ($email != "Unlimited" && $email != "tidak") {
																															echo $email;
																														} ?>">
										<input type="radio" name="email" onclick="tampil(0)" value="Unlimited" <?php if ($email == "Unlimited") {
																													echo "checked";
																												} ?>> Unlimited
										<input type="radio" name="email" onclick="tampil(0)" value="tidak" <?php if ($email == "tidak") {
																												echo "checked";
																											} ?>> Tidak
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
										<input type="radio" name="add" onclick="text(1)" value="batas" <?php if ($add != "Unlimited" && $add != "tidak") {
																											echo "checked";
																										} ?>> Terbatas
										<input type="text" name="batas" id="batas" style="max-width: 80px;" value="<?php if ($add != "Unlimited" && $add != "tidak") {
																														echo $add;
																													} ?>">
										<input type="radio" name="add" onclick="text(0)" value="Unlimited" <?php if ($add == "Unlimited") {
																												echo "checked";
																											} ?>> Unlimited
										<input type="radio" name="add" onclick="text(0)" value="tidak" <?php if ($add == "tidak") {
																											echo "checked";
																										} ?>> Tidak
									</td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>Sub Domain</td>
									<td>:
										<input type="radio" name="sub" value="Unlimited" <?php if ($sub == "Unlimited") {
																								echo "checked";
																							} ?>> Unlimited
										<input type="radio" name="sub" value="tidak" <?php if ($sub == "tidak") {
																							echo "checked";
																						} ?>> Tidak
									</td>
								</tr>
								<tr>
									<td><br></td>
								</tr>
								<tr>
									<td>Garansi</td>
									<td></td>
									<td>:</td>
									<td><input type="text" name="garansi" value="<?= $garansi; ?>">
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
									<td><input type="text" name="harga" value="<?= $harga; ?>"></td>
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