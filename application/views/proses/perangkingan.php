<style>
    .tab {
        position: relative;
        top: 50px;
        left: 50px;
    }

    .data {
        width: 1400px;
        min-height: 700px;
        position: relative;
        top: 50px;
        margin-left: auto;
        margin-right: auto;
        background-color: #ddd;
    }

    .data table {
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;

    }
</style>

<div class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <h2 style="text-decoration: underline;">PROSES PERHITUNGAN</h2>
    </div>
</div>
<div class="tab">
    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a href='<?= base_url('datahosting/proses') ?>'> <button type="button" class="btn btn-outline-primary">Alternatif</button></a>
        <a href='<?= base_url('datahosting/normalisasi') ?>'><button type="button" class="btn btn-outline-primary">Normalisasi Kriteria</button></a>
        <a href='<?= base_url('datahosting/terbobot') ?>'><button type="button" class="btn btn-outline-primary">Normalisasi Terbobot</button></a>
        <a class="nav-link active" aria-current="page" href='<?= base_url('datahosting/perangkingan') ?>'><button type="button" class="btn btn-outline-primary">Perangkingan</button></a>
    </div>
</div>
<div class="data">
    <h3 style="text-align: center;">Hasil Perangkingan</h3>
    <table class="table" style="width: max-content; font-size:small; background-color:white">
        <form>
            <!-- Heading Tabel -->
            <tr>
                <th scope="col">Rank</th>
                <th scope="col" style="width: 10px;">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Penyedia</th>
                <th scope="col">Preferensi</th>

            </tr>
            <?php $rank = 1;
            foreach ($data->result_array() as $hosting) { ?>
                <!-- Isi Tabel -->
                <tr>
                    <td scope="row"><?php echo $rank; ?></td>
                    <td>
                        <?php echo $hosting['id']; ?>
                    </td>
                    <td scope="row"><?php echo $hosting['nama']; ?></td>
                    <td scope="row"><?php echo $hosting['penyedia']; ?></td>
                    <td scope="row"><?php echo $hosting['nilai']; ?></td>


                </tr>
            <?php $rank++;
            } ?>
        </form>
    </table>
</div>