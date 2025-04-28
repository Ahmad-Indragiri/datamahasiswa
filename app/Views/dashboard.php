<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?= $username; ?>!</h2>
    <p>Selamat datang di halaman dashboard.</p>
    
    <!-- Navigasi ke halaman lainnya -->
    <ul>
        <li><a href="<?= site_url('mahasiswa') ?>">Data Mahasiswa</a></li>
        <li><a href="<?= site_url('kelas') ?>">Data Kelas</a></li>
        <li><a href="<?= site_url('mata_kuliah') ?>">Data Mata Kuliah</a></li>
    </ul>
    
    <!-- Link Logout -->
    <a href="<?= site_url('logout') ?>">Logout</a>
</body>
</html>
