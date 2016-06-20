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


function contact_us() {
    global $headers;
    global $content;
    global $email;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'This email ' . $email . ' is not valid';
        exit();
    }
    $message = "
<ul>
    <li>From Email:  " . $email . "</li>
    <li>Content:  " . $content . "</li>
<li>Time: <strong>" . date('D, d-M-Y  H:i:s', time() + 60 * 60) . "tz time</strong></li> 
</ul>
";

    $subject = $email . " Contact from us";
    mail('inetscompany@gmail.com,ynasson@gmail.com,swillae@yahoo.com', $subject, $message, $headers);
    //send email to our client who subscribe
    mail($email, "Thanks for contacting Inets", "Your message is taken. We will come to you soon. Thanks", $headers);
    //write data in a file also
    //$filename = RT . 'media/doc/feedback/feedback.html';
    $filename = 'media/docs/contact_us.html';
    write_file($filename, $message, $mode = 'a+');

    $success_msg = '<div class="alert alert-success"><i class="fa fa-check"></i> <button type="button" class="close" data-dismiss="alert">×</button>
                          <i class="fa fa-ok-sign"></i><strong>Thanks for contacting us. We will check you soon in your email..!</strong> </div>';

    echo $success_msg ;
}

if (!empty($_GET)) {

    $name = $input->_clean_input_data($_GET['name']);
    $email = $input->_clean_input_data($_GET['email']);
    $content = $input->_clean_input_data($_GET['content']);
    contact_us();
}
?>

