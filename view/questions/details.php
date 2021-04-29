<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Discuss Forum - Where Developers Learn, Share, &amp; Build Careers</title>
  <link rel="stylesheet" href="/ediscuss/view/static/css/details.css">
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <div class="left">
      <!-- <img src="../../static/files/logo.PNG" alt=""> -->
      <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite">
      <input type="text" placeholder="Search...">
    </div>
    <div class="right">

    </div>
  </nav>

  <!-- Section Content Body -->
  <div class="section">
    <div class="side-menu">
      <ul>
        <!-- <li><a href="../index.php" class="active-home">Home</a></li> -->
        <li><a href="/index.php">Home</a></li>
        <li><a href="/ediscuss/view/users/profile.php">Profile</a></li>
      </ul>
    </div>
    <div class="question">
      <div class="top-question">
        <?php
        $row = $result2->fetch_assoc();
        ?>
        <div class="heading">
          <!-- <a href="#">Django 'WSGIRequest' object has no attribute 'Post'</a> -->

          <a href="#"><?php echo $row['queTitle']; ?></a>
        </div>

        <div class="ask-button">
          <button>
            <a class="ask-me-anchor" href="ask_question">Ask Question</a>
          </button>
        </div>
        <div class="clearfix"></div>
      </div>

      <!-- main container -->
      <div class="question-details">
        <div class="question-content">
          <p>
            <h1><?php echo $row['queDesc']; ?></h1>
          </p>
          <?php

          ?>
          <div class="question-fields">
            <center>

              <!-- <input class="action-buttons-response" type="submit" name="upvote" value="Up Vote" style="background-color: green;">
              <input class="action-buttons-response" type="submit" name="downvote" value="Down Vote" style="background-color: orange;"> -->
              <!-- <input class="action-buttons-response" type="submit" name="" value="Edit" style="background-color: blue;">
              <input class="action-buttons-response" type="submit" name="" value="Delete" style="background-color: red;"> -->
            </center>

          </div>
          <center>
            <div class="container">

              <?php
              foreach ($result3 as $row) {

              ?>
                <div class="col-lg-10">
                  <div id="ans" name="ansDesc">

                    <h1>Answer</h1>
                  </div>
                  <div class="row" name="ansDesc">
                    <?php echo $row['ansDesc']; ?>
                    <!-- <p>python is a backend languages and Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque in quod aliquam porro nam similique rem inventore, sed quo itaque, architecto ipsam autem magni? Commodi ullam neque aperiam error dolores.<p> -->
                    <br>
                    <div class="col-lg-2">
                      <div class="row">
                        <input class="action-buttons-response" id="upwote" type="submit" name="upvote" value="Up Vote" style="background-color: green;" data-id="<?php echo $row['ansId']; ?>" />
                        <input class="action-buttons-response" id="downwote" type="submit" name="downvote" value="Down Vote" style="background-color: orange;">
                      </div>
                    </div>

                  </div>
                  <div class="answer-content">



                  </div>
                </div>
              <?php
              }
              ?>

              <!-- <div class="col-lg-2">
                <div class="row">
                  <input class="action-buttons-response" id="upwote" type="submit" name="upvote" value="Up Vote" style="background-color: green;">
                  <input class="action-buttons-response" id="downwote" type="submit" name="downvote" value="Down Vote" style="background-color: orange;">
                </div>
              </div>

            </div> -->


              <div class="answer">
                <form class="" action="answer_pst" method="post">
                  <h4>Your Answer</h4>

                  <textarea name="ansDesc" id="editor1" cols="30" rows="5"></textarea>
              </div>
              </br>


              <input type="submit" name="" class="submit-answer-to-questions" value="Submit Answer">
              <input type="hidden" name="qid" class="submit-answer-to-questions" value="<?php $_GET['qid']; ?>">
              <hr>
              </hr>
          </center>
          </form>
        </div>
        <div class="right-menu">
          <p><span>Asked:</span> Today</p>
          <p><span>Viewed:</span> 11</p>
          <p><span>Active:</span> Today</p>
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


    </div>
    <div class="clearfix"></div>
  </div>


  <!-- Footer -->
  <!-- <footer>
    <p>&copy; 2021 - E-Discuss Forum.</p>
  </footer> -->


  <!-- WYSIWYG Editor -->
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor1');
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#upwote').click(function() {


        var pid = $(this).data('id');
        alert(pid);
        $.ajax({
          url: '/edisucss/model/upvote.php',
          data: {
            'post_id': pid
          },
          type: 'POST',

          success: function(response) {
            // if (response) {
            //   that = response;
            // } else {
            //   that = 0;
            // }
            alert(response);

            // alert(response);
          }

        });
        // alert(that);
        //$(this).closest("div").siblings("label").text(that);

      });
    });
  </script>

</body>

</html>