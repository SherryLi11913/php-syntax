<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Get Session Variables */
            echo "<h1>Get Session Variables</h1>";

            session_start(); // Start the session

            var_dump($_SESSION['Hello']);
            echo "<br/>";

            var_dump($_SESSION['Foo']);
            echo "<br/>";
        ?>
    </body>
</html>