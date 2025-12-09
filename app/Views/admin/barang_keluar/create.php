<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layout/header.php') ?>
    <?= $this->include('layout/header-css.php') ?>
</head>

<body>

<?= $this->include('layout/layout-vertical.php') ?>

<div class="pc-container">
    <div class="pc-content">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tambah Barang Keluar</h5>
                        <a href="<?= base_url('barang-keluar') ?>" class="btn btn-secondary btn-sm">
                            <i class="ti ti-arrow-left"></i> Kembali
                        </a>
                    </div>

                    <div class="card-body">

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                        <?php endif ?>

                        <form action="<?= base_url('barang-keluar/store') ?>" method="post">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Pilih Barang</label>
                                    <select name="id_barang" class="form-select" required>
                                        <option value="" disabled selected>- Pilih Barang -</option>
                                        <?php foreach ($barang as $b): ?>
                                            <option value="<?= $b['id_barang'] ?>">
                                                <?= esc($b['kode_barang']) ?> - <?= esc($b['nama_barang']) ?>
                                                (Stok: <?= $b['stok'] ?>)
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Jumlah</label>
                                    <input type="number" 
                                           name="jumlah" 
                                           class="form-control"
                                           min="1"
                                           placeholder="Masukkan jumlah barang keluar"
                                           required>
                                </div>
                            </div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti ti-device-floppy"></i> Simpan Data
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?= $this->include('layout/footer-js.php') ?>

</body>
</html>
