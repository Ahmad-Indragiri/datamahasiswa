<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>

    <p><a href="<?= site_url('mata_kuliah/tambah') ?>">Tambah Mata Kuliah</a></p>

    <table border="1">
        <thead>
            <tr>
                <th>Nama Mata Kuliah</th>
                <th>Kode Mata Kuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mata_kuliah as $mk): ?>
            <tr>
                <td><?= $mk['nama_mata_kuliah'] ?></td>
                <td><?= $mk['kode_mata_kuliah'] ?></td>
                <td>
                    <a href="<?= site_url('mata_kuliah/edit/'.$mk['id']) ?>">Edit</a> |
                    <a href="<?= site_url('mata_kuliah/delete/'.$mk['id']) ?>" onclick="return confirm('Apakah Anda yakin?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
