    <?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./CSS/login.css">
        <title>ASHTHA CHARITABLE TRUST</title>
    </head>
    <body>
        
        <div class="container" align="left">
            <div class="input">
            <form method="POST" action="login.php">
                <?php include('errors.php')?>
                <p><b><center>Login here!!</b></center></p>
                <br>
                
                <input type="text" name="username" placeholder="Enter Username" required><br>
                <br>
                <input type="password" name="password"  placeholder="Enter Password" required>

                <br>
                <br>
                <span></span><a href="./register.php" >Dont Have an Account?</a>
            </div>
                <button type = "submit" name="login_user">Login</button>
                

            </form>
        </div>
       
        <script src="./JS/login.js" async defer></script>
    </body>
</html>