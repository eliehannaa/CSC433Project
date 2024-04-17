<?php require_once("../components/footer.php");?>
<?php require_once("../components/header.php");
session_start();
if(!isset($_SESSION["name"])){
    header("location:../index.php");
}
$un=$_SESSION["name"];
?>
<?php
function ReadImages(){
  $myfile = fopen("../extra/images.txt", "r") or die("Unable to open file!");
  $files= fread($myfile,filesize("../extra/images.txt"));
  $pieces=explode("\n", $files);
  echo "<div style='vertical-align: middle'>";
  foreach($pieces as $piece){
    echo "<div class='thumbnail-frame'>";
    echo "<a href='../pages/projects/$piece.php'><img src='../images/$piece.jpg'/></a>";
    echo "<p>$piece</p>";
    echo "</div>";
  }
  echo "</div>";
  fclose($myfile);
}
?>
<html>

<head>
    <link rel="stylesheet" href="../styles/styles2.css" />
</head>

<body>
    <?php DisplayHeader($un); ?>
    <div class="content">
        <div style="display: flex; justify-content: space-between;">
            <h2>My Projects:</h2>
            <h3 style="color: red;">Hello <?php echo $un;?></h3>
        </div>
        <?php ReadImages() ?>
    </div>
    <?php DisplayFooter(); ?>
</body>

</html>