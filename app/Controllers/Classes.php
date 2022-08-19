<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClassModel;

class Classes extends BaseController
{
    public function uploadView()
    {
         echo view ('Classes/uploadView');   
    }
    public function upload()
    {
         
        $data = [];
         helper(['form']);
       $videoModel=new classModel();

        $data['video']=$this->request->getVar('file');
        $data['name']=$this->request->getVar('name');
        $data['description']=$this->request->getVar('description');
        $videoModel->insert($data);
        echo view ('Classes/video', $data);
    }
 
    public function video()
    {
         echo view ('Classes/video');   
    }
   

}

