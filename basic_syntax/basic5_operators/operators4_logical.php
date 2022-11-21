<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Logical Operator - And Operator $a and $b */
            echo "<h1>Logical Operator - And Operator <code>\$a and \$b</code></h1>";

            var_dump(1 and 3232.231);
            echo "<br/>";

            var_dump(0 and 123);
            echo "<br/>";

            var_dump(TRUE and "");
            echo "<br/>";

            var_dump(null and FALSE);
            echo "<br/>";

            echo "<hr/>";

            /* Logical Operator - And Operator $a && $b */
            echo "<h1>Logical Operator - And Operator <code>\$a && \$b</code></h1>";

            var_dump(3.2 && "Hello");
            echo "<br/>";

            var_dump("" && 123);
            echo "<br/>";

            var_dump(null && "Hi");
            echo "<br/>";

            var_dump(FALSE && 0);
            echo "<br/>";

            echo "<hr/>";

            /* Logical Operator - Or Operator $a or $b */
            echo "<h1>Logical Operator - Or Operator <code>\$a or \$b</code></h1>";

            var_dump(1 or 23.23);
            echo "<br/>";

            var_dump(0 or "hi");
            echo "<br/>";

            var_dump("" or 23.2);
            echo "<br/>";

            var_dump(null or FALSE);
            echo "<br/>";

            echo "<hr/>";

            /* Logical Operator - Or Operator $a || $b */
            echo "<h1>Logical Operator - Or Operator <code>\$a || \$b</code></h1>";

            var_dump(TRUE || 23);
            echo "<br/>";

            var_dump(FALSE || 123);
            echo "<br/>";

            var_dump('Hi' || "");
            echo "<br/>";

            var_dump(null || 0);
            echo "<br/>";

            echo "<hr/>";

            /* Logical Operator - Xor Operator $a xor $b */
            echo "<h1>Logical Operator - Xor Operator <code>\$a xor \$b</code></h1>";

            var_dump(1 xor null);
            echo "<br/>";

            var_dump("" xor "hi");
            echo "<br/>";

            var_dump(123 xor TRUE);
            echo "<br/>";

            var_dump(FALSE xor 0);
            echo "<br/>";

            echo "<hr/>";

            /* Logical Operator - Not Operator !$a */
            echo "<h1>Logical Operator - Not Operator <code>!\$a</code></h1>";

            var_dump(!TRUE);
            echo "<br/>";

            var_dump(!123.23);
            echo "<br/>";

            var_dump(!null);
            echo "<br/>";

            var_dump(!"");
            echo "<br/>";
        ?>
    </body>
</html>