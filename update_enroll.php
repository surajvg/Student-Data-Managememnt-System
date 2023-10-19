
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['updateAut'])){
        $s_id=$_POST['s_id'];
        $b_id=$_POST['b_id'];
        $year=$_POST['year'];
        $t_id=$_POST['t_id'];

        $sql ="UPDATE studentenroll SET s_id='$s_id',b_id='$b_id',year='$year',t_id='$t_id' where s_id='$s_id'";

        //$sql= "UPDATE `studentenroll` SET `s_id`='$s_id',`b_id`='$b_id','year'='$year','t_id'='$t_id' where `s_id`='$s_id'";
       
       $result=$conn->query($sql);{
         if($result==TRUE){
    //   if (mysqli_query($conn, $sql)==TRUE) {
             //echo "records are updated successfully";
             echo"RECORD UPDATED SUCCESSFULLY.";
        }
        else{
            echo "Error:".$sql ."<br>".$conn->error;
        }
    }

        header("Refresh:2; url=view_enroll.php");

{
     if(isset($_GET['s_id'])){
        $s_id=$_GET['s_id'];

        $sql="SELECT * FROM  `studentenroll` WHERE 's_id'='$s_id'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $s_id =$row['s_id'];
                $b_id   =$row['b_id'];
                $year=$row['year'];
                $t_id=$row['t_id'];

            }

        }
        else{
            //if s_id value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:2; url=view_enroll.php");
             
        }
    }
     }
    }
            
  ?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
        <body>
        <div class="bg-img">
            <h2 class="h2">UPDATE ENROLL DETAILS</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a class="btn btn-info" href="enroll.html">  HOME</a><br/><br/>
        <a class="btn btn-info" href="view_enroll.php">  VIEW</a>

            <form  class="formclass" action=" " method="POST" >
           

            <br>
            <br><br>
            
            <br>
            <br>
            <br>
            <br>
            <br>


           
            <p> STUDENT ID:</p>
            <input type="text" name="s_id">
            <br>
            <br>
            <p> BRANCH ID:</p>
           <input type="text" name="b_id">
            <br>
            <br>
        

            <p>YEAR:</p>
            <input type="text" name="year">
            <br>
            <br>
          

            <p> TEACHER ID:</p>
            <input type="text" name="t_id">
            <br>
            <br>
            <input type="submit" value="UPDATE" name="updateAut">
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
        
        <?php
        
    //     }else{
    //         //if s_id value is not valid redirect the user to view php page
    //         header('Location:view.php');
    
    //     }
    //  }

    ?> 
