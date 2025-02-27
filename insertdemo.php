<?php
 $conn=mysqli_connect("localhost","root","","vishnu");
 if(isset($_POST['submit']))
 {
    $f=$_POST['firstname'];
    $l=$_POST['lastname'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $sqlqry="INSERT INTO `demo`(`id`, `name`, `last_name`, `email`, `password`) VALUES (null,'$f','$l','$e','$p')";
    mysqli_query($conn,$sqlqry);
    header("location:selectdemo.php");
   
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border="5">
            <tr>
                <th>first name</th>
                <th><input type="text" name="firstname" id=""></th>
            </tr>
            <tr>
                <th>last name</th>
                <th><input type="text" name="lastname" id=""></th>
            </tr>
            <tr>
                <th>email</th>
                <th><input type="email" name="email"></th>
            </tr>
            <tr>
                <th>password</th>
                <th><input type="password" name="password" id=""></th>
            </tr>
            <tr>
                <th colspan="3"><input type="submit" name="submit" id=""></th>
            </tr>
        </table>
    </form>
</body>
</html>