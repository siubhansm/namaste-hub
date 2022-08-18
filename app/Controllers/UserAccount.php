<?php

namespace App\Controllers;

use App\Models\userModel;
use CodeIgniter\Controller;


class UserAccount extends Controller
{
    protected $db;
    

    public function register()
    
    {
        $data = [
            'fName'=>'',
            'lName'=>'',
            'email'=>'',
            'dob'=>'',
            "msg" => '',
        ];
        helper(['form']);
        echo view ('Users/register', $data);

    }

    public function addUser()
    {
        //set data variable to empty array
        $data = [];
        
         //helper form allows use of form functions
        helper(['form']);
        //create a new user model instance
       $userModel=new userModel();
       //assign indivisual variables to input fields
        $fName=$this->request->getVar('fName');
        $lName=$this->request->getVar('lName');
        $email=$this->request->getVar('email');
        $dob=$this->request->getVar('dob');
        $password=$this->request->getVar('password');
        $confirmpassword=$this->request->getVar('confirmpassword');

        $pNumber = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        $data=[
            'fName'=>$this->request->getVar('fName'),
            'lName'=>$this->request->getVar('lName'),
            'email'=>$this->request->getVar('email'),
            'dob'=>$this->request->getVar('dob'),
            'password'=>$this->request->getVar('password'),
        ];
        

        if(empty($fName) || empty($lName) || empty($email) || empty($dob) || empty($password)){
     $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "All fields in this form must be filled",
        ];
        echo view ('Users/register', $data);
        
            }
          else if (!preg_match("/^[a-zA-Z]*$/", $fName)){
          $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "First name field must be letters only",
        ];
        echo view ('Users/register', $data);
        }
        else if (!preg_match("/^[a-zA-Z]*$/", $lName)){
          $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "Last name field must be letters only",
        ];
        echo view ('Users/register', $data);
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "Email must be valid",
        ];
        echo view ('Users/register', $data);
        }
         else if(!preg_match('/^([0-9]{1,2})\\/([0-9]{1,2})\\/([0-9]{4})$/', $dob)){
           $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "Please enter a valid date of birth using the format DD/MM/YYYY",
        ];
        echo view ('Users/register', $data);
        }
    
        else if(strlen($password) < 8 || !$pNumber || !$uppercase || !$lowercase || !$specialChars) {
          $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "Password must contain more than 8 characters, one number, one uppercase character, one lowercase character and one special character",
        ];
        echo view ('Users/register', $data);
        }
        else if ($password != $confirmpassword){
           $data = [
            'fName'=>$fName,
            'lName'=>$lName,
            'email'=>$email,
            'dob'=>$dob,
            "msg" => "Passwords must match",
        ];
        echo view ('Users/register', $data);
          }
         
      else{    
        
        $userModel->insert($data);
        return $this->response->redirect(base_url('/login'));          
     }
    }
    public function update()
    {
        return view ('Users/updateProfile');
    }

}
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>