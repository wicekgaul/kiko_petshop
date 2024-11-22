<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatMasukItemModels extends Model
{
    protected $table      = 'ObatMasukItem';
    protected $primaryKey = 'ObatMasukItem_id';
    protected $allowedFields = ['Jumlah', 'Obat_id', 'ObatMasuk_id'];
}