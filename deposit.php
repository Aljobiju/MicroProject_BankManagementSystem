

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Management</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/feedback1.css">
   
</head>

<body>
    <div class="main-container">
        <!-- Header Navbar  --> 
        <nav class="navbar">
            <img src="assets/images/logo5.png">
            <ul class="nav-links">
                <li><a href="userhome.php">Accounts</a></li>
                <li><a href="userhome.php">Cash Deposit</a></li>
                <li><a href="transaction.php">Cash Withdrawal</a></li>
                <li><a href="feedback.php">Feedback</li>
            </ul>
            <a href="index.php"><button class="btn">Log Out</button></a>
        </nav>
        
</style>
</head>
<body>


<div class="container">
<form action="updatedepo.php" method="POST">
 Customer ID: <input type="text" id="cid" name="cid">
 </select>
 <br><br>
 Deposit Amount: <input type="text" id="amt" name="amt"></input><br><br>
 <input type="submit"value="Submit" onclick="al()" ></input>
 </form>
 <script>
 function al(){
     alert("Cash Credited to account");
 }
 </script>
</div>

</body>
</html>

</body>

</html>
