<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Function Returning Values */
            echo "<h1>Function Returning Values</h1>";

            function add($num1, $num2) {
                return $num1 + $num2;
            }
            
            echo "<p>" . add(10, 20) . "</p>";
            echo "<p>" . add(10.12312, 202.233) . "</p>";
            echo "<p>" . add(-10, -12320) . "</p>";
            
            echo "<hr/>";

            /* Returning a Reference from a Function */
            echo "<h1>Returning a Reference from a Function</h1>";

            function &increment(&$num) {
                $num ++;
                return $num;
            }

            $number1 = 10;
            echo "<p>Number1: $number1</p>";

            $number2 = &increment($number1);
            echo "<p>Number1: $number1</p>";
            echo "<p>Number2: $number2</p>";

            $number1 ++;
            echo "<p>Number1: $number1</p>";
            echo "<p>Number2: $number2</p>";

            $number2 ++;
            echo "<p>Number1: $number1</p>";
            echo "<p>Number2: $number2</p>";
        ?>
    </body>
</html>