<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    include ('autoLoader.inc.php');
   
    
    $clientNo = filter_var($_POST['cacno']);
    $clientname = filter_var($_POST['companyname']);
    $clientemail = filter_var($_POST['companyemail']);
    $clientphone = filter_var($_POST['companyphone']);
    $clientcac = filter_var($_POST['cacno']);
    $contactfname = filter_var($_POST['contactfname']);
    $contactlname = filter_var($_POST['contactlname']);
    $acctname = filter_var($_POST['acctname']);
    $clientstatus = 'Pending';

    
    $newAcct = new RegController();
    $newAcct->insertAccount($clientNo,$clientname,$clientemail,$clientphone,$contactfname,$contactlname,$acctname,$clientstatus,$clientcac);
    

    