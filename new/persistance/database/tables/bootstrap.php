<?php

/**

 * * @author Ephraim Swilla <swillae1@gmail.com>
 * 
 */
require_once 'define.php';
define('RT', __DIR__. '/');
require(RT . 'connection.php');
require(RT . 'function.php');
require(RT . 'input.php');
require(RT . 'sender.php');


$HOME = 'http://' . $_SERVER['HTTP_HOST'] . '/';

$AJAX = $HOME . "index.php?isajax=true&";

defined('HOME') ? NULL : define('HOME', $HOME);

//if (isset($_SESSION['id'])) {
//
//    $session_user = user::find_by_id($_SESSION['id']);
//    $ses_user = array_shift($session_user);
//}
/**
 * ajax loader
 */
$LOADER = '<div style="margin:5px auto;width:30px;"><img src="' . $HOME . 'media/ajax-loader.gif" ></div>';

if (isset($_GET['isajax'])) {
   
    if ((isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
        /*
         * Ajax processing is done in here
         * @Note: We don't need head or body contents in here.
         */
        
        $ajax_url = input::url();
        if (file_exists($ajax_url)) {
            include $ajax_url;
        } else {
            echo 'Wrong parameters supplied in ajax request ' . print_r($_GET);
        }
        exit();
    }
    
}
?>