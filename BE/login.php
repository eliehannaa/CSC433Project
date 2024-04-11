<?php
$loginResult = loginUser($_POST['username'], $_POST['password']);
echo $loginResult;

function loadUserData() {
    $userData = file_get_contents('users.json');
    return json_decode($userData, true);
}


function loginUser($username, $password) {
    $userData = loadUserData();
    
    
    if(isset($userData[$username])) {
        
        if($password === $userData[$username]['password']) {
                // session_start();
                // $_SESSION["username"]=$un;
                echo '<script>alert("Login successful")</script>';
                header("location:../pages/aboutMe.php");
        } else {
            echo '<script>alert("Incorrect password")</script>';
            header("location:../index.html");
        }
    } else {
        echo "<script>alert('User not found! Crearte an account')</script>";
        header("location:../pages/signup.php");
    }
}
?>