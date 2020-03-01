<?php
if(isset($_POST["getName"]))
{
    $name=$_POST["getName"];
    $roll=$_POST["getRollno"];
    $college=$_POST["getCollege"];
    $admno=$_POST["getAdmno"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="student";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="INSERT INTO `record`(`Name`, `Roll No`, `College`, `Admno`) VALUES ('$name',$roll,'$college',$admno)";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        $r["status"]="success";
    }
    else {
        $r["status"]="failed";
    }
    echo json_encode($r);
}
?>