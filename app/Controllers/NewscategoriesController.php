<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewscategoriesModel;
 use App\Models\UsersModel;

class NewscategoriesController extends BaseController
{
   
       public function __construct()
    { 
        helper(['url','form']);
    }
     public function index()
    {

        $newscategoryInfo=new NewscategoriesModel();
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $datanewscategory=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'users' => $newscategoryInfo->paginate(2),
            'pager' => $newscategoryInfo->pager,
        ];
         return view('Newscategory/newscategories.php', $datanewscategory);
    }
  
      public function store()
    {


      
       $name=$this->request->getPost('name');
        $urdu_name=$this->request->getPost('urdu_name');
        $sort_by=$this->request->getPost('sort_by');

        $values=
        [
            'name'=>$name,
            'urdu_name'=>$urdu_name,
            'sort_by'=>$sort_by,

        ];

                $newscategorycreate=new NewscategoriesModel();
                 $query=$newscategorycreate->save($values);
               return redirect()->to('NewscategoriesController/index')->with('success','successfully Updated');
            
          
    }
    public function edit($id = null)
    {
        
         
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $editNewscategory_Info=new NewscategoriesModel();
        $data=[
             'userdata'=>$usersInfo->getUserData($user_id),
            'editNewscategory'=>$editNewscategory_Info->find($id),
        ];
        return view('Newscategory/editNewscategory.php',$data);
    }
     public function update($id = null)
    {
    
       
        $name=$this->request->getPost('name');
        $urdu_name=$this->request->getPost('urdu_name');
        $sort_by=$this->request->getPost('sort_by');

        $values=
        [
            'name'=>$name,
            'urdu_name'=>$urdu_name,
            'sort_by'=>$sort_by,

        ];

                $newscategorycreate=new NewscategoriesModel();
                 $query=$newscategorycreate->update($id,$values);
               return redirect()->to('NewscategoriesController/index')->with('success','successfully Updated');
            
          
    
    }
    public function delete($id = null)
    {
        
          $deleteNewscategory=new \App\Models\NewscategoriesModel();
          $deleteNewscategory->delete($id);  
          return redirect()->back()->with('fail','User is Deleted Successfully');
        
    }
    public function search()
    {
         $usersInfo=new UsersModel();
         $user_id=session()->get('logged_in');
         $newscategoryInfo=new NewscategoriesModel();
         $request = service('request');
         $searchData = $request->getGet(); // OR $this->request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        

        if ($search == '') {
            $paginateData = $newscategoryInfo->paginate(5);
        } else {
            $paginateData = $newscategoryInfo->select('*')
                ->orLike('name', $search)             
                ->paginate(5);
        }
         $datanewspapercategory=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'users' => $paginateData,
            'pager' => $newscategoryInfo->pager,
            'search' => $search,
        ];
         return view('Newscategory/searchnewscategory.php', $datanewspapercategory);
    }

}


