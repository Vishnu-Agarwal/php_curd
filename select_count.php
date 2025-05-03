<?php
$conn=mysqli_connect("localhost","root","","vishnu");
$sqlqry = "SELECT COUNT(id) as  total FROM demo";// as is using for create variable ex:= total:
$store= mysqli_query($conn, $sqlqry);
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
        <table border=3>
            <tr>
                <th>id</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>password</th>
                <th>delete</th>
                <th>update</th>

            </tr>
            <tr>
                <th colspan="10"><a href="insertdemo.php">insert</a></th>
            </tr>
            
                <?php
                while($row=mysqli_fetch_array($store))
                {
                ?>
                <tr>
                    <td><?php echo $row["total"]?></td>
                    
                </tr>

                <?php
                }?>

               
            
            
        </table>
    </form>
</body>
</html>
