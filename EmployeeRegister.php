<?php

if(isset($_POST['submit']))
{
$name=$_POST["Name"];
$age=$_POST["Age"];
$nric=$_POST["NRIC"];
$religion=$_POST["religion"];
$nationality=$_POST["Nationality"];
$position=$_POST["Position"];
$Gender=$_POST["Gender"];
$MaritalStatus=$_POST["MaritalStatus"];
$dependents=$_POST["dependents"];
$countrycode=$_POST["countrycode"];
$phone=$_POST["PhoneNo"];
$birthday=$_POST["birthday"];
$StartDate=$_POST["StartDate"];
$EndDate=$_POST["EndDate"];
$address=$_POST["address"];
$email=$_POST["email"];
$Bank=$_POST["Bank"];
$BankNum=$_POST["BankNum"];


require_once './GFirestore.php';

//Create a new collection for new employee
$Doc = new Firestore('EmployeeRegistar');

//New Salary Collection
$salary = new Firestore('Salary');

//New Attendance Collection
$attendance = new Firestore('Attendance');

//Retrieve SetSalary Details
$token = 'BasicSalary';
$data = new Firestore('SetSalary');
$result = $data->getDocument($token);


//ID Generator

$txt = "EMP";
//$i= 0; $y = 0; $x = 0;

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
 
//If I want a 4-digit PIN code.
$pin = generatePIN();
//echo $pin, '<br>';

$sum = $txt.$pin;

//Decide Salary 

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

//Insert the Details
$Doc ->createDocument($sum,

[
"EmployeeID" =>$sum,
"Name"=> $name,
"Age"=> $age,
"NRIC"=> $nric,
"Religion"=> $religion,
"Nationality"=> $nationality,
"Position"=> $position,
"Gender" => $Gender,
"MaritalStatus"=> $MaritalStatus,
"Dependents" => $dependents,
"countrycode"=> $countrycode,
"PhoneNo" => $phone,
"Birthdate"=> $birthday,
"StartDate"=> $StartDate,
"EndDate"=> $EndDate,
"address" => $address,
"email" => $email,
"Bank" => $Bank,
"BankNum" => $BankNum,
"BasicSalary" => $pay,
]);

$salary ->createDocument($sum,

[
    "NettSalary" => 0,
    "GrossSalary" => 0,
    "EEIS" => 0,
    "ESocso" => 0,
    "Eepf" => 0,
    "MEIS" => 0,
    "MSocso" => 0,
    "Mepf" => 0,
    "NettSalary" => 0,
    "TotalSocso" => 0,
    "Totaleis" => 0,
    "Totalepf" => 0,
    "Totaltax" => 0,
    "bonus" => 0,
    "claim" => 0,
    "overWeekdays" => 0,
    "totalAllowance" => 0,
    "totalTaxEmployee" => 0,
    "totalTaxEmployer" => 0

]);


$attendance->createDocument($sum,

[
   
    "AnnualLeave" => 0,
    "Days" => 0,
    "Overtime" => 0,
    "PersonalLeave" => 0
    
]);

if($Doc){
    echo "<script>
    alert('Register Successfull!');
    window.location.href='EmployeeDatabase.php';
    </script>";
}else{
    echo "<script>
    alert('Failed to Register. Try Again!');
    window.location.href='EmployeeDatabase.php';
    </script>";
}

}

?>