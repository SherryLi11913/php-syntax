<!DOCTYPE html>
<html>
    <body>
        <?php
            /* User-Defined Functions */
            echo "<h1>User-Defined Functions</h1>";

            function func() {
                echo "<p>You are inside the function</p>";
                return "<p>This is returned by the function</p>";
            }
            echo func();
        ?>
    </body>
</html>