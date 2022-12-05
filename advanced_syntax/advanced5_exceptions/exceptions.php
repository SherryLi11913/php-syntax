<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Throwing an Exception */
            function divide($dividend, $divisor) {
                if ($divisor === 0) {
                    throw new Exception("Cannot be divided by zero");
                }
                return $dividend / $divisor;
            }

            // try...catch...finally Statement
            try {
                var_dump(divide(5, 0));
                echo "<br/>";
            } catch (Exception $exception) {
                echo "<p>" . $exception->getMessage() . "</p>";
            } finally {
                echo "<p>Division completed</p>";
            }
        ?>
    </body>
</html>