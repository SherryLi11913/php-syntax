<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Bitwise Operator - And Operator $a & $b */
            echo "<h1>Bitwise Operator - And Operator <code>\$a & \$b</code></h1>";

            var_dump((0b1010 & 0b1001) === 0b1000);
            echo "<br/>";

            echo "<hr/>";

            /* Bitwise Operator - Or Operator $a & $b */
            echo "<h1>Bitwise Operator - Or Operator <code>\$a | \$b</code></h1>";

            var_dump((0b1010 | 0b1001) === 0b1011);
            echo "<br/>";

            echo "<hr/>";

            /* Bitwise Operator - Xor Operator $a ^ $b */
            echo "<h1>Bitwise Operator - Xor Operator <code>\$a ^ \$b</code></h1>";

            var_dump((0b1010 ^ 0b1001) === 0b0011);
            echo "<br/>";

            echo "<hr/>";

            /* Bitwise Operator - Not Operator ~$a */
            echo "<h1>Bitwise Operator - Not Operator <code>~\$a</code></h1>";

            var_dump(~0b10);
            echo "<br/>";

            echo "<hr/>";

            /* Bitwise Operator - Left Shift Operator $a << $b */
            echo "<h1>Bitwise Operator - Left Shift Operator <code>\$a << \$b</code></h1>";

            var_dump((0b10 << 3) === 0b10000);
            echo "<br/>";

            echo "<hr/>";

            /* Bitwise Operator - Right Shift Operator $a >> $b */
            echo "<h1>Bitwise Operator - Right Shift Operator <code>\$a >> \$b</code></h1>";

            var_dump((0b101101 >> 3) === 0b101);
            echo "<br/>";
        ?>
    </body>
</html>