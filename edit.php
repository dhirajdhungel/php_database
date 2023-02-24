<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <div class="container">
        <div class="form-body">
            <div class="heading1">EDIT EXISTING DATA</div>
            <form action="save.php" method="post">
                <div>
                </div>
                <div class="input-group">
                    <?php
                    include_once('connect.php');
                    $id= $_GET['id'];
                    $sql = "SELECT * FROM userdata WHERE id='$id";
                    $result = $conn->query($sql);
                    ?>
                    <?php 
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                        }}
                            ?>

                    <label>Full Name</label>
                    <input type='text' class='form-ctrl form-input' name='name' value = "<?php echo $row['name'] ?>">
                </div>
                <div class=" input-group">
                    <label>Email</label>
                    <input type="text" class="form-ctrl form-input" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="input-group">
                    <label>Phone</label>
                    <input type="text" class="form-ctrl form-input" name="phone" value="<?php echo $row['phone'] ?>">
                </div>
                <button class="submit-btn" name="sumbit">
                    SAVE
                </button>
            </form>
        </div>
    </div>
</body>

</html>