<?php
if(isset($_COOKIE["userName"])){
    header('location:welcome.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Rental System</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="loginForm" >
        <form action="test.php" method="post">
            <input type="text" placeholder="name" name="name"></br>
            <input type="text" placeholder="password" name="password"></br>
            <input type="submit" value="click">
        </form>
    </div>
    
</body>

</html>