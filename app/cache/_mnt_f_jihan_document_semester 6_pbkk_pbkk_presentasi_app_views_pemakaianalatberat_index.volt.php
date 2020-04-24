<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <title>DCA | Dwi Citra Anugerah</title> -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->assets->outputCss() ?>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        td,
        th {
            white-space: nowrap;
            width: 1%;
        }
    </style>
</head>

<title>Pemakaian Alat Berat</title>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" style="font-size: 21px;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul> -->
            <!-- Right navbar links -->
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?= $this->url->get('user') ?>" class="nav-link">User</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->url->get('session/logout') ?>" class="nav-link">Logout</a>
                </li>
            </ul> -->
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <span class="font-weight-bold brand-link" style="color:#343A40; text-align: center; background:#7CB1A6;">DCA
            </span>
            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Pendaftaran
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $this->url->get('cucian') ?>" class="nav-link">
                                        <!-- <i class="nav-icon fas fa-truck"></i> -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Cucian
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $this->url->get('alatberat') ?>" class="nav-link">
                                        <!-- <i class="nav-icon fas fa-user-tie"></i> -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Alat Berat
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= $this->url->get('pemakaianalatberat') ?>" class="nav-link">
                                        <!-- <i class="nav-icon fas fa-truck"></i> -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Pemakaian Alat Berat
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            
    <div class="container">
        <div class="card">
            <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                <strong>PEMAKAIAN ALAT BERAT</strong>
            </div>
            <div class="card-header">
                <a href="<?= $this->url->get('pemakaianalatberat/tambah') ?>" class="btn btn-primary btn-sm float-left"><span class="fas fa-plus"
                        style="padding-right: 7px;"></span>Input</a>
                <?= $this->flashSession->output() ?>
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

        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- jQuery -->
        <?= $this->assets->outputJs() ?>

</body>

</html>