<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Passing Function Arguments by Value */
            echo "<h1>Passing Function Arguments by Value</h1>";

            function sum($num1, $num2) {
                return $num1 + $num2;
            }
            echo "<p>" . sum(10, 20.32) . "</p>";

            function addition($nums) {
                $result = 0;
                for ($index = 0; $index < count($nums); $index ++) {
                    $result += $nums[$index];
                }
                return $result;
            }
            echo "<p>" . addition([1, 2, 3, 4, 5]) . "</p>";

            echo "<hr/>";

            /* Passing Function Arguments by Reference */
            echo "<h1>Passing Function Arguments by Reference</h1>";

            function multiply($num1, $num2, &$result) {
                $result = $num1 * $num2;
                $num1 = 0;
                $num2 = 0;
            }
            $multiply_num1 = 10;
            $multiply_num2 = 30;
            $multiply_result = 0;
            echo "<p>$multiply_num1, $multiply_num2, $multiply_result</p>";
            multiply($multiply_num1, $multiply_num2, $multiply_result);
            echo "<p>$multiply_num1, $multiply_num2, $multiply_result</p>";

            function modify_array($array1, &$array2) {
                $array1 = [1, 2, 3];
                $array2 = ["a", "b", "c"];
            }
            $modify_array1 = [10, 20, 30];
            $modify_array2 = ["A", "B", "C"];
            var_dump($modify_array1);
            echo "<br/>";
            var_dump($modify_array2);
            echo "<br/>";
            modify_array($modify_array1, $modify_array2);
            var_dump($modify_array1);
            echo "<br/>";
            var_dump($modify_array2);
            echo "<br/>";

            echo "<hr/>";

            /* Passing Function Arguments with Default Argument Values */
            echo "<h1>Passing Function Arguments with Default Argument Values</h1>";

            function difference($num1, $num2 = 0) {
                return $num1 - $num2;
            }
            echo "<p>" . difference(123, 23) . "</p>";
            echo "<p>" . difference(123) . "</p>";

            echo "<hr/>";

            /* Passing Function Arguments Where Arguments Are Variable-Length Argument Lists */
            echo "<h1>Passing Function Arguments Where Arguments Are Variable-Length Argument Lists</h1>";

            function combine(...$words) {
                $combination = "";
                foreach ($words as $word) {
                    $combination .= "$word ";
                }
                return $combination;
            }
            echo "<p>" . combine("red") . "</p>";
            echo "<p>" . combine("apple", "banana", "orange") . "</p>";

            echo "<hr/>";

            /* Passing Function Named Arguments */
            echo "<h1>Passing Function Named Arguments</h1>";

            function minus($num1, $num2, $num3) {
                return $num1 - $num2 - $num3;
            }
            echo "<p>" . minus(100, 20, 30) . "</p>";
            echo "<p>" . minus(num3: 100, num1: 20, num2: 30) . "</p>";
        ?>
    </body>
</html>