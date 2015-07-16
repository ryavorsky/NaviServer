<?php

    $c_lat = $location_data['lat'];
    $c_lon = $location_data['lon'];

    $n_lat = floor($navi_base/10000);
    $n_lon = $navi_base % 10000;

    $k_lat = 111111.1; //lat
    $k_lon = 111319.5 * cos($c_lat*pi()/180); // lon at the equator normalized
    
    $d_lat = 10 * ($n_lat - 5000) / $k_lat; // вычисляем смещение в градусах
    $d_lon = 10 * ($n_lon - 5000) / $k_lon; // от центра города

    $lat = $c_lat + $d_lat;
    $lon = $c_lon + $d_lon;

?>