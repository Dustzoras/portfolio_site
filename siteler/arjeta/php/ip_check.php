<?php 

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}


	if($ip != "95.173.229.8" and $ip != "10.10.2.48" and $ip !="10.10.2.60" and $ip !="192.168.20.20"  and $ip !="192.168.1.127" and $ip !="10.10.2.88" and $ip !="10.10.2.102" and $ip !="192.168.1.143" and $ip !="192.168.1.136" and $ip !="192.168.198.11" and $ip !="192.168.1.105" and $ip !="192.168.1.102" and $ip !="192.168.1.133"){ 
		echo "* IP Address : ".$ip; exit(); 
	}

 ?>