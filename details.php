<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="details.php">Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="edit.php">Edit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="delete.php">Delete</a>
    </li>
  </ul>
</nav>
   <form method="GET"> 
   <table class="table">
   <tr>
   <td>
   Name
   </td>
   <td>
   <input type="text"name="getName"class="form-control">
   </td>
   </tr>
   <tr><td>
   Roll No</td>
   <td>
   <input type="text"name="getRollno"class="form-control">
   </td>
   </tr>
   <tr>
   <td>
   College</td>
   <td>
   <input type="text"name="getCollege"class="form-control">
   </td>
   </tr>
   <tr>
   <td>
   Admno</td>
   <td>
   <input type="text"name="getAdmno"class="form-control">
   </td>
   </tr>
   <tr>
   <td>
   </td>
   <td>
   <button type="submit"name="submit"class="btn btn-danger">
   submit
   </button>
   </td>
   </tr>
 </form>
</table>
</body>
</html>
<?php
if(isset($_POST["submit"]))
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
        echo " successfull";
    }
    else {
        echo $connection->error;
    }
}
?>