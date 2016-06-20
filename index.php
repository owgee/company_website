<?php 

/**
*   karibu.com
 * * @author Ephraim Swilla <swillae1@gmail.com>
 */


error_reporting(E_ALL);
ini_set('display_errors', '1');

//ob_start();
include('include/bootstrap.php');
//ob_start('sanitize_output');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie ie9" lang="en-US"> <!--<![endif]-->

<html lang="en" <?php if(empty($_GET['pg']) && isset($ses_user)){?> class="app"<?php }?>>

<?php include('head.php'); ?>

<?php include('body.php');    
 //ob_end_flush()
?>
</html>