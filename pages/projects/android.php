<?php 
session_start();
if(!isset($_SESSION["name"])){
    header("location:../../index.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body style="background-color: beige">
    <a href="../../pages/portfolio.php">
        <i class="fa fa-home" style="font-size: 36px; color: darkblue"></i></a>
    <div style="text-align: center">
        <img style="border: 5px solid darkblue" height="50%" src="../../images/little-lemon.png" />
        <p>
            This Booking App was created as the final capstone project of the Meta
            Front-End Developer Certification.
        </p>
        <p>
            <b>Preview:</b> Little Lemon is a family-owned Mediterranean restaurant
            that blends traditional recipes with a modern twist.
        </p>
        <p>
            Our goal is to provide our customers with a unique dining experience
            that will take them on a culinary journey through the Mediterranean.
        </p>
        <p>
            <b>Instructions Received:</b> To create a modern responsive Front-end
            for the Little Lemon app with a Bookings feature which they lack at
            present.
        </p>
        <a target="_blank" href="https://github.com/eliehanna2/Little-Lemon">Link</a>
    </div>
</body>

</html>