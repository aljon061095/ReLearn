<?php
    header("Content-Type:application/json");
    include('config.php');
    
    if (isset($_GET['id']) && $_GET['id']!="") {
        $id = $_GET['id'];
        $query = "SELECT * FROM `users` WHERE id=$id";
        $result = mysqli_query($link,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        $userData['id'] = $row['id'];
        $userData['nickname'] = $row['nickname'];
        $userData['email'] = $row['email'];
        $userData['age'] = $row['age'];
        $userData['gender'] = $row['gender'];
        $userData['grade'] = $row['grade'];
        $userData['referral_code'] = $row['referral_code'];
        $userData['password'] = $row['password'];
        
        $response["status"] = "true";
        $response["message"] = "User";
        $response["users"] = $userData;
        
    } else {
        $response["status"] = "false";
        $response["message"] = "No user(s) found!";
    }
    echo json_encode($response); 
    exit;
 
?>