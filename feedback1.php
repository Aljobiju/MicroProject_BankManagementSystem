<?php
$name= $_POST["name"];
$feedback= $_POST["fdb"];

$conn = new mysqli('localhost','root','','bank_management');
if($conn->connect_error)
{
die('Connection Failed :'.$conn->connect_error);
}
else
{
$sql = "Insert into data values (default,'$name','$feedback')";
if ($conn->query($sql)=== TRUE)
{
//   echo '<script>alert("Feedback Submitted Successfully")</script>';
   header("Location:./userhome.php");
}
else
{
    echo "Error" .$sql . "<br>" .$conn->error;
}
}
?>