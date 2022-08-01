<?php

namespace App\Controllers;

use App\Models\userModel;
use CodeIgniter\Controller;


class UserAccount extends Controller
{
    protected $db;
    

    public function register()
    
    {
        $data = [];
        helper(['form']);

        echo view ('Users/register');

    }

    public function addUser()
    {
        $data = [];
        helper(['form']);

        //helper form allows use of form functions
        helper(['form']);
       
        $rules = [
            'First Name' => 'required|min_length[3]|max_length[30]',
            'Last Name' => 'required|min_length[3]|max_length[30]',
            'Email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'Date of Birth' => 'required|regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]',
            'Passoword' => 'required|min_length[6]|max_length[250]',
            'Confirm Password' => 'matches[password]'
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