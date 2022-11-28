<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Object Interfaces */
            echo "<h1>Object Interfaces <code>interface</code></h1>";

            interface Animal {
                function info();
                public function bark();
            }

            class Dog implements Animal {
                function __construct(private string $name, private int $age) {
                }

                function info() {
                    echo "<p>Name: $this->name, $this->age years old</p>";
                }

                function bark() {
                    echo "<p>Wang Wang</p>";
                }
            }

            $dog = new Dog("Coco", 2);
            $dog->info();
            $dog->bark();
        ?>
    </body>
</html>