<?php
// Start the session
session_start();
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//     header("location : login.php");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
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

        .h {
            text-align: center;
            text-decoration: underline;
            font-style: bold;
            color: black;
            cursor: pointer;
        }

        .b {
            background-color: red;
            border: 1px solid black;
            font-weight: bold;
            padding: 10px;
            float: right;
            margin: 0px 10px;
            cursor: pointer;

        }

        .b1 {
            background-color: green;
            border: 1px solid black;
            font-size: 15px;
            font-weight: bold;
            color: black;
            padding: 10px;
            text-decoration: none;
            float: right;
            /* margin: 10px; */
            cursor: pointer;

        }

        /* .foo{
        margin-top: 30px;
        margin-bottom: 10px;
     } */

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

        .user-button {
            background-color: whitesmoke;
            border: 1px solid whitesmoke;
            font-weight: bold;
            padding: 10px;
            float: right;
            margin: 10px 30px;
            cursor: pointer;
        }

        .ask-me-anchor {
            /* background-color: green;
            border: 1px solid black; */
            font-weight: bold;
            padding: 2px;
            float: right;
            margin: 10px 0px;
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

                <!-- <a href="profile" class="user-button">Welcome : <?php// echo $_SESSION['user'] ?></a> -->
                <a href="profile" class="user-button">Welcome Admin: <?php echo $_SESSION['name'] ?></a>


            </form>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                <div class="sign-in-up">

                    <!-- <button class="register-button" onclick="showSignUpPage()">logout</button> -->
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
                <li><a href="index_admin" class="active-home">Home</a></li>
                <!-- <li><a href="profile">Profile</a></li>
                <li><a href="edit">EditProfile</a></li> -->
                <li><a class="a1" href="logout">Logout</a></li>


            </ul>
        </div>

        <div class="question">
            <div id="myLoginDIV" style="display: none;">
                <center>

                </center>
            </div>

            <div id="mySignUpDIV" class="sign-up-here" style="display: none;">
                <center>

                </center>
            </div>

            <div class="search-features">
                <!-- <center> -->
                <!-- <select class="orderby-select" name="">

                        <option name="recent" value="">Most Recent Questions</option>
                        <option name="mostans" value="">Most Answered Questions</option>
                        <option name="mostview" value="">Most Voted Questions</option>
                        <option name="accept" value="">Have Accepted Answers</option>

                    </select>

                    <select class="users-select" name="">

                        <option name="askbyme" value="">Asked By Me</option>
                        <option name="askbyother" value="">Asked by Others</option>

                    </select> -->

                <!-- <input class="my-search-input" type="text" name="search" value="" placeholder="Search Questions..."> -->
                <div class="ask-button">
                    <button><a class="ask-me-anchor" href="ask_question">Ask Question</a></button>
                </div>
                <!-- </center> -->
            </div>


            <div class="container">
                <div class="top-question">

                </div>


                <h1 class="h"> questionList</h1>
                <div class="post">
                    <?php

                    while ($row = $result->fetch_assoc()) {


                    ?>



                        <div class="mystyle">
                            <ul>
                                <li><span>8</span><br> votes</li>
                                <li class="active"><span>4</span><br> answer</li>
                                <li><span>23</span> <br>views</li>
                            </ul>
                        </div>
                        <div class="post-title">

                            <!-- <h3><span><button class="b1">Edit</button><button class="b">Delete</button></span><a href="search.php?search=<?php echo $row['queId']; ?>"><?php echo $row['queTitle']; ?></a></h3> -->
                            <h3><span><a href="edit_que?qid=<?= $row['queId'];?>" class="b1">Edit</a><button class="b" data-id="<?= $row['queId']; ?>">Delete</button></span><a href="search.php?search=<?php echo $row['queId']; ?>"><?php echo $row['queTitle']; ?></a></h3>

                        </div>
                        <br>


                    <?php

                    }


                    ?>
                </div>

            </div>
        </div>
    </div>
    </div>
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
    <!-- <footer class="foo">
        <p>E-discuss Forum || all Rights reserverd</p>
    </footer>
 -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function() {
            // $('.b').click(function() {
                // alert("helm");
            $('body').delegate('.b', 'click', function() {
                var id = $(this).data('id');
                alert(id);
                $.ajax({
                    type: 'POST',
                    data: {
                        'qid': id
                    },
                    url: '../model/del_question.php',
                    
                    success: function(response) {
                        alert(response);
                        // alert("sd");
                    }
                    // alert("sksjvb");
                });
                // alert("amlert");
            });
        });
    </script>


    <script src="/ediscuss/view/static/javascripts/main.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>