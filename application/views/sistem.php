<style>
    .masukan {
        position: relative;
        top: 50px;
        padding-left: 55px;
    }


    h1 {
        position: absolute;
        top: 310px;
        left: 39%;
    }



    .hosting {
        position: relative;
        top: 140px;
        padding-left: 35px;
    }

    .hosting td,
    tr {
        border: 5px white;
        padding-left: 20px;
        padding-right: 20px;
    }


    .web td {
        padding-right: 20px;
        text-align: center;
    }

    .fitur td {
        width: 150px;
    }
</style>

<div class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <h2 style="text-decoration: underline;">PENGGUNAAN SISTEM</h2>
    </div>
</div>

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
                        <td>SSD</td>
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
                        <td><select name="inodes">
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
                    </tr>
                </table>
            </tr>
            <!-- Tentukan fitur -->
            <tr>
                <table class="fitur" style="position:relative; top:20px;">
                    <tr>
                        <td colspan="3"><b><u>Pilihan Fitur Wajib</u></b></td>
                    </tr>
                    <tr>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" value="tidak ada" id="fitur">
                            <label class="form-check-label" for="fitur">
                                Tidak ada
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="wordpress">
                            <label class="form-check-label" for="wordpress">
                                Wordpress
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="ssl">
                            <label class="form-check-label" for="ssl">
                                Free SSL
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="litespeed">
                            <label class="form-check-label" for="litespeed">
                                Litespeed
                            </label>
                        </td>
                        <td rowspan="2" style="vertical-align:middle; padding-left:50px;">
                            <button type=" submit" class="btn btn-primary" style="height: 50px; width:200px">Cari</button>
                        </td>


                    </tr>
                    <tr>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="backup">
                            <label class="form-check-label" for="backup">
                                Auto Backup
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="domain">
                            <label class="form-check-label" for="domain">
                                Free Domain
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="email">
                            <label class="form-check-label" for="email">
                                Email
                            </label>
                        </td>
                        <td>
                            <input class="form-check-input" type="radio" name="fitur" id="add">
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

<!-- Menampilkan hosting yang terpilih -->
<h1>PILIHAN HOSTING</h1>
<hr style="position: relative; top:70px;">
<div class="hosting">
    <table>
        <td>
            <div class="card" style="width: 20rem;">
                <div class="card-img-top" style="min-height: 250px;">
                    <div class="card-head" style="height: 100px; background-color:#ddd"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 20rem;">
                <div class="card-img-top" style="min-height: 250px;">
                    <div class="card-head" style="height: 100px; background-color:#ddd"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 20rem;">
                <div class="card-img-top" style="min-height: 250px;">
                    <div class="card-head" style="height: 100px; background-color:#ddd"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="card" style="width: 20rem;">
                <div class="card-img-top" style="min-height: 250px;">
                    <div class="card-head" style="height: 100px; background-color:#ddd"></div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </td>
    </table>
</div>