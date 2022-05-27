<?php
    use PHPMailer\PHPMailer\PHPMailer; 
    use PHPMailer\PHPMailer\Exception; 
        
    require 'PHPMailer/src/Exception.php'; 
    require 'PHPMailer/src/PHPMailer.php'; 
    require 'PHPMailer/src/SMTP.php'; 

    $mail = new PHPMailer(true); 
 
    $mail->isSMTP();                      // Set mailer to use SMTP 
    $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
    $mail->SMTPAuth = true;               // Enable SMTP authentication 
    $mail->Username = 'aquiambao061095@gmail.com';   // SMTP username 
    $mail->Password = 'Aljon061095!';   // SMTP password 
    $mail->SMTPSecure = 'tsl';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;                    // TCP port to connect to 
    
    // Sender info 
    $mail->setFrom('aquiambao061095@gmail.com', 'ReLearn'); 
    
    // Add a recipient 
    $mail->addAddress($recipient_email); 
    
    // Set email format to HTML 
    $mail->isHTML(true); 
    
    // Mail subject 
    $mail->Subject = 'Welcome onBoarding ReLearn'; 
    
    // Mail body content 
    $bodyContent = '<p>Join our referral program kindly share your referral code to others!</p>'; 
    $bodyContent .= '<h3><b>ST'. $referral_code .'</b></h3>'; 
    $mail->Body    = $bodyContent; 
    
    // Send email 
    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } else { 
        echo 'Message has been sent.'; 
    } 
?>