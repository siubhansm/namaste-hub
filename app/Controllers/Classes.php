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
        $video=$this->request->getVar('file');
        $replacement = 'embed/';
        $position=stripos($video,"watch?v=");
        $finalVideo=substr_replace($video, $replacement, $position, 8);

        $data['video']=$finalVideo;
        $data['name']=$this->request->getVar('name');
        $data['description']=$this->request->getVar('description');
        $videoModel->insert($data);

        $sendData['video'] = array('video' => $finalVideo ,
    'name' => $data['name'], 'description' => $data['description'] );
        echo view ('Classes/video', $sendData);
    }
 
    public function video()
    {
         echo view ('Classes/video');   
    }
    public function classes()
    {
         $model = new classModel();
          $data['table'] = $model->findAll();
          return view('Classes/classes', $data);
        }

}

