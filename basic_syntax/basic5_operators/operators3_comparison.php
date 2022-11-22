<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Comparison Operator - Equal Operator $a == $b */
            echo "<h1>Comparison Operator - Equal Operator <code>\$a == \$b</code></h1>";

            var_dump(1 == 1);
            echo "<br/>";

            var_dump(-1 == "-1");
            echo "<br/>";

            var_dump(0 == FALSE);
            echo "<br/>";

            var_dump(-1.000 == -1);
            echo "<br/>";

            var_dump(0 == "   -0.00000");
            echo "<br/>";

            var_dump("hello" == "hello");
            echo "<br/>";

            var_dump("hello" === "Hello");
            echo "<br/>";

            var_dump(-1.000 === -1.00000001);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Identical Operator $a === $b */
            echo "<h1>Comparison Operator - Identical Operator <code>\$a === \$b</code></h1>";

            var_dump(1 === 1);
            echo "<br/>";

            var_dump(-1 === -1.000);
            echo "<br/>";

            var_dump(1 === "1");
            echo "<br/>";

            var_dump(0 === FALSE);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Not Equal Operator $a != $b */
            echo "<h1>Comparison Operator - Not Equal Operator <code>\$a != \$b</code></h1>";

            var_dump(1 != 1);
            echo "<br/>";

            var_dump(1 != 1.0000);
            echo "<br/>";

            var_dump(1.000 != "1");
            echo "<br/>";

            var_dump(0 != FALSE);
            echo "<br/>";

            var_dump(-3 != -2);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Not Equal Operator $a <> $b */
            echo "<h1>Comparison Operator - Not Equal Operator <code>\$a <> \$b</code></h1>";
            
            var_dump(1 <> 1);
            echo "<br/>";

            var_dump(1 <> "1.00000");
            echo "<br/>";

            var_dump(1 <> TRUE);
            echo "<br/>";

            var_dump('hi' <> 'Hi');
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Not Identical Operator $a !== $b */
            echo "<h1>Comparison Operator - Not Identical Operator <code>\$a !== \$b</code></h1>";

            var_dump(1 !== 1);
            echo "<br/>";

            var_dump(1 !== '1');
            echo "<br/>";

            var_dump(1 !== 1.0);
            echo "<br/>";

            var_dump(0 !== FALSE);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Less Than Operator $a < $b */
            echo "<h1>Comparison Operator - Less Than Operator <code>\$a < \$b</code></h1>";

            var_dump(1 < 22);
            echo "<br/>";

            var_dump(1 < 1);
            echo "<br/>";

            var_dump(1 < 0);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Greater Than Operator $a > $b */
            echo "<h1>Comparison Operator - Greater Than Operator <code>\$a > \$b</code></h1>";

            var_dump(1 > -123);
            echo "<br/>";

            var_dump(1 > 1);
            echo "<br/>";

            var_dump(1 > 12312312);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Less Than Or Equal To Operator $a <= $b */
            echo "<h1>Comparison Operator - Less Than Or Equal To Operator <code>\$a <= \$b</code></h1>";

            var_dump(1 <= 123);
            echo "<br/>";

            var_dump(1 <= 1);
            echo "<br/>";

            var_dump(1 <= -232);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Greater Than Or Equal To Operator $a >= $b */
            echo "<h1>Comparison Operator - Greater Than Or Equal To Operator <code>\$a >= \$b</code></h1>";
            
            var_dump(1 >= -232);
            echo "<br/>";

            var_dump(1 >= 1);
            echo "<br/>";

            var_dump(1 >= 123);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Spaceship Operator $a <=> $b */
            echo "<h1>Comparison Operator - Spaceship Operator <code>\$a <=> \$b</code></h1>";

            var_dump(1 <=> 1123);
            echo "<br/>";

            var_dump(1 <=> 1);
            echo "<br/>";

            var_dump(1 <=> -1323);
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Ternary Operator ?: */
            echo "<h1>Comparison Operator - Ternary Operator <code>?:</code></h1>";

            echo 10 == 10.0 ? "10 == 10" : "10 != 10";
            echo "<br/>";

            echo 10 === 10.0 ? "10 === 10.0" : "10 !== 10.0";
            echo "<br/>";

            echo "<hr/>";

            /* Comparison Operator - Null Coalescing Operator ?? */
            echo "<h1>Comparison Operator - Null Coalescing Operator <code>??</code></h1>";

            var_dump(10 ?? null);
            echo "<br/>";

            var_dump(null ?? 10);
            echo "<br/>";

            var_dump(FALSE ?? null);
            echo "<br/>";

            var_dump(null ?? FALSE);
            echo "<br/>";
        ?>
    </body>
</html>