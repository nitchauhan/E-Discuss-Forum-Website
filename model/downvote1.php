<?php
//echo "dsfdsfdsf";
session_start();
// $con = new mysqli("localhost", "root", "root", "stackoverflow");
$con = new mysqli("localhost", "nitin", "nitin", "stackoverflow");
// $cur_id=
// echo $cur_id;
$ansId = $_GET['ans_id'];
$userId = $_SESSION['id'];

// $cur_id = 21;
// $ansId= 20;
// echo $ansId;
//$exist = "SELECT * FROM downvote WHERE userId='$userId' AND ansId='$ansId'";
$exist = "SELECT * FROM downvote WHERE userId=$userId AND ansId=$ansId";

$res = mysqli_query($con, $exist);

// echo ($res->num_rows);

if ($res->num_rows > 0) {

    $qry = "DELETE FROM downvote WHERE userId = $userId AND ansId=$ansId";
    $con->query($qry);
    // echo "downvote";
} else {

    $qry = "INSERT INTO downvote(userId, ansId) VALUES ($userId,$ansId)";
    $con->query($qry);
    // echo "downvotre";

}


$rqy = "SELECT count(*) as total from downvote WHERE ansId= $ansId ";
$result = mysqli_query($con, $rqy);
$data = $result->fetch_assoc();
echo $data['total'];


?>