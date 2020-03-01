<?php
if(isset($_POST["updatebutton"]))
{
    $upname=$_POST["updatename"];
    $uproll=$_POST["updaterollno"];
    $upcollege=$_POST["updatecollege"];
    $admn=$_POST['updatebutton'];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="student";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="UPDATE `record` SET `Name`='$upname',`Roll No`=$uproll,`College`='$upcollege'WHERE `Admno`=$admn";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
      $r["status"]="success";
    }
    else{
      $r["status"]="error";
    }
    echo json_encode($r);

}
?>