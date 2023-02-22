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
    <div class="cont-2">
    <table>
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
                echo "<tr><td>"
                    . $row["user_id"] . "</td><td>"
                    . $row["name"] . "</td><td>"
                    . $row["email"] . "</td><td>"
                    . $row["phone"] . "</td><td>"
                    . "<input type='submit' class='btn btn-edit' value='Edit'>"
                    . "<input type='submit' class='btn btn-delete' value='Delete'>"
                    . "</td></tr>";
            }
        }
        ?>
    </table>

    </div>
    </div>
</body>

</html>