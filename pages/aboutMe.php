<?php require_once("../components/footer.php");?>
<?php require_once("../components/header.php");?>
<html>
  <head>
    <link rel="stylesheet" href="../styles/styles.css" />
  </head>
  <body>
    <?php DisplayHeader(); ?>
    <div class="content">
      <h2 style="margin-top: 100px">About Me</h2>
      <div style="display: flex; align-content: space-between">
        <p>
          I am a senior computer science student at LAU, very passionate about
          my field of study, constantly researching updates in this industry and
          learning new technologies. I am also a Software Engineer at Murex in
          the Internal System Development team.
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
