<?php
// Start the session
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
    header("location : login.php");
}
// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-Discuss Forum - Where Developers Learn, Share, &amp; Build Careers</title>
  <!-- <link rel="stylesheet" href="../../static/css/index.css"> -->
  <link rel="stylesheet" href="/ediscuss/view/static/css/index.css">
</head>
<style>
  /* h3,p{
    text-align: center;
    color: black;
  }
  .n1{
    text-align: center;
    color: black;
  }
  label{
    color: green;
    text-align: center;
  } */
</style>

<body>

  <nav>

        <div class="left">
            <form action="" method="get">
                <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite">
                <input type="search" name="search" placeholder="Search...">
                
            </form>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                <div class="sign-in-up">

                </div>
            <?php } ?>

        </div>


    </nav>

  <!-- Section Content Body -->
  <div class="section">
    <div class="side-menu">
      <ul>
        <li><a href="index" class="active-home">Home</a></li>

        <!-- <li><a href="../users/profile.php">Profile</a></li> -->
        <li><a href="profile">Profile</a></li>
        <li><a href="edit">EditProfile</a></li>
        <li><a href="logout">Logout</a></li>


      </ul>
    </div>

    <div class="question">
      <div id="myLoginDIV" style="display: none;">
        
      </div>



      <div class="site-update-profile">
        <div class="side-update-content">
          <h3><u><b>USER PROFILE</b></u></h3>
          <div class="tooltip">
          <br>
            <img class="img-dp" src="/ediscuss/view/profiles/<?php echo $result['img'];?>" alt="Profile Picture" width="100" height="100">
            
            <span class="tooltiptext">Edit Profile</span>
          </div>
          <hr>
          <h3><u>ACTION PROFILE<u></h3>
          
          <p>Total Questions Asked => <b><?php echo $result['que'];?></b></p>
          <p>Total Answers Provided => <b><?php echo $result['ans'];?></b></p>
          
        </div>
        <div>

          <hr>
          <h3>PERSONAL DETAILS</h3>
          <label for="nm">Name :</label>
          <a class="n1" href="profile"><?php echo $_SESSION['user']?></a><br>

          <label for="mail">Mail Address :</label>
          <a class="n1" href="profile"><?php echo $_SESSION['user'].@'gmail.com'?></a>
        </div>
      </div>
      <hr>
      </br></br>


      <div class="search-features">
        <center>
          
        </center>
      </div>


      <!-- Content -->

      <!-- Post One -->
      <div class="post-body-profile">
        <div class="post">
          <div class="post-rating">
            
          </div>
          <div class="post-title">
          
          </div>
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
  <!-- <footer>
    <p>&copy; 2021 - E-Discuss Forum.</p>
  </footer> -->

  <!-- WYSIWYG Editor -->
  <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor1');
  </script>

  <script src="/ediscuss/view/static/javascripts/main.js"></script>
</body>

</html>