<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\classModel;

class Classes extends BaseController
{
    //this function displays the upload view, it's sent with empty data becasue the view will look for that data
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
    //this function adds the new video to the database, 
    public function upload()
    {
        
        $data = [];
        helper(['form']);
        //it sets the variables and tidies the data from the inputs
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
        //in the class database there are two fields for the youtube link, one is the user inputted one and one is the user inputted link with the embed indicator added so that when we pull the videos they will play
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
    //this function displays the video that has just been uploaded to the admin user
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
        //this function allows the user to edit class content
    public function classEdit ($classId)
    {
        $model = new classModel();
        $data['classes'] = $model->where('classId', $classId)->first();
        return view('Classes/classUpdate',$data);
    }
    //this function updates video content when the admin enters new details
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
        return $this->response->redirect(base_url('/classView'));
    }
    public function classDelete($classId = null)
    {
        $model = new classModel();
        $data['classes'] = $model->where('classId', $classId)->delete($classId);
        return $this->response->redirect(base_url('/classView'));
    }

}

