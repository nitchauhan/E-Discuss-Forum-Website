<?php

session_start();
$con = new mysqli("localhost", "nitin", "nitin", "stackoverflow");

$user = $_POST['name'];
$qr="SELECT * FROM User WHERE `name` LIKE '$user%'";
$data = mysqli_query($con,$qr);
		$count = $data->num_rows;
	
		if($count>0)
		{
			$value="";
			while($row=$data->fetch_assoc())
			{
				 // $value='<div id="suggest">
					// 	 <div id="wrapper">
		   //          '.$row['user_name'].'
		   //          </div>
		   //      </div>';
		        echo "<div><a href='search_user?uid=".$row['userId']."'><img 
                            src='/Instagram/views/profiles/".$row['img']."' class='profile-form__avatar'
                        >".$row['name']."</a></div><br>";
			}
            
			// 	$r[]=$row;
			// echo json_encode($r);
		
		}

		else
		{
			echo "user not found";
		}

?>
