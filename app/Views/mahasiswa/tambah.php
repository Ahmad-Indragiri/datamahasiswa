<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    
    <form action="<?= site_url('mahasiswa/tambahProses') ?>" method="post">
        <input type="text" name="nama" placeholder="Nama" value="<?= old('nama') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('nama') : '' ?></div><br><br>
        
        <input type="text" name="NPM" placeholder="NPM" value="<?= old('NPM') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('NPM') : '' ?></div><br><br>
        
        <input type="text" name="alamat" placeholder="Alamat" value="<?= old('alamat') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('alamat') : '' ?></div><br><br>
        
        <input type="email" name="email" placeholder="Email" value="<?= old('email') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('email') : '' ?></div><br><br>
        
        <button type="submit">Tambah Mahasiswa</button>
    </form>
    
    <p><a href="<?= site_url('mahasiswa') ?>">Kembali ke Daftar Mahasiswa</a></p>
</body>
</html>
