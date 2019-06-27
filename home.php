<?php

include 'config.php';

//Below others function
/*$conn = $connect;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();*/
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