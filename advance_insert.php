<?php
 $conn=mysqli_connect("localhost","root","","vishnu");
 if(isset($_POST['submit']))
 {
    $f=$_POST['firstname'];
    $l=$_POST['lastname'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $c=$_POST['city'];
    $g=$_POST['gender'];
    $h=$_POST['hobbie']; //checkbox multiple value
    $h=implode(",",$h); //array element into a string

    $image=$_FILES['image']['name']; // image and name upload
    $tmp_name=$_FILES['image']['tmp_name']; //  tempararey image and name 
    $path="image/".$image; // path of folder , dot(.) used for joining the string $image = "picture.jpg + image/
    move_uploaded_file($tmp_name,$path); // image  upload in user system

    $sqlqry="INSERT INTO `demo`(`id`, `name`, `last_name`, `email`, `password`,`city`, `gender`,`hobbies`,`image`) VALUES (null,'$f','$l','$e','$p','$c','$g','$h','$image')";
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
    <form action="" method="post" enctype="multipart/form-data">
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
                <th>city</th>
                <th><select name="city" id="">
                    <option value="select">select</option>
                    <option value="surat">surat</option>
                    <option value="ahmedabad">ahmedabad</option>
                    <option value="rajkot">rajkot</option>
                </select></th>
            </tr>
            <tr>
                <th>gender</th>
                <th><p>male</p><input type="radio" name="gender" id="" value="male"> <p>female</p><input type="radio" name="gender" id="" value="female"></th>
            </tr>
            <tr>
                <th>hobbies</th>
                <td>
                    <input type="checkbox" name="hobbie[]" value="reading" id="">reading
                    <input type="checkbox" name="hobbie[]" value="wandering" id="">wandering
                    <input type="checkbox" name="hobbie[]" value="travelling" id="">travelling
                    <input type="checkbox" name="hobbie[]" value="shopping" id="">shopping

                </td>
            </tr>
            <tr>
                <td>image</td>
                <td><input type="file" name="image" id=""></td>
            </tr>
            <tr>
                <th colspan="3"><input type="submit" name="submit" id=""></th>
            </tr>
        </table>
    </form>
</body>
</html>