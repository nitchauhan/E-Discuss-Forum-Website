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
  <!-- new added bootstrap-4 Links -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > -->
  <title>E-Discuss Forum - Where Developers Learn, Share, &amp; Build Careers</title>
  <link rel="stylesheet" href="/ediscuss/view/static/css/index.css">
</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  .sumitQuestion {
    background-color: green;
    border: 1px solid black;
    border-radius: 2px;
    padding: 5px;
    font-weight: bold;
    cursor: pointer;
  }

  .foo {
    margin-top: 70px;
    padding: -10px;
    /* margin-bottom: 10px; */
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

<body>
  <!-- Navigation Bar -->
  <nav>
    <div class="left">
      <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite">

      <span><input type="text" name="queTitle" placeholder="Search..."></span>
      <a href="profile" class="user-button">Welcome Admin: <?php echo $_SESSION['name'] ?></a>


      <div class="sign-in-up">
      </div>

    </div>

    <div class="right">

    </div>
  </nav>

  <!-- Section Content Body -->
  <div class="section">
    <div class="side-menu">
      <ul>
        <li><a href="index" class="active-home">Home</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="edit">EditProfile</a></li>
        <li><a class="a1" href="logout">Logout</a></li>
      </ul>
    </div>

    <div class="question">
      <div id="myLoginDIV" style="display: none;">
        
      </div>





      <div class="question-fields">
        <center>



          <div class="answer">
            <form class="" action="" method="post">
              <h3>Title of the Question</h3>
              <textarea rows="2" cols="50" name="queTitle" class="question-area" placeholder="Please, provide a brief and straight-forward title to your question"><?php echo $result2['queTitle'];?></textarea>
              <!-- <textarea rows="2" cols="50" class="question-area" name="queTitle" placeholder="Please, provide a brief and straight-forward title to your question"></textarea> -->
              <!-- catagory start -->
              <h3><label for="tec">Choose a Technology</label></h3>

              <select class="users-select" name="c_id">


                <!-- while loop fetching the data -->

                <?php

                foreach ($result as $row) {
                ?>
                  <option value="<?php echo $row['c_id']; ?>"><?php echo $row['cName']; ?></option>
                <?php

                }

                ?>
              </select>
              <!-- catagory end -->
              <h4>Description of the Question</h4>
              <div class="editor-ask-question-description">
                <textarea name="queDesc" id="editor1" cols="30" rows="5"><?php echo $result2['queDesc'];?></textarea>
                <!-- <textarea name="queDesc" id="editor1" cols="30" rows="5"></textarea> -->

              </div>

          </div>

          </br>
          <input type="hidden" name="qid" value="<?php $_GET['qid'];?>" >
          <input class="sumitQuestion" type="submit" name="" value="Submit Question">
          <hr>
          </hr>
        </center>
        </form>

      </div>



      </br></br>


      <div class="search-features">
        
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
          </br>


          <hr>
          </hr>
        </div>
      </center>


      <div class="top-question">
      </div>

      <!-- Content -->

      <!-- Post One -->
      <div class="post-body">
        <div class="post">

          <div class="post-title">
            <!-- <h3><a href="/ediscuss/view/questions/details.php">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maxime ad soluta adipisci quae. Mollitia officia repellat in?</a></h3> -->
            <!-- <h3><a href="details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maxime ad soluta adipisci quae. Mollitia officia repellat in?</a></h3> -->
          </div>
        </div>
        <!--End of Post -->
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

  <div class="clearfix"></div>


  <!-- Footer -->
  <footer class="foo">
    <p>&copy; 2021 - E-discuss Forum || All Rights reserverd</p>

  </footer>


  <!-- WYSIWYG Editor -->
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor1');
  </script>
  <!-- new added bootstrap-4 Links -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="/ediscuss/view/static/javascripts/main.js"></script>
  <!-- <script src="../../static/javascripts/main.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#upwote').click(function() {


        var pid = $(this).data('id');
        alert(pid);
        $.ajax({
          url: '/ediscuss/model/upvote.php',
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