<?php
//You can add as many fields as you like
if($_POST){
$requiredFields = [
"username", "email",  "phone"
 ];
 
/*
Initialize the array that will store the
fields without a value
*/
$requiredFieldsMsg= [];
 
foreach($requiredFields as $requireField){
 
//Check if the form field contains a value
if(!($_POST[$requireField])) {
//if it doesn't, push the field to the array
  array_push($requiredFieldsMsg,$requireField);
}
}
 
//check if there're values in the array, then alert the user
if (isset($requiredFieldsMsg) && count($requiredFieldsMsg) > 0) {
 foreach($requiredFieldsMsg as $requireFieldMsg){
  echo '<div align="center">
  <div class="notify">
  <p>'.$requireFieldMsg.' field is required!
  </p>
  </div>
  </div>' ;
  }
}
}
else
{
 //YOUR FORM ACTION GOES HERE 
}
//End of script
?>
 
<html>
<style>
div.notify{
max-width:500px;
  text-align:left;
    border-radius: 4px;
    position: relative;
    padding: 1.25rem 2.5rem 1.25rem 1.5rem;
    background-color: #feecf0 !important;
    color: #cc0f35;
    margin-bottom: 10px;
}
</style>
<form method="POST">
<label>Username</label><br>
<input type="text" name="username"><br>
<label>Email</label><br>
<input type="text" name="email"><br>
<label>Phone</label><br>
<input type="text" name="phone"><br>
<button type="submit">TEST</button>
</form>
</html>