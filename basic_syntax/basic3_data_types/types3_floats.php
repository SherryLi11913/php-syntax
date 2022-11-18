<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Floating Point Numbers */
            echo "<h1>Floating Point Numbers</h1>";

            $float1 = 1.234;
            echo "<p>$float1</p>";

            $float2 = 1.2e3;
            echo "<p>$float2</p>";

            $float3 = 7E-10;
            echo "<p>$float3</p>";

            echo "<hr/>";

            /* Floating Point Number Conversion */
            echo "<h1>Floating Point Number Conversion</h1>";

            echo "String '3.421e14': ";
            echo "" .var_dump((float) "3.421e14") . "<br/>";

            echo "String '-5.12': ";
            echo "" .var_dump((float) "-5.12") . "<br/>";

            echo "String '   .21': ";
            echo "" .var_dump((float) "   .21") . "<br/>";

            echo "String 'e123.23': ";
            echo "" .var_dump((float) "e123.23") . "<br/>";
        ?>
    </body>
</html>