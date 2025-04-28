<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Tambah Mata Kuliah</h2>
    
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    
    <form action="<?= site_url('mata_kuliah/tambahProses') ?>" method="post">
        <input type="text" name="nama_mata_kuliah" placeholder="Nama Mata Kuliah" value="<?= old('nama_mata_kuliah') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('nama_mata_kuliah') : '' ?></div><br><br>
        
        <input type="text" name="kode_mata_kuliah" placeholder="Kode Mata Kuliah" value="<?= old('kode_mata_kuliah') ?>" required>
        <div style="color:red"><?= isset($validation) ? $validation->getError('kode_mata_kuliah') : '' ?></div><br><br>
        
        <button type="submit">Tambah Mata Kuliah</button>
    </form>
    
    <p><a href="<?= site_url('mata_kuliah') ?>">Kembali ke Daftar Mata Kuliah</a></p>
</body>
</html>
