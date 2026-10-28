<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Starter Page
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <p class="card-text">
                                <i class="fas fa-table mr-1"></i>

                                <a href="<?= site_url('administrator/produk/tambah') ?>"
                                   class="btn btn-labeled btn-danger">
                                    <span class="btn-label">
                                        <i class="fa fa-plus"></i>
                                    </span>
                                    Produk
                                </a>
                            </p>

                            <?php if ($this->session->flashdata('message')) : ?>
                                <?= $this->session->flashdata('message') ?>
                            <?php endif ?>

                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($list_produk as $produk) :
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no ?></th>
                                            <td><?= html_escape($produk['pd_nama']) ?></td>
                                            <td><?= html_escape($produk['kt_nama']) ?></td>
                                            <td>Rp. <?= number_format($produk['harga']) ?></td>
                                            <td><?= html_escape($produk['stok']) ?></td>
                                            <td><?= html_escape($produk['deskripsi']) ?></td>

                                            <td>
                                                <a href="<?= site_url('administrator/produk/ubah/' . $produk['id_produk']) ?>">
                                                    <span class="badge badge-success">Ubah</span>
                                                </a>

                                                <a href="<?= site_url('administrator/produk/hapus/' . $produk['id_produk']) ?>"
                                                   onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    <span class="badge badge-danger">Hapus</span>
                                                </a>
                                            </td>
                                        </tr>

                                        <?php $no++; ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->