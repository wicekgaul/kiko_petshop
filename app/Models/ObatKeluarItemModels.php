<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatKeluarItemModels extends Model
{
    protected $table      = 'ObatkeluarItem';
    
    protected $primaryKey = 'ObatKeluarItem_id';

    protected $allowedFields = ['Jumlah', 'Keterangan', 'ObatKeluar_id', 'Obat_id'];
}