<?php
include("xmlapi.php");        //XMLAPI cpanel client class


$ip = "127.0.0.1";            // should be server IP address or 127.0.0.1 if local server
$account = "username";        // cpanel user account name
$passwd ="password";          // cpanel user password
$port =2083;                  // cpanel secure authentication port unsecure port# 2082
$email_domain ="example.com";
$email_user ="john";
$email_pass ="johnspassword";
$email_quota = 0;             // 0 is no quota, or set a number in mb

$xmlapi = new xmlapi($ip);
$xmlapi->set_port($port);     //set port number.
$xmlapi->password_auth($account, $passwd);
$xmlapi->set_debug(0);        //output to error file  set to 1 to see error_log.

$call = array(domain=>$email_domain, email=>$email_user, password=>$email_pass, quota=>$email_quota);

$result = $xmlapi->api2_query($account, "Email", "addpop", $call );

print_r($result);  