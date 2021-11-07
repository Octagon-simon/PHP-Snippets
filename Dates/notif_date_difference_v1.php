<?php
function convertNotifTime($notif_date, $gmt){

	/**
    * @ findNotifDate : Finds the Date Difference of a Notification
    * @ notif_date : The notification date
    * @ gmt : Your GMT
    **/

	//when notification was sent
    $sent_date = (strpos($notif_date, ' ') !== FALSE) ? strtotime($notif_date) : $notif_date; 

    $today = gmdate(strtotime($gmt." hours", time())); //current date

    //calculate and store the results
    $calc = $today - $sent_date;
    $calcDate = gmdate("d-m-y", $calc);
    $calcTime = gmdate("H:i:s", $calc); //Will always be correct

    //check if it isnt default date

    //Get How many days, months and years that has passed
    $date_passed = explode("-", $calcDate);
    $time_passed = explode(":", $calcTime);

    $days_passed = ($date_passed[0] != '01') ? intval($date_passed[0]) - 1 : NULL;
    $months_passed = ($date_passed[1] != '01') ? intval($date_passed[1]) - 1 : NULL;
    $years_passed = ($date_passed[2] != '70') ? intval($date_passed[2]) - 70 : NULL;

    $hours_passed = ($time_passed[0] != '00') ? intval($time_passed[0]) : NULL;
    $mins_passed = ($time_passed[1] != '00') ? intval($time_passed[1]) : NULL;
    $secs_passed = intval($time_passed[2]); 

   //Set up your Custom Text output here
    $s = ["sec ago", "secs ago"];
    $m = ["min", "sec ago", "mins", "secs ago"];
    $h = ["hr", "min ago", "hrs", "mins ago"];
    $d = ["day", "hr ago", "days", "hrs ago"];
    $M = ["month", "day ago", "months", "days ago"];
    $y = ["year", "month ago", "years", "months ago"];
 
		if (!($days_passed) && !($months_passed) && !($years_passed)
		&& !($hours_passed) && !($mins_passed)) {

			$ret = ($secs_passed == 1) ? $secs_passed .' '. $s[0] : $secs_passed .' '. $s[1];

		}else if (!($days_passed) && !($months_passed) && !($years_passed)
		&& !($hours_passed)) {

			$retA = ($mins_passed == 1) ? $mins_passed .' '. $m[0] : $mins_passed .' '. $m[2];
			$retB = ($secs_passed == 1) ?  $secs_passed .' '.$m[1] : $secs_passed .' '.$m[3];

			$ret = $retA.' '.$retB;


		}else if (!($days_passed) && !($months_passed) && !($years_passed)){

			$retA = ($hours_passed == 1) ? $hours_passed .' '. $h[0] : $hours_passed .' '. $h[2];
			$retB = ($mins_passed == 1) ?  $mins_passed .' '. $h[1] : $mins_passed .' '. $h[3];

			$ret = $retA.' '.$retB;	

		}else if (!($years_passed) && !($months_passed)) {
			$retA = ($days_passed == 1) ? $days_passed .' '. $d[0] :  $days_passed .' '. $d[2];
			$retB = ($hours_passed == 1) ? $hours_passed . ' '.$d[1] : $hours_passed . ' '.$d[3];

			$ret = $retA.' '.$retB;

		}else if (!($years_passed)) {

			$retA = ($months_passed == 1) ? $months_passed .' '. $M[0] : $months_passed .' '. $M[2];
			$retB = ($days_passed == 1) ? $days_passed . ' '.$M[1] : $days_passed . ' '.$M[3];

			$ret = $retA.' '.$retB;
		}else{
			$retA = ($years_passed == 1) ? $years_passed .' '. $y[0] : $years_passed .' '. $y[2];
			$retB = ($months_passed == 1) ? $months_passed . ' '.$y[1] : $months_passed . ' '.$y[3];
			
			$ret = $retA.' '.$retB;
		}

		if(strpos($ret, '-')!== FALSE){
			$ret .= " ( TIME ERROR )-> Invalid Date Provided!";
		}

    return $ret;
}
?>