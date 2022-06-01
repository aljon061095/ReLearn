
<?php require_once('config.php') ?>

<?php
    if (isset($_POST)) {
        $nickname = $_POST['nickname'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $grade = $_POST['grade'];
        $referral_code = $_POST['referral_code'];
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