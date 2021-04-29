// // forgot Password
    // public function forgot()
    // {
    // }
    // /*
	// 	$data = $_SESSION['email'];
    //   //echo $data;
     
    //  	 if(isset($_POST['code']) && isset($_POST['password']))
    //  	 {
    //  	 	$code = $_POST['code'];
    //  	 	$varify = $_SESSION['code'];
    //  	 	$pass = $_POST['password'];
     	
    //  	 	if($code == $varify)
    //  	 	{

    //  	 	$qry = "UPDATE user SET password='$pass' WHERE user_email='$data'";
    //  	 	if(mysqli_query($this->conn, $qry))
	// 			{ 
	// 		//echo "data inserted successfully";
	// 				?>
	// 				<div id='ht' class='alert alert-success alert-dismissible' style='display:inline;'>
    // 		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   	// 		Password changed.
  	// 				</div>
	// 				<?php
	// 				//header('Location:/views/login.php');
	// 				include_once 'views/login.php';	
	// 			}
	// 			else
	// 			{
	// 		 	echo "Error: "  . "<br>" . $this->conn-> error;	
	// 			}

    //  	 	}
    //  	 	else
    //  	 	{
    //  	 		?>
    //  	 		<div id='ht' class='alert alert-danger alert-dismissible' style='display:inline;'>
    // 		<button type='button' class='close' data-dismiss='alert'>&times;</button>
   	// 		Wrong code.
  	// 				</div>
    //  	 		<?php
    //  	 	}
    //  	 }

	// }*/



    // public function usersearch()
    // {
    // }
    // // $user = $_POST['name'];
    // // $qr = "SELECT * FROM User WHERE `name` LIKE '$user%'";
    // // $data = mysqli_query($this->con, $qr);
    // // $count = $data->num_rows;

    // // if ($count > 0) {
    // //     $value = "";
    // //     while ($row = $data->fetch_assoc()) {
    // // $value='<div id="suggest">
    // // 	 <div id="wrapper">
    // //          '.$row['user_name'].'
    // //          </div>
    // //      </div>';
    // // echo "<div><a href='search_user?uid=".$row['userId']."'><img 
    // //             src='/Instagram/views/profiles/".$row['img']."' class='profile-form__avatar'
    // //         >".$row['name']."</a></div><br>";

    // //     }

    // //     // 	$r[]=$row;
    // //     // echo json_encode($r);

    // // } else {
    // //     echo "user not found";
    // // }
    // //}



    //----> catagory search

    // public function searchcat()
    // {
    //     if(isset($_GET['search']))
    //     {
    //         $search = $_GET['search'];
    //         // echo $search;
    //         $qry = "select * from catagory where cName like '%$search%'";
    //         $result = mysqli_query($this->con,$qry);

    //         if($result->num_rows>0)
    //         {

    //             return $result;

    //         }

    //     }
    // }


