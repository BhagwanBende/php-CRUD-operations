<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Welcome to HTML</h1> 

   <form action="" method="POST">

   <label for="user Name">Name :</label> <br>
   <input type="text" name="u_name" id="">
   <br>
   <br>

   <label for="Email">Email :</label> <br>
   <input type="email" name="u_email" id="">
   <br>
   <br>

   <label for="user Password">Password :</label> <br>
   <input type="password" name="u_password" id="">
   <br>
   <br>


   <button name ="register_button" type= "submit">
      Register
   </button>

   </form>
</body>
<?php

if(isset($_POST['register_button']))
{
   $name = $_POST['u_name'];
   $email = $_POST['u_email'];
   $pass = $_POST['u_password'];

   $connection = mysqli_connect('localhost','root','','php');

   if($connection)
   {
       $create_queary = "INSERT INTO user(User_name,Email_name,Password_) VALUES('$name','$email','$pass')";
       $result = mysqli_query($connection,$create_queary);

       if($result)

       {
           echo "data inserted sucessfully";
       }
       else
       {
            echo "error while adding data";
       }
   }
   else
   {
       echo "error in ceonnection";
   }


   echo $email;
   echo $pass;
}


?>
</html>