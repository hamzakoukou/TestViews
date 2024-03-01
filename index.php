<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            align-items: center;
            display: flex;
            justify-content: center;
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #E40134;
            border-radius: 5px;
            position: absolute;
            left: 50%;
            top: 30%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #B71928;
            border-color: #B71928;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/Php_Learning/src/Model/login.php" method="post">
            <div class="form-group"  >
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="pass" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
<?php var_dump($_POST)?>


</html>