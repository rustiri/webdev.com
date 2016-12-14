<?php
	define("TITLE", "Paintings | E.C. O'Rourke");

	include('includes/header.php');
?>

<div class="left">

  <?php foreach ($paintings as $painting) { ?>

    <div class="painting">
      <img src="./img/<?php echo $painting["img"]; ?>.jpg" alt="<?php echo $painting["name"]; ?>">
      <h2><?php echo $painting["name"]; ?></h2>

    </div><!-- painting -->

  <?php } ?>

  </div>

<!--
<div class="right">

<img src="./assets/img/SOTS2.jpg" alt="Sun Rise" height="200p" width="150" />

</div>

<div class="right">

<blockquote class="pquote">
"Well known views captured in a fantastic style!"
</blockquote>

</div>

<div class="right">

<img src="./assets/img/SOTS3.jpg" alt="Hill" height="200" width="150" />

</div>
<div class="right">

<blockquote class="pquote">
"City views with a classic perspective!"
</blockquote>

</div>
-->
<div style="clear: both;"> </div>
<div class="articles">
<?php include('includes/footer.php'); ?>
