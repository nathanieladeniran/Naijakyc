<?php

    class EmailController extends EmailModel{

        public function sendMail($useremail, $userfname, $message, $subject){

            $this->setEmail($useremail, $userfname, $message, $subject);
        }
    }