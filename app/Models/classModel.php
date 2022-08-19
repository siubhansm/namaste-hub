<?php 
namespace App\Models;
use CodeIgniter\Model;

class classModel extends Model
{
    protected $table = 'Classes';
    protected $primaryKey = 'classId';
    
    protected $allowedFields = ['description','video', 'name'];

}

?>