<?php

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];

    // Processed Data

    // Redirect Back to contact page with parameter "res" which is equal to the firstname
    header('location:../contact.php?res=' . $fname)

?>