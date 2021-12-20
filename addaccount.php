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
            <a href="adminhome.php"> <li>Home</li></a>
               <li><a href="accounts.php">Accounts</a></li>
               <a href="addaccount.php"><li>Add new Account</li></a>
               <a href="adminfeedback.php"> <li>Feedback</li></a>
            </ul>
           <a href="index.php"><button class="btn">Log Out</button></a>
        </nav>
        
</style>
</head>
<body>

        <form action="getbankacc.php" method="POST">
            Name: <input type="text" id="name" name="name"></input><br><br>
            Address: <input type="text" id="addr"name="addr"></input><br><br>
            Type of Account: <input type="text" id="acc_type" name="acc_type"></input><br><br>
            Balance: <input type="text" id="balance" name="balance"></input><br><br>
            Customer ID: <input type="text" id="cid"name="cid"></input><br><br>
             <input type="submit"value="Submit" onclick="a1()"></input>
        </form>

        <script>
 function al(){
     alert("Account Added");
 }
 </script>


</body>
</html>

</body>

</html>



