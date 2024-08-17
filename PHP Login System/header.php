<?php
    session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="This is an PHP lOgin System">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="index.php">
                <img src="img/Evoke_logo.png" alt="logo">
            </a>
            <ul class="list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="header-login">
                <?php
                    if(isset($_SESSION['userId'])) {
                        echo '<form action="includes/include_logout.php" method="post">
                            <button class="logoutb" type="submit" name="logout-submit">Logout</button>
                            </form>';
                    }
                    else {
                        echo '<form action="includes/include_login.php" method="post">
                                <input class="placeholder" type="text" name="mailuid" placeholder="Username/E-mail... ">
                                <input class="placeholder" type="password" name="pwd" placeholder="Password....">
                                <button class="loginb" type="submit" name="login-submit">Login</button>
                            </form>
                            <a class="sign" href="signup.php">Signup</a>';
                    }
                ?>
            
            
            </div>
        </nav>
        
    </header>
</body>

</html>