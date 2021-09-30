<style>
    .tab {
        position: relative;
        top: 50px;
        padding-left: 50px;
    }

    .data {
        width: 1410px;
        min-height: 700px;
        position: relative;
        padding-left: 50px;
        background-color: #ddd;

    }

    .data table {
        border: 1px solid black;
        position: relative;
        left: 40px;
    }

    .data td,
    th {
        width: 80px;
    }
</style>

<div class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <h2 style="text-decoration: underline;">PROSES PERHITUNGAN</h2>
    </div>
</div>
<div class="tab">
    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button type="button" class="btn btn-outline-primary">Alternatif</button>
        <button type="button" class="btn btn-outline-primary">Normalisasi Kriteria</button>
        <button type="button" class="btn btn-outline-primary">Normalisasi Terbobot</button>
        <button type="button" class="btn btn-outline-primary">Perangkingan</button>
    </div>
    <div class="data">
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
            </form>
        </table>
    </div>
</div>