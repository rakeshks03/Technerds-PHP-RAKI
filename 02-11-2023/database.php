<?php
$sn="localhost";
$un="root";
$pass="";
$dn="technerds";
$conn=new mysqli($sn,$un,$pass,$dn);
// if($conn)
// {
//     echo"connect sucsseful";

// }
// else{
//     echo "somthing went wrong";
// }
mysqli_query($conn,"insert into `user` (name,age,class) values('lakshicr','20','bca')");

?>