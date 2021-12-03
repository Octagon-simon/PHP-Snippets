<?php
//require verification file
require_once 'core/captcha_verify.php'; 
//include custom script
include_once 'assets/captcha_script.php'; 
//include custom style
include_once 'assets/captcha_style.php';

if(isset($_POST)&& isset($_POST['submit'])){

    //call the function by binding it to a variable
    $verify_captcha = json_decode(verifyCaptcha($_POST['captcha']), true); 

    if ($verify_captcha['captcha_status'] == 200) {
        //If captcha verification is Successful
        echo '<script>   
            document.addEventListener(\'DOMContentLoaded\', (event) => {
            createNotif("captcha-notif", "is-success", "'.$verify_captcha['captcha_message'].'", "", false);
            })</script>';
    }else{
        //If Unsuccessful
        echo '<script>   
        document.addEventListener(\'DOMContentLoaded\', (event) => {
        createNotif("captcha-notif", "is-danger", "'.$verify_captcha['captcha_message'].'", "", false);
        })</script>';
    }
}
?>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <div class="captcha-container">
        <div class="captcha">
            <div class="notification-wrapper"></div>

            <div id="captcha_img_house"> 
                <img id="captcha_img" src="core/captcha_image.php">   
            </div>

            <form method="post">
                <div class="captcha_form_group">
                    <label id="captcha_form_label">Enter Text</label>
                    <div class="captcha_input_group"> 
                        <input id="captcha_inp" name="captcha"> <button title="Click to refresh image" id="btn_captcha_refresh" type="button">&#8635;</button>  
                    </div>
                </div>
                <button title="Click to Verify captcha" id="btn_captcha_submit" type="submit" name="submit">Verify</button>
            </form>
        </div>
    </div>
  
</html>
