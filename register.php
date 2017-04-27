<?php
    require("database.php");
        // echo $_POST['fname'];
    $fname= $_POST['fname'];
    $lname=$_POST['lname'];
    $Email=$_POST['email'];
    $pnumber=$_POST['phone'];
    $birthday=$_POST['birth'];
    $gender=$_POST['gender'];
    $password=$_POST['pass'];
    $query = "INSERT INTO accounts 
(firstname,lastname,email,phonenumber,birthday,gender,password)
    VALUES('$fname','$lname','$Email','$pnumber','$birthday','$gender','$password')";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
?>
    <!DOCTYPE html>
<html>
<head>
        <style>
	body
             {
            background-color: beige;
            }
        </style>
    </head>
    <body>
        <center><tr>
       <td><h1>Registration</h1></td>
       </tr><center>
        <form action="register.php" method="post">
             <label>Email: </label><input type='text' name='email' 
value=""> 
<br>
<br>
             <label>Password: </label><input type='password' name='pass' 
value=""> <br><br>
             <label>First Name: </label><input type='text' name='fname' 
value=""> <br><br>
             <label>Last Name: </label><input type='text' name='lname' 
value=""> <br><br>
             <label>Date Of Birth: </label><input type='text' 
name='birth' value=""> <br><br>
             <label>Gender: </label><input type='text' name='gender' 
value=""> <br><br>
             <label>Phone: </label><input type='text' name='phone' 
value=""> <br><br>
             <input type='submit' name='REGISTER' value="Register">
         </form><br>
         <center>Created an account? Click here to <a href="index.html"> Login </a> </center>    
    </body>
</html>
