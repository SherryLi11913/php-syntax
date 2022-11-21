<!DOCTYPE html>
<html>
    <body>
        <?php
            /* FALSE */
            echo "<h1>FALSE</h1>";

            $bool_false = FALSE;
            echo "FALSE: ";
            var_dump($bool_false); // FALSE value
            echo "<br/>";

            echo "Empty string: ";
            var_dump((bool) ""); // Empty string
            echo "<br/>";

            echo "String '0': ";
            var_dump((bool) "0"); // String "0"
            echo "<br/>";

            echo "Float 0.0: ";
            var_dump((bool) 0.0); // Float 0.0
            echo "<br/>";

            echo "Float -0.0: ";
            var_dump((bool) -0.0); // Float -0.0
            echo "<br/>";

            echo "Integer 0: ";
            var_dump((bool) 0); // Integer 0
            echo "<br/>";

            echo "Empty array: ";
            var_dump((bool) array()); // Empty array
            echo "<br/>";

            echo "NULL: ";
            var_dump((bool) NULL); // NULL
            echo "<br/>";

            echo "<hr/>";

            /* TRUE */
            echo "<h1>TRUE</h1>";

            $bool_true = TRUE;
            echo "TRUE: ";
            var_dump($bool_true); // TRUE value
            echo "<br/>";

            echo "String 'false': ";
            var_dump((bool) 'false'); // String 'false'
            echo "<br/>";

            echo "Integer -1: ";
            var_dump((bool) -1); // Integer -1
            echo "<br/>";
        ?>
    </body>
</html>