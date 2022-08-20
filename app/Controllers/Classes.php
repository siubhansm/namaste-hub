<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\classModel;

class Classes extends BaseController
{
    public function uploadView()
    {
        $data = [
            'video'=>'',
            'name'=>'',
            'description'=>'',
            "msg" => '',
        ];
         echo view ('Classes/uploadView', $data);   
    }
    public function upload()
    {
         
        $data = [];
        helper(['form']);
        $videoModel=new classModel();
        $video=$this->request->getVar('file');
        $name=trim($this->request->getVar('name'));
        $description=trim($this->request->getVar('description'));
       

        if(empty($video) || empty($name) || empty($description)){
         $data = [
            'video'=>$video,
            'name'=>$name,
            'description'=>$description,
            "msg" => "All fields in this form must be filled",
        ];
        echo view ('Classes/uploadView', $data);  
            }
        else if (!str_contains($video, 'youtube.com/watch?v=')){
             $data = [
                    'video'=>$video,
                    'name'=>$name,
                    'description'=>$description,
                    "msg" => "Please enter a valid YouTube URL",
                ];
        echo view ('Classes/uploadView', $data);  
            }
        else
        {
        $replacement = 'embed/';
        $position=stripos($video,"watch?v=");
        $finalVideo=substr_replace($video, $replacement, $position, 8);

        $data['video']=$video;
        $data['embedURL']=$finalVideo;
        $data['name']=$this->request->getVar('name');
        $data['description']=$this->request->getVar('description');
        $videoModel->insert($data);
        $sendData['video'] = array('video' => $finalVideo ,
         'name' => $data['name'], 'description' => $data['description'] );
        echo view ('Classes/video', $sendData);}
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
     public function showClassView()
    {
         $model = new classModel();
          $data['table'] = $model->findAll();
          
          return view('Admin/classView', $data);
        }
    public function classEdit ($classId)
    {
        $model = new classModel();
        $data['classes'] = $model->where('classId', $classId)->first();
        return view('classes/classUpdate',$data);
    }
     public function classUpdate()
    {
        $model = new classModel();
        $classId = $this->request->getVar('classId');
       
        $video=$this->request->getVar('file');
        $replacement = 'embed/';
        $position=stripos($video,"watch?v=");
        $finalVideo=substr_replace($video, $replacement, $position, 8);

        $data['video']=$video;
        $data['embedURL']=$finalVideo;
        $data['name']=$this->request->getVar('name');
        $data['description']=$this->request->getVar('description');
        $model->update($classId, $data);
        return $this->response->redirect(site_url('/classView'));
    }
    public function classDelete($classId = null)
    {
        $model = new classModel();
        $data['classes'] = $model->where('classId', $classId)->delete($classId);
        return $this->response->redirect(site_url('/classView'));
    }

}

