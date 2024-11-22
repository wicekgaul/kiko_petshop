<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilikModels extends Model
{
    protected $table      = 'Pemilik';
    protected $primaryKey = 'Pemilik_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['Nama','Alamat', 'Telepon', 'Email'];
}