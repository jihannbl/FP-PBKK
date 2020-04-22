<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemakaian Alat Berat</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                <strong>PEMAKAIAN ALAT BERAT</strong>
            </div>
            <div class="card-header">
                <a href="<?= $this->url->get('pemakaianalatberat/tambah') ?>" class="btn btn-primary btn-sm float-left"><span class="fas fa-plus"
                        style="padding-right: 7px;"></span>Input</a>
            </div>
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-bordered table-hover table-striped table-head-fixed">
                    <thead>
                        <tr>
                            <th>Nama Alat Berat</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jam Pakai</th>
                            <th>Harga Pakai</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pemakaian as $p) { ?>
                        <tr>
                            <td><?= $p->alat->nama_alatBerat ?></td>
                            <td><?= $p->tanggal_mulai ?></td>
                            <td><?= $p->tanggal_selesai ?></td>
                            <td><?= $p->jam_pakai ?></td>
                            <td><?= $p->harga_pakai ?></td>
                            <td>
                                <a href="<?= $this->url->get('pemakaianalatberat/edit/' . $p->id_pemakaian) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= $this->url->get('pemakaianalatberat/hapus/' . $p->id_pemakaian) ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>