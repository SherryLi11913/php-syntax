<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Destroy a Session */
            echo "<h1>Destroy a Session</h1>";

            session_start(); // Start the session

            var_dump($_SESSION);
            echo "<br/>";

            // Remove all session variables
            session_unset();
            var_dump($_SESSION);
            echo "<br/>";

            // Destroy the session
            session_destroy();
            var_dump($_SESSION);
            echo "<br/>";
        ?>
    </body>
</html>