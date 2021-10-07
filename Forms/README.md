# Function Scope

```

/**
*
* @checkFormFields : PHP function to check form fields
* @fields :  Your Array containing fields and field tags
* @dump : Boolean specifying if we should output empty Field(s)
*
**/

```

# USAGE

  ### Include the function to your PHP script

```
require 'PHP-Snippets/forms/form-fields-v1.3.php';
```

  ### Initialize your fields Array

```
$fields = [
"fname" => "First Name",
"lname" => "Last Name",
"email" => "Email Address"
 ];
```
 
  ### Call the function
 
 ```
 $empty = json_decode(checkFormFields($fields, true), true);
 
 ```
 
  ### Access Function Data
  
```
// get the status of the check
echo $empty["status"]; 

// get the empty fields
print_r($empty['fields']);

//Let user know the number of fields empty
echo count($empty['fields']);

```
 
  ### Check output

 * If status = 1, it means there're empty fields
 * If status = 0, it means there're no empty fields

```
if ($empty["status"] != 1){

  //Form processing here
  
}else {
  echo "Some fields are missing";
} 
```
  ### Alert the user
  
 ```
if($empty["status"] == 1){
 
  foreach ($empty['fields'] as $index => $field) {
  
    echo $field .'is required'.'<br>';
    
}
 
 ```
