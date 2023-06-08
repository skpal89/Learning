<?php



if(isset($_POST)&& !empty($_POST)){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $hobbies = implode(',',$_POST['hobbies']);
    $contact =$_POST["contact"];
    $email =$_POST["email"];
    $address =$_POST["address"];
    $password =$_POST["password"];

    $servername="localhost";
    $username="root";
    $password="";
    $database="ecom";

    /*create connection*/
    $conn=mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user (name, gender, course, hobby, contact, email, address, password) values('".$name."','". $gender."','".$course."','".implode(',',[$hobbies])."','".$contact."','".  $email."','".$address."','".$password."')";

    //echo $sql; 
    if (mysqli_query($conn, $sql)) {
        ?>
    <a href="login.php">Sign In</a><br>
    <?php
        echo " saved successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
      mysqli_close($conn);
}


  

?>
<html>
    <body>
        <form action="RegPage.php" method="post">
        <h1>Registration Form</h1>
        <label>Name:</label><br>
        <input type="text" name="name"><br>
        <label>Gender:</label><br>
        <input type="radio" id="male" name="gender" value="Male">Male<br>
        <input type="radio"id="female" name="gender" value="female">Female<br>
        <input type="radio" id="other" name="gender" value="other">Other<br>
        <label>Course:</label>
        <select name="course">
        <option value="">Select</option>
            <option value="BCA" name= >BCA</option>
            <option value="BBA">BBA</option>
            <option value="BTech">BTech</option>
            <option value="MCA">MCA</option>
            <option value="MBA">MBA</option>
            <option value="MTech">Mtech</option>
        </select><br>
        <label>Hobbies:</label><br>
        <input type="checkbox" id="Programming" name="hobbies[]" value="Programming">Programming<br>
        <input type="checkbox" id="Watching Movies" name="hobbies[]" value="Watching Movies">Watching Movies <br>
        <input type="checkbox" id="Cricket" name="hobbies[]" value="Cricket">Cricket<br>
        <input type="checkbox" id="hockey" name="hobbies[]" value="Hockey">Hockey<br>
        <label>Contact No.:</label><br>
        <input type="text" name="contact"><br>
        <label>E-mail:</label><br>
        <input type="text" name="email"><br>
        <label>address:</label><br>
        <textarea name="address" id="address" rows="6" col="140"></textarea><br>
        <label>Password:</label><br>
        <input type="text" name="password"><br>
        <input type="Submit" value="Submit">
</body>
    </html>
