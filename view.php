<?php

// get query param 
$studentId = isset($_GET['id']) ? $_GET['id'] : null;
getData($studentId);

function getData($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $sql="SELECT * FROM student_info";
    if(!empty($id)){
      $sql.= " where student_id=".$id;
    }

    $result = mysqli_query($conn, $sql);

    $table = '';
    $table .= '
      <table border="1" style="margin-left:auto;margin-right:auto">
        <th> Id </th>
        <th> Name </th>
        <th> Course </th>
        <th> Gender </th>
        <th> Hobby </th>
        <th> Phone & Email </th>
        <th> Addresss </th>
        <th> Action </th>
    ';
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $table .= '<tr>
              <td>' .$row['student_id'].'</td>
              <td>' .$row['first_name']. ' '.$row['last_name']. '</td>
              <td>' .$row['course'].'</td>
              <td>' .$row['gender'].'</td>
              <td>' .$row['hobbies'].'</td>
              <td>' .$row['phone']. ' '.$row['e_mail']. '</td>
              <td>' .$row['address'].'</td>
              <td>';
              $table .='<a href="registration.php?id='.$row['student_id'].'" target="_blank">Edit</td>
            </tr>';
        }
    }

    $table .='</table>';

    echo $table;

    mysqli_close($conn);

}

?>
