<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: PUT,GET POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization, Accept, X-Requested-With, X-xsrf-token");
header("Content-type: application/json: charset=utf-8");

include "config.php"
$data = array();

$query = mysqli_query($kon, "DELETE FROM tbl_mahasiswa WHERE kd='$_POS[id]'");



if($query){
    $result = json_encode(array('success'=>true, 'result'=> $data));
}else{
    $result = json_encode(array('success'=>false));
}
echo $result;
?>