<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
     protected $DBGroup          = 'default';
    protected $table            = 'news';
    protected $primaryKey       = 'news_id';
    protected $allowedFields    = ['news_uploader_id','title','summary','description','image','date','news_category_id','news_sub_category_id ','view_count','timestamp ','  status','breaking_news','publish_timestamp','tag','news_speciality_id','img_features','news_reporter_id','newspaper_id','news_api_id','guid '];

   
    
}
