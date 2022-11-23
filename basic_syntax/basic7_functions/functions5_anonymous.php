<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Anonymous Functions */
            echo "<h1>Anonymous Functions</h1>";

            $greeting = function() {
                echo "<p>Hello</p>";
            };
            $greeting();

            $add = function($num1, $num2) {
                return $num1 + $num2;
            };
            echo "<p>" . $add(10, 20) . "</p>";
            echo "<p>" . $add(-230, 20) . "</p>";

            echo "<hr/>";

            /* Arrow Functions */
            echo "<h1>Arrow Functions</h1>";

            $greet = fn() => "Hello";
            echo "<p>" . $greet() . "</p>";

            $sum = fn($num1, $num2) => $num1 + $num2;
            echo "<p>" . $sum(10, 20) . "</p>";
            echo "<p>" . $sum(10, -2220) . "</p>";
        ?>
    </body>
</html>