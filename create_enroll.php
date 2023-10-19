<?php
include "config.php";


if (isset($_POST['submit'])) {
    $s_id = $_POST['s_id'];
    $b_id = $_POST['b_id'];
    $year = $_POST['year'];
    $t_id = $_POST['t_id'];
   

    //}

   //  $sql = "INSERT TEACHER' VALUES ('$s_id','$b_id','$t_id','$ph_no')";
    $sql = "INSERT INTO studentenroll "." (s_id, b_id,year, t_id)" ." VALUES"." ('$s_id', '$b_id','$year', '$t_id')";



    //$result = $conn->query($sql);

    // if($result == TRUE){
    // if($conn->query($sql)==TRUE){
    //     echo "new record created successfully";
    // }

    // else{
    //     echo "Error:". $sql . "<br>". $conn->error;
    // }

    // $conn->close();
    if (mysqli_query($conn, $sql) == TRUE) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        header("Refresh:5; url=view.php");
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
<!-- <head> -->

<body>
    <div class="bg-img">
        <h2 class="h2">STUDENT ENROLLMENT</h2>
        <br>
        <br>
        <br>
        <br>
        <a class="btn btn-info" href="enroll.html"> HOME</a><br/><br/>
        <a class="btn btn-info" href="view_enroll.php"> VIEW</a>

        <form class="formclass" method="POST" action="">

            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\alfons-morales-YLSwjSy7stw-unsplash.jpg"/>-->
            


            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>
            <br>

            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\books-1204029.jpg"/> -->
            <p>STUDENT ID:</p>
            <input type="text" name="s_id">
            <br>


            <p>BRANCH ID:</p>
            <input type="text" name="b_id">
            <br>

            <p>YEAR:</p>
            <input type="text" name="year">
            <br>

            <p>TEACHER ID:</p>
            <input type="text" name="t_id">
            <br>
           
            <br>            
            <input type="submit" value="CREATE" name="submit">

        </form>

        <style>
            body {
                
                margin: 0;
                padding: 0;
            }

            body:before {
                content: '';
                position: fixed;
                width: 100vw;
                height: 100vh;
                background-image: url("bg.jpg");
                background-position: center center; 
                background-repeat: no-repeat;
                background-attachment: fixed;
                -webkit-background-size: cover;
                background-size: cover;
                -webkit-filter: blur(10px);
                -moz-filter: blur(10px);
                filter: blur(10px);
            }

            .bg-img {
                /* The image used */
                background-image: url("bg2.jpg");

                /*  books-1204029.jpg */
                /* Control the height of the image */
                width: 100%;
                height: 100%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 400px;
                height: 500px;
                padding: 80px 40px;
                background: rgb(255,255,255,0.7);

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: absolute;
            }

            .bg-img p {
                margin: 0;
                padding: 0;
                font-weight: bold;
                color:rgb(6, 30, 134);
            }

            .formclass {
                position: fixed;
                top: 5%;
                left: 40%;

            }

            .h2 {
                text-align: center;
                color:black;
                font-family:century;
            }
        </style>
    </div>

</body>

</html>