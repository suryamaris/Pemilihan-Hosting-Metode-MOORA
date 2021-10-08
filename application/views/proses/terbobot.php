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
        <a href='<?= base_url('datahosting/perangkingan') ?>'><button type="button" class="btn btn-outline-primary">Perangkingan</button></a>
    </div>
</div>
<div class="data">
    <h3 style="text-align: center;">Normalisasi Terbobot</h3>
    <table class="table" style="width: max-content; font-size:small; background-color:white">
        <form>
            <!-- Heading Tabel -->
            <tr>
                <th scope="col" style="width: 10px;">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Penyedia</th>
                <th scope="col">Jenis</th>
                <th scope="col">Server</th>
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
            <?php foreach ($data->result_array() as $hosting) { ?>
                <!-- Isi Tabel -->
                <tr>
                    <td>
                        <?php echo $hosting['id']; ?>
                    </td>
                    <td scope="row"><?php echo $hosting['nama']; ?></td>
                    <td scope="row"><?php echo $hosting['penyedia']; ?></td>
                    <td scope="row"><?php echo $hosting['jenis']; ?></td>
                    <td scope="row"><?php echo $hosting['server']; ?></td>
                    <td scope="row"><?php echo $hosting['ssd']; ?> </td>
                    <td scope="row"><?php echo $hosting['ram']; ?></td>
                    <td scope="row"><?php echo $hosting['cpu']; ?> </td>
                    <td scope="row"><?php echo $hosting['uptime']; ?> </td>
                    <td scope="row"><?php echo $hosting['keamanan']; ?></td>
                    <td scope="row"><?php echo $hosting['bandwidth']; ?></td>
                    <td scope="row"><?php echo $hosting['inode']; ?> </td>
                    <td scope="row"><?php echo $hosting['support']; ?></td>
                    <td scope="row"><?php echo $hosting['fitur']; ?></td>
                    <td scope="row"><?php echo $hosting['garansi']; ?></td>
                    <td scope="row"><?php echo $hosting['harga'] ?></td>


                </tr>
            <?php } ?>
        </form>
    </table>
</div>