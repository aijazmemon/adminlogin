<?php 
include("connect.php");

$conn = new connection();

echo $conn->connect();

$success_message = '';  
 if(isset($_POST["submit"]))  
 {  
      $insert_data = array(  
           'adminname'     =>     mysqli_real_escape_string($data->conn, $_POST['adminname']),  
           'password'          =>     mysqli_real_escape_string($data->conn, $_POST['password'])  
      );  
      if($data->insert('adminlogin', $insert_data))  
      {  
           $success_message = 'Post Inserted';  
      }       
 }  

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Admin Login</title>
</head>

<body>
    <form method="post">
        <div class="login-box">
            <h1>Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="adminname" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
  
            <input class="button" type="submit"
                     name="submit" value="Sign In">
        </div>
    </form>
</body>
  
</html>