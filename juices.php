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
     <div id="top_juice" align="center"  >
        <br><h1 >Juices</h1>
        <?php
                include("database-connect.php");
                $juices = mysqli_query($con,"SELECT * from juice");
                $i = 1;
                while($r = mysqli_fetch_array($juices)){
                ?>
                <div>
                    <img src="img/img/<?php echo $r['img'] ?>" width="250px" height="250px" alt="">
                    <h2> <?php echo $r['name'] ?></h2>
                    <p><span ><?php echo $r['price'] ?></span> SAR</p>
                </div>

            <?php
               $i+=1; }
            ?>
        
        <br><br><br>
    </div><br>
<?php include("page-end.php") ?>

    <script>

alert("Welcome to our store, Enjoy your time")
    </script>
</body>
</html>