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
                <li><a href="userhome.php">Cash Withdrawal</a></li>
                <li><a href="userhome.php">Feedback</li>
            </ul>
            <a href="index.php"><button class="btn">Log Out</button></a>
        </nav>
        
</style>
</head>
<body>


<div class="container">
  <form action="feedback1.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">


    <label for="subject">Feedback</label>
    <textarea id="subject" name="fdb" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

</body>

</html>
