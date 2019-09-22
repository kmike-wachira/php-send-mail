<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send mail</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <center><h1>Send Mail</h1></center>
    <div class="container m-auto">
        <form action="backend/sendmail.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="enter your name here" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="mymail@example.co.ke" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="enter your subject here" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="10" required></textarea>
            </div>
            <input type="submit" class="btn btn-primary mr-1" name="send" value="send messages"> 
        </form>
        <?php
        if(isset($_SESSION['success'])){
            echo '<div class="alert alert-success">
            <strong>Success!</strong> Message sent successfully
          </div>';
        }
        ?>
    </div>
    <script src="jquery3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>