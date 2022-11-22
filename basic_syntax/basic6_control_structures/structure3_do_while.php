<!DOCTYPE html>
<html>
    <body>
        <?php
            /* do-while Loop */
            echo "<h1><code>do-while</code> Loop</h1>";

            $num1 = 0;
            do {
                echo "<p>$num1</p>";
                $num1 ++;
            } while($num1 <= 10);

            $num2 = 0;
            do {
                echo "<p>$num2</p>";
                $num2 ++;
            } while($num2 <= 0);
        ?>
    </body>
</html>