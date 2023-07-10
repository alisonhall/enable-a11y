<?php 
  include "includes/functions.php";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1); 
  

  give404IfNotValid();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/common-head-tags.php";?>
    <?php getHeadTags(); ?>
</head>

<body class="<?= isSet($fileProps->bodyClass) ? $fileProps->bodyClass : '' ?>">
  
  <?php include "includes/documentation-header.php";?>
  <?php include "includes/pause-anim-control.php" ?>
  <?php getAsideContent() ?>
  <main id="main" class="<?= $fileProps->mainClass ?>" tabindex="-1">

    <?php
      if ( property_exists($fileProps, 'mainClass') && $fileProps->mainClass != 'with-full-bleed-hero' && isset($fileProps->title) && !isset($fileProps->hideTitle)) {
        print '<h1>' . $fileProps->title . '</h1>';
      }
      
      if (isset($fileProps->title)) {
        getContent($fileProps->title);
      } else {
        getContent('');
      }
    ?>
  </main>

    <?php getPreBottomBodyTags() ?>

    <?php include "includes/example-footer.php"?>

    <?php getBottomBodyTags() ?>
</body>

</html>