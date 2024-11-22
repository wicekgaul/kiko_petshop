<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatMasukModels extends Model
{
    protected $table      = 'ObatMasuk';

    protected $primaryKey = 'ObatMasuk_id';

    protected $allowedFields = ['Tanggal', 'Asal', 'Catatan'];
}