<?php $role = session()->get('role'); ?>

<?php if ($role == 'admin'): ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/layout/header.php') ?>
    <?= $this->include('layout/header-css.php') ?>
</head>

<body>

<?= $this->include('admin/layout/layout-vertical.php') ?>

<div class="pc-container">
    <div class="pc-content">

        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Profile</h5>
                </div>

                <div class="card-body">

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif ?>

                    <form action="<?= base_url('profile/update') ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   value="<?= $user['username'] ?>"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?= $user['email'] ?>"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Baru (Opsional)</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Kosongkan jika tidak diganti">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy"></i> Update Profile
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->include('layout/footer-js.php') ?>

</body>
</html>

<?php endif; ?>

<?php if ($role == 'staff'): ?> 
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

        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Profile</h5>
                </div>

                <div class="card-body">

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif ?>

                    <form action="<?= base_url('profile/update') ?>" method="post">

                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   value="<?= $user['username'] ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?= $user['email'] ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password Baru (Opsional)</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   placeholder="Kosongkan jika tidak diganti">
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="ti ti-device-floppy"></i> Update Profile
                        </button>

                    </form>

                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->include('layout/footer-js.php') ?>

</body>
</html>

<?php endif; ?>