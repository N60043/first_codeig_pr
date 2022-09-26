<?php

namespace App\Models;

use CodeIgniter\Model;

class NewspaperModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'newspaper';
    protected $primaryKey       = 'newspaper_id';
    protected $useAutoIncrement = true;
 
    protected $allowedFields    = ['name','icon','is_active','is_urdu'];

   
}
