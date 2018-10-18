<?php
$db = new mysqli("localhost","root","","testdb");
if($db->connect_error){
    echo "Error";
}
