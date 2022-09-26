<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsmappingModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'newsmaping';
    protected $primaryKey       = 'newsmaping_id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['news_category_id','newspaper_id','news_category_name','category_url'];

    
}
