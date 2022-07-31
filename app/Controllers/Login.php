<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function login()
    {
        $data = []; 
        helper(['form']);
        echo view ('Assets/header', $data);   
        echo view ('Users//login');
        echo view ('Assets/footer');
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
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [ 
                    'id' => $data['userId'],
                    'fName' => $data['fName'],
                    'lName' => $data['lName'],
                    'email' => $data['email'],
                    'logged_in' => true
                ];
                $session->set($ses_data);
                return redirect()->to('Users/dashboard');
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/');
            }
        }
        else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/register');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>