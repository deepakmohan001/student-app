<?php
    $r=array();
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="student";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="SELECT  `Name`, `Roll No`, `College` FROM `record`";
    $result=$connection->query($sql);

    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        $r["data"][]=$row;
      }
      echo json_encode($r);
    }
    


?>