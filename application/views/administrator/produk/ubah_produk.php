<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Produk</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= site_url('administrator/produk') ?>">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            Ubah Produk
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary card-outline">

                        <div class="card-header">
                            <h5 class="card-title">
                                <strong>Form Ubah Produk</strong>
                            </h5>
                        </div>

                        <div class="card-body">

                            <?php if ($this->session->flashdata('message')) : ?>
                                <?= $this->session->flashdata('message') ?>
                            <?php endif; ?>

                            <form method="post"
                                  action="<?= site_url('administrator/produk/ubah/' . $produk['id_produk']) ?>"
                                  enctype="multipart/form-data">

                                <!-- Nama Produk -->
                                <div class="form-group">
                                    <label for="nama_produk">
                                        Nama Produk
                                    </label>

                                    <input type="text"
                                           class="form-control"
                                           name="nama_produk"
                                           id="nama_produk"
                                           value="<?= html_escape(set_value('nama_produk', $produk['nama'])) ?>"
                                           required>

                                    <small class="text-danger">
                                        <?= form_error('nama_produk') ?>
                                    </small>
                                </div>

                                <!-- Kategori Produk -->
                                <div class="form-group">
                                    <label for="kategori_produk">
                                        Kategori Produk
                                    </label>

                                    <select class="form-control"
                                            name="kategori_produk"
                                            id="kategori_produk"
                                            required>

                                        <option value="">
                                            - Pilih Kategori -
                                        </option>

                                        <?php foreach ($list_kategori as $kategori) : ?>

                                            <option
                                                value="<?= $kategori['id_kategori'] ?>"
                                                <?= set_select(
                                                    'kategori_produk',
                                                    $kategori['id_kategori'],
                                                    $produk['kategori_id'] == $kategori['id_kategori']
                                                ) ?>>

                                                <?= html_escape($kategori['nama']) ?>

                                            </option>

                                        <?php endforeach; ?>

                                    </select>

                                    <small class="text-danger">
                                        <?= form_error('kategori_produk') ?>
                                    </small>
                                </div>

                                <!-- Harga Produk -->
                                <div class="form-group">
                                    <label for="harga_produk">
                                        Harga Produk
                                    </label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Rp
                                            </span>
                                        </div>

                                        <input type="number"
                                               class="form-control"
                                               name="harga_produk"
                                               id="harga_produk"
                                               min="0"
                                               value="<?= html_escape(set_value('harga_produk', $produk['harga'])) ?>"
                                               required>
                                    </div>
                                </div>

                                <!-- Stok Produk -->
                                <div class="form-group">
                                    <label for="stok_produk">
                                        Stok Produk
                                    </label>

                                    <input type="number"
                                           class="form-control"
                                           name="stok_produk"
                                           id="stok_produk"
                                           min="0"
                                           value="<?= html_escape(set_value('stok_produk', $produk['stok'])) ?>"
                                           required>
                                </div>

                                <!-- Ganti Gambar Produk -->
                                <div class="form-group">
                                    <label for="gambar_produk">
                                        Ganti Gambar Produk
                                    </label>

                                    <input type="file"
                                           class="form-control"
                                           name="gambar_produk[]"
                                           id="gambar_produk"
                                           accept=".jpg,.jpeg,.png,.gif"
                                           multiple>

                                    <small class="form-text text-muted">
                                        Pilih gambar baru untuk mengganti
                                        semua gambar lama. Maksimal 5 MB
                                        per gambar. Jika tidak memilih gambar,
                                        gambar lama tetap digunakan.
                                    </small>
                                </div>

                                <!-- Gambar Produk Lama -->
                                <?php
                                $list_gambar = $gambar_model
                                    ->get_by_produk_id($produk['id_produk']);
                                ?>

                                <div class="form-group">
                                    <label>Gambar Produk Saat Ini</label>

                                    <div class="row">

                                        <?php if (!empty($list_gambar)) : ?>

                                            <?php foreach ($list_gambar as $gambar) : ?>

                                                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">

                                                    <div class="card h-100">

                                                        <img
                                                            src="<?= base_url('uploads/produk/' . rawurlencode($gambar['nama_gambar'])) ?>"
                                                            class="card-img-top"
                                                            alt="Gambar Produk"
                                                            style="height:200px; object-fit:cover;">

                                                        <div class="card-body text-center">

                                                            <span class="badge badge-info">
                                                                Gambar Lama
                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        <?php else : ?>

                                            <div class="col-12">
                                                <div class="alert alert-warning">
                                                    Belum ada gambar produk.
                                                </div>
                                            </div>

                                        <?php endif; ?>

                                    </div>
                                </div>

                                <!-- Preview Gambar Baru -->
                                <div class="form-group"
                                     id="preview-container"
                                     style="display:none;">

                                    <label>Preview Gambar Baru</label>

                                    <div class="row"
                                         id="preview-gambar">
                                    </div>

                                </div>

                                <!-- Deskripsi Produk -->
                                <div class="form-group">
                                    <label for="deskripsi_produk">
                                        Deskripsi Produk
                                    </label>

                                    <textarea
                                        name="deskripsi_produk"
                                        id="deskripsi_produk"
                                        rows="6"
                                        class="form-control"><?= html_escape(set_value('deskripsi_produk', $produk['deskripsi'])) ?></textarea>
                                </div>

                                <!-- Tombol -->
                                <div class="form-group">

                                    <button type="submit"
                                            class="btn btn-primary">
                                        <i class="fas fa-save"></i>
                                        Ubah Produk
                                    </button>

                                    <a href="<?= site_url('administrator/produk') ?>"
                                       class="btn btn-danger">
                                        <i class="fas fa-arrow-left"></i>
                                        Kembali
                                    </a>

                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.content-wrapper -->

<!-- Preview Gambar Sebelum Upload -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('gambar_produk');
    const container = document.getElementById('preview-container');
    const preview = document.getElementById('preview-gambar');

    input.addEventListener('change', function () {

        preview.innerHTML = '';

        if (this.files.length === 0) {
            container.style.display = 'none';
            return;
        }

        container.style.display = 'block';

        Array.from(this.files).forEach(function (file) {

            if (!file.type.startsWith('image/')) {
                return;
            }

            const reader = new FileReader();

            reader.onload = function (event) {

                const col = document.createElement('div');
                col.className = 'col-lg-3 col-md-4 col-sm-6 mb-3';

                const card = document.createElement('div');
                card.className = 'card h-100';

                const img = document.createElement('img');
                img.src = event.target.result;
                img.className = 'card-img-top';
                img.style.height = '200px';
                img.style.objectFit = 'cover';

                const body = document.createElement('div');
                body.className = 'card-body text-center';

                const badge = document.createElement('span');
                badge.className = 'badge badge-success';
                badge.textContent = 'Gambar Baru';

                body.appendChild(badge);
                card.appendChild(img);
                card.appendChild(body);
                col.appendChild(card);
                preview.appendChild(col);
            };

            reader.readAsDataURL(file);
        });
    });
});
</script>