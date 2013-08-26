<?php

$myemail = "pbasto@arakno.net";
$mypwd = "123456789a";

if (!isset($_REQUEST['submit'])) {

exit();

} else {

//if( isset($_REQUEST) ){
    //form validation vars
    $valid = true;
    $result = "no user here with those credentials";

    $errors = array();

    //form data
    $pwd = strip_tags(trim($_REQUEST['pwd']));
    $email = strip_tags(trim($_REQUEST['email']));
    /*
    $pwd = $_REQUEST['pwd'];
    $email = $_REQUEST['email'];
*/
    //validate form data

    //validate name is not empty
    if(empty($pwd)){
        $valid = false;
        $errors[] = "You have not entered a password";
    }

    //validate email address is not empty
    if(empty($email)){
        $valid = false;
        $errors[] = "You have not entered an email address";
    //validate email address is valid
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $valid = false;
        $errors[] = "You have not entered a valid email address";
    }

    //send Success if all ok
    if($valid){

        if(($pwd==$mypwd)&&($email==$myemail)) $result = "success";
      // return $headers;

    }

    // return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'pwd' => $pwd,
            'email' => $email
        ),
        'form_ok' => $valid,
        'result' => $result,
        'errors' => $errors
    );



    //if this is not an ajax request

/*
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){

        session_start();
        $_SESSION['lf_returndata'] = $returndata;

        header('location: ' . $_SERVER['HTTP_REFERER']);


}
*/
header('Content-type: application/json');
echo json_encode($returndata);

}