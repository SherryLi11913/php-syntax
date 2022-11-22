<!DOCTYPE html>
<html>
    <body>
        <?php
            /* require */
            echo "<h1><code>require</code></h1>";

            $string1 = "This is a string from require.php";
            echo "<p>$string1</p>";
            echo "<p>$string2</p>";
            
            require("./required_variables.php");
            echo "<p>$string1</p>";
            echo "<p>$string2</p>";

            echo require("./required_return.php");
        ?>
    </body>
</html>