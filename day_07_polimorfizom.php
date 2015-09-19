<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_POST['selected_payment'] == "Bkash") {    
    getBkashTokenID();
    displayBkashForm();   
    verifyBkashEntry();
} else if($_POST['selected_payment'] == "Visa") {    
    getVisaTokenID();
    displayVisaForm();    
    verifyVisaEntry();
    showVisaSuccess();
    showVisaFailure();
    showVisaOTPForm();
    showVisaThankYouPage();
}


//

if($_POST['selected_payment'] == "Bkash") { 
    showBkashSuccess();
} else if($_POST['selected_payment'] == "Visa") { 
    $bkash = new Bkash();
    $bkash->showVisaSuccess();
}