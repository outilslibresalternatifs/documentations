<?php

require_once __DIR__ . '/markdown.php';
$readme = file_get_contents(__DIR__. '/content/README.md');
?>

<!doctype html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>OLA #1</title>
  <meta name="description" content="Outils Libres Alternatifs Workshop">
  <link rel="stylesheet" media="all" href="css/utils.css">
  <link rel="stylesheet" media="all" href="css/main.css">
</head>
  <body>
  <header>
    <div class="titles">
      <h1>OLA #1</h1>
      <h2>Documentation de l’atelier</h2>
      <nav role="navigation" class="menu">
        <ul>
        </ul>
      </nav>
    </div>
  </header>
  <div class="main-content">
    <div class="gallery">
      <?php
      $directory = "img/small/";
      $images = glob($directory."{*.jpg,*.jpeg,*.gif,*.png,*.svg}", GLOB_BRACE);
      natsort($images);
      foreach ($images as $img) {
      list($width, $height, $type, $attr)= getimagesize($img);
      echo "<a class='image-link' href='$img'>";
      echo "<img class='image' src='$img' width='$width' height='$height' /> \n";
      echo "</a>";
      }?>
    </div>
    <div id="about" class="readme textbox">
      <?php echo markdown($readme); ?>
    </div>
    <footer>
      <a href="http://outilslibresalternatifs.org/">Outils Libres Alternatifs</a>
    </footer>
  </div>
  <script src="js/libs/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/jquery.magnific-popup.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/flickity.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
