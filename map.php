<?php 

    $navi_city = $_GET['city'];
    $navi_addr = $_GET['addr'];
    $navi_ext = $_GET['ext'];
    
    $response = array();
    $response["navi_city"] = $navi_city;
    $response["navi_addr"] = $navi_addr;
    $response["navi_ext"] = $navi_ext;

    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);

?>