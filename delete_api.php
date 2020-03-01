<?php
if(isset($_POST["getAdmno"]))
{
    $admno=$_POST["getAdmno"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="student";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="DELETE FROM `record` WHERE `Admno`=$admno";
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