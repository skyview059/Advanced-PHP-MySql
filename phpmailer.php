<?php

	$headers 	 = "MIME-Version: 1.0" . "\r\n";
	$headers 	.= "From: ".$com_name."<".$admin_email.">" . "\r\n";
	$headers 	.= "Bcc: <".$admin_email.">" . "\r\n";
	$headers 	.= "Reply-To: <".$admin_email.">" . "\r\n";
	$headers 	.= "Return-Path: <".$admin_email.">" . "\r\n";
	$headers 	.= 'X-Mailer: PHP/' . phpversion() . "\r\n";
	$headers 	.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
