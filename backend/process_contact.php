<?php 
    include_once 'connect.php';

    $name = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $response = [];

    $query = $conn->query("INSERT INTO tbl_contact(username, phone, email, subject, message) VALUES('$name','$phone','$email','$subject','$message')");

    if($query == true){
        $response = [
            'status' => 'success',
            'message' =>'Your request has been received successfully. We will get back to you shortly.'
        ];
    }else{
        $response = [
            'status' => 'error',
            'message' => 'An error occured.',
            'actual_error' => $conn->error
        ];
    }

    echo json_encode($response)
?>