<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Object Iteration */
            echo "<h1>Object Iteration</h1>";

            class Animal {
                function __construct(public string $name, protected string $category, private int $age) {
                }

                function info() {
                    foreach($this as $property => $value) {
                        echo "<p>$property: $value</p>";
                    }
                }
            }

            $animal = new Animal("Jojo", "Dog", 7);
            foreach($animal as $property => $value) {
                echo "<p>$property - $value</p>";
            }
            $animal->info();
        ?>
    </body>
</html>