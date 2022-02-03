<?php 

    $username = $_POST['uname'];
    $password = $_POST['pass'];

    
    if($username == 'amara' and $password == '12345'){
        echo "Login Successfull";
    }else{
        echo "Invalid Username or Password";
    }

?>