<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of form
 *
 * @author user
 */
class form {

    public $database_table;
    public $title='';
    public $column_exclude = array();
    public $submit_url;
    public $submit_method = 'GET';
    private $custom_input;
    private $custom_select;

    public function add_input($array) {
	$input = '<div class="form-group"><input ';
	$input_value = '';
	if (!empty($array)) {
	    foreach ($array as $key => $value) {
		$input_value.=' ' . $key . '="' . $value . '"';
	    }
	    $input.=$input_value . ' /></div>';
	}
	$this->custom_input[] = $input;
    }

     public function add_drop_down($array,$field_name='') {
	$input = '<div class="form-group">'.$field_name.' <select name="'.$field_name.'"><option></option> ';
	$input_value = '';
	if (!empty($array)) {
	    foreach ($array as $key => $value) {
		$input_value.=' <option value="' . $key . '">' . $value . '</option>';
	    }
	    $input.=$input_value . '<option name="other">Other</option> </select></div>';
	}
	$this->custom_select[] = $input;
    }
    private function fetch_table() {
	global $db;
	return $db->fetch_object("SHOW COLUMNS IN `".TABLE_PREFIX."$this->database_table` ");
    }

    public function load_form() {
	$form = '<section class="panel"><header class="panel-heading">
                             '.$this->title.'
                          </header>
                          <div class="panel-body">
                              <div class="form">
			      <form class="form-horizontal " id="' . $this->database_table . '" action="' . $this->submit_url . '" method="' . $this->submit_method . '" >';
	if (!empty($this->custom_select)) {
	    foreach ($this->custom_select as $inputs) {
		$form.=$inputs;
	    }
	}
	foreach ($this->fetch_table() as $table) {
	    
	    if (!in_array($table->Field, $this->column_exclude)) {
		$label_name = str_ireplace($this->database_table.'_', ' ', $table->Field);
		$form.='<div class="form-group">'
			. '<label class="control-label">' . $label_name . '</label>'
			. '<div class="col-lg-9">' . $this->get_input_type($table) . '</div></div>';
	    }
	}
	if (!empty($this->custom_input)) {
	    foreach ($this->custom_input as $inputs) {
		$form.=$inputs;
	    }
	}
	$form.='</form></div></div></section>';
	echo $form;
    }

    private function get_input_type($table) {
	$placeholder = str_ireplace($this->database_table.'_', 'Enter ', $table->Field);
	if (preg_match('/int/', $table->Type)) {
	    $form = '<input type="number" name="' . $table->Field . '" placeholder="' . $placeholder. '" id="' . $table->Field . '" class=""/>';
	} else if (preg_match('/text/', $table->Type)) {
	    $form = '<textarea class="form-control" name="' . $table->Field . '" id="' . $table->Field . '"></textarea>';
	} elseif (preg_match('/time/', $table->Type)) {
	    $form = '<input type="date" name="' . $table->Field . '" id="' . $table->Field . '" id="datepicker" />';
	} else {
	    $form = '<input class="form-control" type="text" name="' . $table->Field . '" placeholder="' . $placeholder . '" id="' . $table->Field . '" class=""/>';
	}
	return $form;
    }

}

