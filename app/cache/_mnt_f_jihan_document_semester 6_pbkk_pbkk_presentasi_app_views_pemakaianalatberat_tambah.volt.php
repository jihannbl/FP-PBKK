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
        <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light"> -->
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
            </ul>
        </nav> -->
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
                                        <!-- <i class="nav-icon fab fa-bitbucket"></i> -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Cucian
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $this->url->get('alatberat') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Berat</p>
                                    </a>
                                </li>
                                </ul>

                            </ul>
                        </li>
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
                                        <!-- <i class="nav-icon fab fa-bitbucket"></i> -->
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Cucian
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $this->url->get('alatberat') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Berat</p>
                                    </a>
                                </li>
                                </ul>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            
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
            <?= $this->flashSession->output() ?>

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