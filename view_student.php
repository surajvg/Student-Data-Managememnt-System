<?php
include "config.php";

$sql = "SELECT * FROM student";

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
                    <th>STUDENT_ID</th>
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>E-MAIL</th>
                    <th>PHONE NO</th>
                </tr>

                </thead>
                </tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['s_id']; ?></td>
                            <td><?php echo $row['s_name']; ?> </td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['ph_no']; ?></td>
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="update_student.php"> UPDATE </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-danger" href="delete_student.php"> DELETE </a></td>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-default" href="student.html">  HOME </a>
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

<!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['s_id']; ?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['s_id']; ?>">
            Delete</a></td>   -->