<?php
    header("Content-Type:application/json");
    include('config.php');
    require_once("api.php");    

    if (isset($_GET['id']) && $_GET['id']!="") {
        $id = $_GET['id'];

        $database = new Database();
        $db = $database->getConnection();
        $item = new User($db);
        $item->id = isset($_GET['id']) ? $_GET['id'] : die();

        $item->getSingleUser();
        if($item->nickname != null){
            $user_arr = array(
                "id" =>  $id,
                "nickname" => $item->nickname,
                "email" => $item->email,
                "age" => $item->age,
                "gender" => $item->gender,
                "referral_code" => $item->referral_code
            );
          
            http_response_code(200);
            echo json_encode($user_arr);
        }
    }
?>