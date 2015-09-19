<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * @author: mizanur rahman
 */



class Account {
    
    public $accountName;
    private $accountNumber;
    const INTEREST_RATE = 7.5;
    protected $accountType;
    var $accountInitialDeposit;
    var $branchName;
    var $nomineeName;
    var $homeAddress;  
    var $mobile;
    
    static $number = 5.5;
    
    // old way of doing constructor
    
    /*
    function Account($accountName = "", $accountNumber = "") {
        $this->accountName = $accountName;
    }
     * 
     */
    
    /**
     * 
     * @param type $accountName
     * @param type $accountNumber
     * @param type $mobile
     */
    function __construct($accountName = "", $accountNumber = "", $mobile = "") {
        $this->accountName = $accountName;
        $this->accountNumber = $accountNumber;
        $this->mobile = $mobile;
    }
    
    
    
    function getAccountName() {
        return $this->accountName;
    }
    
    function setAccountName($name = "") {
        $this->accountName = $name;
    }
    
    public final function getAccountNumber() {
        return "I am account Number";
    }
    
    
    function getTransactionDetails() {
        
    }
    
    static protected function showMe() {
        return "yes i am static";
    }
    
    public function getPrivateName() {
        return $this->accountNumber;
    }
}


class SavingsAccount extends Account{
    
    private $acctType;
    
    public function __construct($accountName = "", $accountNumber, $mobileNumber , $accountType = "") {
        $this->acctType = $accountType;
        //parent::__construct($accountName, $accountNumber, $mobileNumber); // explicit calling
    }
    
    public function getAccountNumber() {
        //parent::getAccountNumber();
        echo " this from savings account";
    }
    
}

//print_r(new SavingsAccount);

//echo Account::showMe();

$mizan = new SavingsAccount("mizan","123456", "0000001", "savings");

echo $mizan->getAccountNumber();

print_r($mizan);

$mizan->accountName = "test";
echo $mizan->getPrivateName();
$mizan->accountType = "checking";




$savings = new Account("Mizan Rahman", 123,123456);
//$savings->accountName = "Mizanur Rahman";
//$savings->accountNumber = "123";
//$savings->accountInitialDeposit = 100000;
//$savings->accountType = "DPS";

echo $savings::INTEREST_RATE;

echo $savings->getAccountName()."<br />";

echo $savings->accountInitialDeposit." is my deposit<br />";

$checking = new Account();
$checking->accountName = "tech masters";
$checking->accountNumber = "9080";

echo $checking->getAccountName()."<br />";

echo $savings->getAccountName()."<br />";


echo Account::showMe();