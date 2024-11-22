<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamMediksModels extends Model
{
    protected $table      = 'RekamMediks';

    protected $primaryKey = 'RekamMediks_id';

    protected $allowedFields = ['Peliharaan', 'Keluhan', 'Penanganan', 'Resep', 'Tanggal', 'Dokter_id', 'Peliharaan_id'];
}