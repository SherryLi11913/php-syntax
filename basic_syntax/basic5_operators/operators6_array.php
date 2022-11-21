<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Array Operator - Union Operator $a + $b */
            echo "<h1>Array Operator - Union Operator <code>\$a + \$b</code></h1>";

            var_dump(
                array(
                    "hello" => "world",
                    "hi" => "hey",
                ) 
                + 
                array(
                    "a" => "apple",
                    "b" => "banana",
                )
            );
            echo "<br/>";

            var_dump(array(1, 2, 3) + array(4, 5, 6, 7, 8));
            echo "<br/>";

            var_dump(
                array(
                    "a" => "apple",
                    "p" => "pear",
                    "b" => "banana",
                    "grape",
                ) 
                + 
                array(
                    "o" => "orange",
                    "p" => "pineapple",
                    "pow",
                    "peach",
                )
            );
            echo "<br/>";

            echo "<hr/>";

            /* Array Operator - Equality Operator $a == $b */
            echo "<h1>Array Operator - Equality Operator <code>\$a == \$b</code></h1>";

            var_dump(
                array(1, 'apple', 3)
                ==
                array('0' => 1, 'apple', 2 => 3)
            );
            echo "<br/>";

            var_dump(
                array(
                    "a" => "apple",
                    "b" => "banana",
                    "g" => "grape",
                )
                ==
                array(
                    "g" => "grape",
                    "a" => "apple",
                    "b" => "banana",
                )
            );
            echo "<br/>";

            var_dump(
                array(1, 2, 3)
                ==
                array('1', 2, 3)
            );
            echo "<br/>";

            var_dump(
                array(1, 2, 3)
                ==
                array(4, 5, 6)
            );
            echo "<br/>";

            echo "<hr/>";

            /* Array Operator - Identity Operator $a === $b */
            echo "<h1>Array Operator - Identity Operator <code>\$a === \$b</code></h1>";

            var_dump(
                array(1, 2, 'Hi')
                ===
                array(1, 2, 'Hi')
            );
            echo "<br/>";

            var_dump(
                array(
                    "a" => "apple",
                    "b" => "banana",
                )
                ===
                array(
                    "b" => "banana",
                    "a" => "apple",
                )
            );
            echo "<br/>";

            var_dump(
                array(0, "hello" => "world", "3")
                ===
                array(0, "hello" => "world", 3)
            );
            echo "<br/>";

            echo "<hr/>";

            /* Array Operator - Inequality Operator $a != $b */
            echo "<h1>Array Operator - Inequality Operator <code>\$a != \$b</code></h1>";

            var_dump(
                array(
                    "0" => 123,
                    "hi" => "hey",
                    "one" => "1",
                )
                !=
                array(
                    123,
                    "one" => 1,
                    "hi" => "hey",
                )
            );
            echo "<br/>";

            var_dump(
                array(1, 2, 3)
                !=
                array(1, 'hey', 3)
            );
            echo "<br/>";

            echo "<hr/>";

            /* Array Operator - Inequality Operator $a <> $b */
            echo "<h1>Array Operator - Inequality Operator <code>\$a <> \$b</code></h1>";
            
            var_dump(
                array(
                    "o" => "orange",
                    1 => 23,
                    "r" => "red",
                )
                <>
                array(
                    "r" => "red",
                    "1" => 23,
                    "o" => "orange",
                )
            );
            echo "<br/>";

            var_dump(
                array(1, 2, 'hi')
                <>
                array(1, 2, 'hello')
            );
            echo "<br/>";

            echo "<hr/>";

            /* Array Operator - Non-Identity Operator $a !== $b */
            echo "<h1>Array Operator - Non-Identity Operator <code>\$a !== \$b</code></h1>";

            var_dump(
                array(
                    "hello" => "world",
                    1 => 123,
                )
                !==
                array(
                    1 => 123,
                    "hello" => "world",
                )
            );
            echo "<br/>";

            var_dump(
                array(1, 2, 3)
                !==
                array(1, 2, 3)
            );
            echo "<br/>";
        ?>
    </body>
</html>