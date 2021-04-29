<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Discuss Forum - Where Developers Learn, Share, &amp; Build Careers</title>
    <link rel="stylesheet" href="/ediscuss/view/static/css/index.css">
</head>

<style>
    * {
        box-sizing: border-box;
        padding: 0px;
        margin: 0px;
    }

    .foo {
        margin-top: 73px;
        /* margin-bottom: 10px; */
    }

    .login-button {
        text-decoration: none;
        font-weight: bold;
        color: whitesmoke;
        /* border-radius: 12px ; */
        /* border: 1px solid whitesmoke; */

    }

    .register-button {
        text-decoration: none;
        font-weight: bold;
        color: whitesmoke;
    }
</style>

<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="left">
            <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite"><span>
                <input type="text" class="src" placeholder="Search..."></span>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>

                <div class="sign-in-up">
                    <!-- <button class="login-button" onclick="showLoginPage()">Log In</button>
                    <button class="register-button" onclick="showSignUpPage()">Sign Up</button> -->
                    <a class="login-button" href="login" onclick="showLoginPage()">Log In</a>
                    <a class="register-button" href="signup" onclick="showSignUpPage()">Sign Up</a>
                </div>
            <?php } ?>

        </div>

        <div class="right">


        </div>

    </nav>
    <?php //echo "<script>alert('Hello Nitin You are successfully login')</script>"
    ?>
    <!-- alret starts -->

    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> -->

    <!-- alrets end -->
    <!-- Section Content Body -->
    <div class="section">
        <div class="side-menu">
            <ul>
                <li><a href="index" class="active-home">Home</a></li>
                <!-- <li><a href="../users/profile.php">Profile</a></li> -->
                <li><a href="/ediscuss/view/users/profile.php">Profile</a></li>


            </ul>
        </div>

        <div class="question">
            <div style="display: block;" id="myLoginDIV">
                <center>
                    <form class="login-form" action="" method="post">
                        <!-- 
                        <div class="my-labels">
                            <label for="">Email</label>
                        </div>

                        </br>
                        <input class="left-input" type="email" name="email" id="email" value="" size="35" required>
                        </br>
                        </br> -->
                        <!-- <label for="User_admin">Choose a Type:</label>

                        <select id="User_admin">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                            
                        </select> -->

                        <div class="my-labels">
                            <label for="">UserName</label>
                        </div>

                        </br>
                        <input class="left-input" type="text" name="name" id="name" value="" size="35" required>
                        </br>
                        </br>

                        <label for="">Password</label>
                        </br>
                        <input class="left-input" type="password" name="pass1" id="pass1" value="" required>
                        </br>
                        </br>
                        <input class="left-input-checkbox" type="checkbox" id="remember-me" class="remember-me" value="Remember Me"> Remember Me<br>
                        </br>
                        <input class="submit-button" id="sub" type="submit" name="login" value="Submit">
                        </br>
                        </br>
                        Forgot Password? <a class="recover-password" href="forgot">Recover It Here</a>

                        </br>
                        </br>
                        Need an account? <a onclick="showSignUpPage()" class="recover-password" href="signup">Sign Up Here</a>
                    </form>
                </center>
            </div>
        </div>
        <div class="side-update">
            <div class="side-update-content">
                <h5>BLOG</h5>
                <hr>
                <a href="#">Get to Know Our New Code of Conduct</a>
            </div>
            <div>
                <br>
                <h5>FEATURED ON META</h5>
                <hr>
                <a href="#">Updated comment flagging - Supporting the new Code of Conduct</a><br>
                <a href="#">Custom question lists is available for testing</a><br>
                <a href="#">Should we burninate the [arrow] tag?</a>
            </div>
            <div>
                <br>
                <h5>HOT META POSTS</h5>
                <hr>
                <a href="#">Do companies receive notifications if an user mentions them in his/her…</a><br>
                <a href="#">How to answer a question when the right answer may not be a good idea</a>
            </div>
        </div>

    </div>



    <div class="clearfix">
    </div>


    <!-- Footer -->
    <footer class="foo">
        <p>&copy; 2021 - E-discuss Forum || All Rights reserverd</p>

    </footer>
    <script src="/ediscuss/view/static/javascripts/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#sub').click(function() {
                $email = $('#email').val();
                $pass = $('#pass1').val();
                if (!$pass && !$email) {
                    alert("please fill the email and passwords.");

                    return false;
                } else if ($email == email) {
                    alert("email doesn't match.");

                    return false;
                } else if ($pass == password) {
                    alert("Password doesn't match.");

                    return false;
                } else {
                    alert("Password match...");
                    return true;
                }
            });
        });
    </script>
</body>

</html>