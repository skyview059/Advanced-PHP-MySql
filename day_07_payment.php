<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Payment {            
    public  function capture();
    
    public  function log();
    
    public  function showSuccess();
    
    public  function showFailure();
    
}


interface SecurityInterface {
    public function encrypt();
    public function decrypt();
    
  
}

class bkash  implements Payment, SecurityInterface {
    
    
  public function capture() {
      
      // go to bkash api and get the payment
  }
  
  public function showSuccess() {
      
  }
  
  public function showFailure() {
      
  }
  
  public function log() {
      
  }
  
  public function encrypt() {
      
  }
  
  public function decrypt() {
      
  }
} 

class visa  implements Payment, SecurityInterface{
    
    
  public function capture() {
      
      // go to bkash api and get the payment
  }
  
  public function showSuccess() {
      
  }
  
  public function showFailure() {
      
  }
  
  public function log() {
      
  }
  
  public function encrypt() {
      
  }
  
  public function decrypt() {
      
  }
}


class mastercard  implements Payment, SecurityInterface {
    
    
  public function capture() {
      
      // go to bkash api and get the payment
  }
  
  public function showSuccess() {
      
  }
  
  public function showFailure() {
      
  }
  
  public function log() {
      
  }
  
  public function encrypt() {
      
  }
  
  public function decrypt() {
      
  }
}

function showSuccess(Bkash $payment) {
    $payment->showSuccess();
}

function showSuccessVisa(Visa $payment) {
    $payment->showSuccess();
}


function showSuccessMastercard(mastercard $payment) {
    $payment->showSuccess();
}


$payment = new $_POST['payment_type'];
showSuccess($payment);
