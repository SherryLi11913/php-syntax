<!DOCTYPE html>
<html>
    <body>
        <?php
            /* break */
            echo "<h1><code>break</code></h1>";

            for ($num = 1; $num <= 10; $num ++) {
                if ($num === 5) {
                    break;
                }
                echo "<p><code>for</code>: $num</p>";
            }

            foreach(array('a', 'b', 'c', 'd', 'e', 'f', 'g') as $char) {
                if ($char === 'e') {
                    break;
                }
                echo "<p><code>foreach</code>: $char</p>";
            }

            $num1 = 1;
            while ($num1 <= 10) {
                if ($num1 % 3 === 0) {
                    break;
                }
                echo "<p><code>while</code>: $num1</p>";
                $num1 ++;
            }

            $num2 = 0;
            do {
                if ($num2 === 4) {
                    break;
                }
                echo "<p><code>do-while</code>: $num2</p>";
                $num2 ++;
            } while ($num2 <= 10);

            switch (100) {
                case 0:
                    echo "<p><code>switch</code>: Zero</p>";
                    break;
                case 100:
                    echo "<p><code>switch</code>: One hundred</p>";
                    break;
                default:
                    echo "<p><code>switch</code>: Other</p>";
                    break;
            }

            echo "<hr/>";

            /* break with the Numeric Argument */
            echo "<h1><code>break</code> with the Numeric Argument</h1>";

            $num3 = 0;
            while ($num3 <= 100) {
                switch ($num3) {
                    case 0:
                        echo "<p>Zero</p>";
                        break 1;
                    case 10:
                        echo "<p>Ten</p>";
                        break 1;
                    case 20:
                        echo "<p>Twenty Bye!</p>";
                        break 2;
                    default:
                        echo "<p>$num3</p>";
                        break 1;
                }

                $num3 ++;
            }
        ?>
    </body>
</html>