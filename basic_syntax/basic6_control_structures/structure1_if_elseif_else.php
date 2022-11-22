<!DOCTYPE html>
<html>
    <body>
        <?php
            /* if, elseif, else */
            echo "<h1><code>if</code>, <code>elseif</code>, <code>else</code></h1>";

            if (10 > 9) {
                echo "10 > 9";
            } elseif (10 < 9) {
                echo "10 < 9";
            } else {
                echo "10 == 9";
            }
            echo "<br/>";

            if (10 > 11) {
                echo "10 > 11";
            } elseif (10 < 11) {
                echo "10 < 11";
            } else {
                echo "10 < 11";
            }
            echo "<br/>";

            if (10 > 10) {
                echo "10 > 10";
            } elseif (10 < 10) {
                echo "10 < 10";
            } else {
                echo "10 == 10";
            }
            echo "<br/>";

            echo "<hr/>";
        ?>

        <!-- Alternative Syntax -->
        <h1>Alternative Syntax</h1>

        <?php if (10 > 9):
            echo "<p>10 > 9</p>";
        ?>
            <p>10 is greater than 9</p>
        <?php elseif (10 < 9):
            echo "<p>10 < 9<?p>";
        ?>
            <p>10 is less than 9</p>
        <?php else: 
            echo "<p>10 == 9</p>";
        ?>
            <p>10 is equal to 9</p>
        <?php endif; ?>

        <?php if (10 > 11):
            echo "<p>10 > 11</p>";
        ?>
            <p>10 is greater than 11</p>
        <?php elseif (10 < 11):
            echo "<p>10 < 11<?p>";
        ?>
            <p>10 is less than 11</p>
        <?php else: 
            echo "<p>10 == 11</p>";
        ?>
            <p>10 is equal to 11</p>
        <?php endif; ?>

        <?php if (10 > 10):
            echo "<p>10 > 10</p>";
        ?>
            <p>10 is greater than 10</p>
        <?php elseif (10 < 10):
            echo "<p>10 < 10<?p>";
        ?>
            <p>10 is less than 10</p>
        <?php else: 
            echo "<p>10 == 10</p>";
        ?>
            <p>10 is equal to 10</p>
        <?php endif; ?>
    </body>
</html>