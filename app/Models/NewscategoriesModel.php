<?php

namespace App\Models;

use CodeIgniter\Model;

class NewscategoriesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'news_category';
    protected $primaryKey       = 'categoryid';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name','urdu_name','sort_by'];

    
}
