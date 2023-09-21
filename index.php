<?php

require_once './vendor/autoload.php';
require_once './DB.php';
require_once './Query.php';

$db = new DB();
$query = new Query();

$data = new stdClass();
$data->success = false;

if(isset($_POST["action"])){

    if(!strcmp($_POST["action"], "get_user") AND isset($_POST["name"], $_POST["pw"])){
        $data->res = $db->select($query::checkUser($_POST["name"], $_POST["pw"]));
        $data->success = true;
    }

    if(!strcmp($_POST["action"], "insert_pic") AND isset($_POST["userID"], $_POST["image"])){
        $data->res =$db->insert($query::insertData($_POST["userID"], $_POST["image"]));
        $data->success = true;
    }

    header('Content-Type: application/json');
    print json_encode($data);


}else{
    require_once './website/index.php';
}

