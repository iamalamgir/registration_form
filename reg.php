<?php



?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel ="stylesheet" href ="reg.css">
</head>
<body>
    <h2 class ="header">Welcome To Registration Form</h2>

    <div class ="box">
        <center><img src ="reg_icon.png" alt ="Image" class ="img"></center>

        <form action ="reg.php" method ="POST" align ="center">
            <label>User Name</label>
            <input name ="name" type ="text" id ="form" placeholder ="Enter your Name" required></input>
            <br>

            <label>User Email</label>
            <input name ="email" type ="email" id ="form" placeholder ="Enter your Email" required></input>
            <br>

            <label>User Password</label>
            <input name ="pass" type ="password" id ="form" placeholder ="Enter your Password" required></input>
            <br>

            <label>Confirm Password</label>
            <input name ="cpass" type ="password" id ="form" placeholder ="Confirm your Password" required></input>

        </form>

    </div>

</body>
</html>