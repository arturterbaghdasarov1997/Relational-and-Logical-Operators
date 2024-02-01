<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="check.php" method="post">
        <div class="forms_container">
            <div class="username">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="confirm_password">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="button">
                    <button type="submit">Register</button>
            </div>
        </div>
    </form>
</body>
</html>