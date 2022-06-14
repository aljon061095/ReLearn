<?php
    header("Content-Type:application/json");
    include('config.php');
    require_once("api.php");    

    if (isset($_GET)) {
        $database = new Database();
        $db = $database->getConnection();
        $items = new User($db);
        $stmt = $items->getUsers();
        $itemCount = $stmt->rowCount();
    
        if($itemCount > 0){
            
            $userArr = array();
            $userArr["users"] = array();
            $userArr["itemCount"] = $itemCount;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
                $user = array(
                    "id" => $id,
                    "nickname" => $nickname,
                    "email" => $email,
                    "age" => $age,
                    "gender" => $gender,
                    "referral_code" => $referral_code
                );
                array_push($userArr["users"], $user);
            }
            echo json_encode($userArr);
        }
    }
?>
