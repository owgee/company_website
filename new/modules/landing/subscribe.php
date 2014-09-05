<?php

/**
 *   karibu.com
 * * @author Ephraim Swilla <swillae1@gmail.com>
 */
$headers = 'From: Inets Company Limited <info@inetstz.com>' . "\r\n";
//  $headers .= "Reply-To: {$from}\n";
// $headers .= "Cc: {$to}\n";
// $headers .= "Bcc: {$to}\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1";


function subscribe() {
    global $headers;
    global $db;
    global $email;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'This email ' . $email . ' is not valid';
        exit();
    }
//    
//    $data=array(
//      'email'=>$email  
//    );
//    $db->insert('mailing_list',$data);
    $message = "
<ul>
    <li>From Email:  " . $email . "</li>
<li>Time: <strong>" . date('D, d-M-Y  H:i:s', time() + 60 * 60) . "tz time</strong></li> 
</ul>
";

    $subject = $email . " subscribe to our news latter";
    mail('inetscompany@gmail.com,ynasson@gmail.com,swillae@yahoo.com', $subject, $message, $headers);
    //send email to our client who subscribe
    
    mail($email, "Thanks subscribing to our news latter", "Hi, thanks for subscribing to our news latter. You will be the first to be informed for our services", $headers);
    //write data in a file also
    //$filename = RT . 'media/doc/feedback/feedback.html';
    $filename = 'media/docs/contact_us.html';
    write_file($filename, $message, $mode = 'a+');

    $success_msg = '<div class="alert alert-success"><i class="fa fa-check"></i> <button type="button" class="close" data-dismiss="alert">×</button>
                          <i class="fa fa-ok-sign"></i><strong>Thanks your information is successful taken</strong> </div>';

    echo $success_msg ;
}

if (!empty($_GET)) {
    $email =$_GET['subscribe_email'];
    subscribe();
    exit();
}
?>

