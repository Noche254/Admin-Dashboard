<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "Zalego";

$conn = mysqli_connect($server,$username,$password,$database);
$sqlQuery = mysqli_query($conn,"SELECT * FROM enrollment");

// echo $fetchRecords['fullname'];.''. $fetchRecords['email'];
// echo $fetchRecords['phonenumber'];
while ($fetchRecords =  mysqli_fetch_array($sqlQuery)){
    #code...
    echo $fetchRecords['fullname'].''. 
    $fetchRecords['email'].'<br>';
}

?>