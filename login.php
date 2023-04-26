<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something was posted
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        if(!empty($userName) && !empty(($password)) && !is_numeric($userName)){
            //read from database
            
            $query = "select * from users where userName = '$userName' limit 1";
            $result = mysqli_query($con, $query);

            if ($result) {
                if($result && mysqli_num_rows($result) > 0) {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            echo "Wrong Username or Password";

        }else {
            echo "Please enter valid information";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div id="box">
            <form method="post">
                <div>Login</div>
                <input type="text name" name="userName">
                <input type="password" name="password">
                <input type="submit" value="login">

                <a href="signup.php">Signup</a>
            </form>
        </div>
    </body>
</html>