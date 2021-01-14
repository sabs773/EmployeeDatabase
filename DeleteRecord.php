<?php

$token = $_GET['token'];

include('GFirestore.php');

//Create a new Collection
$Doc = new Firestore('EmployeeRegistar');
$data = new Firestore('Salary');


$Doc->dropDocument($token);
$data->dropDocument($token);

if($Doc){
    echo "<script>
    alert('Data Successfully Deleted!');
    window.location.href='EmployeeDatabase.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Delete.Please Try Again!');
    window.location.href='EmployeeDatabase.php';
    </script>";
}


?>