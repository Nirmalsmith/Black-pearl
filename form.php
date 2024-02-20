<?php
$n=$_POST['UserName'];
$con=mysqli_connect("localhost","root","","sam");
$sql="INSERT INTO sla(Uname) values($n)";
$r=mysqli_query($con,$sql);

if($r){
    echo "successfully submit";
}
else{
    echo "not added";
}
?>