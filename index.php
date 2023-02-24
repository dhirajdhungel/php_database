<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="cont-1">
        <form method="post" action="form.php"> <input type="submit" value="Insert Data" class="insert-btn"></form>
        <div class="cont-2">
            <table class="data-table">
                <tr class="header">
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone. No</th>
                    <th>Edit & Delete</th>
                </tr>
                <?php
                include_once('connect.php');
                $sql = "SELECT * FROM userdata";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                       <tr>
                        <td>
                            <?php echo $row["user_id"]; ?>
                        </td>
                        <td>
                            <?php echo $row["name"]; ?>
                        </td>
                        <td>
                            <?php echo $row["email"]; ?>
                        </td>
                        <td>
                            <?php echo $row["phone"]; ?>
                        </td>
                        <td>
                            <span> <a href="edit.php?id=<?php echo $row["user_id"]; ?>"> Edit</a> </span>
                            <form method='post' action='delete.php'><input type='submit' class='btn btn-delete' name='delete-data' value='Delete'></form>

                        </td>
                       </tr>
                             <?php
                    }
                }else{
                    echo ' <style>table{display:none;}</style> ';
                    echo '<h1>Empty Database: Click on Insert to add.</h1>';
                }

                ?>
            </table>

        </div>
    </div>
</body>

</html>