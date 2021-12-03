### Captcha Verification Status Codes

```
<?php

//Output 1
$return = [
'captcha_status' => 200,
'captcha_message' => 'Captcha Verified'
];

//Output 2
$return = [
'captcha_status' => 400,
'captcha_message' => 'Captcha Verification failed'
];

//Output 3
$return = [
'captcha_status' => 407,
'captcha_message' => 'Captcha Expired'
];

//Output 4
$return = [
'captcha_status' => 500,
'captcha_message' => 'Session Invalid'
];
?>

```

### HOW CAN I USE IT?

- Clone or Download the Script from the  [GitHub Repository](https://github.com/Octagon-simon/PHP-Snippets/tree/main/Captcha) 

- Unzip to a folder and Import the script to your page

```
<?php

//Captcha verification script
require_once 'core/captcha_verify.php'; 

//Captcha custom JS
include_once 'assets/captcha_script.php'; 

//Captcha custom CSS
include_once 'assets/captcha_style.php';

?>

```

- Still on your page, Create the basic HTML Form for the Captcha to be displayed

```
<html>
    
    <div class="captcha-container">
        <div class="captcha">
            <div class="notification-wrapper"></div>

            <div id="captcha_img_house" style="text-align:center;margin-bottom:10px"> <!-- 5 -->
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
```
- Now we need to Call the function using ***json_decode*** to decode the output

```
<?php

if(isset($_POST)&& isset($_POST['submit'])){
    $verify_captcha = json_decode(verifyCaptcha($_POST['key']), true);

    if($verify_captcha['captcha_status'] == 200){
      echo "Captcha verified successfully";
    }else{
      echo "Captcha verification failed!";
    }
}

?>

```

### FEATURES
- Captcha are available for up to 3 mins max. After 3 mins, that particular Image will become Invalid and cannot be verified again.
- Random Background Image Colors.
- Length of the Text can be changed.

### WHAT YOU CAN DO
- You can change the length of the Text to include in the Image.

- You can add more background colors to be randomly selected

- You can change the expiry time of all Captcha Challenges
 
### ABOUT THE FILES
- core/captcha_image.php
  - This file will create the Captcha Image and set the required session variables

- core/captcha_verify.php
  - This file will verify the captcha

- assets/captcha_style.php
  - This file contains the default/custom styling for the demo.php page

- assets/captcha_script.php
  - This file contains the default/custom functions for the demo.php page

- demo.php
  - Run this file to view how the Captcha script works

### Need More Clarification?

- Visit my blog here at [Hashnode](https://octagon.hashnode.dev/create-a-simple-image-captcha-using-php) or [Medium](https://simon-ugorji.medium.com/create-a-simple-captcha-using-php-f787ac77e8b6) or [TealFeed](https://tealfeed.com/create-simple-image-captcha-using-php-62phr)

Thank You!