<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Controllers\BaseController;
use App\Libraries\Hash;


class ProfileController extends BaseController
{
    public function index()
    {
     $usersInfo=new UsersModel();
        if(!session()->has('logged_in'))
        {
            return redirect()->to(base_url().'auth/login');

        }
        $user_id=session()->get('logged_in');
        $data['userdata']=$usersInfo->getUserData($user_id); 
        return view('admin_panel/profile.php',$data);
    }
    public function changepassword($id=null)
    { 
        $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $data=
        [
            'userdata'=>$usersInfo->getUserData($user_id),
        ];
        return view('admin_panel/change_password.php',$data);
    
    }
    public function updatepassword($id=null)
    {
       $usersInfo=new UsersModel();
        $user_id=session()->get('logged_in');
        $data=
        [
            'userdata'=>$usersInfo->getUserData($user_id),
            'validation'=>$this->validator,
        ];

             $validation=$this->validate([
            
          
           'old_pass'=>[
                'rules'=>'required',
               
            ],
             'new_pass'=>[
                'rules'=>'required|min_length[5]|max_length[15]',
                
            ],
             'confirm_pass'=>[
                'rules'=>'required|matches[new_pass]',
                
            ],

               
        ]);
       if(!$validation)
       {
        $data['validation']=$this->validator;
         return view('admin_panel/change_password.php',$data);
        
       }
       else
       {
          $old_pass=$this->request->getPost('old_pass');
          $new_pass=Hash::make($this->request->getPost('new_pass'));
          if(password_verify($old_pass,$data['userdata']->password))
                {

                    if($usersInfo->updatepassword($new_pass,$user_id))
                    {
                         return redirect()->back()->with('success','Password Update Successfully');
                    }
                    else
                    {
                     return redirect()->back()->with('fail','Sorry! Unable to update Password , try again');   
                    }
                     
                    
                }
                else
                {
                      return redirect()->back()->with('fail','Password did not match with Database Password So,please enter a Correct Old Password');
                }

               }
    }
}
