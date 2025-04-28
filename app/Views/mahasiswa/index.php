<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    
    <?php if (session()->getFlashdata('success')): ?>
        <p style="color:green"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $mhs['id'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['NPM'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['email'] ?></td>
                <td>
                    <a href="<?= site_url('mahasiswa/edit/' . $mhs['id']) ?>">Edit</a> |
                    <a href="<?= site_url('mahasiswa/delete/' . $mhs['id']) ?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <p><a href="<?= site_url('mahasiswa/tambah') ?>">Tambah Mahasiswa</a></p>
</body>
</html>
