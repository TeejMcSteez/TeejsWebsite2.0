<?php 
    session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Teejs Testing Enviroment</title>  
        
    </head>
    <body>
        <style type="text/css">
            img{
                align-self: center;
            }
            body {
                background: linear-gradient(to right, skyblue, aqua, blue, red);
            }
            h1 {
                font-size: 50px;
                padding:10px;
                border-radius: 10px;
                background: linear-gradient(to right, red, pink, purple, magenta);
                text-align: center;
            }
            p {
                font-size: 12px;
                font-family: 'Times New Roman', Times, serif;
                text-align: justify;
            }
        </style>

        <a href="logout.php">Logout</a>

        <img src = "sloth.jpg" height="700" width="1300" alt="this is a smiling sloth for someone">


        <h1 rel="bullshit" class="h1">This is a smiling sloth for <?php echo $user_data['userName'];?></h1>
        <p>this is also not the best website btw...</p>

    </body>
</html>