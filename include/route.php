<?php


/**
 * 
 *used to create a final root if a method is set
 */

$method=  $input->get_post('method'); 
if(!empty($method)){
    // we need to get a class and call a method
    $class_name=  empty($input->get_post('process')) ? $input->get_post('file'): $input->get_post('process');
    $obj=new $class_name();
    $obj->$method();
}
?>