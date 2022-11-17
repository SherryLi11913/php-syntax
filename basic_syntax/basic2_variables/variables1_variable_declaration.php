<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Variable Declaration */
            $text = "This is a text";
            echo "<p>$text</p>";

            $num1 = 10.4;
            $num2 = 30.1;
            echo "<p>" . $num1 . " + " . $num2 . " = " . $num1 + $num2 . "</p>";

            /* Variable Reference */
            $referred_text = &$text; // Reference $text via $referred_text
            echo "<p>$referred_text</p>";
            $text = "Now, text is changed";
            echo "<p>$text</p>";
            echo "<p>$referred_text</p>";

            /* Variable Variables */
            $str1 = 'hello';
            $$str1 = 'world';
            echo "<p>$str1 ${$str1}</p>";
            echo "<p>$str1 $hello</p>";
        ?>
    </body>
</html>