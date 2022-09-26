<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NewshomeController extends BaseController
{
    public function index()
    {
        $data['pageName']= 'Home';
        return view('News_Frontend_pages/main_page_slider.php',$data);
    }
}

