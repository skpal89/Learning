<?php
if(isset($_GET['user'])){
    echo 'Welcome '.$_GET['user'];
}else{
    echo 'Welcome !!!';
}
?>
<htm>
    <body>
    <form action="home.php" method="post"> 
  <input type="submit" value="Logout"> 
</form> 
</body>
    </html>