<?php
  function checkFormFields($fields, $dump) {
    error_reporting(0); // Turn off error reporting
    /**
     * @fields :  Your Array containing fields and field tags
     * @dump : Boolean specifying if we should output empty Fields
     **/
    $requiredFields = [];  //init required fields var
    $emptyFields = array();  //init empty fields var

    //loop through the array to find the fields and field tags associated
    foreach ($fields as $field=>$fieldTag) 
    {
      //push required field to the array
      array_push($requiredFields, $field);  

    } //end of foreach loop

    foreach($requiredFields as $requireField) {

      $currentField = $requireField; //store current field
      $currentFieldTag = $fields[$currentField]; //store current field tag

      if (!($_POST[$currentField]))
      {
        //push the tag name to the empty field
        array_push ($emptyFields, $currentFieldTag); 

      } //end of if post field is empty

    } //end of foreach

    //if dump is enabled
    if($dump == true){
      $return = array(
        'status' => (isset($emptyFields) && !empty($emptyFields)) ? 1 : 0,
        'fields' => (isset($emptyFields) && !empty($emptyFields)) ? $emptyFields : Null
      );
      return(json_encode($return));
    
    }
  } //end of function
?>
