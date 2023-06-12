<?php
if(isset($_GET['user'])){
    echo 'Welcome '.$_GET['user'];
}else{
    echo 'Welcome !!!';
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Product Display</title>
  <style>
    .product {
      width: 200px;
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      float: left;
    }

    .product img {
      width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .product h3 {
      margin: 0;
      font-size: 16px;
    }

    .product p {
      margin: 0;
      font-size: 14px;
      color: #888;
    }
  </style>
</head>
<body>
    <?php
        //Fetch data from product table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecom";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * FROM product";
    $result =mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
   ?>
    <div class="product">
        <img src="<?= 'image/'.$row['img']?>" alt="Product 1">
        <h3><?= $row['product_name'] ?></h3>
        <p>Description:<?=$row['discription']?></p>
        <p>Price:<?= $row['price'] ?> </p>
        <button>Add to Cart</button>
    </div>
  <?php
            }
        }
  ?>
</body>
</html>

