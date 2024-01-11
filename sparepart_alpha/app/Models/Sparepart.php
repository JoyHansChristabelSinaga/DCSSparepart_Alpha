<?php

namespace App\Models;

use CodeIgniter\Model;

class Sparepart extends Model
{
    protected $table            = 'spare';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id','Name','MC','Quantity','Location','Note'];
    protected $useTimestamps = true;
    
}