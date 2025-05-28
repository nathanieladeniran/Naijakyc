<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include ('autoLoader.inc.php');
   

    $clientemail = filter_var($_POST['companyemail']);
    $cacImg = $_FILES['cacImg']['name'];
    $clientcac = filter_var($_POST['cacno']);
    $conatctfullname = filter_var($_POST['contactperson']);
    $acctPass = filter_var($_POST['password']);
    $acctPass = password_hash($acctPass,PASSWORD_BCRYPT);
    $acctType = filter_var($_POST['acctType']);
    $acctStatus = filter_var($_POST['acctStatus']);
    
    
    
    $newAcct = new RegController();
    $newAcct->setupFinalize($clientemail,$cacImg,$clientcac,$conatctfullname,$acctPass,$acctType,$acctStatus);
    

    