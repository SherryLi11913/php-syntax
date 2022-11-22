<!DOCTYPE html>
<html>
    <body>
        <?php
            /* goto */
            echo "<h1><code>goto</code></h1>";

            goto section_a;
            echo "<p>You didn't go to section a</p>";
            section_a:
            echo "<p>Here is section a</p>";

            for ($num = 0; $num <= 10; $num ++) {
                if ($num === 5) {
                    goto section_b;
                }
                echo "<p>$num</p>";
            }
            section_b:
            echo "<p>Here is section b, you are out of the for loop</p>";
        ?>
    </body>
</html>