<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;

class Auth extends BaseController
{
    
    public function __construct()
    { 
        helper(['url','form']);
    }
    public function login()
    {
        return view('admin_panel/login.php');
    }
     public function register()
    {
        return view('admin_panel/registration.php');
    }
    public function save()
    {



       $validation=$this->validate([
            
           'email'=>[
                'rules'=>'valid_email|is_unique[users.email]',
                'errors'=>
                [
                
                   'valid_email'=>'Please Enter a Valid Email',
                   'is_unique'=>'Email Already Exist',
                
                ]
           ],
           'password'=>[
                'rules'=>'min_length[5]|max_length[15]',
                'errors'=>
                [
                   'min_length'=>'password have min length is 5',
                   'max_length'=>'password have min length is 15',
                ],
            ],
            'image'=> [
                'rules'=> 'uploaded[image]|is_image[image]|max_size[image,4096]',
                'errors'=>'The File'
                
            ]

           
        
           
        ]);
       if(!$validation)
       {
        return view('admin_panel/registration.php',['validation'=>$this->validator]);
       }
       else
       {
        $img = $this->request->getFile('image');
                if($img->isValid() && ! $img->hasMoved())
                {
                   $image=$img->getRandomName();
                   $img->move('uploads',$image);
                }
        $name=$this->request->getPost('name');
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');

        $values=
        [
            'name'=>$name,
            'email'=>$email,
            'icon'=>$image,
            'password'=>Hash::make($password),
            

        ];

        $usersModel=new \App\Models\UsersModel();
        $query=$usersModel->save($values);
        if(!$query)
        {
            return redirect()->back()->with('fail','something went wrong');
        }
        else
            return redirect()->to('auth/register')->with('success','you are now registered successfully');
       }
    }

    public function login_Check()
    {
        //validate Login Form

        $validation=$this->validate(
            [
                'email'=>
                [
                    'rules'=>'is_not_unique[users.email]',
                    'errors'=>
                    [
                       
                       'is_not_unique'=>'This email is not Registered',
                    ]

                ],

               'password'=>[
                'rules'=>'min_length[5]|max_length[15]',
                'errors'=>
                [
                   'min_length'=>'password have min length is 5',
                   'max_length'=>'password have min length is 15',
                ]

           

                ],
            ]);
       if(!$validation)
       {
        return view('admin_panel/login.php',['validation'=>$this->validator]);
       }
       else
       {
        
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');
        $usersModel=new \App\Models\UsersModel();
        $query=$usersModel->where('email',$email)->first();
        $check_password=Hash::Dcrypt($password,$query['password']);

        if(!$check_password)
        {
            
            return redirect()->back()->with('fail','password is incorrect');
            
        }
        else
        {
             $user_id=$query['id'];
             session()->set('logged_in',$user_id);
             session()->set('log_In',$user_id);
            return redirect()->to("Dashboard/index");
            // $user_name=$query['name'];
            // $user_email=$query['email'];
            // $user_Icon=$query['icon'];
            // session()->set('current_userName',$user_name);
            // session()->set('current_userEmail',$user_email);
            // session()->set('userIcon',$user_Icon);

        }
       }
    }

    public function logout()
    {
        if(session()->has('log_In'))
        {
            session()->remove('logged_in');
            session()->remove('log_In');
            // session()->remove('current_userName');
            // session()->remove('current_userEmail');
            // session()->remove('current_userIcon');
             return view('admin_panel/login.php');
        }
    }
   
}
