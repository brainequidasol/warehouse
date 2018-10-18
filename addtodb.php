<?php
require 'connectdb.php';
$data = json_decode(file_get_contents("php://input")); 
$code = $data->code;    
$class = $data->class;
$code = $data->code;    
$class = $data->class;
$code = $data->code;    
$class = $data->class;
$code = $data->code;    
$class = $data->class;
$code = $data->code;    
$class = $data->class;

    
$result = $db->query("INSERT INTO tbl_sample(code,class) values('$code','$class')");

