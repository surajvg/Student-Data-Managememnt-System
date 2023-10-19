<?php
include "config.php";

$sql = "SELECT * FROM branch";

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
        <!-- <h1>branch</h1> -->
        <table class="table">

            <head>
                <tr>
                    <th>BRANCH ID</th>
                    <th>BRANCH NAME</th>
                    <th>COURSE</th>
                </tr>

                </thead>
                </tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {


                ?>
                        <tr>
                            <td><?php echo $row['b_id']; ?></td>
                            <td><?php echo $row['b_name']; ?> </td>
                            <td><?php echo $row['course']; ?></td>
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
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-success" href="update_branch.php"> UPDATE </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-danger" href="delete_branch.php"> DELETE </a></td>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-default" href="branch.html">  HOME </a>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <a class="btn btn-info" href="view_branch.php">  VIEW </a>
                <br>
        </table>
    </div>
</body>

</html>

<!-- <a class="btn btn-info" href="update.php?if=<?php echo $row['b_id']; ?>">
            UPDATE</a>&nbsp;
                  <a class="btn btn-danger" href="delete.php?id=<?php echo $row['b_id']; ?>">
            Delete</a></td>   -->