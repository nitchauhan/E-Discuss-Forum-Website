<?php
$con=new mysqli("localhost","nitin","nitin","stackoverflow");
$query="select * from questionMaster ORDER BY `queTitle` and `queDesc` DESC LIMIT 10";
        $result=mysqli_query($con,$query);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo $row['queTitle']."<br>";
            }
        }

?>