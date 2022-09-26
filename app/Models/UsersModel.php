<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    
    protected $table='users';
   
    public function getUserData($user_id)
   {
    $builder=$this->db->table('users');
    $builder->where('id',$user_id);
    $result=$builder->get();
    if(count($result->getResultArray())==1)
    {
        return $result->getRow();
      }
      else
      {
        return false;
      }
    }

     public function updatepassword($new_pass,$user_id)
   {
    $builder=$this->db->table('users');
    $builder->where('id',$user_id);
    $builder->update(['password'=>$new_pass]);
    if($this->db->affectedRows()>0)
    {
      return true;
    }
    else
    {
        return false;
    }
    
  }
}

