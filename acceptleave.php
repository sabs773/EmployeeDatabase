<!DOCTYPE html>
<html lang="en">
<head>

<?php

$token = $_GET['token'];

include("session.php");

$leaves ->updateDocument($token,[

    ["path" => "Status",
    "value" => 'Approved']

]);

if($leaves){
    echo "<script>
    alert('Accepted');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Approve. Try Again!');
    window.location.href='/Payroll/AdminClaims.php';
    </script>";
}


?>
