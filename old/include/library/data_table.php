<?php

/**
 * Description of data_table
 *
 * @author user
 */
class data_table {

    //put your code here
    private $table_name;
    public $table_fields;
    public $table_title;
    private $header_titles = array();
    private $fetch_where = array();
    private $actions = array();
    private $js_fxn;
    public $datatable = true;
    private $view;
    private $delete;
    private $sms;

    public function set_table_name($db_table) {
        $this->table_name = $db_table;
    }

    public function set_table_fetch_where($array){
        $this->fetch_where=$array;
    }

    public function set_header_titles($array) {
        $this->header_titles=$array;
    }
    private function fetch_table() {
        $name = $this->table_name;
        return $this->table_fields=empty($this->fetch_where) ? $name::find_all() : $name::find_where($this->fetch_where);
    }

    private function table_header() {
        $total_field = count($this->header_titles);
        $heading=  $this->table_title!=''? $this->table_title: $this->table_name;
        $header = '<header class="panel-heading font-bold"> '.$this->table_name.'</header>
            '
        . '<table class="table table-striped b-t b-light text-sm" id="' . $this->table_name . '">
		    <thead>
			<tr>';
        for ($i = 0; $i < $total_field; $i++) {
            $header.='<th class="th-sortable active" data-toggle="class">' . $this->header_titles[$i] . '</th>';
        }
        $header .= '<th width="30">Action</th></tr></thead><tbody>';
        return $header;
    }

    private function table_footer() {
        $footer = ' </tbody> 
		</table>';
        return $footer;
    }

    public function display() {
        $table_info = $this->fetch_table();
        $table_body = $this->table_header();
        foreach ($table_info as $table) {
            $table_body .= '<tr id="subscriber' . $table->id . '">
    			   ' . $this->table_td($table) . '    
    			</tr> ';
        }
        $table_body.=$this->table_footer() . $this->js_fxn();
        echo $table_body;
    }

    private function action($id) {
        $action = '';
        if (in_array('delete', $this->actions)) {
            $click_action = $this->delete != '' ?
            'onclick="$(this).attr(\'href\', this.href + \'&id=\'+ ' . $id . ');"' :
            'onclick="delete_id(' . $id . ');';
            $action = '<a ' . $this->delete . ' class="active" data-toggle="class"  
                ' . $click_action . '>	 
                <i class="fa fa-trash-o text-success text-active"></i>
                <i class="fa fa-times text-danger text"></i></a>';
        }
        if (in_array('sms', $this->actions)) {
            $click_action = $this->sms != '' ?
            'onclick="$(this).attr(\'href\', this.href + \'&id=\'+ ' . $id . ');"' : 'onclick="sms_id(' . $id . ');';
            $action.='<a ' . $this->sms . ' class="active" data-toggle="class"  
                ' . $click_action . '>	 
                <i class="fa fa-envelope text-success text-active"></i>
                <i class="fa fa-envelope-o text-danger text"></i></a>';
        }
        if (in_array('view', $this->actions)) {
            $click_action = $this->view != '' ?
            'onclick="$(this).attr(\'href\', this.href + \'&id=\'+ ' . $id . ');"' :
            'onclick="view_id(' . $id . ');"';
            $action.='<a ' . $this->view . ' class="active" data-toggle="class"  
                ' . $click_action . '>	 
                <i class="fa fa-eye text-success text-active"></i>
                <i class="fa fa-eye-slash text-danger text"></i></a>';
        }
        $actions = '<td>' . $action . '</td>';
        return $actions;
    }

    private function table_td($table) {
        $header_arrays = $this->header_titles;
        $row ='';
        foreach ($header_arrays as $key) {
            if (in_array($key, array_keys((array) $table))) {
                $row .= ' <td>' . $table->$key . '</td>';
            }
            if ($key == '') {
                $row .= ' <td></td>';
            }
        }
        $row.=$this->action($table->id);
        return $row;
    }

    private function js_fxn() {
        if ($this->datatable == TRUE) {
            if ($this->load(css_media('table')) != TRUE) {
                css_media('table');
            }
            if ($this->load(js_media('datatables/jquery.dataTables.min')) != TRUE) {
                js_media('datatables/jquery.dataTables.min');
            }
            $fxn = '<script type="text/javascript"> mydatatable = function() {
                $("#' . $this->table_name . '").dataTable();
                };$(document).ready(mydatatable);</script>';
        } else {
            $fxn = '';
        }
        return $fxn . $this->js_fxn;
    }

    public function action_delete($param, $return_div_id, $dialog = FALSE) {
        return $this->action_js('delete', $param, $return_div_id, $dialog);
    }

    public function action_sms($param, $return_div_id, $dialog = FALSE) {
        return $this->action_js('sms', $param, $return_div_id, $dialog);
    }

    public function action_view($param, $return_div_id, $dialog = FALSE) {

        return $this->action_js('view', $param, $return_div_id, $dialog);
    }

    private function get_dialog($param) {
        global $AJAX;
        return 'data-toggle="ajaxModal"  href="' . $AJAX . '&' . http_build_query($param) . '"';
    }

    private function action_js($view_type, $param, $return_div_id, $dialog) {
        array_push($this->actions, $view_type);
        if ($dialog == TRUE) {
            $this->$view_type = $this->get_dialog($param);
        } else {
            $this->js_fxn .= '<script type="text/javascript">' . $view_type . '_id = function(a) {
        $("#' . $return_div_id . '").html(LOADER);
         var result={};
       $.extend(result, {id: a }, ' . json_encode($param) . ');
        $.get(url,result, function(data) {
            $("#' . $return_div_id . '").html(data);
        });
    };</script>';
        }
    }

    private function load($what) {

        static $loaded = array();

        if (!isset($loaded[$what])) {
            // Load..
            // Mark as loaded
            $loaded[$what] = true;
        }
    }

}
