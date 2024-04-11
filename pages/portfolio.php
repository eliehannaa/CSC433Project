<?php require_once("../components/footer.php");?>
<?php require_once("../components/header.php");?>
<?php
function ReadImages(){
  $myfile = fopen("../extra/images.txt", "r") or die("Unable to open file!");
  $files= fread($myfile,filesize("../extra/images.txt"));
  $pieces=explode("\n", $files);
  echo "<div style='vertical-align: middle'>";
  foreach($pieces as $piece){
    echo "<div class='thumbnail-frame'>";
    echo "<a href='../pages/projects/$piece.html'><img src='../images/$piece.jpg'/></a>";
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
    <?php DisplayHeader(); ?>
    <div class="content">
        <h2>My Projects:</h2>
        <?php ReadImages() ?>
    </div>
    <?php DisplayFooter(); ?>
</body>

</html>