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
    <title>User Signup</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        margin-top: 30px;
        padding: 0;
    }

    .sign-up {
        display: block;
        text-align: center;
        margin-top: 10px;
        color: #007bff;
        text-decoration: none;
    }

    h2 {
        text-align: center;
        color: #333;
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
    input[type="password"],
    select,
    input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }

    select {
        height: 40px;
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
    input[type="password"]:focus,
    select:focus,
    input[type="date"]:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px #007bff;
    }
    </style>
</head>

<body>
    <h2>Signup</h2>
    <form action="../BE/signup.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="text" name="full_name" placeholder="Full Name" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <select name="sex" required>
            <option value="">Select Sex</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        <input type="date" name="dob" required><br>
        <input type="submit" name="signup" value="Signup">
    </form>
    <a href="../index.php" class="sign-up">Login</a>



</body>

</html>