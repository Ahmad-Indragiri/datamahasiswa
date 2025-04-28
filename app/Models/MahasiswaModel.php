<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';   // Nama tabel di database
    protected $primaryKey = 'id';     // Primary key
    protected $allowedFields = ['nama', 'NPM', 'alamat', 'email'];  // Kolom-kolom yang diizinkan untuk disimpan
}
