<?php
    
    class RegModel extends DataConnect{

        //Creating Account
        protected function createAccount($clientNo,$clientname,$clientemail,$clientphone,$contactfname,$contactlname,$acctname,$clientstatus,$clientcac){
            global $resp;
            try{
                $getsql = "SELECT * FROM client_table WHERE clientEmail= ? ";
                $getstmt = $this->connect()->prepare($getsql);
                $getstmt->execute([$clientemail]);
                    if($getstmt->rowCount() > 0){
                        echo 'This Account Already Exist, Please Try With New Entry';
                    }
                    else{
                        $setClient = "INSERT INTO client_table (clientNo,clientCompany, clientEmail,clientPhone,contactFname,contactLname,clientAcct,clientStatus,clientCAC) 
                        VALUES (?,?,?,?,?,?,?,?,?) ";
                        $setStmt = $this->connect()->prepare($setClient);
                        $runReq = $setStmt->execute([$clientNo,$clientname,$clientemail,$clientphone,$contactfname,$contactlname,$acctname,$clientstatus,$clientcac]);
                        if($runReq){
                           echo 'Success';
                           $message ='<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
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
                                                    <td align="center" bgcolor="#187CC9" style="padding: 20px 0 10px 0;">
                                                        <img src="https://nigeriakyc.com/img/logo.png" alt="logo" width="200px" style="display: block;" />
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                                            <tr>
                                                                <td style="color: #153643; font-family: Arial, sans-serif;">
                                                                    <p><h2 style="margin: 0;">Welcome Onboard</h2></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                                                                    <p style="margin: 0;">Thank you for signing up on our platform. We are excited to have you here as our Client. 
                                                                    We promise you a smooth ride on our platform as well as your data security.
                                                                    <p style="margin: 0;">To complete your Profile and gain access to all 
                                                                    functions, simply <a href="https://nigeriakyc.com/activateme?email='.$clientemail.'&cac='.$clientNo.'&contactlname='.$contactlname.'&contactfname='.$contactfname.'">click here</a>
                                                                    to complete your profile.</p>
                                                                    <p style="margin: 0;">If you are unable to open this link, please copy this link 
                                                                    <strong>https://nigeriakyc.com/activateme?email='.$clientemail.'&cac='.$clientNo.'&contactlname='.$contactlname.'&contactfname='.$contactfname.'"</strong> 
                                                                    and paste the URL below into your browser to enable you complete your registration.</p>
                                                                    <p style="margin: 0;">Need help or have questions? Please contact us at <strong>help@nigeriakyc.com.</strong></p>
                                                                    <p style="float:right;"><i>Nigeria KYC Team</i></p>
                                                                </td>
                                                            </tr>   
                                                            <tr>
                                                            <td>
                                                            
                                                            </td>
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
                            $mail->sendMail($clientemail,$clientname,$message,'Welcome Email');
                        }
                    }
            }catch(PDOException $ex){
                $ex->getMessage();
                print_r($setStmt->errorInfo()); 
            }        
        }

        /**Get newly reg company ID */
        protected function getId($clientEmail){
            try{
                $getsql = "SELECT clientId FROM client_table WHERE clientEmail= ? ";
                $getstmt = $this->connect()->prepare($getsql);
                $getstmt->execute([$clientEmail]);
                $result = $getstmt->fetchAll();
                if($getstmt->rowCount() > 0){              
                    return  $result;
                   
                }   

            }catch(PDOException $ex){
                $ex->getMessage();
                print_r($setStmt->errorInfo()); 
            }  
        }

        /**Upload new Logo */
        protected function completeSetup($clientemail,$cacImg,$clientcac,$conatctfullname,$acctPass,$acctType,$acctStatus){
            global $upd;
            try{
                $getsql = "SELECT * FROM client_table WHERE clientEmail= ? AND clientStatus='Active' ";
                $getstmt = $this->connect()->prepare($getsql);
                $getstmt->execute([$clientemail]);
                if($getstmt->rowCount() > 0){
                        echo 'This Account is already Activated';
                }else{
                //$docDirPath = "images/clientlogo/"; //online/production Directory
                    $docDirPath = "certs/documents"; //Local/dev Directory
                    $docFileName = basename($cacImg); 
                    $docUploadPath = $docDirPath . $docFileName; 
                    $docFileType = pathinfo($docUploadPath, PATHINFO_EXTENSION); 
                    
                    $allowTypes = array('jpg','png','jpeg', 'pdf'); 
                    if(in_array($docFileType, $allowTypes)){                 
                        
                        $docImg=$docDirPath.time().'-'.$_FILES['cacImg']['name']; 
                        move_uploaded_file($_FILES["cacImg"]["tmp_name"], '../../'.$docDirPath.time().'-'.$_FILES["cacImg"]["name"]); 
                        $clId = $this->getId($clientemail);      
                        foreach($clId as $c){$clientid = $c['clientId'];}
                        $uploadLogo = "UPDATE client_table SET cacCert='$docImg', clientStatus='Active' WHERE clientEmail= ? AND clientCAC = ?";
                        $uploadStmt = $this->connect()->prepare($uploadLogo);
                        $uploadRes = $uploadStmt->execute([$clientemail,$clientcac]);
                        
                        if($uploadRes){
                            //$upd = "uploaded"; return $upd;
                            $setClient = "INSERT INTO account_table (acctFname, acctCompId,acctEmail,acctPassword,acctType,acctStatus) 
                            VALUES (?,?,?,?,?,?) ";
                            $setStmt = $this->connect()->prepare($setClient);
                            $runReq = $setStmt->execute([$conatctfullname, $clientid, $clientemail, $acctPass, $acctType, $acctStatus]);
                            if($runReq){
                            echo 'Success';
                            }
                        }else{  $upd = "Error uploading image"; return $upd;}
                    
                    }else{
                        $upd = "Sorry, only JPG, JPEG, PNG, files are allowed to upload."; return $upd;
                    }
                }
            }catch(PDOException $ex){
                $ex->getMessage();
                print_r($uploadStmt->errorInfo()); 
            }
        }


       
    }

    
