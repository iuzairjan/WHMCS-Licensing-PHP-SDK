<?php

require_once 'api.php';

// Interpret response
switch ($results['status']) {
    case "Active":
        // get new local key and save it somewhere
        $localkeydata = $results['localkey'];
        // License is valid, run the application
        
    
  // myphpcode 
     
     phpinfo();
     
     
     
        break;
    case "Invalid":
        die("License key is Invalid");
        break;
		
	case "Expired":
        die("License key is Expired");
        break;
    case "Suspended":
        die("License key is Suspended");
        break;
    default:
        die("Invalid Response");
        break;
		
}








