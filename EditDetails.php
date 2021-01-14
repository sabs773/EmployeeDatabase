<?php


//New values stored in variables to be updated
$name=$_POST["Name"];
$age=$_POST["Age"];
$nric=$_POST["NRIC"];
$religion=$_POST["religion"];
$nationality=$_POST["Nationality"];
$position=$_POST["Position"];
$Gender=$_POST["Gender"];
$MaritalStatus=$_POST["MaritalStatus"];
$dependents=$_POST["Dependents"];
$countrycode=$_POST["countrycode"];
$phone=$_POST["PhoneNo"];
$birthday=$_POST["Birthdate"];
$StartDate=$_POST["StartDate"];
$EndDate=$_POST["EndDate"];
$address=$_POST["address"];
$email=$_POST["email"];
$Bank=$_POST["Bank"];
$BankNum=$_POST["BankNum"];
//Update new basic salary
$pay=$_POST["BasicSalary"];

//Hidden Token brought over 
$sum=$_POST["EmployeeID"];

require_once './GFirestore.php';

//Create a new Collection
$Doc = new Firestore('EmployeeRegistar');

//New Salary Collection
$salary = new Firestore('Salary');

//Retrieve SetSalary Details
$token = 'BasicSalary';
$data = new Firestore('SetSalary');
$result = $data->getDocument($token);

//update basic salary details

if (strtolower($nationality) == strtolower('Malaysian') && $position == 'Full-time Cleaner'){
    $pay =  $result['Full-Time LocalCleaner'];
}

if ($position == 'Part-time Cleaner'){
    $pay =  $result['Part-time Cleaner'];
}
if ($position == 'Office Worker'){
    $pay =  $result['Office Worker'];
}
if ($position == 'Manager'){
    $pay =  $result['Manager'];
}
if (strtolower($nationality) != strtolower('Malaysian') && $position == 'Full-time Cleaner'){
    $pay =  $result['Full-Time NonLocalCleaner'];
}


$Doc ->updateDocument($sum,[
     
    ["path" => "Age",
     "value" => $age],

     ["path" => "Name",
    "value" =>$name ],

     ["path" => "NRIC",
     "value" => $nric],

     ["path" => "Religion",
     "value" => $religion],

      ["path" => "Nationality",
      "value" => $nationality],

      ["path" => "Position",
      "value" => $position],

       ["path" => "Gender",
       "value" => $Gender],

       ["path" => "MaritalStatus",
       "value" => $MaritalStatus],

       ["path" => "Dependents",
       "value" => $dependents],

       ["path" => "countrycode",
       "value" => $countrycode],

       ["path" => "PhoneNo",
       "value" => $phone],

       ["path" => "Birthdate",
       "value" => $birthday],

       ["path" => "StartDate",
       "value" => $StartDate],

       ["path" => "EndDate",
       "value" => $EndDate],

       ["path" => "address",
       "value" => $address],

       ["path" => "email",
       "value" => $email],

       ["path" => "Bank",
       "value" => $Bank],

       ["path" => "BankNum",
       "value" => $BankNum],

       ["path" => "BasicSalary",
       "value" => $pay]

]);

if($Doc){
    echo "<script>
    alert('Data Successfully Updated!');
    window.location.href='EmployeeDatabase.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Update. Try Again!');
    window.location.href='EmployeeDatabase.php';
    </script>";
}



?>