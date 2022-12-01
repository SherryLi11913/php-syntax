<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Create a Cookie */
            echo "<h1>Create a Cookie</h1>";
          
            setcookie("Hello", "World");
            var_dump($_COOKIE);
            echo "<br/>";

            echo "<hr/>";

            /* Retrieve a Cookie */
            echo "<h1>Retrieve a Cookie</h1>";

            if (!isset($_COOKIE["Foo"])) {
                echo "<p>Cookie named 'Foo' is not set</p>";
            } else {
                echo "<p>Cookie named 'Foo' is set</p>";
                echo "<p>Value of cookie named 'Foo' is " . $_COOKIE["Foo"] . "</p>";
            }

            setcookie("Foo", "Bar");

            if (!isset($_COOKIE["Foo"])) {
                echo "<p>Cookie named 'Foo' is not set</p>";
            } else {
                echo "<p>Cookie named 'Foo' is set</p>";
                echo "<p>Value of cookie named 'Foo' is " . $_COOKIE["Foo"] . "</p>";
            }

            echo "<hr/>";

            /* Modify a Cookie Value */
            echo "<h1>Modify a Cookie Value</h1>";

            setcookie("Hi", "Hihihihihi");
            echo "<p>Value of cookie named 'Hi' is " . $_COOKIE["Hi"] . "</p>";

            setcookie("Hi", "Heyeyeyeyey");
            echo "<p>Value of cookie named 'Hi' is " . $_COOKIE["Hi"] . "</p>";

            echo "<hr/>";

            /* Delete a Cookie */
            echo "<h1>Delete a Cookie</h1>";

            setcookie('One', 1);
            var_dump($_COOKIE);
            echo "<br/>";

            setcookie("One", 1, time() - 3600);
            var_dump($_COOKIE);
            echo "<br/>";
        ?>
    </body>
</html>