<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include ('autoLoader.inc.php');
   
    
    $fullname = filter_var($_POST['fullname']);
    $ouremail = 'nathanieladeniran@gmail.com';
    $clientemail = filter_var($_POST['email']);
    $clientphone = filter_var($_POST['phone']);
    $subject = 'Enquiry';
    $enq = filter_var($_POST['enq']);
    $message = '<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <style type="text/css">
    a[x-apple-data-detectors] {color: inherit !important;}
    </style>
    
    </head>
    <body style="margin: 0; padding: 0;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: 20px 0 30px 0;">
    
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">                        
                            <tr>
                                <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif;">
                                            <p><h2 style="margin: 0;">Customer Enquiry</h2></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                                            Message
                                        </td>
                                        <td>'.$enq.'</td>
                                    </tr>   
                                    <tr>
                                        <td> Fullname</td>
                                        <td>'.$fullname.'</td>
                                    </tr>
                                    <tr>
                                        <td> Email</td>
                                        <td>'.$clientemail.'</td>
                                    </tr>
                                    <tr>
                                        <td> Phone</td>
                                        <td>'.$clientphone.'</td>
                                    </tr>
                                    </table>
                                </td>
                                </tr>
                                </table>
                            </td>
                            </tr>
                            
                            
                            </td>
                        </tr>
                    </table>
    
                </td>
            </tr>
        </table>
    </body>
    </html>';
    
    $mail = new EmailController();
    $mail->sendMail($ouremail,$fullname,$message,$subject);
    

    