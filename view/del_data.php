<html>

<head>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //window.location.reload();
            $(".bid").click(function() {

                var b3 = $(this).data("id");
                //alert(b3);
                $.ajax({
                    url: "deletebook.php",
                    type: "POST",
                    data: {
                        bid: b3
                    },
                    success: function(data) {
                        //alert(data);
                        window.location.reload();
                    }
                })

                // $.ajax({
                // url:""
                // })
            })
        })
    </script>
</head>

<body style="background-color: #ffe4c4">
    <form enctype="multipart/form-data" action="Book Upload.php" method="POST">
        <p align="center">Upload The Book Here</p>
        <div align="center"><label>BOOK NAME : </label>
            <input type="text" name="name"> <br>
        </div>
        <div align="center"><label>AUTHOR NAME : </label>
            <input type="text" name="author">
            <br>
        </div>
        <div align="center">
            <input type="file" name="uploaded_file"></input><br />
            <br>
            <input type="submit" value="Upload"></input>
        </div>
    </form>
    <br>
    <h3 style="text-align:center">----- The List Of Books -----</h3>
    <?PHP
    $server = "localhost";
    $user = "yuvraj";
    $password = "yuvraj";
    $db = "User";

    $conn = new mysqli($server, $user, $password, $db);

    if ($conn->connect_error) {
        //echo "connected Failed";
    } else {
        //echo "connected Sucessfully";
    }


    $name = $_POST['name'];
    echo $name;
    $author = $_POST['author'];
    echo $author;
    $filename = $_FILES["uploaded_file"]["name"];
    echo $filename;
    if (isset($_POST['name'])) {
        $sql = "insert into book(bname,author,path) values('$name','$author','$filename')";
        $result = $conn->prepare($sql);
        $result->execute();
        if (!empty($_FILES['uploaded_file'])) {

            $path = "../uploads/";
            $path = $path . basename($_FILES['uploaded_file']['name']);

            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                echo "The file " . basename($_FILES['uploaded_file']['name']) .
                    " has been uploaded";
            } else {
                echo "There was an error uploading the file, please try again!";
            }
        }
    }

    echo "<br>" . "<br>" . "<br>";
    $query = "select * from book";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table class='table' border='1'>";
        echo ' <thead style="background-color:black;color:white" class="thead-dark">
<tr>
<th scope="col">Book Name</th>
<th scope="col">Author Name</th>
<th scope="col">Remove Books</th>
</tr>
</thead>';
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td scope='row'>" . $row['bname'] . "</td>";;
            echo "<td>" . $row['author'] . "</td>";
            echo "<td><button class='bid' data-id=" . $row['bid'] . ">DELETE</button></td>";
            echo "</tr>";
            // echo "<img src='uploads/$image' alt='no images'>";
        }

        echo "</table>";
    }
    ?>


</body>

</html>