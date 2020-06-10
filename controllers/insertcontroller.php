<?php


namespace app\controllers;


use app\db\database;
use app\Router;

class insertcontroller
{
    public function insertuser(\app\IRequest $request,Router $router)
    {
        $data = $request->getBody();
        $errors = [];
        define('REQUIRED_FIELD_ERROR', 'This field is required');
        $data = $request->getBody();

        $errors = [];

        function monthConvert($month){
            if($month == 'January') return '01';
            if($month == 'February') return '02';
            if($month == 'March') return '03';
            if($month == 'April') return '04';
            if($month == 'May') return '05';
            if($month == 'June') return '06';
            if($month == 'July') return '07';
            if($month == 'August') return '08';
            if($month == 'September') return '09';
            if($month == 'October') return '10';
            if($month == 'November') return '11';
            if($month == 'December') return '12';
        }
        function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        if (!$data['insertuser']){
            $errors['insertuser'] = REQUIRED_FIELD_ERROR;
        }

        if (!$data['surname']){
            $errors['surname'] = REQUIRED_FIELD_ERROR;
        }

        if (!$data['email']) {
            $errors['email'] = REQUIRED_FIELD_ERROR;
        } elseif (strpos($data['email'], '@') !== false) {
            echo "";
        } else $errors['email'] = "Not valid Email";
        if (!$data['country']){
            $errors['country'] = REQUIRED_FIELD_ERROR;
        }
        if (!$data['city']){
            $errors['city'] = REQUIRED_FIELD_ERROR;
        }
        if (!$data['phonenumber']){
            $errors['phonenumber'] = REQUIRED_FIELD_ERROR;
        }
        if (!$data['education']){
            $errors['education'] = REQUIRED_FIELD_ERROR;
        }
        if (!$data['experience']){
            $errors['experience'] = REQUIRED_FIELD_ERROR;
        }

        $_SESSION['insertuser'] = $data['insertuser'];
        $_SESSION['surname'] = $data['surname'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['country'] = $data['country'];
        $_SESSION['city'] = $data['city'];
        $_SESSION['phonenumber'] = $data['phonenumber'];
        $_SESSION['education'] = $data['education'];
        $_SESSION['experience'] = $data['experience'];

        $params = [
            'errors' => $errors,
            'data' => $data
        ];

        if(empty($errors)){
            $info = new database();
            $info->insertprofile($data['insertuser'],$data['surname'],$data['email'],$data['country'],$data['city'],$data['phonenumber'],$data['education'],$data['experience']);
            return $router->renderView('ravi',$params);
        } else return $router->renderView('insertuser',$params);
    }


}