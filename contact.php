<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fresh Juice Store - contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body >
<?php include("navbar.php") ?>
<!-- contact us -->
    <br><br>
    <div id="contact_us" align="center"  >
        <br>
        <h1>Contact Us</h1>
        <form action="mailto:freshjuice@gmail.com">
            Your Name
            <br><br>
            <input type="text" name="name" id="" style="width: 400px;padding: 10px;" placeholder="Enter your name here...">
            <br><br>
            Write here your suggetions, inquiries and any issues to send it to us
            <br><br>
            <textarea  name="suggetions" placeholder="Type your suggetions here..."  cols="50" rows="8"></textarea>
            <br><br>
            <input class="send-button" type="submit" value="Submit">
        </form> 
        <br> <br> <br>
    </div><br> <br> <br><br>
<!-- footer -->
<?php include("page-end.php") ?>
</body>
</html>