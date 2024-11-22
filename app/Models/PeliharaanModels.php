<?php

namespace App\Models;

use CodeIgniter\Model;

class  PeliharaanModels extends Model
{
    protected $table      = 'Peliharaan';

    protected $primaryKey = 'Peliharaan_id';

    protected $allowedFields = ['Nama','Jenis','Ras','Usia', 'BeratBadan', 'Pemilik_id'];
}