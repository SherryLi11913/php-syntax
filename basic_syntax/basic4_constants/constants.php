<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Constants */
            echo "<h1>Constants</h1>";

            // Defining constants using the constant keyword
            const CONSTANT_STRING1 = "Hello World";
            var_dump(CONSTANT_STRING1);
            echo "<br/>";

            const CONSTANT_BOOLEAN1 = FALSE;
            var_dump(CONSTANT_BOOLEAN1);
            echo "<br/>";

            const CONSTANT_INT1 = 923;
            var_dump(CONSTANT_INT1);
            echo "<br/>";

            const CONSTANT_FLOAT1 = -23.493;
            var_dump(CONSTANT_FLOAT1);
            echo "<br/>";

            const CONSTANT_ARRAY1 = array(
                "foo" => "bar",
                32,
                1.232,
                203 => FALSE,
            );
            var_dump(CONSTANT_ARRAY1);
            echo "<br/>";

            // Defining constants using the define() function
            define("CONSTANT_STRING2", "This is a string");
            var_dump(CONSTANT_STRING2);
            echo "<br/>";

            define("CONSTANT_BOOLEAN2", TRUE);
            var_dump(CONSTANT_BOOLEAN2);
            echo "<br/>";

            define("CONSTANT_INT2", -2293);
            var_dump(CONSTANT_INT2);
            echo "<br/>";

            define("CONSTANT_FLOAT2", 230.34921232);
            var_dump(CONSTANT_FLOAT2);
            echo "<br/>";
            
            define("CONSTANT_ARRAY2", array(
                "hello" => "world",
                302,
                TRUE,
                30 => 2.32,
            ));
            var_dump(CONSTANT_ARRAY2);
            echo "<br/>";
        ?>
    </body>
</html>