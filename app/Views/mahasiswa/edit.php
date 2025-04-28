<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form action="<?= site_url('mahasiswa/update/'.$mahasiswa['id']) ?>" method="post">
        <input type="text" name="nama" placeholder="Nama" value="<?= old('nama', $mahasiswa['nama']) ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('nama') : '' ?></div><br><br>

        <input type="text" name="NPM" placeholder="NPM" value="<?= old('NPM', $mahasiswa['NPM']) ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('NPM') : '' ?></div><br><br>

        <input type="text" name="alamat" placeholder="Alamat" value="<?= old('alamat', $mahasiswa['alamat']) ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('alamat') : '' ?></div><br><br>

        <input type="email" name="email" placeholder="Email" value="<?= old('email', $mahasiswa['email']) ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('email') : '' ?></div><br><br>

        <button type="submit">Update Mahasiswa</button>
    </form>

    <p><a href="<?= site_url('mahasiswa') ?>">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>
