<?php
function calDate($date1="12-12-2026", $date2="19-11-2021"){

/*
* calcDate() : Calculates difference between two dates
* @date1 : "First Date in the format D-M-Y"
* @date2 : "Second Date in the format D-M-Y"
* return : Array
*/

$date1_tmp =strtotime($date1);
$date2_tmp = strtotime($date2);

if ($date1_tmp > $date2_tmp){
	$calc = $date1_tmp - $date2_tmp ;
}else{
	$calc = $date2_tmp - $date1_tmp;
}

$calcFormat = explode("-", gmdate("d-m-Y",$calc));

$days_passed = intval(abs($calcFormat[0]) - 1);
$months_passed = intval(abs($calcFormat[1]) - 1);
$years_passed = intval(abs($calcFormat[2] -   1970));

$yrsTxt =["year", "years"];
$mnthsTxt = ["month", "months"];
$daysTxt = ["day", "days"]; 

$total_days = ($years_passed * 365) + ($months_passed * 30.417) + $days_passed;

$result = (($years_passed == 1) ? $years_passed. ' '. $yrsTxt[0] . ' ' : ($years_passed > 1 )  ? 
			$years_passed. ' ' . $yrsTxt [1] . ' ' : '') . 
				(($months_passed == 1) ? $months_passed. ' ' . $mnthsTxt[0] :  ($months_passed > 1) ? $months_passed. ' ' . $mnthsTxt[1] . ' ' : '') .
						(($days_passed == 1) ? $days_passed. ' ' . $daysTxt[0] : ($days_passed > 1) ? $days_passed. ' ' . $daysTxt[1] : '' );

$total_days = ($years_passed * 365) + ($months_passed * 30.417) + $days_passed;

$retval = array(
	"total_days" => round($total_days),
	"result" =>  $result
);
return $retval;

}
?>