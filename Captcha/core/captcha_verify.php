<?php
session_start();
function verifyCaptcha($input = "abc") {
    /**
     * verifyCaptcha : This function verifies the validity of Captcha Images
     * @input : The user input
     * @return : 407 (captcha expired), 200 (captcha verified), 400 (captcha unverified), 500 (Server Error)
     **/

  $date = time();
    if($_SESSION['captcha_set'] &&
        isset($_SESSION['captcha_token']) &&
            isset($_SESSION['captcha_expire'])) {
                //assign values
                $captcha_expire = $_SESSION['captcha_expire'] ;
                $captcha_token = $_SESSION['captcha_token'];
                //check if captcha has expired
               if($date < $_SESSION['captcha_expire']){
                    if(md5($input.$captcha_expire) == $captcha_token){
                        unset( $_SESSION['captcha_expire'] );
                        unset( $_SESSION['captcha_token']);
                        unset($_SESSION['captcha_set']);
                        $return = array(
                            "captcha_status" => 200,
                            "captcha_message" => "Captcha Verified!",
                        );
                        return json_encode($return); 
                    } else {
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