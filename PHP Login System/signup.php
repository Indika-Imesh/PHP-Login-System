<?php 
    require "header.php";

?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Signup</h1><br>
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyfields") {
                            echo '<p class="signuperror"> Fill in all fields!</p>';
                        }
                        else if ($_GET['error'] == "invaliduidmail") {
                            echo '<p class="signuperror"> Invalid username and email!</p>';

                        }
                        else if ($_GET['error'] == "invaliduid") {
                            echo '<p class="signuperror"> Invalid username!</p>';

                        }
                        else if ($_GET['error'] == "invalidmail") {
                            echo '<p class="signuperror"> Invalid e-mail!</p>';

                        }
                        else if ($_GET['error'] == "passwordcheck") {
                            echo '<p class="signuperror"> Your passwords do not match!</p>';

                        }
                        else if ($_GET['error'] == "usertaken") {
                            echo '<p class="signuperror"> Username is already taken!</p>';

                        }
                    }
                    else if (isset($_GET['signup']) && ($_GET['signup'] == "success")) {
                        echo '<p class="signupsuccess"> Signup successful!</p>';
                    }
                
                ?>
                <form class="signpage" action="includes/include_signup.php" method="post">
                    <input type="text" name="uid" placeholder="Username"><br><br>
                    <input type="text" name="mail" placeholder="E-mail"><br><br>
                    <input type="Password" name="pwd" placeholder="Password"><br><br>
                    <input type="Password" name="pwd-repeat" placeholder="Repeat Password"><br><br>
                    <button type="submit" name="signup-submit"> Signup</button><br>
                </form>
            </section>
        </div>
    </main>

