<?php
include "account.class.php"; 

class User { 
    private $login; 
    private $password;
    private $account;
    
    
   function __construct($login, $password, $account) {

   		$this->login = $login;
   		$this->password = $password;
   		$this->account = $account;
   } 
} 

?>