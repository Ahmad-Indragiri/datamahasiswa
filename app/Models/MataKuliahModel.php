<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    protected $table      = 'mata_kuliah';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_mata_kuliah', 'kode_mata_kuliah'];
}
