<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>
    <div class="container">
        <div class="form-body">
            <div class="heading1">ADD NEW DATA</div>
            <form action="insert.php" method="post">
                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" class="form-ctrl form-input" name="name">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="text" class="form-ctrl form-input" name="email">
                </div>
                <div class="input-group">
                    <label>Phone</label>
                    <input type="text" class="form-ctrl form-input" name="phone">
                </div>
                <button class="submit-btn" name="sumbit">
                    SUBMIT
                </button>
            </form>
        </div> 
    </div>
</body>
</html>