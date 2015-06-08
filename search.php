<?php 

	$navi_city = $_GET['city'];
	if ($navi_city == "1415"){ 
		$data = file('NaviDB_SanFran.csv');
		$city = "San Francisco";
	} elseif ($navi_city == "7495"){ 
		$data = file('NaviDB_Msk.csv');
		$city = "Москва";
	} elseif ($navi_city == "458"){ 
		$data = file('NaviDB_Aarhus.csv');
		$city = "Århus";
	} else {
		echo 'Covered cities: <br/><br/>Moscow (7495), <br/>San Francisco (1415), <br/>Aarhus (458)';
		exit();
	};
	
	$navi_addr = $_GET['addr'];
	
	foreach ($data as $addr){
		if (strpos($addr, $navi_addr) === 0) {
			$pair = explode("\t", $addr);
			echo $navi_city."\t@".$pair[0].":\t".$city.",\t".$pair[1]."\t<br/>";
		};
	};
?>
    