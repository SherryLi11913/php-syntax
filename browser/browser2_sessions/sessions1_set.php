<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Set Session Variables */
            echo "<h1>Set Session Variables</h1>";

            session_start(); // Start the session

            $_SESSION['Hello'] = 'World';
            $_SESSION['Foo'] = 'Bar';
        ?>
    </body>
</html>