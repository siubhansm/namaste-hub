<?php 
namespace App\Models;
use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    
    protected $allowedFields = ['fName','lName', 'dob', 'email', 'password'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data){
        $data = $this->hashPass($data);
        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->hashPass($data);
        return $data;
    }
//this uses code igniter password hasher to hash the password
    protected function hashPass(array $data){
        if(!isset($data['data']['password']))
        $data['data']['password'] = password_has($data['data']['password']. PASSWORD_DEFAULT);

        return $data;
    }
}

?>