<?php
include "config.php";

$sql = "SELECT * FROM teachers";

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
        <!-- <h1>teacher</h1> -->
        <table class="table">

            <head>
                <tr>
                    <th>TEACHER ID</th>
                    <th>TEACHER NAME</th>
                    <th>GENDER</th>
                    <th>DESIGNATION</th>
                </tr>

                </thead>
                </tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                ?>
                        <tr>
                            <td><?php echo $row['t_id']; ?></td>
                            <td><?php echo $row['t_name']; ?> </td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['designation']; ?></td>
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="update_teacher.php"> UPDATE </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-danger" href="delete_teacher.php"> DELETE </a></td>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-default" href="teacher.html">  HOME </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-info" href="view_teacher.php">  VIEW </a>
                <br>
        </table>
    </div>
</body>

</html>

<!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['tra_id']; ?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['tra_id']; ?>">
            Delete</a></td>   -->