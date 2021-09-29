<style>
    .masukan {
        position: relative;
        top: 50px;
        padding-left: 55px;
    }

    td {
        width: 150px;
    }

    h1 {
        position: absolute;
        top: 240px;
        left: 39%;
    }

    tr {
        height: 30px;
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
</style>

<div class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <h2 style="text-decoration: underline;">PENGGUNAAN SISTEM</h2>
    </div>
</div>

<div class="masukan">
    <form action="<?= base_url('start') ?>">
        <table>
            <tr>
                <td rowspan="2" style="width: 300px;" style="vertical-align: bottom;">
                    <div class="mb-3" style="max-width: 250px;">
                        <label for="Select" class="form-label" style="font-weight: bold;">Jenis Web</label>
                        <select id="Select" class="form-select" style="height: 50px;">
                            <option selected disabled>Pilih Jenis Web</option>
                            <option value=""> pilihan lain</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="mb-3" style="max-width: 250px;">
                        <label for="fitur" class="form-label" style="font-weight: bold;">Fitur</label>
                        <br>
                        <input class="form-check-input" type="radio" name="fitur" value="tidak ada" id="fitur">
                        <label class="form-check-label" for="fitur">
                            Tidak ada
                        </label>
                    </div>
                </td>
                <td><br>
                    <input class="form-check-input" type="radio" name="fitur" id="wordpress">
                    <label class="form-check-label" for="wordpress">
                        Wordpress
                    </label>
                </td>
                <td><br>
                    <input class="form-check-input" type="radio" name="fitur" id="ssl">
                    <label class="form-check-label" for="ssl">
                        Free SSL
                    </label>
                </td>
                <td><br>
                    <input class="form-check-input" type="radio" name="fitur" id="litespeed">
                    <label class="form-check-label" for="litespeed">
                        Litespeed
                    </label>
                </td>
                <td rowspan="2" style="vertical-align:middle;">
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
    </form>
</div>
<h1>PILIHAN HOSTING</h1>
<hr style="position: relative; top:50px;">
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