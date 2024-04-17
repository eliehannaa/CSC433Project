<?php
session_start();
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
                $_SESSION["name"]= $userData[$username]['full_name'];
                header("location:../pages/aboutMe.php");
        } else {
            $_SESSION["err_message"]='Incorrect password';
            header("location:../index.php");
        }
    } else {
        $_SESSION["err_message"]='User not found! Create an account';
        header("location:../pages/signup.php");
    }
}
?>