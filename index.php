<?php
$insert = false;
if(isset($_POST['name']))
{ 
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO `travel`.`trip` ( `name`, `age`, `gender`, `email`, `password`, `date` ) VALUES ( '$name', '$age', '$gender', '$email', '$password', current_timestamp());";
if($con->query($sql) == true)
{
   // echo "Successfully Updated";
   $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
    
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <img class="bg" src="bg.jpg" alt="Travel">
    <div class="container">
        <h1>Welcome to Travel</h1>
        <p>Enter your details</p>
        <?php
        if($insert == true)
        {
        echo "<p class='submitMsg'>Thanks for submitting</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <button class="btn">Submit</button>
            


        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>