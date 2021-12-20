<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/adminhome.css">
   
</head>

<body>
<div class="main-container">
        <!-- Header Navbar  --> 
        <nav class="navbar">
            <img src="assets/images/logo5.png">
            <ul class="nav-links">
            <a href="adminhome.php"> <li>Home</li></a>
               <li><a href="accounts.php">Accounts</a></li>
               <a href="addaccount.php"><li>Add new Account</li></a>
               <a href="adminfeedback.php"> <li>Feedback</li></a>
            </ul>
           <a href="index.php"><button class="btn">Log Out</button></a>
        </nav>


<?php
$con = mysqli_connect("localhost", "root", "", "bank_management");
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 
$sql = "SELECT * FROM bank_account"; 
if($result = $con->query($sql)){ 
if($result->num_rows > 0){ 
echo "<table>"; 
echo "<tr>"; 
echo "<th>Account Number</th>"; 
echo "<th>Name</th>"; 
echo "<th>Address</th>"; 
echo "<th>Account Type</th>";
echo "<th>Balance</th>";   
echo "</tr>"; 
while($row = $result->fetch_array()){ 

    
    echo "<tr>"; 
    echo "<td>" . $row['CustId'] . "</td>"; 
    echo "<td>" . $row['Name'] . "</td>";  
    echo "<td>" . $row['Address'] . "</td>"; 
    echo "<td>" . $row['Account_type'] . "</td>"; 
    echo "<td>" . $row['Balance'] . "</td>"; 
    echo "</tr>"; 
    
    } 
}}
?>
</body>
</html>
