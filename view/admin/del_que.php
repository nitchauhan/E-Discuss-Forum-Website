<?php
$con = new mysqli("localhost", "nitin", "nitin", "stackoverflow");
$queId = $_POST['qid'];
$query = "delete from questionMaster where qid=$queId";
$result = $con->query($query);
if ($result) {
    echo "deleted";
} else {
    echo "not deleted";
}
?>
