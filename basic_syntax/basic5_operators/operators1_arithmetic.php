<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Arithmetic Operator - Identity Operator +$a */
            echo "<h1>Arithmetic Operator - Identity Operator <code>+\$a</code></h1>";

            var_dump(+("20"));
            echo "<br/>";

            var_dump(+"-2392.42");
            echo "<br/>";

            var_dump(+FALSE);
            echo "<br/>";

            echo "<hr/>";

            /* Arithmetic Operator - Negation Operator -$a */
            echo "<h1>Arithmetic Operator - Negation Operator <code>-\$a</code></h1>";

            var_dump(-"392.321e5");
            echo "<br/>";

            var_dump(-"   -2392");
            echo "<br/>";

            var_dump(-TRUE);
            echo "<br/>";

            var_dump(-(2039));
            echo "<br/>";

            echo "<hr/>";

            /* Arithmetic Operator - Addition Operator $a + $b */
            echo "<h1>Arithmetic Operator - Addition Operator <code>\$a + \$b</code></h1>";

            var_dump(123 + 492.123);
            echo "<br/>";

            var_dump("   123" + "123.232");
            echo "<br/>";

            var_dump(-230 + -1231);
            echo "<br/>";

            echo "<hr/>";

            /* Arithmetic Operator - Subtraction Operator $a - $b */
            echo "<h1>Arithmetic Operator - Subtraction Operator <code>\$a - \$b</code></h1>";

            var_dump(-23 - -123.232);
            echo "<br/>";

            var_dump("232.12" - 30.23);
            echo "<br/>";
            
            echo "<hr/>";

            /* Arithmetic Operator - Multiplication Operator $a * $b */
            echo "<h1>Arithmetic Operator - Multiplication Operator <code>\$a * \$b</code></h1>";
            
            var_dump(-34.23 * 23);
            echo "<br/>";

            var_dump(" 123" * -1.2);
            echo "<br/>";

            var_dump(34 * 2);
            echo "<br/>";

            echo "<hr/>";

            /* Arithmetic Operator - Division Operator $a / $b */
            echo "<h1>Arithmetic Operator - Division Operator <code>\$a / \$b</code></h1>";

            var_dump(122.32 / -12);
            echo "<br/>";

            var_dump("-32" / 1.2);
            echo "<br/>";

            var_dump(100 / 2);
            echo "<br/>";

            echo "<hr/>";

            /* Arithmetic Operator - Modulo Operator $a % $b */
            echo "<h1>Arithmetic Operator - Modulo Operator <code>\$a % \$b</code></h1>";

            var_dump(10 % -3);
            echo "<br/>";

            var_dump("22" % 2);
            echo "<br/>";

            echo "<hr/>";

            /* Arithmetic Operator - Exponentiation Operator $a ** $b */
            echo "<h1>Arithmetic Operator - Exponentiation Operator <code>\$a ** \$b</code></h1>";

            var_dump(-23 ** 3);
            echo "<br/>";

            var_dump("23" ** -2.1);
            echo "<br/>";
        ?>
    </body>
</html>