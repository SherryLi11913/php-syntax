<!DOCTYPE html>
<html>
    <body>
        <?php
            /* String Operator - Concatenation Operator . */
            echo "<h1>String Operator - Concatenation Operator <code>.</code></h1>";

            var_dump("Hello" . " World" . "!");
            echo "<br/>";

            echo "<hr/>";

            /* String Operator - Concatenation Assignment Operator .= */
            echo "<h1>String Operator - Concatenation Assignment Operator <code>.=</code></h1>";

            $str = "Foo";
            var_dump($str);
            echo "<br/>";
            $str .= " Bar";
            var_dump($str);
            echo "<br/>";
        ?>
    </body>
</html>