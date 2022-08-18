<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function login()
    {
   
        echo view ('Users/login');
    }

    public function authorise()
    {
        $session = session();
        $model = new userModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if($data){
            
            $pass = $data['password'];
            //$verify_pass = password_verify($password, $pass);
            if($password === $pass){
                $ses_data = [ 
                    'id' => $data['userId'],
                    'fName' => $data['fName'],
                    'lName' => $data['lName'],
                    'email' => $data['email'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/dashboard'));
            }
            else{
                $session->setFlashdata('item', 'Wrong Password');
                return redirect()->to(base_url('/login'));
            }
        }
        else{
            $session->setFlashdata('item', 'Email not found');
            return redirect()->to(base_url('/register'));
        }
    }
    public function dashboard()
    {
       
        echo view ('Users/dashboard');
        
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
         return redirect()->to(base_url('/login'));
    }
} 
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>