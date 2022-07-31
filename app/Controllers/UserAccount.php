<?php

namespace App\Controllers;

use App\Models\userModel;
use CodeIgniter\Controller;


class UserAccount extends Controller
{
    protected $db;
    

    public function register()
    
    {
    
        echo view ('Users/register');

    }

    public function addUser()
    {

        //helper form allows use of form functions
        helper(['form']);
       
        $rules = [
            'fName'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confirmpassword'  => 'matches[password]'
        ];
         if($this->validate($rules)){
        $userModel=new userModel();
        $data=[
            'fName'=>$this->request->getVar('fName'),
            'lName'=>$this->request->getVar('lName'),
            'email'=>$this->request->getVar('email'),
            'dob'=>$this->request->getVar('dob'),
            'password'=>$this->request->getVar('password'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/'));}
        else{
            $data['validation'] = $this->validator;
            echo view('Users/register', $data);
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