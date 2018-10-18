<?php
require 'connectdb.php';
$data = json_decode(file_get_contents("php://input"));     
$id = $data->id;
$result = $db->query("DELETE FROM tbl_sample WHERE id ='$id'");
if($result)
return true;
return false; 