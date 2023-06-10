<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database= "ecom";
 $conn=mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

if(isset($_POST)&& !empty($_POST))
{
    $userId = $_POST["userId"];
    $pwd = $_POST["password"];
    
   $sql="SELECT * FROM user where email='".$_POST["userId"]."' AND password='".$_POST["password"]."'";
   $res = mysqli_query($conn, $sql);
    if($res->num_rows > 0){
        header("Location:product.php?user=".$userId);
    }else{
        echo 'Invalid credentials or user not exist!';
    }
   //echo '<pre>'; print_r($res);
   //echo $sql;
 
}
?>
<html>
    <body>
        <h1> Login</h1>
        <form action="login.php" method="post">
        <label>Name:</label><br>
        <input type="text" id="user" name="userId"><br>
        <label>Password:</label><br>
        <input type="text" id="password" name="password"><br><br>
        <input type="Submit" value="Submit">
 </body>
</html>