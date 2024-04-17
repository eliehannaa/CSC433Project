<?php require_once("../components/footer.php");?>
<?php require_once("../components/header.php");
session_start();
if(!isset($_SESSION["name"])){
    header("location:../index.php");
}
$un=$_SESSION["name"];
?>
<html>

<head>
    <link rel="stylesheet" href="../styles/styles.css" />
</head>

<body>
    <?php DisplayHeader($un); ?>
    <div class="content">
        <div style="display: flex; justify-content: space-between;">
            <h2> </h2>
            <h3 style="color: red;">Hello <?php echo $un;?></h3>
        </div>
        <div style="text-align: center">
            <img class="photo" src="../images/photo.jpg" alt="My Photo" />
            <h1 style="margin: 10px">Elie Hanna</h1>
        </div>
        <div class="main-container">
            <div class="left-column">
                <div class="card">
                    <h2>Contact Information</h2>
                    <p>Email: elie.hanna02@lau.edu</p>
                    <p>Date of Birth: October 17, 2003</p>
                    <p>Phone: +961 70 635 695</p>
                    <p>Residence: Beirut, Lebanon</p>
                    <p>Marital Status: Single Thank God</p>
                </div>

                <div class="card">
                    <h2>Languages</h2>
                    <p>Arabic</p>
                    <p>English</p>
                    <p>French</p>
                </div>
            </div>

            <div class="right-column">
                <h2>Experience</h2>
                <div class="card">
                    <h3>Software Engineer</h3>
                    <p>MUREX</p>
                    <p>June 2023 - Present</p>
                    <ul>
                        <li>Technologies: Spring Boot and Angular</li>
                    </ul>
                </div>

                <h2>Education</h2>
                <div class="card">
                    <h3>BS in Computer Science</h3>
                    <p>Lebanese American University</p>
                    <p>Date of Graduation: May 2024</p>
                </div>

                <h2>Technical Skills</h2>
                <div class="card">
                    <h2>Languages</h2>
                    <p>HTML, CSS, Javascript, Java, Python</p>
                    <h2>Libraries/Frameworks</h2>
                    <p>Angular, Spring Boot, React, React Native</p>
                </div>
            </div>
        </div>
    </div>
    <?php DisplayFooter() ?>
</body>

</html>