<?php

namespace App\Controllers;

use App\Models\NewspaperModel;
use App\Models\UsersModel;
use App\Controllers\BaseController;

class NewspaperController extends BaseController
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
        $newspaperInfo=new NewspaperModel();
        $datanewspaper=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'users' => $newspaperInfo->paginate(10),
            'pager' => $newspaperInfo->pager,
        ];
         return view('Newspaper/newspaper.php', $datanewspaper);
    }
  
      public function store()
    {

          
              
                 $img = $this->request->getFile('image');
                if($img->isValid() && ! $img->hasMoved())
                {
                   $image=$img->getRandomName();
                   $img->move('uploads',$image);
                }
                   $values=
                        [
                        
                            'name'=>$this->request->getPost('name'),
                             'icon'  => $image,
                            'is_active'=>$this->request->getPost('is_active'),
                            'is_urdu'=>$this->request->getPost('is_urdu'),
                          

                        ];
                $newspapercreate=new NewspaperModel();
                $query=$newspapercreate->save($values);
               return redirect()->to('NewspaperController/index')->with('success','successfully Updated');

               

       }
    public function edit($id = null)
    {
        
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $editNewspapar_Info=new NewspaperModel();
        $data=[
            'editNewspapar_Info'=>$editNewspapar_Info->find($id),
             'userdata'=> $usersInfo->getUserData($user_id),
        ];
        return view('Newspaper/editNewspaper.php',$data);
    }
     public function update($id = null)
    {
    
       
        $updateNewspapar_Info=new NewspaperModel();
        $newspaperData=$updateNewspapar_Info->find($id);
        $old_image=$newspaperData['icon'];
        $img = $this->request->getFile('image');
                if($img->isValid() && ! $img->hasMoved())
                {
                    $old_image= $newspaperData['icon'];
                    if(file_exists('uploads'.$old_image))
                    {
                        unlink('uploads'.$old_image);
                    }
                   $imageName=$img->getRandomName();
                   $img->move('uploads',$imageName);
                

                }
                else{
                    $imageName=$old_image;
                }
                    $values=
                    [
                    
                        'name'=>$this->request->getPost('name'),
                         'icon'  => $imageName,
                        'is_active'=>$this->request->getPost('is_active'),
                        'is_urdu'=>$this->request->getPost('is_urdu'),
                      

                    ];

              
                 $query=$updateNewspapar_Info->update($id,$values);
               return redirect()->to('NewspaperController/index')->with('success','successfully Updated');
                
    }
    public function delete($id = null)
    {
        
          $deleteNewspaper=new \App\Models\NewspaperModel();
          $deleteNewspaper->delete($id);  
          return redirect()->back()->with('fail','User is Deleted Successfully');
        
    }
     // public function search()
    
    //      $newspaperInfo=new NewspaperModel();
    //      $request = service('request');
    //     $searchData = $request->getGet(); // OR $this->request->getGet();

    //     $search = "";
    //     if (isset($searchData) && isset($searchData['search'])) {
    //         $search = $searchData['search'];
    //     }

        

    //     if ($search == '') {
    //         $paginateData =  $newspaperInfo->paginate(5);
    //     } else {
    //         $paginateData =  $newspaperInfo->select('*')
    //             ->orLike('name', $search)             
    //             ->paginate(5);
    //     }
    //      $datanewspaper=
    //     [
            
    //         'users' => $paginateData,
    //         'pager' => $newspaperInfo->pager,
    //         'search' => $search,
    //     ];
    //      return view('Newspaper/SearchNewspaper.php', $datanewspaper);
    // }
    public function search()
    {
         $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
         $newspaperInfo=new NewspaperModel();
         $request = service('request');
        $searchData = $request->getGet(); // OR $this->request->getGet();

        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        

        if ($search == '') {
            $paginateData =  $newspaperInfo->paginate(5);
        } else {
            $paginateData =  $newspaperInfo->select('*')
                ->orLike('name', $search)             
                ->paginate(5);
        }
         $datanewspaper=
        [
            'userdata'=> $usersInfo->getUserData($user_id),
            'users' => $paginateData,
            'pager' => $newspaperInfo->pager,
            'search' => $search,
        ];
         return view('Newspaper/searchnewspaper.php', $datanewspaper);
    }
    
  
}
