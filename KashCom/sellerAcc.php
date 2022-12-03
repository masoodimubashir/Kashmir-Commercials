<?php

    $Phone =$_POST['phone'];
    $Name =$_POST['name'];
    $Email =$_POST['email'];
    $GSTIN =$_POST['gstin'];
    $Address =$_POST['address'];
    $Pincode =$_POST['pincode'];
    $Company =$_POST['company'];

    //connection to database
    $conn=new mysqli('localhost','root','','kashmir commercials');
    if($conn->connect_error){
        die("Connection Failed");
    }
    else{
        $stmt = $conn->prepare("insert into sellerdetails(Phone,Name,Email,GSTIN,Address,Pincode,Company)values(?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$Phone,$Name,$Email,$GSTIN,$Address,$Pincode,$Company);
        $stmt->execute();
        header("location: login.html");
        $stmt->close();
        $conn->close();

    }
?>