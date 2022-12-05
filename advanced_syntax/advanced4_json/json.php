<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Encode a value to JSON format, json_encode() */
            echo "<h1>Encode a value to JSON format, <code>json_encode()</code></h1>";

            // Encode an associative array into a JSON object
            var_dump(json_encode(array("One" => 1, "Two" => 2)));
            echo "<br/>";

            // Encode an indexed array into a JSON array
            var_dump(json_encode(['Hello', 'Hi', 'Hey']));
            echo "<br/>";

            echo "<hr/>";

            /* Decode a JSON object into a PHP object or an associative array, json_decode() */
            echo "<h1>Decode a JSON object into a PHP object or an associative array, <code>json_decode()</code></h1>";

            // Decode a JSON object into a PHP object
            var_dump(json_decode('{"Foo":"Bar","Hello":123}'));
            echo "<br/>";

            // Decode a JSON object into an associative array
            var_dump(json_decode('{"Foo":"Bar","Hello":123}', true));
            echo "<br/>";

            // Decode a JSON array into an indexed array
            var_dump(json_decode('[123, 293, "Hello"]'));
            echo "<br/>";
        ?>
    </body>
</html>