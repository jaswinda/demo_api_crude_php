<?php
   //get the request parameters
    $email = isset($_POST['email'])?$_POST['email']:''; ;
    $password =isset($_POST['password'])?$_POST['password']:''; ;
    if($email=="ram@gmail.com" && $password=="ram"){
        echo json_encode(array('message' => 'Login Successful', 'success' => true));
    }else{
        echo json_encode(array('message' => 'Login failed', 'success' => false, 
        'email' => $email, 'password' => $password));
    }
  
?>