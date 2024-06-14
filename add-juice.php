<?php

    if (isset($_POST["j_name"]) && isset($_POST["j_price"])) {
        $j_name = $_POST["j_name"];
        $j_price = (float)$_POST["j_price"];
        $j_img_tmp = $_FILES["j_img"]["tmp_name"];
        $j_img = $_FILES["j_img"]["name"];

        include("database-connect.php");
        $sql = "INSERT INTO juice(name,img,price) VALUES ('$j_name','$j_img',$j_price)";
        
        if(mysqli_query($con, $sql))
            move_uploaded_file($j_img_tmp,'img/img/'.$j_img);
        header("Location:control-page.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fresh Juice Store</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body >

    <?php include("navbar.php") ?>
    <br>
    <div id="juice_control" align="center">
        <br><h1>Add new Juice</h1>
        <form action="" method="post" enctype="multipart/form-data" >
            <input  type="text" name="j_name" style="width: 400px;padding: 10px;" required placeholder="Enter Juice name" >
            <br><br>
            <input type="text" name="j_price" style="width: 400px;padding: 10px;" required placeholder="Enter Juice price">
            <br><br>
            <input type="file" name="j_img" style="width: 400px;padding: 10px;" required accept=".gif,.jpg,.jpeg,.png">
            <br><br>
            <input type="submit" value="Send" class="add-button">
            <br><br>

        </form>
        
    </div>
    
     
<?php include("page-end.php") ?>
</body>
</html>