<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Type Operator - instanceof */
            echo "<h1>Type Operator - <code>instanceof</code></h1>";

            interface Animal {}
            class Person implements Animal {}
            class Woman extends Person {}
            
            $woman = new Woman;
            var_dump($woman instanceof Woman);
            echo "<br/>";
            var_dump($woman instanceof Person);
            echo "<br/>";
            var_dump($woman instanceof Animal);
            echo "<br/>";

            $person = new Person;
            var_dump($person instanceof Woman);
            echo "<br/>";
            var_dump($person instanceof Person);
            echo "<br/>";
            var_dump($person instanceof Animal);
            echo "<br/>";
        ?>
    </body>
</html>