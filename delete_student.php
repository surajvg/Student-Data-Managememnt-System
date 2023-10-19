

<?php   
    include "config.php";

//    if(isset($_POST['s_id'])){
    if(isset($_POST['DELETEAUT'])){
        $s_id=$_POST['s_id'];

    $sql= "DELETE FROM `student` WHERE `student`.`s_id`='$s_id'";

    $result=$conn->query($sql);

    // if($result == TRUE){
            //if($conn->query($sql)==TRUE){
            //if (mysqli_query($conn, $sql)) {
                if(mysqli_affected_rows($conn)==TRUE){
        echo "RECORD DELETED SUCCESSFULLY.";
    }else{
        echo "ERROR RECORD NOT FOUND";//.$sql."<br>".$conn->error;
       }
       header("Refresh:3; url=view_student.php");
      // mysqli_close($conn);

   }
 

?>

<!-- extra code to run html -->
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <body>
        <div class="bg-img">

            <h2 class="h2">STUDENT DELETE</h2>
            <br>
        <br>
        <br>
        <br>
        <a class="btn btn-info" href="student.html">  HOME</a><br/><br/>
        <a class="btn btn-info" href="view_student.php">  VIEW</a>

            <form class="formclass" action=" " method="POST" >
           

            
            <br>
        <br><br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <p>STUDENT ID:</p>
        
            <input type="text" name="s_id">
            <br>
            <br>
            <h3>
            <input type="submit" value="DELETE" name="DELETEAUT"></h3>
        </fieldset>
    </form>
    </div>
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
    
    
 </body>
</html>









