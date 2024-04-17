<?php require_once("../components/footer.php");?>
<?php require_once("../components/header.php");
session_start();
if(!isset($_SESSION["username"])){
    header("location:../index.php");
}
$un=$_SESSION["username"];
?>
<html>

<head>
    <link rel="stylesheet" href="../styles/styles.css" />
</head>

<body>
    <?php DisplayHeader($un); ?>
    <div class="content">

        <div style="display: flex; justify-content: space-between;">
            <h2>About Me</h2>
            <h3 style="color: red;">Hello <?php echo $un;?></h3>
        </div>
        <div style="display: flex; align-content: space-between">
            <p>
                I am a senior computer science student at LAU, very passionate about
                my field of study, constantly researching updates in this industry and
                learning new technologies. I am also a Software Engineer at Murex in
                the IS Dev team.
            </p>
            <img style="height: 200px; margin: 10px" src="../images/lau.jpg" />
        </div>
        <div style="display: flex; align-content: space-between">
            <img style="height: 200px; margin: 10px" src="../images/me.jpg" />
            <p>
                Some of my extracurricular activities are weight training, keyboard
                playing, martial arts, swimming, and target shooting.
            </p>
        </div>
    </div>
    <?php DisplayFooter(); ?>
</body>

</html>