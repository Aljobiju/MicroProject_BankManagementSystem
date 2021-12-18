
<?php
$Email= $_POST["email"];
$Password= $_POST["psw"];

$conn = new mysqli('localhost','root','','bank_management');
if($conn->connect_error)
{
die('Connection Failed :'.$conn->connect_error);
}
else
{
$sql = "Insert into users values (default,'$Email','$Password')";
if ($conn->query($sql)=== TRUE)
{
  header("Location:./userhome.php");

}
else
{
    echo "Error" .$sql . "<br>" .$conn->error;
}
}
?>