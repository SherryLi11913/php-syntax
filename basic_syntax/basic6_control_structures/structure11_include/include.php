<!DOCTYPE html>
<html>
    <body>
        <?php
            /* include */
            echo "<h1><code>include</code></h1>";

            $string1 = "This is a string from include.php";
            echo "<p>$string1</p>";
            echo "<p>$string2</p>";
            
            require("./included_variables.php");
            echo "<p>$string1</p>";
            echo "<p>$string2</p>";

            echo require("./included_return.php");
        ?>
    </body>
</html>