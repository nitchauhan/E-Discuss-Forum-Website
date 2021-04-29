<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Model
{
    public $con;
    public function __construct()
    {
        $this->con = new mysqli("localhost", "root", "", "stackoverflow");
        // $this->con = new mysqli("localhost", "nitin", "nitin", "stackoverflow");

        if ($this->con->connect_error) {
            //   echo "<script>alert('not connected')</script>";
        } else {
            // echo "<script>alert('connected')</script>";
        }
    }

    public function insert_data()
    {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass1'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['pass1'];
            //   $confirmpassword = $_POST['confirmpassword'];
            echo $name . "<br>";
            echo $email . "<br>";
            echo $password . "<br>";
            $qry = "insert into User(name,email,password) values('$name','$email','$password')";
            $result = mysqli_query($this->con, $qry);
            if ($result) {

                $_SESSION['user'] = $name;
                echo "<h1 style='color:red'>Data inserted sucessfully</h1>";



                require '../vendor/autoload.php';


                // $data = 'yuvraj.addweb@gmail.com';
                $mail = new PHPMailer(true);

                try {

                    $mail->SMTPDebug  = 0;

                    $mail->isSMTP();
                    // $mail->Host       = 'smtp.sendgrid.net';
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    // $mail->Username   = 'apikey';
                    $mail->Username   = 'nitin.addweb@gmail.com';
                    // $mail->Password   = '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';
                    $mail->Password   = 'Addweb@4221';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;
                    $mail->setFrom('smith27202@gmail.com', 'E-Discuss Forum.');
                    $mail->addAddress($email, 'Joe User');



                    $mail->isHTML(true);
                    $mail->Subject = 'Here is the subject';
                    $mail->Body    = 'Hello ' . $email . '<br>
        You recently registered in our website. Here is the username and Password <br> username: ' . "<b>" . $name . "</b>" . '<br><br>
        password :' . "<b>" . $password . "</b>" .  '
          <br>Thanks.<b>||Team E-discuss Forum||';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();

                    //echo "success";
                } catch (Exception $e) {

                    //  return "fail";
                    echo "not:;" . $mail->ErrorInfo;
                }
            } else {
                echo "<h1 style='color:red'>Not inserted something if fishy</h1>" . $this->con->error;
            }
            header("location:login");
        } else {
            return "not";
        }
    }



    // login start
    public function login()
    {

        if (isset($_POST['name']) && isset($_POST['pass1'])) {
            // if (isset($_POST['email']) &&isset($_POST['name']) && isset($_POST['pass1'])) {
            // $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['pass1'];
            // $confirmpassword = $_POST['pass2'];

            // // echo $_POST['confirmpassword'];

            $qry = "select * from User where name='$name' && password='$password'";
            // $qry = "select * from User where email='$email' && password='$password'";

            $result = mysqli_query($this->con, $qry);
            // if ($result) 
            $admin = "admin";
            if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                // print_r($row);
                if ($row['usertype'] == 'admin') {
                    header("location:index_admin");
                } else {
                   
                  
                    header("location:index");
                }
                 // session_start();
                 $_SESSION['id'] = $row['userId'];
                 $_SESSION['loggedin'] = true;
                 $_SESSION['name'] = $name;


            } else {

                echo "<script>alert('Not logged')</script>";

            }
        } else {
            //   echo "andar naio jato, hgdhgc";
        }
    }

    // login end

    // search question and answer

    public function searchque_id()

    {
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            //  echo $search."by id";
            $qry = "select * from questionMaster where queId=$search"; // or queTitle like '%$search%' or queDesc like '%$search%'";
            $result = mysqli_query($this->con, $qry);
            // $noresults = 1;
            if ($result->num_rows > 0) {

                return $result;
            } else {
                $qr = "select * from questionMaster where queTitle like '%$search%' or queDesc like '%$search%'";
                $res = mysqli_query($this->con,$qr);
                if($res->num_rows>0)
                {
                    return $res;
                }
                else
                {

                }
            }
        }
    }


    public function searchque()

    {
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            //  echo $search."not id  ";

            $qry = "select * from questionMaster where queTitle like '%$search%' or queDesc like '%$search%'";
            $result = mysqli_query($this->con, $qry);
            // $noresults = 1;
            if ($result->num_rows > 0) {

                return $result;
            } else {
            }
        }
    }

    // add catagory
    public function cat()
    {

        $query = "select * from catagory";
        $result = $this->con->query($query);
        return $result;
    }

    public function quePost()
    {
        if (isset($_POST['queTitle']) && isset($_POST['c_id']) && isset($_POST['queDesc'])) {
            $queTitle = $_POST['queTitle'];
            $c_id = $_POST['c_id'];
            $u_id = $_SESSION['id'];
            $queDesc = $_POST['queDesc'];
            $qry = "insert into questionMaster(queTitle,userId,c_id,queDesc) values('$queTitle','$u_id','$c_id','$queDesc')";
            $result = mysqli_query($this->con, $qry);
            if ($result) {
                header("location:index");
            } else {
                echo "<h1 style='color:red'>Not instert Question</h1>" . $this->con->error;
            }
        }
    }



    public function showQue()
    {
        if (isset($_GET['search'])|| isset($_GET['qid'])) {
            $qry = "select * from questionMaster where queId='$_GET[search]' or queId='$_GET[qid]'";
            $result2 = mysqli_query($this->con, $qry);
            if ($result2->num_rows > 0) {
                $row = $result2->fetch_assoc();
                return $row;
            }
        }
    }




    public function showans()
    {
        
        if (isset($_GET['search'])) {
        
            $que_id = $_GET['search']; //$row['queId'];
        
            $qry = "select * from answerMaster where queId='$que_id'";
            $result2 = mysqli_query($this->con, $qry);
            if ($result2->num_rows > 0) {

                while ($row = $result2->fetch_assoc())
                    $r[] = $row;
                return $result2;
            }
        }

        //   else {
        //     // echo "in else";
        //     $qry = "select * from answerMaster";
        //     $result2 = mysqli_query($this->con, $qry);
        //     // $result2=$this->con->query($qry);
        //     if ($result2->num_rows > 0) {
        //         return $result2;
        //     }
        // }
    }




    public function showall()
    {
        $query = "select * from questionMaster";
        $result = $this->con->query($query);
        if ($result->num_rows) {
            return $result;
        }
    }

    public function profile()
    {
        $id = $_SESSION['id'];
        // print_r($_SESSION);
        $q = "select count(*) as ans from answerMaster where userId = '$id'";
        $q1 = "select count(*) as que from questionMaster where userId = '$id'";

        $result = mysqli_query($this->con, $q);
        $data = $result->fetch_assoc();
        $result1 = mysqli_query($this->con, $q1);
        $data1 = $result1->fetch_assoc();
        $qry = "SELECT * from User where userId='$id'";
        $result3 = mysqli_query($this->con, $qry);
        $data2 = $result3->fetch_assoc();
        $res = array_merge($data, $data1, $data2);
        // print
        return $res;
    }
    public function editprofilfunc()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $img =  $_FILES["uploaded_file"]["name"];

        $id = $_SESSION['id'];
        // echo "imagename =" . $img;
        $qr = "UPDATE User SET name='$name', email='$email',img='$img' WHERE userId='$id'";
        if (mysqli_query($this->con, $qr)) {
            //echo "update";
            $_SESSION['name'] = $name;
            if (!empty($_FILES['uploaded_file'])) {



                $path = "view/profiles/";
                $path = $path . basename($_FILES['uploaded_file']['name']);
                //echo $path;
                if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                    //echo "The file " .  basename($_FILES['uploaded_file']['name']) .
                    " has been uploaded";
                } else {
                    //echo "There was an error uploading the file, please try again!";
                }
            }
        } else {
            echo $this->con->error;
        }
    }

    public function recentquestions()
    {
        $query = "select * from questionMaster ORDER BY `queTitle` and `queDesc` DESC LIMIT 2";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row['queTitle'];
            }
        }
    }

    public function postanswer()
    {
        // echo "hello postanswer";
        if ($_POST['submit']) {
            if (isset($_GET['search']) && isset($_SESSION['id']) && isset($_POST['ansDesc'])) {
                $que = $_GET['search'];
                $uid = $_SESSION['id'];
                $ans = $_POST['ansDesc'];
                // echo "SUBMIT Answer :".$ans."question:".$que."uid:".$uid;

                // $g_que = "SELECT queId from questionMaster where queTitle like '$que%' ";
                // $result = mysqli_query($this->con, $g_que);
                // $row = $result->fetch_assoc();
                // $que_id = $row['queId'];

                $query = "insert into answerMaster(queId,userId,ansDesc) values('$que','$uid','$ans')";
                $result2 = $this->con->query($query);
                if ($result2) {
                    //  echo "inserted".$this->con->error;
                } else {
                    echo "not inserted " . $this->con->error;
                }
            }
        } else {
            // echo "not presed";
        }
    }

    public function logout()
    {
        echo "logout successfully..";
        session_start();
        session_unset();
        session_destroy();
        header("Location:login");
    }


    public function edit_que()
    {
        // echo "updateeeee";
        if (isset($_POST['queTitle']) && isset($_POST['c_id']) && isset($_POST['queDesc'])) {

            // echo "1";
            $queTitle = $_POST['queTitle'];
            // $queTitle = $_POST['queTitle'];
            $c_id = $_POST['c_id'];
            $u_id = $_SESSION['id'];
            $q_id = $_GET['qid'];
            $queDesc = $_POST['queDesc'];
            echo $queTitle . "<br>";
            echo $c_id . "<br>";
            echo $queDesc . "<br>";
            $qr = "UPDATE questionMaster SET queTitle='$queTitle', queDesc='$queDesc',c_id='$c_id' WHERE queId='$q_id'";
            $result = mysqli_query($this->con, $qr);
            echo $result;
            if ($result) {
                header("location:index_admin");
            } else {
                echo "<h1 style='color:red'>Not Update Question</h1>" . $this->con->error;
            }
        }
        else{
            //echo "not found";
        }
    }
}
