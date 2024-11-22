<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatKeluarModels extends Model
{
    protected $table      = 'obatKeluar';
    
    protected $primaryKey = 'id';

    protected $allowedFields = ['Tanggal', 'Catatan'];
}