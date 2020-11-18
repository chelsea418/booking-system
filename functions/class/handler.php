<?php
    include "../auth/connection.php";
    include "library.php";
    $lib = new BookingSystemClass();

    //Hanlder for creating a user account
    if(isset($_POST['createUser'])){
        $result = $lib->createUser($conn, $_POST);
        echo $result;

    }

    //Handler for logging in user
    if(isset($_POST['loginUser'])){
        $result = $lib->loginUser($conn, $_POST);
        echo $result;
    }

    //Handler for submitting a booking
    if(isset($_POST['submitBook'])){
        $result = $lib->submitBokking($conn, $_POST);
        echo $result;
    }
