<?php
  //-----------------------------------------------------------------------
  // Author: Choosine
  //-----------------------------------------------------------------------
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head><title>Choosine</title></head><!Page Title (i.e. in browser)>
  <body>
    <?php
      require_once "header.php";
    ?>

	A site that will let you vote on restaurants.
	Cool!

      <?php
	echo "Calling java now...<br />";
	require_once "calljava.php";
      ?>

    <?php
      require_once "footer.php";
    ?>
  </body>
</html>
