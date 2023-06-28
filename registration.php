<?php

function getHobbies(){
  $hobbies = '';
  foreach($_POST['hobby'] as $hobby){
    $hobbies = $hobbies.$hobby.', ';
  }

  return $hobbies;
}

function dbConnection()
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
  return $conn;
}

function getData($id)
{
    $conn = dbConnection();
    $sql="SELECT * FROM student_info where student_id=".$id;
    if ($result = mysqli_query($conn, $sql)) {
      $row = $result->fetch_assoc();
      return $row;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}
/*
update
 */
function update($id, $post)
{
  $conn = dbConnection();
  $gender = isset($post['gender']) ? $post['gender']: '';

  $sql = "UPDATE student_info SET first_name='".$post['firstname']."', last_name='". $post['lastname']."', course='". $post['course']."', gender='". $gender."', hobbies='".implode("|",$post['hobby'])."', phone='" .$post['phone'] ."', address='". $post['address']. "', e_mail='". $post['email']. "', password='". $post['pass']."' WHERE student_id =$id";

//echo $sql; die;

  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  mysqli_close($conn);

}

function insert($post)
{
  //print_r($post); die;
  $conn = dbConnection();
  $sql = "INSERT INTO student_info (first_name, last_name, course, gender, hobbies, phone, address, e_mail, password) VALUES ('".$post['firstname']."','". $post['lastname']."','". $post['course']."','". $post['gender']."','". implode("|",$post['hobby'])."','" .$post['phone'] ."','". $post['address']. "','". $post['email']. "','". $post['pass']."')";

  //echo $sql; die;
  if (mysqli_query($conn, $sql)) {
    echo "data saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

}

function saveData($post)
{
  $conn = dbConnection();
    
    if(isset($_GET['id']))
    {
      update($_GET['id'], $post); 
    }else{
      insert($post);
    }

   
  }

if(isset($_POST) && !empty($_POST)){
    //echo '<pre>';print_r($_POST);
  saveData($_POST);
}

if(isset($_GET['id']))
{
  $data = getData($_GET['id']);

  //echo '<pre>';print_r($data);
}


?>
<!Doctype Html>  
<Html>     
<Head>  
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:skyblue;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: #c7c2c7;
  border: 2px;
  border-color:black;
  width: 30%;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email], select, textarea {
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

input[type="radio"] {
      background-color: #ff0000;
      border: 2px solid #000000;
      border-radius: 50%;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
      padding: 8px;
      margin-right: 10px;
}


input[type="submit"]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #048f49;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid #0a0ad7;
}

</style>    
<Title>     
Create a Registration form   
</Title>  
</Head>  
<Body>   
 
  <div align="center";><h1>Registration</h1>
    <p>Please fill in this form to create an account.</p>
    </div>
   
    <hr> 
<br>    
<form action="" name="registration-page" method="post"> 
<div class="container">   
<label> Firstname </label>           
<input type="text" placeholder="Enter First name" name="firstname" size="15" value="<?php echo $data['first_name'] ?? '' ?>"/> <br> <br>   
<label> Lastname: </label>           
<input type="text" placeholder="Enter Last name"name="lastname" size="15" value="<?php echo $data['last_name'] ?? '' ?>"/> <br> <br>    
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
  <option value="<?php echo $course?>" <?php if(($data['course'] ?? '') == $course){echo 'selected';}?>><?php echo $course?></option>
  <?php
    }
  ?>
</select>    
<br>    
<br>    
<label> 
<?php
  $gender = $data['gender'] ?? ''; // null coelacing operator
  $hobbies = $data['hobbies'] ?? ''; 
  $hobbiesArray = explode("|",$hobbies);
  //print_r($hobbiesArray) ;

  /*$gender = $data['gender'] ? $data['gender'] : ''; // ternary operator

  if(isset($data['gender'])){      // normal way of doing
    $gender = $data['gender'];
  }else{
    $gender = '';
  }*/


?>
Gender :    
</label><br>    
<input type="radio" name="gender" <?php if(strtolower($gender) == 'male'){echo 'checked';}?> value="male"/> Male <br>    
<input type="radio" name="gender" <?php if(strtolower($gender) == 'female'){echo 'checked';}?> value="female"/> Female <br>    
<input type="radio" name="gender" <?php if(strtolower($gender) == 'other'){echo 'checked';}?> value="other"/> Other    
<br>    
<br>    
<label>  
Hobbies:  
</label>    
<br>    
<input type="checkbox" name="hobby[]" <?php if(in_array('Programming',$hobbiesArray)){echo 'checked';}?> value="Programming"> Programming <br>    
<input type="checkbox" name="hobby[]" <?php if(in_array('Cricket',$hobbiesArray)){echo 'checked';}?> value="Cricket"> Cricket <br>    
<input type="checkbox" name="hobby[]" <?php if(in_array('Football',$hobbiesArray)){echo 'checked';}?> value="Football"> Football  <br>   
<input type="checkbox" name="hobby[]" <?php if(in_array('Reading Novel',$hobbiesArray)){echo 'checked';}?> value="Reading Novel"> Reading Novel  <br>   
<br>    
<br>   
<label>     
Phone :    
</label>      
<input type="text" placeholder="Enter phone no."name="phone" size="10" value="<?php echo $data['phone'] ?? ''?>"> <br> <br>    
Address    
<br>    
<textarea cols="47" rows="5" placeholder="Enter address" name="address"><?php echo $data['address'] ?? ''?></textarea>    
<br> <br>    
Email:    
<input type="email" placeholder="Enter E-mail" id="email" name="email" value="<?php echo $data['e_mail'] ??''?>"> <br>      
<br> <br>    
Password:    
<input type="Password" placeholder="Enter Password" id="pass" name="pass" value="<?php echo $data['password'] ??'' ?>"> <br>     
<br> <br>    
<input type="submit" value="Submit">    
<input type="reset" value="Reset">  
</div>
</form>    

</Body>   
</Html>  
