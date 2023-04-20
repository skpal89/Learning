<?php
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
<form> 
<div class="container">   
<label> Firstname </label>           
<input type="text" placeholder="Enter First name" name="firstname" size="15"/> <br> <br>   
<label> Lastname: </label>           
<input type="text" placeholder="Enter Last name"name="lastname" size="15"/> <br> <br>    
<label>     
Course :    
</label>     
<select>    
<option value="Course">Course</option>    
<option value="BCA">BCA</option>    
<option value="BBA">BBA</option>    
<option value="B.Tech">B.Tech</option>    
<option value="MBA">MBA</option>    
<option value="MCA">MCA</option>    
<option value="M.Tech">M.Tech</option>    
</select>    
<br>    
<br>    
<label>     
Gender :    
</label><br>    
<input type="radio" name="gender"/> Male <br>    
<input type="radio" name="gender"/> Female <br>    
<input type="radio" name="gender"/> Other    
<br>    
<br>    
<label>  
Hobbies:  
</label>    
<br>    
<input type="checkbox" name="Programming"> Programming <br>    
<input type="checkbox" name="Cricket"> Cricket <br>    
<input type="checkbox" name="Football"> Football  <br>   
<input type="checkbox" name="reading Novel"> Reading Novel  <br>   
<br>    
<br>   
<label>     
Phone :    
</label>      
<input type="text" placeholder="Enter phone no."name="phone" size="10"> <br> <br>    
Address    
<br>    
<textarea cols="80" rows="5" value="address">    
</textarea>    
<br> <br>    
Email:    
<input type="email" placeholder="Enter E-mail" id="email" name="email"> <br>      
<br> <br>    
Password:    
<input type="Password" placeholder="Enter Password" id="pass" name="pass"> <br>     
<br> <br>    
<input type="submit" value="Submit">    
<input type="reset" value="Reset">  
</div>
</form>    
</Body>   
</Html>  
