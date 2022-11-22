<!DOCTYPE html>
<html>
    <body>
        <?php
            /* foreach Loop */
            echo "<h1><code>foreach</code> Loop</h1>";

            foreach(array(1, 2, 3) as $num) {
                echo "<p>$num</p>";
            }

            foreach(array('hello' => 'world', 'foo' => 'bar') as $word) {
                echo "<p>$word</p>";
            }

            foreach(array(10, 20, 30) as $index => $num) {
                echo "<p>$index: $num</p>";
            }

            foreach(array("a" => "apple", "b" => "banana", "grape", "o" => "orange", "peach") as $key => $value) {
                echo "<p>$key: $value</p>";
            }
        ?>
    </body>
</html>