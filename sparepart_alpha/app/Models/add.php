<?php

namespace App\Models;

use CodeIgniter\Model;

class add extends Model
{
    protected $table            = 'add';
    protected $primaryKey       = 'idadd';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['idadd','Name','Quantity_add','add_by'];
    protected $useTimestamps = true;
}