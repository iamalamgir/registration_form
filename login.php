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
        <?php
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $query ="SELECT*FROM user where email='$email' AND pas='$pass'";
                $check = mysqli_query($con, $query);

                    if($check){
                        if(mysqli_num_rows($check) > 0 ){
                            echo"
                                <script>
                                    alert ('You are Successfully Logged In');
                                    window.location.href='home.php';
                                </script>
                            ";
                        }else{
                            echo"
                                <script>
                                    alert ('Email or Password not Correct !');
                                    window.location.href='login.php';
                                </script>
                            ";
                            //email & pass check
                        }
                    }else{
                        echo"
                            <script>
                                alert ('Database Error');
                                window.location.href='login.php';
                            </script>
                        ";
                        //query else
                    }
            }else{
                //login click check
            }
        ?>
    </div>

</body>
</html>