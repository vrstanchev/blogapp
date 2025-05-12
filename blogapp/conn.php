<?php
$server="mysql.railway.internal";
$user="root";
$pass="RZmtQeeOYjVMdjRKqsRDwfZNopeMsVQZ";
$dbase="railway";
$conn=new mysqli($server, $user, $pass, $dbase);
if($conn->connect_error){
die("Connection failed");
}
