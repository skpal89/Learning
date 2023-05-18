<?php

if(isset($_GET['id']))
{
  $data = getData($_GET['id']);

  //echo '<pre>';print_r($data);
}

function getHobbies(){
  $hobbies = '';
  foreach($_POST['hobby'] as $hobby){
    $hobbies = $hobbies.$hobby.', ';
  }

  return $hobbies;
}

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
    $sql="SELECT * FROM student_info where student_id=".$id;
    if ($result = mysqli_query($conn, $sql)) {
      $row = $result->fetch_assoc();
      return $row;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
/**
 *  save data
 * 
 */
function saveData($post)
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

    $hobby = implode('|', $post['hobby']); 

    $sql = "INSERT INTO student_info (first_name, last_name, course, gender, hobbies, phone, address, e_mail, password) VALUES ('".$post['firstname']."','". $post['lastname']."','". $post['course']."','". $post['gender']."','".$hobby ."','" .$post['phone'] ."','". $post['address']. "','". $post['email']. "','". $post['pass']."')";

    //echo $sql; die;
    if (mysqli_query($conn, $sql)) {
      echo "data saved successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  }

if(isset($_POST) && !empty($_POST)){

  echo 'Name :'.$_POST['firstname']. ' '.$_POST['lastname'].'<br/>';
  echo 'Course :'.$_POST['course'].'<br/>';
  echo 'Gender :'.$_POST['gender'].'<br/>';
  echo 'Hobby :'.implode('|', $_POST['hobby']). '<br/>';
  echo 'Phone & Email :'.$_POST['phone']. ' '.$_POST['email'].'<br/>';
  echo 'Addresss :'.$_POST['address'];

  saveData($_POST);
}


?>
<!Doctype Html>  
<Html>     
<Head>  
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: green;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>    
<Title>     
Create a Registration form   
</Title>  
</Head>  
<Body>   
 
  <h1>Registration form:</h1>
    <p>Please fill in this form to create an account.</p>
    <hr> 
<br>    
<form action="" name="registration-page" method="post"> 
<div class="container">   
<label> Firstname </label>           
<input type="text" placeholder="Enter First name" name="firstname" size="15" value="<?php echo $data['first_name'] ?>"/> <br> <br>   
<label> Lastname: </label>           
<input type="text" placeholder="Enter Last name"name="lastname" size="15" value="<?php echo $data['last_name'] ?>"/> <br> <br>    
<label>     
Course :    
</label> 
<?php
  $courses =['BCA','BBA', 'B.Tech', 'MBA', 'MCA', 'M.Tech']
?>    
<select name="course">    
  <option value="">Select</option>  
  <?php 
    foreach($courses as $course){
  ?>
  <option value="<?php echo $course?>" <?php if($data['course'] == $course){echo 'selected';}?>><?php echo $course?></option>
  <?php
    }
  ?>
</select>    
<br>    
<br>    
<label>     
Gender :    
</label><br>    
<input type="radio" name="gender" <?php if(strtolower($data['gender']) == 'male'){echo 'checked';}?>/> Male <br>    
<input type="radio" name="gender" <?php if(strtolower($data['gender']) == 'female'){echo 'checked';}?>/> Female <br>    
<input type="radio" name="gender" <?php if(strtolower($data['gender']) == 'other'){echo 'checked';}?>/> Other    
<br>    
<br>    
<label>  
Hobbies:  
</label>    
<br>    
<input type="checkbox" name="hobby[]" <?php if(strtolower($data['hobbies']) == 'programming'){echo 'checked';}?>> Programming <br>    
<input type="checkbox" name="hobby[]" <?php if(strtolower($data['hobbies']) == 'cricket'){echo 'checked';}?>> Cricket <br>    
<input type="checkbox" name="hobby[]" <?php if(strtolower($data['hobbies']) == 'football'){echo 'checked';}?>> Football  <br>   
<input type="checkbox" name="hobby[]" <?php if(strtolower($data['hobbies']) == 'reading novel'){echo 'checked';}?>> Reading Novel  <br>   
<br>    
<br>   
<label>     
Phone :    
</label>      
<input type="text" placeholder="Enter phone no."name="phone" size="10" value="<?php echo $data['phone'] ?>"> <br> <br>    
Address    
<br>    
<textarea cols="80" rows="5"  name="address"><?php echo $data['address'] ?></textarea>    
<br> <br>    
Email:    
<input type="email" placeholder="Enter E-mail" id="email" name="email" value="<?php echo $data['e_mail'] ?>"> <br>      
<br> <br>    
Password:    
<input type="Password" placeholder="Enter Password" id="pass" name="pass" value="<?php echo $data['password'] ?>"> <br>     
<br> <br>    
<input type="submit" value="Submit">    
<input type="reset" value="Reset">  
</div>
</form>    
</Body>   
</Html>  
