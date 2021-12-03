<?php
session_start();

function generateRandomString($length = 10) {
    $characters = 'a0bcde1fghi2jklm3nopq4rstu5vwx6yzA7BCDE8FGHIJ9KLMN3OPQRS2TUVW1XYZ0';
    $charactersLength = strlen($characters);

    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$captcha_txt = generateRandomString(5);


$image = imagecreate(200, 20);

/**
 * 
 * RANDOM BACKGROUND IMAGE
 * 
 *  
**/
$a=array(
"red"=>[255, 0, 0],
"green"=>[0, 155, 6],
"blue"=>[0, 0, 255],
"black"=>[0,0,0]

);

$color_index= (array_rand($a,1));

$bk_clr = imagecolorallocate($image, $a[$color_index][0], $a[$color_index][1], $a[$color_index][2]);

$txt_clr = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 5, 50, 0, $captcha_txt, $txt_clr);

$expire = gmdate(strtotime('+3 minutes', time())); 

$tmp_hash = $captcha_txt.$expire;

$_SESSION['captcha_set'] = TRUE;
$_SESSION['captcha_token'] =  md5($tmp_hash);
$_SESSION['captcha_expire'] = $expire;

imagepng($image);

imagedestroy($image);

?>