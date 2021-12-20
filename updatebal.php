<?php
$con=mysqli_connect("localhost","root","","bank_management");
if($con==false)
{
}
$cid=$_POST['cid'];
$withdraw=$_POST['amt'];
$sql1="UPDATE bank_account SET balance=balance-$withdraw WHERE CustId=$cid";
if($con->query($sql1)==true)
{
 echo "Amount Withdrawn Succesfully";
}
else
{
}
$sql2="SELECT balance FROM bank_account WHERE CustID=$cid";
$result=$con->query($sql2);
if($result->num_rows>0)
{
 while($row=$result->fetch_array())
 {
 if($row["balance"]<1000)
 {
 echo "Your Account Has Gone Below Minimum Balance <br>";
 }
 }
}
else
{
}
header('location: userhome.php');
?>