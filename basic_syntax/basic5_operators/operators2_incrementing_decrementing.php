<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Incrementing Operator - Pre-Increment Operator ++$a */
            echo "<h1>Incrementing Operator - Pre-Increment Operator <code>++\$a</code></h1>";
            
            $num1 = 3;
            echo "<p>$num1</p>";
            echo "<p>" . ++$num1 . "</p>";
            echo "<p>$num1</p>";

            echo "<hr/>";

            /* Incrementing Operator - Post-Increment Operator $a++ */
            echo "<h1>Increment Operator - Post-Increment Operator <code>\$a++</code></h1>";

            $num2 = -14.2;
            echo "<p>$num2</p>";
            echo "<p>" . $num2++ . "</p>";
            echo "<p>$num2</p>";

            echo "<hr/>";

            /* Decrementing Operator - Pre-Decrement Operator --$a */
            echo "<h1>Decrementing Operator - Pre-Decrement Operator <code>--\$a</code></h1>";

            $num3 = 23.1;
            echo "<p>$num3</p>";
            echo "<p>" . --$num3 . "</p>";
            echo "<p>$num3</p>";

            echo "<hr/>";

            /* Decrementing Operator - Post-Decrement Operator $a-- */
            echo "<h1>Decrementing Operator - Post-Decrement Operator <code>\$a--</code></h1>";

            $num4 = 0;
            echo "<p>$num4</p>";
            echo "<p>" . $num4-- . "</p>";
            echo "<p>$num4</p>";
        ?>
    </body>
</html>