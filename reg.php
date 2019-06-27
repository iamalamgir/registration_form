<?php

include 'config.php';

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

            <input name ="reg" type ="submit" id ="button" value ="Sign-Up"></input>
            <a href ="login.php"><input name ="back" type ="button" id ="button" value ="Back to Log-In"></input></a>
        </form>
        <?php
            if(isset($_POST['reg'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];

                if($pass == $cpass){ 
                    $query ="SELECT*FROM user where email='$email'";
                    $query_check= mysqli_query($con, $query);

                    if($query_check){
                        if(mysqli_num_rows($query_check) > 0){
                            echo"
                                <script>
                                    alert ('Email Already In User');
                                    window.location.href='login.php';
                                </script>
                            ";
                        }else{
                            $insertion= "insert into user values('$name', '$email', '$pass')"; 
                            $run= mysqli_query($con, $insertion);
                            if($run){
                                echo"
                                <script>
                                    alert ('You are Successfully Registered');
                                    window.location.href='home.php';
                                </script>
                            ";
                            }else{
                                echo"
                                <script>
                                    alert ('Connection Failed');
                                    window.location.href='reg.php';
                                </script>
                            ";
                                //run else
                            }
                        }
                    }else{
                        echo"
                            <script>
                                alert ('Database Error');
                                window.location.href='reg.php';
                            </script>
                        ";
                        //query_check
                    }
                }else{
                    echo"
                        <script>
                            alert ('Password & Confirm-Password Does't match');
                            window.location.href='reg.php';
                        </script>
                    ";
                    //password else
                }
            }else{
                //isset ar else
            }
        ?>

    </div>

</body>
</html>