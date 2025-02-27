<?php
 $conn=mysqli_connect("localhost","root","","vishnu");
 $idea=$_GET['myidea'];
 if(isset($_POST['submit']))
 {
    $f=$_POST['firstname'];
    $l=$_POST['lastname'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $sqlqry="UPDATE `demo` SET `id`='$idea',`name`='$f',`last_name`='$l'
            ,`email`='$e',`password`='$p' WHERE id=$idea";
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
    <?php
   $sqlqry="SELECT * FROM `demo` WHERE id=$idea";
   $store=mysqli_query($conn,$sqlqry);
   $root=mysqli_fetch_assoc($store);
    ?>
    <form action="" method="post">
        <table border="5">
            <tr>
                <th>first name</th>
                <th><input type="text" name="firstname" id="" value="<?php echo $root['name']?>"></th>
            </tr>
            <tr>
                <th>last name</th>
                <th><input type="text" name="lastname" id="" value="<?php echo $root['last_name']?>"></th>
            </tr>
            <tr>
                <th>email</th>
                <th><input type="email" name="email" value="<?php echo $root['email']?>"></th>
            </tr>
            <tr>
                <th>password</th>
                <th><input type="password" name="password" id="" value="<?php echo $root['password']?>"></th>
            </tr>
            <tr>
                <th colspan="3"><input type="submit" name="submit" id="" ></th>
            </tr>
        </table>
    </form>
</body>
</html>