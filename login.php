<?php

include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Log-In</title>
    <link rel ="stylesheet" href ="reg.css">
</head>
<body>
    <h2 class ="header">Welcome To Log-In</h2>

    <div class ="box">
        <center><img src ="img_avatar3.png" alt ="Image" class ="img"></center>

        <form action ="login.php" method ="POST" align ="center">
            <br>
            <label>User Email</label>
            <input name ="email" type ="email" id ="form" placeholder ="Enter your Email"></input>
            <br>

            <label>User Password</label>
            <input name ="pass" type ="password" id ="form" placeholder ="Enter your Password"></input>
            <br>

            <input name ="login" type ="submit" id ="button" value ="Log-In"></input>
            <a href ="reg.php"><input name ="reg" type ="button" id ="button" value ="Registration"></input></a>
        </form>
    </div>

</body>
</html>