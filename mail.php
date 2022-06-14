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
    $mail->Password = 'jmrttbcrjqoohjqh';   // SMTP password 
    $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
    $mail->Port = 587;                    // TCP port to connect to 
    
    // Sender info 
    $mail->setFrom('aquiambao061095@gmail.com', 'ReLearn'); 
    
    // Add a recipient 
    $mail->addAddress($recipient_email); 
    //$mail->addAddress('aljonquiambao.mcc@gmail.com'); 
    
    // Set email format to HTML 
    $mail->isHTML(true); 
    
    // Mail subject 
    $mail->Subject = 'Welcome onBoarding ReLearn'; 
    
    // Mail body content 
    $bodyContent = '<div style="border: 2px solid blue; border-radius: 5px;width: 50%;
    text-align: center;"><h2>Welcome onBoarding ReLearn!</h2><p>Join our referral program kindly share your referral code to others!</p>'; 
    $bodyContent .= '<h3><b>ST'. $referral_code .'</b></h3></div>'; 
    $mail->Body    = $bodyContent; 
    
    // Send email 
    if(!$mail->send()) { 
        echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    } else { 
        echo 'Message has been sent.'; 
    } 
?>