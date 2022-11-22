<!DOCTYPE html>
<html>
    <body>
        <?php
            /* continue */
            echo "<h1><code>continue</code></h1>";

            $num1 = 0;
            while ($num1 <= 10) {
                if ($num1 % 2 === 0) {
                    $num1 ++;
                    continue;
                }
                echo "<p><code>while</code>: $num1</p>";
                $num1 ++;
            }

            $num2 = 0;
            do {
                if ($num2 % 4 === 0) {
                    $num2 ++;
                    continue;
                }
                echo "<p><code>do-while</code>: $num2</p>";
                $num2 ++;
            } while ($num2 <= 20);

            for ($num = 0; $num <= 10; $num ++) {
                if ($num2 % 3 === 0) {
                    continue;
                }
                echo "<p><code>for</code>: $num</p>";
            }

            foreach (array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) as $value) {
                if ($value % 5 === 0) {
                    continue;
                }
                echo "<p><code>foreach</code>: $value</p>";
            }
        ?>
    </body>
</html>