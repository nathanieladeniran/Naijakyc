<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require_once  ('../rapmailer/vendor/phpmailer/src/Exception.php');
    require_once ('../rapmailer/vendor/phpmailer/src/PHPMailer.php');
    require_once ('../rapmailer/vendor/phpmailer/src/SMTP.php');


    class EmailModel extends DataConnect{

        

        protected function setEmail($useremail, $userfname, $message, $subject){

           
            $mail = new PHPMailer(true);

            try {
                // Server settings for self signed security certificate, which might be removed when finally launched
                $mail->SMTPOptions = array(
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                    );
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
                //Offline mail test
                $mail->isSMTP();
                $mail->Mailer = "smtp";            
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;

                $mail->Username = 'nathaniel.adeniran@globalclique.net'; // YOUR gmail email
                $mail->Password = 'Quivaprogrammer@#3980'; // YOUR gmail password

                //Online Mail
                /* $mail->isSMTP();
                $mail->Mailer = "smtp";            
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Host = 'smtppro.zoho.com';
                $mail->Port = 587;
                $mail->Username = 'customer@dettamart.com'; //user login email 
                $mail->Password = 'Customer#001'; //email passowrd */
                
                
               
                
                // Sender and recipient settings
                $mail->setFrom('nathaniel.adeniran@globalclique.net', 'Nigeria KYC');      //sender      
                $mail->addReplyTo('nathaniel.adeniran@globalclique.net', 'Nigeria KYC'); // to set the reply to senders name  email
                $mail->addAddress($useremail, $userfname);//receiver email and name

                //CC and BCC
               // $mail->addCC("cc@example.com");
               // $mail->addBCC("bcc@example.com");

                // Setting the email content
                $mail->IsHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;
                $mail->AltBody = $message;
                $mail->WordWrap = 50;

                if($mail->send())
                echo "1";
                else "0";
            } catch (Exception $e) {
                //$e->getMessage();
                echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
  ?>