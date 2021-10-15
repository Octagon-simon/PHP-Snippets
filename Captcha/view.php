<?php
require_once 'core/captcha_verify.php'; //1
include_once 'assets/captcha_script.php'; //2
include_once 'assets/captcha_style.php';
if(isset($_POST)&& isset($_POST['submit'])){
$v = json_decode(verifyCaptcha($_POST['key']), true); //3
//print_r ($v)."<br>"; //4

if ($v['captcha_status'] == 200) {
//If Successful
echo '<script>   
document.addEventListener(\'DOMContentLoaded\', (event) => {
createNotif("captcha-notif", "is-success", "'.$v['captcha_message'].'", "", false);
})
</script>';
} else {
//If Unsuccessful
echo '<script>   
document.addEventListener(\'DOMContentLoaded\', (event) => {
createNotif("captcha-notif", "is-danger", "'.$v['captcha_message'].'", "", false);
})
</script>';
}

}
?>
<html>
    
    <div id="captcha_house">
        <div class="notification-wrapper">

        </div>
  <div id="captcha_img_house"> <!-- 5 -->
        <img id="captcha_img" src="core/captcha_image.php">   
    </div>

<form method="post">
    <div id="captcha_form_group">
        <label id="captcha_form_label">Enter Text</label>
    <input id="captcha_key" name="key"> <button id="btn_captcha_refresh" type="button">&#8635;</button>    
    </div>
    <div id="captcha_form_group">
    <button id="btn_captcha_submit" type="submit" name="submit">Verify</button>
</div>
</form>

    </div>
  
</html>
