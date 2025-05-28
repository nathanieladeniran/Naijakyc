<?php

    class RegController extends RegModel{

        public function insertAccount($clientNo,$clientname,$clientemail,$clientphone,$contactfname,$contactlname,$acctname,$clientstatus,$clientcac){

            $this->createAccount($clientNo,$clientname,$clientemail,$clientphone,$contactfname,$contactlname,$acctname,$clientstatus,$clientcac);            
           
        }

        //show newly regisred client ID
        public function setupFinalize($clientemail,$cacImg,$clientcac,$conatctfullname,$acctPass,$acctType,$acctStatus){
            
            $this->completeSetup($clientemail,$cacImg,$clientcac,$conatctfullname,$acctPass,$acctType,$acctStatus);
            
        }
        
    }