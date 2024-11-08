<!DOCTYPE html>
<html>
    <head>
        <title>PHP Syntax</title>
    </head>
    <body>
        <?php
          echo "Hello World!<hr />";

          // Comment

          # Comment

          /*
          Multi-line Comment Block
          */

          $x = 10 /* + 5 */ + 20;
          echo $x;
          echo "<hr />";

          ECHO "Text Same 1<hr />";
          echo "Text Same 2<hr />";
          ECho "Text Same 3<hr />";

          $car = "volvo";
          echo "My car is a " . $car . "<br>";
          // Variables do not exist
          /*
          echo "My car is a " . $CAR . "<br>";
          echo "My car is a " . $cAR . "<br>";
          */
        ?>
    </body>
</html>