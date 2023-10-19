
<?php 
    include "config.php";
    //{//not present

     if(isset($_POST['updateAut'])){
        $tra_num=$_POST['tra_num'];
        $s_id=$_POST['s_id'];
        $b_id=$_POST['b_id'];
        $amount=$_POST['amount'];

        $sql ="UPDATE fees SET tra_num='$tra_num',s_id='$s_id',b_id='$b_id',amount='$amount' where tra_num='$tra_num'";

        //$sql= "UPDATE `fees` SET `tra_num`='$tra_num',`s_id`='$s_id','b_id'='$b_id','amount'='$amount' where `tra_num`='$tra_num'";
       
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

        header("Refresh:2; url=view_fees.php");

{
     if(isset($_GET['tra_num'])){
        $tra_num=$_GET['tra_num'];

        $sql="SELECT * FROM  `fees` WHERE 'tra_num'='$tra_num'";

        $result=$conn->query($sql);
       
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $tra_num =$row['tra_num'];
                $s_id   =$row['s_id'];
                $b_id=$row['b_id'];
                $amount=$row['amount'];

            }

        }
        else{
            //if tra_num value is not valid redirect the user to view php page
            // header(' Location: view.php ');
            header("Refresh:4; url=view.php");
             
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
            <h2 class="h2">UPDATE FEES DETAILS</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a class="btn btn-info" href="fees.html">  HOME</a><br/><br/>
        <a class="btn btn-info" href="view_fees.php">  VIEW</a>

            <form  class="formclass" action=" " method="POST" >
           

            
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <br>


            <p> TRANSACTION NUMBER:</p>
           <input type="text" name="tra_num">
            <br>
            <br>
            <p> STUDENT ID:</p>
            <input type="text" name="s_id">
            <br>
            <br>
        

            <p>BRANCH ID:</p>
            <input type="text" name="b_id">
            <br>
            <br>
          

            <p> AMOUNT:</p>
            <input type="text" name="amount">
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
    //         //if tra_num value is not valid redirect the user to view php page
    //         header('Location:view.php');
    
    //     }
    //  }

    ?> 
