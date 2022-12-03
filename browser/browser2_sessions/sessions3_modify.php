<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Modify Session Variables */
            echo "<h1>Modify Session Variables</h1>";

            session_start(); // Start the session

            var_dump($_SESSION['Hello']);
            echo "<br/>";
            $_SESSION['Hello'] = 100;
            var_dump($_SESSION['Hello']);
            echo "<br/>";

            var_dump($_SESSION['Foo']);
            echo "<br/>";
            $_SESSION['Foo'] = False;
            var_dump($_SESSION['Foo']);
            echo "<br/>";
        ?>
    </body>
</html>