<?php
include "config.php";


if (isset($_POST['submit'])) {
    $t_id = $_POST['t_id'];
    $t_name = $_POST['t_name'];
    $gender = $_POST['gender'];
    $designation = $_POST['designation'];


    //}

   //  $sql = "INSERT TEACHER' VALUES ('$t_id','$t_name','$designation','$ph_no')";
    $sql = "INSERT INTO teachers "." (t_id, t_name,gender, designation)" ." VALUES"." ('$t_id', '$t_name','$gender', '$designation')";



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
        <h2 class="h2">TEACHER DETAILS</h2>
        <br>
        <br>
        <br>
        <br>
        <a class="btn btn-info" href="teacher.html"> HOME</a><br/><br/>
        <a class="btn btn-info" href="view_teacher.php"> VIEW</a>

        <form class="formclass" method="POST" action="">

            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\alfons-morales-YLSwjSy7stw-unsplash.jpg"/>-->
            


            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\books-1204029.jpg"/> -->
            <p>TEACHER ID:</p>
            <input type="text" name="t_id">
            <br>


            <p>TEACHER NAME:</p>
            <input type="text" name="t_name">
            <br>

            <p>GENDER:</p>
            <input type="text" name="gender">
            <br>

            <p>DESIGNATION:</p>
            <input type="text" name="designation">
            <br>
            
            <br>            
            <h3>           
            <input type="submit" value="CREATE" name="submit"></h3>
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