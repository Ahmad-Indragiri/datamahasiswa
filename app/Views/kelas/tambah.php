<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
</head>
<body>
    <h2>Tambah Kelas</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="<?= site_url('kelas/tambahProses') ?>" method="post">
        <input type="text" name="nama" placeholder="Nama" value="<?= old('nama') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('nama') : '' ?></div><br><br>

        <input type="text" name="kode_kelas" placeholder="Kode Kelas" value="<?= old('kode_kelas') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('kode_kelas') : '' ?></div><br><br>

        <input type="text" name="kelas" placeholder="Kelas" value="<?= old('kelas') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('kelas') : '' ?></div><br><br>

        <button type="submit">Tambah Kelas</button>
    </form>

    <p><a href="<?= site_url('kelas') ?>">Kembali ke Daftar Kelas</a></p>
</body>
</html>
