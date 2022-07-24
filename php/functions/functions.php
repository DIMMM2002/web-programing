<?php
$mysqli = false;
function connectDB(){
    global $mysqli;
    $mysqli = new mysqli('localhost', 'root', '', 'shop')
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB(){
    global $mysqli;
    $mysqli->close();
}

function getProduct($limit){
    global $mysqli;
    connectDB();
    $result = $mysqli->query("SELECT * FROM 'products' ORDER BY 'id' DESC $limit");
    closeDB();
    return resultToArray($result);
}
function resultToArray($result){
    $array = array();
    while(($row = $result->fetch_assoc()) != false)
        $array[] = $row;
}

?>