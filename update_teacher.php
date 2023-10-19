
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['updateAut'])){
        $t_id=$_POST['t_id'];
        $t_name=$_POST['t_name'];
        $gender=$_POST['gender'];
        $designation=$_POST['designation'];

        $sql ="UPDATE teachers SET t_id='$t_id',t_name='$t_name',gender='$gender',designation='$designation' where t_id='$t_id'";

        //$sql= "UPDATE `teachers` SET `t_id`='$t_id',`t_name`='$t_name','gender'='$gender','designation'='$designation' where `t_id`='$t_id'";
       
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

        header("Refresh:2; url=view_teacher.php");

{
     if(isset($_GET['t_id'])){
        $t_id=$_GET['t_id'];

        $sql="SELECT * FROM  `teachers` WHERE 't_id'='$t_id'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $t_id =$row['t_id'];
                $t_name   =$row['t_name'];
                $gender=$row['gender'];
                $designation=$row['designation'];

            }

        }
        else{
            //if t_id value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=view_teacher.php");
             
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
            <h2 class="h2">UPDATE TEACHER</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a class="btn btn-info" href="teacher.html">  HOME</a><br/><br/>
        <a class="btn btn-info" href="view_teacher.php">  VIEW</a>

            <form  class="formclass" action=" " method="POST" >
           

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <p> TEACHERS ID:</p>
           <input type="text" name="t_id">
            <br>
            <br>
            <p> TEACHER NAME:</p>
            <input type="text" name="t_name">
            <br>
            <br>
        

            <p>GENDER:</p>
            <input type="text" name="gender">
            <br>
            <br>
          

            <p> DESIGNATION:</p>
            <input type="text" name="designation">
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
    //         //if t_id value is not valid redirect the user to view php page
    //         header('Location:view.php');
    
    //     }
    //  }

    ?> 
