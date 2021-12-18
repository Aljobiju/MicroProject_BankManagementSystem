<?php
$mysqli = new mysqli("localhost", "root", "", "bank_management"); 
$Email = $_POST["email"];
$Password = $_POST["psw"];

$sql = "SELECT mail,psw FROM users WHERE mail='$Email'";
if($result = $mysqli->query($sql)){ 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_array()){ 
            //checking  
            if($row['mail']=='admin@gmail.com'){
                header('Location: ./adminhome.php');
            }
                elseif($row['psw']==$Password){
                    header('Location: ./userhome.php');
                }
            else{
                header('Location: ./index.php');
            }
            } 
        }
}  
?>