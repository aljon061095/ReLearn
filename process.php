
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
        $query_run = mysqli_query($link, $query);

        if ($query_run) {
            $recipient = $email;
            $referral_code = $referral_code;
        
            include "mail.php";
        }
    }
?>