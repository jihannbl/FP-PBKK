<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Berat</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                <strong>ALAT BERAT</strong>
            </div>
            <div class="card-header">
                <a href="<?= $this->url->get('alatberat/tambah') ?>" class="btn btn-primary btn-sm float-left"><span class="fas fa-plus"
                        style="padding-right: 7px;"></span>Input</a>
                <?= $this->flashSession->output() ?>
            </div>
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-bordered table-hover table-striped table-head-fixed">
                    <thead>
                        <tr>
                            <th>Nama Alat Berat</th>
                            <th>Harga Alat Berat per Jam</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alat as $a) { ?>
                        <tr>
                            <td><?= $a->nama_alatBerat ?></td>
                            <td><?= $a->harga_alatBerat ?></td>
                            <td>
                                <a href="<?= $this->url->get('alatberat/edit/' . $a->id_alatBerat) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= $this->url->get('alatberat/hapus/' . $a->id_alatBerat) ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>