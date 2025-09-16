<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        

        .success-message {
            display: none; /* Hide the success message by default */
            background-color: white;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        @-webkit-keyframes gloww {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px yellow, 0 0 40px yellow, 0 0 50px yellow, 0 0 60px yellow, 0 0 70px yellow;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px yellow, 0 0 40px yellow, 0 0 50px yellow, 0 0 60px yellow, 0 0 70px yellow, 0 0 80px yellow;
  }
}


    </style>
</head>
<body>

<?php
include('db_connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $email= $_POST['u_email'];
    $age= $_POST['age'];
    $contact= $_POST['contact'];
    $locat= $_POST['location'];
    $blood_type= $_POST['blood_type'];
    $lastdonate= $_POST['datee'];
    $donate_message= $_POST['donationMessage'];




    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug =false;                  //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nirubhandari04@gmail.com';                     //SMTP username
        $mail->Password   = 'yqgj nffp pxsl qbus';                               //SMTP password
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
        $mail->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        // $mail->setFrom('santoshbist69@gmail.com', 'Mailer');
        $mail->setFrom($email, $username);
        $mail->addAddress('nirubhandari04@gmail.com', 'Niru Bhandari');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($email, $username);
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Message has been sent';
        $mail->Body    = "new donor";
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
       // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}:$e->get_message()";
    } 
    
    

    //Check if the selected date is not in the future
    if(strtotime($lastdonate)<=strtotime(date('Y-m-d'))){ 


  
 //database connection
 $sql = "INSERT INTO doner_table (username, email, age, contact, location, blood_type, last_donate, donate_message)
 VALUES ('$username', '$email', '$age', '$contact', '$locat', '$blood_type', '$lastdonate','$donate_message')";

 

if ($conn->query($sql) === TRUE) {

     
//echo "Data inserted successfully!";
echo "";    
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{
    echo "Invalid date input. Please select a date upto the current date.";
}

// Close the database connection
$conn->close();
}
?>

            
        
<div id="success-message">
    <h1 class="gloww" style="color: #fff; font-size: 70px; text-align: center;animation: glow 1s ease-in-out infinite alternate; margin-top: 15%;">THANK YOU FOR DONATING!!</h1>
        <h2 style="margin-left: 39%; font-weight: bold;">Go back to home page <a  href="index.php">HOME</a></h2>
</div>





</body>
</html>
