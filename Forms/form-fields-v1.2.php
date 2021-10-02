<?php
function checkFormFields($fields, $return) {

    $requiredFields = [];  //init required fields var
    $emptyFields = array();  //init empty fields var


foreach ($fields as $field=>$fieldTag) //loop through the array to find the fields and field tags associated
{

array_push($requiredFields, $field);  //push required field to the array

} //end of foreach loop

foreach($requiredFields as $requireField) {

     $currentField = $requireField; //store current field
     $currentFieldTag = $fields[$currentField]; //store current field tag

if (!($_POST[$currentField]))
{
    array_push ($emptyFields, $currentFieldTag); //push the tag name to the empty field

} //end of if field is empty

} //end of check if field has a value

 /***
     * 
     * IF FIELD IS EMPTY BLOCK
     * 
 ***/

if (isset($emptyFields) && count($emptyFields) > 0) //check if there's an empty field in the variable
{ // then loop through

foreach ($emptyFields as $emptyField)   {

/***
     * 
     *  CUSTOM USER ALERT ACTION GOES HERE 
     *
    ** */

echo '
       <script>
        document.addEventListener(\'DOMContentLoaded\', function(){
       alert(\''.$emptyField.' is required!\');
        });
       </script>'; //ALERT THE USER 

} //END OF empty fields loop

} //end of check if there's an empty field

//if return is set to true
if($return == true) {
if (isset($emptyFields) && count($emptyFields) > 0) {
        return(1);
} else {
        return (0);
} 
}
} //end of function

if ($_POST){
$fields = [
    "fname" => "First Name",
    "lname" => "Last Name",
    "email" => "Email"
];

//call the function

if (checkFormFields($fields, false) == 1) {
    echo "one or more fields are empty";
} else {
    echo "No field is empty";
}
}
?>

 <html>
     <form method="post">
         <input name="fname"> <br>
         <input name="lname"> <br>
         <input name="email"> <br>
         <button type="submit">Submit</button>
     </form>
 </html>

