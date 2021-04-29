<html>

<body>
	<?php


	session_start();
	// $con = new mysqli("localhost", "root", "root", "stackoverflow");
	$con = new mysqli("localhost", "nitin", "nitin", "stackoverflow");
	$cur_id = $_SESSION['id'];

	/*if($_SESSION["ansid"]=="")
{
	$_SESSION["ansid"]=$_GET['ans_id'];
	$ansId=$_SESSION["ansid"];
}
else
$ansId= $_SESSION["ansid"];*/
	$ansId = $_GET["ans_id"];
	
	$exist = "SELECT * FROM downvote WHERE userId=$cur_id AND ansId=$ansId";
	$res = mysqli_query($con, $exist);
	if ($res->num_rows > 0) {
		$qry = "DELETE FROM downvote WHERE userId = $cur_id AND ansId=$ansId";
		//$qry="update downvote set status=0 where userId= $cur_id AND ansId=$ansId";
		$con->query($qry);
		echo "del";
	} else {
		$qry = "INSERT INTO downvote VALUES ($cur_id,$ansId,1)";
		//$qry="update downvote set status=1 where userId= $cur_id AND ansId=$ansId";
		$con->query($qry);
		echo "in";
	}


	/*$rqy = "SELECT count(*) as total from downvote WHERE ansId= $ansId ";
$result = mysqli_query($con,$rqy);
$data = $result->fetch_assoc();*/

	//echo $data['total'];
	?>
</body>

</html>