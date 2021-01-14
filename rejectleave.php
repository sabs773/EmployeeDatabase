<!DOCTYPE html>
<html lang="en">
<head>

<?php

$token = $_GET['token'];

include("session.php");

$leaves ->updateDocument($token,[

    ["path" => "Status",
    "value" => 'Rejected']

]);

if($leaves){
    echo "<script>
    alert('Rejected');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Reject. Try Again!');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}