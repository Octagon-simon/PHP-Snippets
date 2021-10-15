<?php
session_start();
/**
 * verifyCaptcha : This function verifies the validity of Captcha Images
 * @param string $input
 * @return : 407 (captcha expired), 200 (captcha verified), 400 (captcha unverified), 500 (Server Error)
 */
function verifyCaptcha($input = "abc") {
    $date = time();
    if(isset($_SESSION['captcha_set']) && 
        isset($_SESSION['captcha_token']) &&
            isset($_SESSION['captcha_expire'])) {
            
            //IF CAPTCHA VALIDITY HAS PASSED
            $captcha_expire = $_SESSION['captcha_expire'] ? $_SESSION['captcha_expire'] : 0;

            if($date > $_SESSION['captcha_expire']){
                unset($_SESSION['captcha_set']);
                unset($_SESSION['captcha_status']);
            }
        $captcha_token = ($_SESSION['captcha_token']) ? $_SESSION['captcha_token'] : 0;
        if($date < $captcha_expire){
            //Captcha still valid
            $captcha_set = (($_SESSION['captcha_set'] == 1) ||($_SESSION['captcha_set'] == 0)) ? $_SESSION['captcha_set'] : 0;
            
            if(md5($input.$captcha_expire) == $captcha_token){
                $_SESSION['captcha_status'] = 1; //VERIFIED
                unset($_SESSION['captcha_token']);
                unset($_SESSION['captcha_set']);
                $return = array(
                    "captcha_status" => 200,
                    "captcha_message" => "Captcha Verified!",
                );
                return json_encode($return); 
            } else {
                $_SESSION['captcha_status'] = 0; //Unverified
                $return = array(
                    "captcha_status" => 400,
                    "captcha_message" => "Captcha Verification Failed!",
                );
                return json_encode($return);
            }         
        }else{
            $return = array(
                "captcha_status" => 407,
                "captcha_message" => "Captcha Expired!",
            );
            return json_encode($return);
        }
    }else{ 
        $return = array(
            "captcha_status" => 500,
            "captcha_message" => "Session Invalid!",
        );
        return json_encode($return);
    }


}

?>