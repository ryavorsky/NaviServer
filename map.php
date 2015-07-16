<?php 
    include 'navicities.php';
    
        $location_data = $city_array[$_GET['city']];
        if (is_null($location_data)){
            $location_data = $city_array['07495'];
        };
        $navi_base = $_GET['addr'];
        include 'navi8decode.php';

        if (is_null($_GET['mode'])){
        include 'googlemap.php';
    } else {
        header('Content-Type: application/json');
        echo "Data:".$_SERVER['REMOTE_ADDR'];
        echo "\nLat=".$lat."\nLon=".$lon."\n";
        echo json_encode($_GET, JSON_PRETTY_PRINT)."\n";
        echo json_encode($city_array, JSON_PRETTY_PRINT);
    }
?>