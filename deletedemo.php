<?php
    $conn=mysqli_connect("localhost","root","","vishnu");
    $idea=$_GET['myidea'];
    $sqlqry="DELETE FROM `demo` WHERE id=$idea";
    mysqli_query($conn,$sqlqry);
    header("location:selectdemo.php");

?>