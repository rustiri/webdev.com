<?php
	define("TITLE", "Portraits | E.C. O'Rourke");

	include('includes/header.php');
?>

<div class="left">

  <?php foreach ($potraits as $potrait) { ?>

    <div class="potrait">
      <img src="./img/<?php echo $potrait["img"]; ?>.jpg" alt="<?php echo $potrait["name"]; ?>">
      <h2><?php echo $potrait["name"]; ?></h2>

    </div><!-- painting -->

  <?php } ?>

  </div>

  <div style="clear: both;"> </div>
  <div class="articles">
  <?php include('includes/footer.php'); ?>
