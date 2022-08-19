<?php 
namespace App\Models;
use CodeIgniter\Model;

class adminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'adminId';
    
    protected $allowedFields = ['username', 'role', 'email', 'password'];

//   password hashing deleted for now due to log in stuggles
// protected $beforeInsert = ['beforeInsert'];
 //   protected $beforeUpdate = ['beforeUpdate'];

//    protected function beforeInsert(array $data){
 //       $data = $this->hashPass($data);
 //       return $data;
 //   }

 //   protected function beforeUpdate(array $data){
 //       $data = $this->hashPass($data);
  //      return $data;
  //  }
//this uses code igniter password hasher to hash the password
//    protected function hashPass(array $data){
 //       if(!isset($data['data']['password']))
  //      $data['data']['password'] = password_has($data['data']['password']. PASSWORD_DEFAULT);

     //   return $data;
  //  }
}

?>