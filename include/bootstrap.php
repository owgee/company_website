<?php

/**

 * * @author Ephraim Swilla <swillae1@gmail.com>
 * 
 */
require 'define.php';

defined('RT') ? NULL : define('RT', $_SERVER['DOCUMENT_ROOT'] . '/' . ROOT_FOLDER . '');

require(RT . 'include/connection.php');

//require_once (RT . 'new/persistance/database/tables/tables.php');
require(RT . 'include/function.php');
require(RT . 'include/input.php');
require(RT . 'include/sender.php');


$HOME = 'http://' . $_SERVER['HTTP_HOST'] . '/'.ROOT_FOLDER.'new/?pg=';

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
if(isset($_GET['pg']) && $_GET['pg']=='admin') {    include_once 'modules/admin/admin.php';  }

?>