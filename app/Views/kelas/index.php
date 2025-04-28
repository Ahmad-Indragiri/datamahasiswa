<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kelas</title>
</head>
<body>
    <h2>Daftar Kelas</h2>

    <p><a href="<?= site_url('kelas/tambah') ?>">Tambah Kelas</a></p>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kode Kelas</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kelas as $k): ?>
            <tr>
                <td><?= $k['nama'] ?></td>
                <td><?= $k['kode_kelas'] ?></td>
                <td><?= $k['kelas'] ?></td>
                <td>
                    <a href="<?= site_url('kelas/edit/'.$k['id']) ?>">Edit</a> |
                    <a href="<?= site_url('kelas/delete/'.$k['id']) ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
