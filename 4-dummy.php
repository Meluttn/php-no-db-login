<?php
// (A) THIS IS A PROTECTED DUMMY PAGE
require "3-protect.php";

// (B) HTML AS USUAL ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Demo Page</title>
  </head>
  <body>
    <!-- (B1) LOGOUT FORM -->
    <form method="post">
      <input type="hidden" name="logout" value="1">
      <input type="submit" value="Sign Out">
    </form>

    <!-- (B2) WHO IS THE CURRENT USER? -->
    <?php echo "<br>";
    echo $_SESSION["user"];
    echo "<br>";
    echo "<br>". 'Tjoho';
    echo $_SESSION["date"];
    echo "Mongo Lloyd signing in";
    ?>
  </body>
</html>