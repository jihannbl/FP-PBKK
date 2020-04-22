<title>Pemakaian Alat Berat</title>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-header">
            <a href="<?= $this->url->get('/pemakaianalatberat') ?>" class="btn btn-secondary">Kembali</a>

        </div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="<?= $this->url->get('/pemakaianalatberat/proses') ?>">
                <div class="form-group">
                    <label>Nama Alat Berat</label>
                    <input list="kodes" name="nama_alatBerat" class="form-control " placeholder="Nama Alat Berat">
                    <datalist id="kodes">
                        <?php foreach ($alat as $a) { ?>
                        <option value="<?= $a->nama_alatBerat ?>">
                        <?php } ?>
                    </datalist>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control" placeholder="Tanggal Mulai">

                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" class="form-control" placeholder="Tanggal Selesai">

                </div>
                <div class="form-group">
                    <label>Jam Pakai</label>
                    <input type="text" name="jam_pakai" class="form-control" placeholder="Jam Pakai">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>