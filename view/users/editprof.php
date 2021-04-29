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
.left-input{
  border: 1px solid black;
  text-align: center;
  margin: 0px 200px;
}
label,h1{
 
  text-align: center;
  margin: 0px 200px;
}
.submit-button {
            background-color: green;
            border: 1px solid black;
            font-weight: bold;
            padding: 10px;
            float: right;
            margin: 1px 320px;
            cursor: pointer;
        }

</style>

<body>


  <nav>
    <div class="left">
      <form action="" method="get">
        <img src="/ediscuss/view/static/files/logo.PNG" alt="StackOverflow-Lite">
        <input type="search" name="search" placeholder="Search...">
        <!-- <a href="profile" class="user-button">Welcome : <?php //echo $_SESSION['user'] ?></a> -->

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
        <li><a href="edit">EditProfile</a></li>
        <li><a href="profile">Profile</a></li>
        <li><a href="logout">Logout</a></li>


      </ul>
    </div>

    <div class="question">
      <div id="myLoginDIV" style="display: none;">
        
      </div>



      <div class="site-update-profile">
        <div class="side-update-content">
          
          <div class="tooltip">
          </div>
        </div>
        <div>

          <!-- <hr> -->
          <h1>PERSONAL DETAILS</h1>
          <hr>
          <!-- <a href="#">Walter Nyeko</a><br>
          <a href="#">nyekowalter69@gmail.com</a> -->
          <form class="" action="" method="post" enctype="multipart/form-data">
            <label for="">Email</label>
            </br>
            <input class="left-input" type="email" name="email"  required>
            </br>
            </br>
            <label for="">Name</label>
            </br>
            <input class="left-input" type="text" name="name" required>
            </br>
            </br>
            <label for="">Image</label>
            </br>
            <input class="left-input" type="file" name="uploaded_file"
            >
            </br>
            </br>

            <input class="submit-button" type="submit" name="" value="Edit Profile">
          </form>
        </div>
      </div>
      </br></br>


      <!-- Content -->

      <!-- Post One -->
      <div class="post-body-profile">
        <div class="post">
          
          <div class="post-title">
            <!-- <h3><a href="details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam maxime ad soluta adipisci quae. Mollitia officia repellat in?</a></h3> -->
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