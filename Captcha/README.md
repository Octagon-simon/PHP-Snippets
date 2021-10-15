### About verifyCaptcha() Function

```
<?php

 /**
 * verifyCaptcha : This function verifies the validity of Captcha Images
 * @input : The User's Answer to the Captcha
 * @return : 407 (captcha expired), 200 (captcha verified), 400 (captcha unverified), 500 (Server Error)
 **/

//Call the function
verifyCaptcha($_POST['user_answer']);

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
<head></head>
<body>
<img id="captcha_img" src="core/captcha_image.php">   

<form method="post">
    <div id="captcha_form_group">
        <label id="captcha_form_label">Enter Text</label>
        <input id="captcha_key" name="key"> <button id="btn_captcha_refresh" type="button">&#8635;</button>    
    </div>
    <div id="captcha_form_group">
        <button id="btn_captcha_submit" type="submit" name="submit">Verify</button>
    </div>
</form>
</body>
</html>
```
- Now we need to Call the function using ***json_decode*** to decode the output

```
<?php

if(isset($_POST)&& isset($_POST['submit'])){
    $myCaptcha = json_decode(verifyCaptcha($_POST['key']), true);
    print_r($myCaptcha);
}
?>

```

### FEATURES
- Captcha are available for up to 3 mins max. After 3 mins, that particular Image will become Invalid and cannot be verified again.
- Random Background Image Colors.
- Length of the Text can be changed.

### WHAT YOU CAN DO
- You can change the length of the Text to include in the Image.
  - On line 18 of core/captcha_image.php 

```
<?php
//Specify the length of the string here
$captcha_txt = generateRandomString(5);
?>

```
- You can change the background color of the images. The background colors specified are randomly selected
  - On line 29 of core/captcha_image.php

```
<?php
//create a color hex 
$a=array(
"red"=>[255, 0, 0],
"green"=>[0, 155, 6],
"blue"=>[0, 0, 255],
"black"=>[0,0,0]
);
?>

```

- You can change the expiry time of all Captcha Challenges
  - On line 45 of core/captcha_image.php

```
<?php
//You can make it last for 2 minutes or 1 minute
$expire = gmdate(strtotime('+3 minutes', time()));
?>

```
### ABOUT THE FILES
- core/captcha_image.php
  - This file will create the Captcha Image and set the required session variables

- core/captcha_verify.php
  - This file will verify an already existing captcha matching the User's answer with Captcha's token found in $_SESSION

- assets/captcha_style.php
  - This file contains the default/custom styling for the demo.php page

- assets/captcha_script.php
  - This file contains the default/custom functions for the demo.php page

- demo.php
  - Run this file to view how the Captcha script works
