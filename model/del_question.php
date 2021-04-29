<?php


// $con = new mysqli("localhost", "nitin", "nitin", "stackoverflow");
$con = new mysqli("localhost", "root", "", "stackoverflow");

$quid = $_POST['qid'];
echo $quid;
if(isset($quid))
{
    $qry = "DELETE from questionMaster where queId=$quid";
    if($con->query($qry))
    {
        echo "deleted";
    }
    else
    {
        echo "not deleted".$con->error;
    }

}

else{
    echo "data id not found:";
}

?>