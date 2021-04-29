<?php

$con = new mysqli("localhost", "root", "root", "stackoverflow");
// $result = $con->query("call fetchuser(1)");

// if($result->num_rows>0)
// {
//     while($row=$result->fetch_assoc())
//     echo $row['name'];
// }

$result=$con->query("call insertuser('ediscuss',123,'e@e.in',@id)");
$select = $con->query("select @id");
$select = $select->fetch_assoc();
echo $select["@id"];
?>


SELECT c.city_id , c.city_name , s.state_id from city c left JOIN state s ON c.city_id = s.state_id
UNION
SELECT c.city_id , c.city_name , s.state_id from city c right JOIN state s ON c.city_id = s.state_id




SELECT q.queId, q.queTitle , q.queDesc , a.ansId , a.ansDesc from questionMaster q left JOIN answerMaster a ON q.queId = a.ansId
UNION
SELECT q.queId, q.queTitle , q.queDesc , a.ansId , a.ansDesc from questionMaster q left JOIN answerMaster a ON q.queId = a.ansId