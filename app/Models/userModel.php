<?php 
namespace App\Models;
use CodeIgniter\Model;
class usermodel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    
    protected $allowedFields = ['fName','lName', 'dob', 'email', 'password'];
}
?>