<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Discuss Forum - Where Developers Learn, Share, &amp; Build Careers</title>
    <link rel="stylesheet" href="/ediscuss/view/static/css/index.css">
    <!-- boostrap link -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

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
            <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite">
            <input type="text" placeholder="Search...">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                <div class="sign-in-up">
                    <a class="login-button" href="login" onclick="showLoginPage()">Log In</a>
                    <a class="register-button" href="signup" onclick="showSignUpPage()">Sign Up</a>
                </div>
            <?php } ?>

        </div>

        <div class="right">

        </div>
    </nav>

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
            <div id="mySignUpDIV" class="sign-up-here" style="display:block">

                <center>
                    <form class="sign-up-form" action="" method="post">
                        <label for="">UserName</label>
                        </br>
                        <input class="left-input" type="text" name="name" value="" size="35" required>
                        </br>


                        <label for="">Email</label>
                        </br>
                        <input class="left-input" type="text" name="email" value="" size="35" required>
                        </br>


                        <!-- 
                        <label for="">UserName</label>
                        </br>
                        <input class="left-input" type="text" name="uname" value="" size="35" required>
                        </br> -->

                        <label for="">Password</label>
                        </br>
                        <input class="left-input" type="password" id="pass1" name="pass1" value="" required>
                        </br>



                        <label for="">Confirm Password</label>
                        </br>
                        <input class="left-input" type="password" id="pass2" name="pass2" value="" required>
                        </br>
                        </br>


                        <input class="sign-up-button" id="sub" type="submit" name="register" value="Sign Up">
                        </br>

                        </br>
                        <!-- Have an account already?<a onclick="showLoginPage()" id="recover-password" href="login.php">Log In Here</a> -->
                        Have an account already?<a onclick="showLoginPage()" id="recover-password" href="login">Log In Here</a>
                    </form>
                </center>



            </div>

        </div>
        <div class="top-question">
            <!-- <div class="heading">
            <h1>Top Questions</h1>
        </div> -->
            <!-- <div class="ask-button">
            <button><a class="ask-me-anchor" href="questions/ask_question.php" >Ask Question</a></button>
        </div> -->
            <!-- <div class="clearfix"></div>
        <div class="interesting">
            <ul>
              <li><a href="#">Interesting</a></li>
              <li><a href="#">Featured</a></li>
              <li><a href="#">Hot</a></li>
              <li><a href="#">Week</a></li>
              <li><a href="#">Month</a></li>
            </ul>
          </div> -->
        </div>


        <!-- Content -->



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

    </div>



    <div class="clearfix">
    </div>


    <!-- Footer -->
    <footer class="foo">
        <p>&copy; 2021 - E-discuss Forum || All Rights reserverd</p>

    </footer>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#sub').click(function() {
                $pass = $('#pass1').val();
                $con = $('#pass2').val();
                if ($pass != $con) {
                    alert("Password doesn't match.");

                    return false;
                } else {
                    alert("Password match...");
                    return true;
                }
            });
        });
    </script>

    <script src="/ediscuss/view/static/javascripts/main.js"></script>
</body>

</html>