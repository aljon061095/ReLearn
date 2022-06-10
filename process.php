
<?php require_once('config.php') ?>

<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
    header("Content-Type: application/json; charset=UTF-8");

    $rest_json = file_get_contents("php://input");
    $_POST = json_decode($rest_json, true);

    // print_r($_POST['nickname']);
?>
<?php
    if (isset($_POST)) {
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $grade = $_POST['grade'];
        $referral_code = $_POST['referral'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users(nickname, email, age, gender, grade, referral_code, password) 
            VALUES ('$nickname', '$email', '$age', '$gender', '$grade', '$referral_code', '$password')";
            
        $database = new Database();
        $db = $database->getConnection();
        $stmt = $db->prepare($query);
        
        if ($stmt->execute()) {
            $recipient_email = $email;
            $referral_code = $referral_code;
        
            include "mail.php";
        }
    }
?>