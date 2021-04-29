<?php
// Start the session
session_start();
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="/ediscuss/view/static/javascripts/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
    <script>
        $(document).ready(function() {
            $('#upwote').click(function() {
                var pid = $(this).data('id');
             
                $.ajax({
                    type: 'GET',
                    url: '../model/upvote_downvote.php?ans_id=' + pid,

                    success: function(result) {
                       // $('#ajaxresult').html(result);
                        alert(result);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert("Error type" + textStatus + "occured, with value " + errorThrown);
                    }
                });

            });
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Discuss Forum - Where Developers Learn, Share, &amp; Build Careers</title>

    <link rel="stylesheet" type="text/css" href="/ediscuss/view/static/css/index.css">








    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <style type="text/css">
        .mystyle {

            display: inline-block;

        }

        .post-title {
            display: inline-block;
            position: relative;
            float: right;
        }

        .mystyle ul li {
            list-style-type: none;
            padding: 5px;
            border: 1px solid gray;
            display: inline-block;
        }

        .submitanswer {
            background-color: green;
            border: 1px solid black;
            border-radius: 2px;

            padding: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .user-button {
            background-color: whitesmoke;
            border: 1px solid whitesmoke;
            font-weight: bold;
            padding: 10px;
            float: right;
            margin: 10px 10px;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <!-- Navigation Bar -->
    <nav>

        <div class="left">
            <form action="search.php" method="get">
                <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite">
                <input type="search" name="search" placeholder="Search...">
                <a href="profile" class="user-button">Welcome : <?php echo $_SESSION['name'] ?></a>



            </form>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                <div class="sign-in-up">

                    <!-- <button class="register-button" onclick="showSignUpPage()">logout</button> -->
                </div>
            <?php } ?>

        </div>

       
            </nav>

    <!-- Section Content Body -->
    <div class="section">
        <div class="side-menu">
            <ul>
                <li><a href="index" class="active-home">Home</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a class="a1" href="logout">Logout</a></li>


            </ul>
        </div>

        <div class="question">
        

            <div class="container">




                <div class="post">
                    <?php

                    while ($row = $result->fetch_assoc()) {

                        $queTitle = $row['queTitle'];
                        $queDesc = $row['queDesc'];
                        $queId = $row['queId'];
                        $noresults = false;

                        // Display the search result
                        echo
                            "<b><h1>$queTitle</b>";
                        // ".$queDesc";

                    ?>


                        <h3><?php echo $row['queDesc']; ?></h3>

                        <?php

                        ?>

                        <div class="container">

                            <?php
                            foreach ($result3 as $row) {

                            ?>
                           
                                <div class="col-lg-10">
                                    <div id="ans" name="ansDesc">

                                        <h1>Answer</h1>
                                    </div>
                                    <div class="row" name="ansDesc">
                                        <?php echo $row['ansDesc']; ?><br>
                                        <br>
                                        <br>
                                        <?php echo "ahiya aavo joia answer"; ?>

                                        <br>
                                        <div class="col-lg-2">
                                            <div class="row">
                                                <br>


                                                <input class="action-buttons-response" id="upwote" type="submit" name="upvote" value="Up Vote" style="background-color: green;" data-id="<?php echo $row['ansId']; ?>" />
                                                <input class="action-buttons-response" id="downwote" type="submit" name="downvote" value="Down Vote" style="background-color: orange;">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                       

                    <?php
                            }
                    ?>
                     </div>
                    <div id="ajaxresult">
                    </div>
                    <div class="answerPost">
                        <form class="" action="" method="post">
                            <h4>Your Answer</h4>


                            <textarea style="height: 300px;width: 800px" name="ansDesc"></textarea>
                            <br>

                            <input type="submit" name="" class="submitanswer" value="Submit Answer">
                            <input type="hidden" name="qid" class="submitanswer" value="<?php $_GET['qid']; ?>">

                        </form>
                    </div>


                <?php

                    }


                ?>
                </div>

            </div>
        </div>
    </div>
     
    

</body>

</html>