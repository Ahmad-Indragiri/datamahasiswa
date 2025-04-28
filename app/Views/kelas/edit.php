<h2>Edit Kelas</h2>

<form action="<?= site_url('kelas/update/' . $kelas['id']) ?>" method="post">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $kelas['nama'] ?>" required><br><br>

    <label>Kode Kelas:</label><br>
    <input type="text" name="kode_kelas" value="<?= $kelas['kode_kelas'] ?>" required><br><br>

    <label>Kelas:</label><br>
    <input type="text" name="kelas" value="<?= $kelas['kelas'] ?>" required><br><br>

    <button type="submit">Update Kelas</button>
</form>

<p><a href="<?= site_url('kelas') ?>">Kembali ke Daftar Kelas</a></p>
