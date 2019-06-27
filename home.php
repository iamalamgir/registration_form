<?php

include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel ="stylesheet" href ="reg.css">
</head>
<body>
    <h2 class ="header">Welcome To Home</h2>

    <div class ="box">
        <center><img src ="home_icon.png" alt ="Image" class ="img"></center>

        <form action ="home.php" method ="POST" align ="center">
            <br>
            
            <input name ="logout" type ="submit" id ="button" value ="Log-Out"></input>
            
        </form>
        <?php
            if(isset($_POST['logout'])){
                    echo"
                        <script>
                            alert ('You are Successfully Logged out');
                            window.location.href='login.php';
                        </script>
                    ";
            }else{
                //logout check
            }
        ?>
    </div>
</body>
</html>