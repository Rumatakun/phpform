<?php
namespace application\controllers;
use application\core\Controller;
class MainController extends Controller
{

    function indexAction()
    {
        $data=$_POST;
        $this->model->sendData();
        // if ajax when send to db
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            //form data validation
            if ((!empty($_POST))&&($_SERVER['REQUEST_METHOD']==='POST')){
                $this->sendData();
//                get it done
//                $errors=formValidation($data);
//                if(empty($errors)){
//
//                }
            }
        }
        $config = require 'application/config/config.php';
        $vars = [
            'twMessage'=>$config['tw']['message'],
            'twUrl'=>$config['tw']['url']
            ];
        $this->view->render('main', $vars);
    }

    public function sendData()
    {
       $result = $this->model->sendData(true);
    }

//GET IT DONE!
    public function formValidation($data)
    {
        $errors=array();
        $rulesPattern = [
//            'email' => '/^\w{1,}@\w{1,}\.\w{2,}$/',
//            'name' => "/^\w{1,24}$/" ,
//            'message' => "/^\w{10,500}$/",
//            'birthday'=>'/(^$)|(^\d{4}\-(0\d|1[012])\-([0-2]\d|3[01])$)/',
        ];
//        if(isset($data['email'])){
//            $email=trim($data['email']);
//            if(!filter_var($email, FILTER_VALIDATE_EMAIL) ){$errors['email']="email pattern";}
//            if($email==''){$errors['email']="Enter email";}
//        }
        if(isset($data['firstname'])){
            $name=trim($data['name']);
            if($name==''){$errors['firstname']="Enter name";}
        }
        if(isset($data['lastname'])){
            $surname=trim($data['surname']);
            if($surname==''){$errors['lastname']="Enter surname";}
        }
        return $errors;
    }

}
