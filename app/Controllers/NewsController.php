<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsModel;
use App\Models\UsersModel;
use App\Models\NewscategoriesModel;
use App\Models\NewspaperModel;




class NewsController extends BaseController
{
   
       public function __construct()
    { 
        helper(['url','form']);
        $pager = \Config\Services::pager();
    }
     public function index()
    {

         $newsInfo=new NewsModel();
         $usersInfo=new UsersModel();
         $user_id=session()->get('logged_in');
         $newspaperInfo=new NewspaperModel();
         $newscategoryInfo=new NewscategoriesModel();
       
         $datanews=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'news_user' => $newsInfo->select('*')->paginate(10),
            'pager' => $newsInfo->pager, 
            'newspaper_user'=> $newspaperInfo->select('*')->findAll()  ,
            'newscategory_user'=> $newscategoryInfo->select('*')->findAll() ,

        ];
        return view('News/news.php',$datanews);
       
    }

    public function create()
    {
          
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $newspaperInfo=new NewspaperModel();
        $newscategoryInfo=new NewscategoriesModel();
        $datanews=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'newspaper_user'=> $newspaperInfo->select('*')->findAll()  ,
            'newscategory_user'=> $newscategoryInfo->select('*')->findAll() ,

        ];
        return view('News/createNews.php',$datanews);
    }
  
      public function store()
    {

           
              
                $img = $this->request->getFile('image');
                if($img->isValid() && ! $img->hasMoved())
                {
                   $image=$img->getRandomName();
                   $img->move('uploads',$image);
                }

        
        $news_uploader_id=$this->request->getPost('news_uploader_id');
        $title=$this->request->getPost('title');
        $summary=$this->request->getPost('summary');
        $description=$this->request->getPost('descript');
        $date=$this->request->getPost('date');
        $news_category_id=$this->request->getPost('news_category_id');
        $breaking_news=$this->request->getPost('breaking_news');
        $publish_timestamp=$this->request->getPost('publish_timestamp');
        $tag=$this->request->getPost('tag');
        $news_speciality_id=$this->request->getPost('news_speciality_id');
        // $news_reporter_id=$this->request->getPost('news_reporter_id');
        $newspaper_id=$this->request->getPost('newspaper_id');
      
        $values=
        [
            'news_uploader_id'=>$news_uploader_id,
            'title'=>$title,
            'summary'=>$summary,
            'description'=>$description,
            'image'=>$image,
            'date'=>$date,
            'news_category_id'=>$news_category_id,
            'breaking_news'=>$breaking_news,
            'publish_timestamp'=>$publish_timestamp,
            'tag'=>$tag,
            'news_speciality_id'=>$news_speciality_id,
            // 'news_reporter_id'=>$news_reporter_id,
            'newspaper_id'=>$newspaper_id,
            
            

        ];

                $newscreate=new NewsModel();
                 $query=$newscreate->save($values);
               return redirect()->to('NewsController/index')->with('success','successfully Inserted');
            
          
    }
    public function edit($id = null)
    {
        
         
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $editNewsInfo=new NewsModel();
        $newspaperInfo=new NewspaperModel();
         $newscategoryInfo=new NewscategoriesModel();
          $datanews=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'editNews_Info'=> $editNewsInfo->find($id),
            'newspaper_user'=> $newspaperInfo->select('*')->findAll()  ,
            'newscategory_user'=> $newscategoryInfo->select('*')->findAll() ,

        ];
       
        return view('News/editNews.php',$datanews);
    }
     public function update($id = null)
    {

        $updateNews_Info=new NewsModel();
        $newsData=$updateNews_Info->find($id);
        $old_image=$newsData['image'];
        $img = $this->request->getFile('image');
                if($img->isValid() && ! $img->hasMoved())
                {
                    $old_image= $newsData['image'];
                    if(file_exists('uploads'.$old_image))
                    {
                        unlink('uploads'.$old_image);
                    }
                   $imageName=$img->getRandomName();
                   $img->move('uploads',$imageName);
                

                } 
       $news_uploader_id=$this->request->getPost('news_uploader_id');
        $title=$this->request->getPost('title');
        $summary=$this->request->getPost('summary');
        $description=$this->request->getPost('descript');
        $date=$this->request->getPost('date');
        $news_category_id=$this->request->getPost('news_category_id');
        $breaking_news=$this->request->getPost('breaking_news');
        $publish_timestamp=$this->request->getPost('publish_timestamp');
        $tag=$this->request->getPost('tag');
        $news_speciality_id=$this->request->getPost('news_speciality_id');
        // $news_reporter_id=$this->request->getPost('news_reporter_id');
        $newspaper_id=$this->request->getPost('newspaper_id');
      
        $values=
        [
            'news_uploader_id'=>$news_uploader_id,
            'title'=>$title,
            'summary'=>$summary,
            'description'=>$description,
            'image'=>$imageName,
            'date'=>$date,
            'news_category_id'=>$news_category_id,
            'breaking_news'=>$breaking_news,
            'publish_timestamp'=>$publish_timestamp,
            'tag'=>$tag,
            'news_speciality_id'=>$news_speciality_id,
            // 'news_reporter_id'=>$news_reporter_id,
            'newspaper_id'=>$newspaper_id,
            
            

        ];


                 $query=$updateNews_Info->update($id,$values);
               return redirect()->to('NewsController/index')->with('success','successfully Updated');
            
          
          
    
    }
    public function delete($id = null)
    {
        
          $deleteNews=new \App\Models\NewsModel();
          $deleteNews->delete($id);  
          return redirect()->back()->with('fail','User is Deleted Successfully');
        
    }
    public function search()
    {
         $usersInfo=new UsersModel();
         $user_id=session()->get('logged_in');
         $newsInfo=new NewsModel();
         $request = service('request');
        $searchData = $request->getGet(); // OR $this->request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        

        if ($search == '') {
            $paginateData = $newsInfo->paginate(5);
        } else {
            $paginateData = $newsInfo->select('*')
                ->orLike('title', $search)             
                ->paginate(5);
        }
         $datanews=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'users' => $paginateData,
            'pager' => $newsInfo->pager,
            'search' => $search,
        ];
         return view('News/searchnews.php', $datanews);
    }

}


