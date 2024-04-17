<?php
session_start();

function loadUserData() {
    $userData = file_get_contents('users.json');
    return json_decode($userData, true);
}


function saveUserData($data) {
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('users.json', $jsonData);
}


function signupUser($username, $fullName, $password, $sex, $dob) {
    $userData = loadUserData();
    
    
    if(isset($userData[$username])) {
        $_SESSION["err_message"]='Username already exists';
        header("location:../pages/signup.php");
    }
    
    
    $userData[$username] = array(
        'full_name' => $fullName,
        'password' => $password,
        'sex' => $sex,
        'dob' => $dob
    );
    
    
    saveUserData($userData);
}


    $signupResult = signupUser($_POST['username'], $_POST['full_name'], $_POST['password'], $_POST['sex'], $_POST['dob']);
    echo $signupResult;
    header("location:../pages/aboutMe.php");

?>