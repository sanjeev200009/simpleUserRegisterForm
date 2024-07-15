<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Storing Data in Database</h1>
        <form action="insert.php" method="post">
            <p>
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" required>
            </p>

            <p>
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" required>
            </p>

            <p>
                <label for="Email">Email:</label>
                <input type="email" name="Email" id="Email" required>
            </p>

            <p>
                <label for="gender">Gender:</label>
                <input type="text" name="gender" id="gender" required>
            </p>

            <p>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>
            </p>

            <p>
                <button type="submit">Submit</button>
            </p>
        </form>
    </center>
</body>
</html>
