
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['update'])){
        $b_id=$_POST['b_id'];
        $b_name=$_POST['b_name'];
        $course=$_POST['course'];
    
        $sql ="UPDATE branch SET b_id ='$b_id',b_name='$b_name',course='$course' WHERE b_id ='$b_id'";

       // $sql= "UPDATE `branch` SET `b_id`='$b_id',`b_name`='$b_name',`course`='$course', where `b_id`='$b_id'";
       
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

        header("Refresh:4; url=view_branch.php");

{
     if(isset($_GET['b_id'])){
        $b_id=$_GET['b_id'];

        $sql="SELECT * FROM  `branch` WHERE 'b_id'='$b_id'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $b_id =$row['b_id'];
                $b_name   =$row['b_name'];
                $course=$row['course'];
                

            }

        }
        else{
            //if b_id value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=view_branch.php");
             
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
            <!-- <h2>BOOK DATA</h2>
            <form action=" " method="POST" >
            <fieldset>

            <legend> BOOK INFORMATION: </legend>
            BOOK_ID:<br>
            <input type="text" name="b_id">
            <br>

            BOOK TITLE:</br>
            <input type="text" name="b_name">
            <br>

            PUBLISHER NAME:</br>
            <input type="text" name="course">
            <br>

            PUBLISHED YEAR:</br>
            <input type="text" name="pubyear">
            <br>
            <input type="submit" name="update">

        </fieldset>
    </form> -->
    <h2 class="h2">UPDATE BRANCH</h2>
        <br>
        <br>
        <br>
        <br>
        <a class="btn btn-info" href="branch.html">  HOME</a><br/><br/>
        <a class="btn btn-info" href="view_branch.php">  VIEW</a>

    <form class="formclass" method="POST" action="">

            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\alfons-morales-YLSwjSy7stw-unsplash.jpg"/>-->
            


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <!-- <img src="C:\xampp\htdocs\createPHP\mainpageBACKGROUND\books-1204029.jpg"/> -->
            <p>BRANCH ID:</p>
            <input type="text" name="b_id">
            <br>


            <p>BRANCH NAME:</p>
            <input type="text" name="b_name">
            <br>

            <p>COURSE NAME:</p>
            <input type="text" name="course">
            <br>
            <br>
            <input type="submit" value="UPDATE" name="update">

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
    //         //if b_id value is not valid redirect the user to view php page
    //         header('Location:view.php');
             
    //     }
    //  }

    ?> 
