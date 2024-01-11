<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginLog extends Model
{
    protected $table            = 'login';
    protected $primaryKey       = 'idlogin';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['idlogin','name','UserName','status'];
    protected $useTimestamps = true;
    
}
