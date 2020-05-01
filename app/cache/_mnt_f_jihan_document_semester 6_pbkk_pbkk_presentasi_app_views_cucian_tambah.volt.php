<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DCA | Dwi Citra Anugerah</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->assets->outputCss() ?>
    <style>
        td,
        th {
            white-space: nowrap;
            width: 1%;
        }
    </style>
</head>

<title>Cucian</title>


<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" style="font-size: 21px;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="fas fa-user"></i>&nbsp;&nbsp;<?= $this->session->get('auth')['username'] ?>&nbsp;</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
                        <?php if ($this->session->get('auth')['tipe'] === 'master') { ?>
                        <a class="dropdown-item" href="<?= $this->url->get('user') ?>">List User</a>
                        <?php } ?>
                        <a class="dropdown-item" href="<?= $this->url->get('session/logout') ?>">Log out</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
                    <span class="font-weight-bold brand-link" style="color:#343A40; background:#7CB1A6; padding-left: 13px;">
                        <?= $this->tag->image(['img/DCA.png', 'class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8']) ?>
                        <span class="brand-text font-weight-bold" style="padding-left: 15%;">DCA</span>
                    </span>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <?php if ($this->session->get('auth')['tipe'] == 'master') { ?>
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
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Cucian
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= $this->url->get('alatberat') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Alat Berat
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <?php } ?>
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
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Pemakaian Alat
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
    <div class="card mt-5">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>TAMBAH DATA</strong>
        </div>
        <?= $this->flashSession->output() ?>
        <div class="card-header">
            <a href="<?= $this->url->get('/cucian') ?>" class="btn btn-secondary">Kembali</a>

        </div>
        <div class="card-body">
            <form autocomplete="off" method="post" action="<?= $this->url->get('/cucian/proses') ?>">
                <div class="form-group">
                    <label>Nama Cucian</label>
                    <input type="text" name="nama_cucian" class="form-control"
                    placeholder="Nama cucian">
                    
                </div>
                <div class="form-group">
                    <label>Kode Cucian</label>
                    <input type="text" name="kode_cucian" class="form-control"
                    placeholder="Kode Cucian">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                
            </form>
            

        </div>
    </div>
</div>

        </div>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- jQuery -->
        <?= $this->assets->outputJs() ?>
    </div>
</body>

</html>