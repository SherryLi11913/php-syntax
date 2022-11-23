<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Variable Functions */
            echo "<h1>Variable Functions</h1>";

            function foo() {
                return "Foo Bar";
            }

            var_dump(foo());
            echo "<br/>";

            $str = "foo";
            var_dump($str);
            echo "<br/>";
            var_dump($str());
            echo "<br/>";
        ?>
    </body>
</html>