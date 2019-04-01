<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/Zocker_Knaelter/public/asset/css/style.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="frm">
        <form action="process.php" method="POST">
            <p>
            <label>Username:</label>
            <input type="text" id="user" name="user"    />
            </p>
            <p>
            <label>Password:</label>
            <input type="password" id="pass" name="pass"    />
            </p>
            <p>
            <input type="submit" id="btn" value="Login"    />
            </p>
        </form>
    </div>
</body>
</html>