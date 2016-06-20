<?php

/**
 * file Project definition
 *
 *   karibu.com
 *
 *  @author Ephraim Swilla <swillae@yahoo.com>
 *
 *
 * DESC: This define all important parameters used in a system
 */


$environment = ($_SERVER["REMOTE_ADDR"]=='127.0.0.1'|| '::1') ? 'development' : 'production';

defined('ENVIRONMENT') ? NULL : define('ENVIRONMENT', $environment);
/*
 * ---------------------------------------------------------------
 * ERROR REPORTING
 * ---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
if (defined('ENVIRONMENT')) {
    switch (ENVIRONMENT) {

	case 'development':
	    
	    $server = 'localhost';
	    $dbname = 'inets';
	    $username = 'root';
	    $password = 'tabita';
	    $table_prefix = 'inets_';
	    $root_folder = 'inetswebsite/';
	    break;

	case 'testing':

	case 'production':
	   
	    $server = 'pdb7.runhosting.com';
	    $dbname = '896128_inets';
	    $username = '896128_inets';
	    $password = 'tabita2011';
	    $table_prefix = 'inets_';
	    $root_folder = '';
	    break;

	default:
	    exit('The application environment is not set correctly.');
    }
}

/**
 * 
 * --define PROJECT TITLE  >>>>>SHOULD NOT EXCEED 1O CHARACTERS
 * 
 */
defined('TITLE') ? NULL : define('TITLE', 'karibuSMS');



#----------DOCUMENT ROOT-----------------------#

/*
 * 
 * -this define where you put your project inside a pointed directory
 * -use "" if you put in root pointed eg. C:\xampp\htdocs\....(default)
 * 
 * for our case, we put in a folder called engineering thus it is in
 *     C:\xammp\htdocs\engineering
 *   better do like what I did
 */
defined('ROOT_FOLDER') ? NULL : define('ROOT_FOLDER', $root_folder);


#----------DATABASE CONSTANSTS---------------------#

/*
 *
 * --Use this part to define your database variables 
 */


/**
 * --define name of your server
 */
defined('SERVER') ? NULL : define('SERVER', $server);




/**
 * --define database name
 */
defined('DB_NAME') ? NULL : define('DB_NAME', $dbname);




/**
 * --define database username/server name
 */
defined('DB_USERNAME') ? NULL : define('DB_USERNAME', $username);




/**
 * --define database password
 */
defined('DB_PASSWORD') ? NULL : define('DB_PASSWORD', $password);


/**
 * --define database table prefix
 */
defined('TABLE_PREFIX') ? NULL : define('TABLE_PREFIX', $table_prefix);

?>