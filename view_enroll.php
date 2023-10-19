<?php
include "config.php";

$sql = "SELECT * FROM studentenroll";

$result = $conn->query($sql);

$profpic = "bg.jpg"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div>
        <!-- <h1>STUDENT</h1> -->
        <table class="table">

            <head>
                <tr>
                    
                    <th>STUDENT ID</th>
                    <th>BRANCH ID</th>
                    <th>YEAR</th>
                    <th>TEACHER ID</th>
                </tr>

                </thead>
                </tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                ?>
                        <tr>
                            
                            <td><?php echo $row['s_id']; ?> </td>
                            <td><?php echo $row['b_id']; ?></td>
                            <td><?php echo $row['year']; ?></td>
                            <td><?php echo $row['t_id']; ?></td>
                            <td>
                        </tr>
                <?php }
                }
                ?>
                <style>
                    body
                    {
                        background-image: url('<?php echo $profpic;?>');
                        background-size: cover;
                    }
                </style>
                </body>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="update_enroll.php"> UPDATE </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-danger" href="delete_enroll.php"> DELETE </a></td>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-default" href="enroll.html">  HOME </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-info" href="view_student.php">  VIEW </a>
                <br>
        </table>
    </div>
</body>

</html>

<!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['year']; ?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['year']; ?>">
            Delete</a></td>   -->