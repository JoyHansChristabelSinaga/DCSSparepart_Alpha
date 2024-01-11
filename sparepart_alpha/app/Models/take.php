<?php

namespace App\Models;

use CodeIgniter\Model;

class take extends Model
{
    protected $table            = 'take';
    protected $primaryKey       = 'idtake';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['idtake','Name','Quantity_take','take_by'];
    protected $useTimestamps = true;
    
}