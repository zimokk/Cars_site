<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../../objects/fuel.php';

$database = new Database();
$db = $database->getConnection();

$fuel = new Fuel($db);

$stmt = $fuel->readAll();
$num = $stmt->rowCount();

$data="";

if($num>0){
    $x=1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $data .= '{';
            $data .= '"id":"'  . $id . '",';
            $data .= '"name":"' . $name . '"';
        $data .= '}';
        $data .= $x<$num ? ',' : ''; $x++; }
}
echo '{"fuels":[' . $data . ']}';
?>