<!DOCTYPE html>
<html>
    <body>
        <?php
            /* match */
            echo "<h1><code>match</code></h1>";

            $match =  match(0) {
                "0" => "String Zero",
                0.0 => "Float Zero",
                False => "Boolean Zero",
                0 => "Integer Zero",
            };
            echo "<p>$match</p>";
        ?>
    </body>
</html>