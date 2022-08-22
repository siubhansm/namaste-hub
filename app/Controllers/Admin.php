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
    //this function authorizes the admin user when they log in
    public function authoriseAdmin()
    {
        $session = session();
        $model = new adminModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if($data){
            
            $pass = $data['password'];
            //if the password inputted matches the password in the database then the authorization is valid
            if($password === $pass){
                $ses_data = [ 
                    'id' => $data['adminId'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'logged_in' => true,
                    'admin_logged_in' => true
                ];
            //we populte the session data with user info and logged_in and admin_logged_in to be true
                $session->set($ses_data);
                return redirect()->to(base_url('/dashboardAdmin'));
            }
            else{
                //here we look for the wrong password and redirect to the login page with flashdata if needed
                $session->setFlashdata('item', 'Wrong Password');
                return redirect()->to(base_url('/loginAdmin'));
            }
        }
        else{
            //here if the username isn't found we are redirected to the login page
            $session->setFlashdata('item', 'Username not found');
            return redirect()->to(base_url('/loginAdmin'));
        }
    }
    //this function displays the admin dashboard and sends all the data from the user table with it
     public function dashboardAdmin()
    {
        $model = new userModel();
        $data['table'] = $model->findAll();
        return view('Admin/dashboardAdmin', $data);
    }
    //this function displays the show admin view and sends all the data from the admin user table with it
    public function showAdminView()
    {
         $model = new adminModel();
          $data['table'] = $model->findAll();
          return view('Admin/adminView', $data);
        }
  
} 
?>
