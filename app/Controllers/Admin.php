<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\adminModel;
use App\Models\userModel;
  
class Admin extends Controller
{
    public function loginAdmin()
    {
   
        echo view ('Admin/loginAdmin');
    }
    
        
  
    public function classView()
    {
   
        echo view ('Admin/classView');
    }
    public function authoriseAdmin()
    {
        $session = session();
        $model = new adminModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if($data){
            
            $pass = $data['password'];
            //$verify_pass = password_verify($password, $pass);
            if($password === $pass){
                $ses_data = [ 
                    'id' => $data['adminId'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'logged_in' => true,
                    'admin_logged_in' => true
                ];
                $session->set($ses_data);
                return redirect()->to(base_url('/dashboardAdmin'));
            }
            else{
                $session->setFlashdata('item', 'Wrong Password');
                return redirect()->to(base_url('/loginAdmin'));
            }
        }
        else{
            $session->setFlashdata('item', 'Username not found');
            return redirect()->to(base_url('/loginAdmin'));
        }
    }
     public function dashboardAdmin()
    {
        $model = new userModel();
        $data['table'] = $model->findAll();
        return view('Admin/dashboardAdmin', $data);
    }
    public function showAdminView()
    {
         $model = new adminModel();
          $data['table'] = $model->findAll();
          return view('Admin/adminView', $data);
        }
  
} 
?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>