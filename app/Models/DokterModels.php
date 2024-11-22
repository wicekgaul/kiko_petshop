<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModels extends Model
{
    protected $table      = 'Dokter';
    protected $primaryKey = 'Dokter_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['Nama', 'JenisKelamin', 'Telepon', 'Alamat', 'Email', 'Photo', 'User_id'];
}
