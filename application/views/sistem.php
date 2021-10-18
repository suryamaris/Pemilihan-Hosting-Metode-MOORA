<style>
    .atas {

        background-color: #EDEDD5;
        min-height: 265px;
    }

    .masukan {
        position: relative;
        top: 10px;
        padding-left: 55px;
    }


    h1 {
        text-align: center;
        color: black;
    }



    .hosting {
        position: relative;
        top: 0px;
        padding-left: 35px;
        background-color: #EEE;
    }

    .hosting td,
    tr {
        border: 5px white;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        vertical-align: top;
    }

    .card-body tr {
        padding-top: 0px;

    }

    .web td {
        padding-right: 20px;
        text-align: center;
    }

    .fitur td {
        min-width: 150px;
    }
</style>
<div class="atas">
    <h2 style="text-decoration: underline; text-align:center">PENGGUNAAN SISTEM</h2>
    <div class="masukan">
        <form action="<?= base_url('datahosting/start') ?>" method="POST">
            <!-- Tentukan nilai prioritas -->
            <table>
                <tr>
                    <table class="web">
                        <tr>
                            <td colspan="3" style="text-align: left; text-decoration:underline"><b>Kebutuhan Web Hosting</b></td>
                        </tr>
                        <tr>
                            <td>Kriteria</td>
                            <td>Jenis</td>
                            <td>Server</td>
                            <td>Storage</td>
                            <td>RAM</td>
                            <td>CPU</td>
                            <td>Uptime</td>
                            <td>Keamanan</td>
                            <td>Bandwidth</td>
                            <td>Inodes</td>
                            <td>Support</td>
                            <td>Fitur</td>
                            <td>Garansi</td>
                            <td>harga</td>
                        </tr>
                        <tr>
                            <td>NIlai</td>

                            <td><select name="jenis">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="server">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="ssd">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="ram">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="cpu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="uptime">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="keamanan">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="bandwidth">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="inode">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="support">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="fitur">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="garansi">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td><select name="harga">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select></td>
                            <td style="position:absolute; right: 100px;">
                                <button type=" submit" class="btn btn-primary" style="height: 50px; width:200px">Cari</button>
                            </td>
                        </tr>
                    </table>
                </tr>
        </form>
        <form action="<?= base_url('datahosting/sistem') ?>" method="POST">
            <!-- Tentukan fitur -->
            <tr>
                <table class="fitur" style="position:relative; top:20px;">
                    <tr>
                        <td colspan="3"><b><u>Pilihan Fitur Wajib</u></b></td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" value="tidak ada" id="tidak">
                            <label class="form-check-label" for="tidak">
                                Tidak ada
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="wordpress" value="wordpress">
                            <label class="form-check-label" for="wordpress">
                                Wordpress
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="freessl" value="freessl">
                            <label class="form-check-label" for="freessl">
                                Free SSL
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="litespeed" value="litespeed">
                            <label class="form-check-label" for="litespeed">
                                Litespeed
                            </label>
                        </td>
                        <td></td>
                        <td rowspan="2" style="position:absolute; right: -575px;">
                            <button type=" submit" class="btn btn-warning" style="height: 50px; width:200px">Filter</button>
                        </td>


                    </tr>
                    <tr>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="auto" value="auto">
                            <label class="form-check-label" for="auto">
                                Auto Backup
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="domain" value="domain">
                            <label class="form-check-label" for="domain">
                                Free Domain
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="email" value="email">
                            <label class="form-check-label" for="email">
                                Email
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="add" value="add">
                            <label class="form-check-label" for="add">
                                Addon Domain
                            </label>
                        </td>
                    </tr>
                </table>
            </tr>
            </table>
        </form>
    </div>
</div>

<!-- Menampilkan hosting yang terpilih -->
<div class="hosting">
    <br>
    <h1>PILIHAN HOSTING
        <hr>
    </h1>

    <table>
        <?php $i = 0;
        foreach ($data->result_array() as $hosting) {
        ?>

            <?php if ($i == 0 || fmod($i, 4) == 0) { ?> <tr> <?php } ?>



                <td>
                    <div class="card" style="width: 20rem;">
                        <div class="card-img-top" style="min-height: 250px;">
                            <div class="card-head" style="height: 100px; background-color:#D5E4ED">


                                <h3 style="text-align: center;"><u><?= $hosting['nama']; ?></u>
                                    <br><br><b style="color:crimson;"> Rp <?= number_format($hosting['harga']); ?></b>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td><b>Penyedia </b></td>
                                        <td style="color: coral;"> <b><?= $hosting['penyedia']; ?></b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Jenis </b></td>
                                        <td> <?= $hosting['jenis']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Lokasi </b></td>
                                        <td> <?= $hosting['server']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Penyimpanan </b></td>
                                        <td> <?= $hosting['ssd'];
                                                if ($hosting['ssd'] != 'Unlimited') echo ('GB'); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Ram </b></td>
                                        <td> <?= $hosting['ram']; ?> GB</td>
                                    </tr>
                                    <tr>
                                        <td><b>Cpu </b></td>
                                        <td> <?= $hosting['cpu']; ?> Core</td>
                                    </tr>
                                    <tr>
                                        <td><b>Inodes </b></td>
                                        <td> <?php if ($hosting['inode'] != 'Unlimited') echo (number_format($hosting['inode']));
                                                else echo ($hosting['inode']); ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Bandwidth </b></td>
                                        <td> <?= $hosting['bandwidth']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Keamanan </b></td>
                                        <td style="word-wrap:break-word;"> <?= $hosting['keamanan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Fitur </b></td>
                                        <td style="word-wrap:break-word;"> <?= $hosting['fitur']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Uptime </b></td>
                                        <td> <?= $hosting['uptime']; ?> %</td>
                                    </tr>
                                    <tr>
                                        <td><b>Garansi </b></td>
                                        <td> <?= $hosting['garansi']; ?> Hari</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </td>

                <?php if (fmod($i, 4) == 3) { ?>
                </tr> <?php } ?>

        <?php $i++;
        } ?>
    </table>

</div>