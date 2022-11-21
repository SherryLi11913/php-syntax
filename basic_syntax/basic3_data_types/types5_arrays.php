<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Arrays */
            echo "<h1>Arrays</h1>";

            // Arrays with key-value pairs
            $array1_keys = array(
                "one" => 1,
                "two" => 2,
                100 => "one hundred",
                "four" => 4,
            );
            var_dump($array1_keys);
            echo "<br/>";

            $array2_keys = [
                200 => "two hundred",
                "two" => 2,
                "three" => 3,
            ];
            var_dump($array2_keys);
            echo "<br/>";

            // Indexed arrays without keys
            $indexed_array1 = array("hello", "hi", 200, "world");
            var_dump($indexed_array1);
            echo "<br/>";

            $indexed_array2 = [1, 2, "Hello"];
            var_dump($indexed_array2);
            echo "<br/>";

            // Arrays with keys not on all elements
            $array1_keys_not_all = array(
                "one" => 1,
                "two",
                "blue" => "red",
                23,
                5 => "five",
                "four" => 4,
            );
            var_dump($array1_keys_not_all);
            echo "<br/>";

            $array2_keys_not_all = array(
                100 => 1,
                "two",
                "three",
                "four" => 4,
                200 => 12312312,
                "number"
            );
            var_dump($array2_keys_not_all);
            echo "<br/>";

            echo "<hr/>";

            /* Accessing Array Elements */
            echo "<h1>Accessing Array Elements</h1>";

            $array1 = array(
                1 => "one",
                "two" => 2,
                "three",
                "nested" => array(
                    "hello" => "world",
                ),
            );
            echo "<p>" . $array1[1] . "</p>";
            echo "<p>" . $array1["two"] . "</p>";
            echo "<p>" . $array1[2] . "</p>";
            var_dump($array1["nested"]);
            echo "<br/>";
            echo "<p>" . $array1["nested"]["hello"] . "</p>";

            foreach ($array1 as $key => $value) {
                echo "<p>$key: ";
                var_dump($value);
                echo "</p>";
            }

            echo "<hr/>";

            /* Creating/Modifying Array Elements */
            echo "<h1>Creating/Modifying Array Elements</h1>";

            $array2 = array(
                100,
                "foo" => "bar",
                5 => 400,
            );
            var_dump($array2);
            echo "<br/>";

            // Modifying array elements
            $array2[0] = 12345;
            var_dump($array2);
            echo "<br/>";

            $array2["foo"] = "dump";
            var_dump($array2);
            echo "<br/>";

            // Creating array elements
            $array2["hello"] = "world";
            var_dump($array2);
            echo "<br/>";

            $array2[9] = 'nine';
            var_dump($array2);
            echo "<br/>";

            echo "<hr/>";

            /* Array Destructuring */
            echo "<h1>Array Destructuring</h1>";

            $array3 = [200, true, "Hello"];
            [$array3_element1, $array3_element2, $array3_element3] = $array3;
            var_dump($array3_element1);
            echo "<br/>";
            var_dump($array3_element2);
            echo "<br/>";
            var_dump($array3_element3);
            echo "<br/>";

            $array4 = [11111, 333333, 7777777, 5555555, 2222222, 99999];
            [$array4_element1, , $array4_element3] = $array4;
            var_dump($array4[0]);
            echo "<br/>";
            var_dump($array4_element3);
            echo "<br/>";
        ?>
    </body>
</html>