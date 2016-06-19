<?php

/**

 * * @author Ephraim Swilla <swillae1@gmail.com>
 * 
 */
require_once 'define.php';
session_start();
//defined('RT') ? NULL : define('RT', '/srv/disk1/896128/www/unnett.com/'); 

defined('RT') ? NULL : define('RT', $_SERVER['DOCUMENT_ROOT'] . '/' . ROOT_FOLDER . '');

require_once (RT . 'include/function.php');
require_once (RT . 'include/connection.php');
require_once (RT . 'include/config/tables.php');
require_once (RT . 'include/input.php');
//require_once (RT . 'include/sender.php');

$HOME = 'http://' . $_SERVER['HTTP_HOST'] . '/' . ROOT_FOLDER . '';

//if (isset($_SESSION['id'])) {
//
//    $session_user = business::find_by_id($_SESSION['id']);
//    $ses_user = array_shift($session_user);
//}
$token = DEVICE;

$AJAX = $HOME . "index.php?isajax=" . sha1(md5($token)) . "&";

defined('HOME') ? NULL : define('HOME', $HOME . '');


if (isset($_GET['pg']) && $_GET['pg'] == 'logout') {
    include_once 'modules/login/process/logout.php';
    $_GET['pg'] = '';
}
/**
 * ajax loader
 */
$LOADER = '<p class="m-t-lg" align="center"><i class="fa fa-spinner fa fa-spin fa fa-2x"></i></p>';


if (isset($_GET['isajax'])) {

    if ((isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
        /**
         * @Ajax processing is done in here
         */
	
        if ($_GET['isajax'] == sha1(md5($token))) {
            $ajax_url = input::url();

            if (file_exists($ajax_url)) {
                include $ajax_url;
		include (RT . 'include/route.php');
            } else {
                echo 'Wrong parameters supplied in ajax request';
            }
        } else {
            error_record("Some one try to hack the system", '');
        }
        exit();
    }
}
?>