<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Libraries\Hash;

class Dashboard extends BaseController
{
    public function __construct()
    { 
        helper(['url','form']);
    }

    public function index()
    {
        
        $usersInfo=new UsersModel();
        if(!session()->has('logged_in'))
        {
            return redirect()->to(base_url().'auth/login');

        }
        $user_id=session()->get('logged_in');
        $log_In=session()->get('log_In');
        
        $data=
        [
            'userdata'=>$usersInfo->getUserData($user_id),
            'log_In'=>$usersInfo->getUserData($log_In),
        ];
        return view('admin_panel/admin_dashboard.php',$data);
    }
    

    public function create()
    {
        return view('admin_panel/create.php');
    }
   public function store()
    {


       $validation=$this->validate([
            'name'=>[
                'rules'=>'required',
                'errors'=>
                [
                   'required'=>'Your Name is Required',
                ]

           ],
           'email'=>[
                'rules'=>'required|valid_email|is_unique[users.email]',
                'errors'=>
                [
                   'required'=>'Your Email is Required',
                   'valid_email'=>'Please Enter a Valid Email',
                   'is_unique'=>'Email Already Exist',
                
                ]
           ],
           'password'=>[
                'rules'=>'required|min_length[5]|max_length[15]',
                'errors'=>
                [
                   'required'=>'Your Email is Required',
                   'min_length'=>'password have min length is 5',
                   'max_length'=>'password have min length is 15',
                ]

           ]
        
           
        ]);
       if(!$validation)
       {
        return view('admin_panel/create.php',['validation'=>$this->validator]);
       }
       else
           {
               $userInfo=new UsersModel();
               $name=$this->request->getPost('name');
               $email=$this->request->getPost('email');
               $password=$this->request->getPost('password');
                $values=
                [
                  'name'=>$name,
                  'email'=>$email,
                  'password'=>Hash::make($password),
                ];
                
                 $query=$userInfo->save($values);
                 return redirect()->to('dashboard/index')->with('success','User Inserted Successfully');
            }

    }

    public function edit($id = null)
    {
        
    
        $userInfo=new \App\Models\UsersModel();
        $data['userInfo']=$userInfo->find($id);
        return view('auth/edit',$data);
    }
     public function update($id = null)
    {
         
        $name=$this->request->getPost('name');
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');

        $values=
        [
        
            'name'=>$name,
            'email'=>$email,
            'password'=>Hash::make($password),

        ];
        $userInfo=new \App\Models\UsersModel();
        $query=$userInfo->update($id,$values);
        return redirect()->to('dashboard/index')->with('success','successfully Updated');
    }
     public function delete($id = null)
    {
        
          $userInfo=new UsersModel();
          $userInfo->delete($id);  
          return redirect()->back()->with('success','User is Deleted Successfully');
        // $name=$this->request->getPost('name');
        // $email=$this->request->getPost('email');
        // $password=$this->request->getPost('password');

        // $values=
        // [
        
        //     'name'=>$name,
        //     'email'=>$email,
        //     'password'=>Hash::make($password),

        // ];
        // $userInfo=new \App\Models\UsersModel();
        // $query=$userInfo->update($id,$values);
        // return redirect()->to('dashboard/index')->with('success','successfully Updated');
    }

}
