<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new mysqli("localhost","root","","testdb");

$result = $db->query("SELECT * FROM tbl_sample");

$data = "";
while($r = $result->fetch_object()) {
    if ($data != "") {$data .= ",";}
    $data .= '{"id":"'  . $r->id . '",';
    $data .= '"code":"'   . $r->code . '",';
    $data .= '"class":"'   . $r->class . '",';
    $data .= '"item_type":"'   . $r->item_type . '",';
    $data .= '"material_desc":"'   . $r->material_desc . '",';
    $data .= '"quantity":"'   . $r->quantity . '",';
    $data .= '"unit":"'   . $r->unit . '",';
    $data .= '"resv":"'   . $r->resv . '",';
    $data .= '"wrh":"'. $r->wrh . '"}'; 
    }
    $result->free();
$data ='{"records":['.$data.']}';
$db->close();
echo($data);
