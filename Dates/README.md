## HOW TO USE

### SYNTAX

```
<?php

findNotifDate($date, $gmt);

?>
```
### PROCEDURES

- Bind the function to a Variable and pass in your Date
```
<?php

$checkDate = convertNotifTime("2021-11-07 22:13:50", "+0");
var_dump($checkDate);

?>
```
If you haven't set a global timezone for your app, you may change the gmt but if you have set a global timezone for your app, leave the gmt as **+0**.

For example; 

I am using GMT +1 *WEST AFRICAN TIME* and I haven't set a global timezone for my App.

So I will call the function like this;

```
<?php

//Using Dates with GMT SET to +1
$checkDate = convertNotifTime("2021-11-07 22:13:50", "+1");
var_dump($checkDate);

?>
```

- Using **TimeStamps**
The function has been made to also accept TimeStamps as the parameter for date.
Just make sure you're providing a correct TimeStamp to prevent **Invalid Date Error!**

```
<?php

//Using Timestamps with GMT SET to +1
$checkDate = convertNotifTime("1636297893", "+1");
var_dump($checkDate);

?>
```
You may need to watch out for grammatical errors on the script.

I will come up for a solution and then fix it.

You may learn more about the JavaScript version [here](https://simon-ugorji.medium.com/find-notification-date-difference-using-javascript-or-php-10fc9f6d893c)
