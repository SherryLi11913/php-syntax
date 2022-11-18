<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Integers */
            echo "<h1>Integers</h1>";

            // Decimal (base 10): [1-9][0-9]*(_[0-9]+)* | 0
            $decimal1 = 1234;
            $decimal2 = 1_23_4;
            echo "<p>Decimal (base 10): $decimal1 $decimal2</p>";

            // Octal (base 8): 0[oO]?[0-7]+(_[0-7]+)*
            $octal1 = 0123;
            $octal2 = 0o123;
            $octal3 = 0O1_23;
            echo "<p>Octal (base 8): $octal1 $octal2 $octal3</p>";

            // Hexadecimal (base 16): 0[xX][0-9a-fA-F]+(_[0-9a-fA-F]+)*
            $hexa1 = 0x1A;
            $hexa2 = 0Xa_A1f;
            echo "<p>Hexadecimal (base 16): $hexa1 $hexa2</p>";

            // Binary (base 2): 0[bB][01]+(_[01]+)*
            $binary1 = 0b1111101;
            $binary2 = 0B1010_0101;
            echo "<p>Binary (base 2): $binary1 $binary2</p>";

            echo "<hr/>";

            /* Integer Conversion */
            echo "<h1>Integer Conversion</h1>";

            // Converting to integer from booleans
            echo "Boolean FALSE: ";
            echo "" . var_dump((int) FALSE) . "<br/>";
            echo "Boolean TRUE: ";
            echo "" . var_dump((int) TRUE) . "<br/>";

            // Converting to integer from floating point numbers
            echo "Float -20.3: ";
            echo "" . var_dump((int) -20.3) . "<br/>";
            echo "Float 3.5: ";
            echo "" . var_dump((int) 3.5) . "<br/>";
            echo "Float 9.78: ";
            echo "" . var_dump((int) 9.78) . "<br/>";

            // Converting to integer from strings
            echo "String '2.939': ";
            echo "" . var_dump((int) "2.939") . "<br/>";
            echo "String '-45': ";
            echo "" . var_dump((int) "-45") . "<br/>";
            echo "String '   29': ";
            echo "" . var_dump((int) "   29") . "<br/>";
            echo "String '93hello': ";
            echo "" . var_dump((int) "93hello") . "<br/>";
            echo "String 'hello3world': ";
            echo "" . var_dump((int) "hello3world") . "<br/>";
            echo "String 'hello world': ";
            echo "" . var_dump((int) "hello world") . "<br/>";

            // Converting to integer from NULL
            echo "NULL: ";
            echo "" . var_dump((int) null) . "<br/>";
        ?>
    </body>
</html>