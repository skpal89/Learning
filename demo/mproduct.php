<?php
//echo '<pre>';print_r( $_POST);
//echo '<pre>';print_r( $_FILES);
if(isset($_FILES)&& !empty($_FILES)){
    $targetDirectory = "image/";
    $targetFile = $targetDirectory . basename($_FILES["img"]["name"]);
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
      echo "File uploaded successfully.";
    } else {
      echo "File upload failed.";
    }
}


if(isset($_POST)&& !empty($_POST)){
    $img = $_FILES["img"]['name'];
    $name = $_POST['name'];
    $discription = $_POST["discription"];
    $price=$_POST["price"];

    $servername="localhost";
    $username="root";
    $password="";
    $database="ecom";

    /*create connection*/
    $conn=mysqli_connect($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO product (img, product_name, discription, price) values('".$img."','".$name."','".$discription."','".$price."')";

    //echo $sql; die;
  if (mysqli_query($conn, $sql)) {
    echo "data saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
    ?>

<html>
    <body>
        <form action="mproduct.php" method="post" enctype="multipart/form-data">
        <h1>Registration Form</h1>
        <label>Image:</label><br>
        <input type="file" name="img"><br>
        <label>Product Name:</label><br>
        <input type="text" name="name"><br>
        <label>Discription:</label><br>
        <textarea name="discription" id="discription" rows="6" col="140"></textarea><br>
        <label>Price:</label><br>
        <input type="text" name="price"><br>
        
        <input type="Submit" value="Submit">
</body>
    </html>