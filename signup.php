<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        if(!empty($userName) && !empty(($password)) && !is_numeric($userName)){
            //save to data
            $user_id = random_num(20);
            $query = "insert into users (user_id, userName, password) values ('$user_id', '$userName', '$password')";
            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else {
            echo "Please enter valid information";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
    </head>
    <body>
        <div id="box">
            <form method="post">
                <div>Login</div>
                <input type="text name" name="userName">
                <input type="password" name="password">

                <input type="submit" value="signup">

                <a href="login.php">Click To Login</a>
            </form>
        </div>
    </body>
</html>