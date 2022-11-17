<!DOCTYPE html>
<html>
    <body>
        <?php
            /* FALSE */
            echo "<h1>FALSE</h1>";

            $bool_false = FALSE;
            echo "FALSE: ";
            echo "" . var_dump($bool_false) . "<br/>"; // FALSE value

            echo "Empty string: ";
            echo "" . var_dump((bool) "") . "<br/>"; // Empty string

            echo "String '0': ";
            echo "" . var_dump((bool) "0") . "<br/>"; // String "0"

            echo "Float 0.0: ";
            echo "" . var_dump((bool) 0.0) . "<br/>"; // Float 0.0

            echo "Float -0.0: ";
            echo "" . var_dump((bool) -0.0) . "<br/>"; // Float -0.0

            echo "Integer 0: ";
            echo "" . var_dump((bool) 0) . "<br/>"; // Integer 0

            echo "Empty array: ";
            echo "" . var_dump((bool) array()) . "<br/>"; // Empty array

            echo "NULL: ";
            echo "" . var_dump((bool) NULL) . "<br/>"; // NULL

            echo "<hr/>";

            /* TRUE */
            echo "<h1>TRUE</h1>";

            $bool_true = TRUE;
            echo "TRUE: ";
            echo "" . var_dump($bool_true) . "<br/>"; // TRUE value

            echo "String 'false': ";
            echo "" . var_dump((bool) 'false') . "<br/>"; // String 'false'

            echo "Integer -1: ";
            echo "" . var_dump((bool) -1) . "<br/>"; // Integer -1
        ?>
    </body>
</html>