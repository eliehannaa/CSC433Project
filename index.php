<?php
  session_start();
  if(isset($_SESSION["err_message"])){
    echo '<script>alert("'.$_SESSION["err_message"].'")</script>';
}
  session_unset();
  session_destroy();
?>
<html>

<head>
    <title>User Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        margin-top: 30px;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .sign-up {
        display: block;
        text-align: center;
        margin-top: 10px;
        color: #007bff;
        text-decoration: none;
    }

    form {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 3px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px #007bff;
    }
    </style>
</head>

<body>
    <h2>Login</h2>
    <form action="BE/login.php" method="post">
        <input type="text" name="username" placeholder="Username" required /><br />
        <input type="password" name="password" placeholder="Password" required /><br />
        <input type="submit" name="login" value="Login" />
    </form>
</body>
<a class="sign-up" href="./pages/signup.php">Sign Up</a>

</html>