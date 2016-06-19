<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of inets
 *
 * @author Ephraim Swilla
 */
class Inets {
    /**
     *
     * @var instance of class Input 
     */
    public $input;
    /**
     *
     * @var instance of class dbpdo 
     */
    public $db;
	    
    function __construct() {
	global $input;
	$this->input=$input;
	$this->db=new dbpdo();
    }
}
