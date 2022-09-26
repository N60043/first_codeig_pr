<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsmappingModel;
use App\Models\NewscategoriesModel;
  use App\Models\UsersModel;
use App\Models\NewspaperModel;

class NewsmappingController extends BaseController
{
     public function __construct()
    { 
        helper(['url','form']);
        $pager = \Config\Services::pager();
    }
     public function index()
    {

         $usersInfo=new UsersModel();
         $user_id=session()->get('logged_in');
         $newsmapping_Info=new NewsmappingModel();
         $newspaperInfo=new NewspaperModel();
         $newscategoryInfo=new NewscategoriesModel();
       
         $data_newsmapping=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'newsmapping_user' => $newsmapping_Info->select('*')->paginate(10),
            'pager' => $newsmapping_Info->pager, 
            'newspaper_user'=> $newspaperInfo->select('*')->findAll()  ,
            'newscategory_user'=> $newscategoryInfo->select('*')->findAll() ,

        ];
       return view('Newsmapping/newsmapping.php',$data_newsmapping);
       
    }

   public function store()
    {


      
       $news_category_id=$this->request->getPost('news_category_id');
       $newspaper_id=$this->request->getPost('newspaper_id');
       $news_category_name=$this->request->getPost('news_category_name');
       $category_url=$this->request->getPost('category_url');

        

        $values=
        [
            'news_category_id'=>$news_category_id,
            'newspaper_id'=>$newspaper_id,
            'news_category_name'=>$news_category_name,
            'category_url'=>$category_url,

        ];

                $newsmappingcreate=new NewsmappingModel();
                 $query=$newsmappingcreate->save($values);
               return redirect()->to('NewsmappingController/index')->with('success','successfully Data Inserted');
            
          
    }
    public function edit($id = null)
    {
        
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $editnewsmapping_info=new NewsmappingModel();
        $newspaperInfo=new NewspaperModel();
         $newscategoryInfo=new NewscategoriesModel();
          $datanews=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'editnewsmapping'=>$editnewsmapping_info->find($id),
            'newspaper_user'=> $newspaperInfo->select('*')->findAll()  ,
            'newscategory_user'=> $newscategoryInfo->select('*')->findAll() ,

        ];
       
        return view('Newsmapping/editNewsmapping.php',$datanews);
    }
     public function update($id = null)
    {

     
     
       $news_category_id=$this->request->getPost('news_category_id');
       $newspaper_id=$this->request->getPost('newspaper_id');
       $news_category_name=$this->request->getPost('news_category_name');
       $category_url=$this->request->getPost('category_url');

        

        $values=
        [
            'news_category_id'=>$news_category_id,
            'newspaper_id'=>$newspaper_id,
            'news_category_name'=>$news_category_name,
            'category_url'=>$category_url,

        ];

                $newsmappingupdate=new NewsmappingModel();
                $query=$newsmappingupdate->update($id,$values);
                return redirect()->to('NewsmappingController/index')->with('success','successfully Data Updated');
            
          
          
    
    }
    public function delete($id = null)
    {
        
          $deleteNewsmapping=new \App\Models\NewsmappingModel();
          $deleteNewsmapping->delete($id);  
          return redirect()->back()->with('fail','User is Deleted Successfully');
        
    }
    public function search()
    {
         $usersInfo=new UsersModel();
         $user_id=session()->get('logged_in');
         $newsmappingInfo=new NewsmappingModel();
         $request = service('request');
         $searchData = $request->getGet(); // OR $this->request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        

        if ($search == '') {
            $paginateData = $newsmappingInfo->paginate(5);
        } else {
            $paginateData = $newsmappingInfo->select('*')
                ->orLike('news_category_name', $search)             
                ->paginate(5);
        }
         $datanews=
        [  
            'userdata'=> $usersInfo->getUserData($user_id),
            'users' => $paginateData,
            'pager' => $newsmappingInfo->pager,
            'search' => $search,
        ];
         return view('Newsmapping/searchNewsmapping.php', $datanews);
    }
}
