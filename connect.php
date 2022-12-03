<?php
    $firstname = $_POST['Firstname'];
    $lastname =  $_POST['Lastname'];
    $phone =     $_POST['Phone'];
    $email =     $_POST['Email'];
    $password =  $_POST['Password'];
    $cpassword = $_POST['Cpassword'];
    $address =   $_POST['Address'];
    $pincode =   $_POST['Pincode'];

    //Database connection
    $conn = new mysqli('localhost','root','','kashmir commercials');
    if($conn->connect_error){
        die("Connection Failed :");
    }
    else{
        $stmt = $conn->prepare("insert into userdetails(Firstname, Lastname, Phone, 
        Email, Password, Cpassword, Address, pincode); 
        values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssii", $firstname, $lastname, $phone, $email, $password,
         $cpassword, $address, $pincode);
        $stmt->execute();
        echo "Signup successfully";
        $stmt->close();
        $conn->close();
    }
?>