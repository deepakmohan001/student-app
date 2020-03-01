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
<h1>
Edit
</h1>
<form method="GET">
<table class="table">
<tr>
<td>
Admno
</td>
</tr>
<tr>
<td>
<input type="text"class="form-control"name="getAdmno">
</td>
</tr>
<tr>
<td>

</td>
<td>
<button type="submit"class="btn btn-danger"name="submit">
Edit
</button>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $admno=$_POST["getAdmno"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="student";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="SELECT `Name`, `Roll No`, `College`, `Admno` FROM `record` WHERE `Admno`=$admno";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        $name=$row["Name"];
        $roll=$row["Roll No"];
        $college=$row["College"];

        echo"<form method='POST'><table class='table'>
        <tr><td>Name</td><td><input type='text'name='updatename'value='$name'</td></tr>
        <tr><td>Roll NO</td><td><input type='text'name='updaterollno'value='$roll'</td></tr>
        <tr><td>College</td><td><input type='text'name='updatecollege'value='$college'</td></tr>
        <tr><td><button type='submit' value='$admno' name='updatebutton' class='btn btn-success'/>update</button><br></form>";


      }
    }
    else
    {
      echo "invalid";
    }
}
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
      echo "updated";
    }
    else{
      echo "failed";
    }

}
?>