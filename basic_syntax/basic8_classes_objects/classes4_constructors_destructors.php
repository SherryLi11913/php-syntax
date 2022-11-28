<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Constructors __construct() */
            echo "<h1>Constructors <code>__construct</code></h1>";

            // Constructor
            class Person {
                public $name;
                public $age;

                function __construct(string $name, int $age) {
                    echo "<p>You are using the constructor</p>";
                    $this->name = $name;
                    $this->age = $age;
                }
            }

            $person1 = new Person("Bob", 12);
            echo "<p>Name: " . $person1->name . "</p>";
            echo "<p>Age: " . $person1->age . "</p>";

            $person2 = new Person(age: 23, name: "Dave");
            echo "<p>Name: " . $person2->name . "</p>";
            echo "<p>Age: " . $person2->age . "</p>";

            // Constructor Promotion
            class Point {
                function __construct(private int $x, private int $y) {
                }

                function print() {
                    echo "<p>x = $this->x, y = $this->y</p>";
                }
            }

            const point = new Point(23, -2);
            point->print();

            echo "<hr/>";

            /* Destructors __destruct() */
            echo "<h1>Destructors <code>__destruct</code></h1>";

            class Animal {
                function __destruct() {
                    echo "<p>Destroying " . __CLASS__ . "</p>";
                }
            }

            $animal1 = new Animal();
            var_dump($animal1);
            echo "<br/>";

            $animal2 = new Animal();
            var_dump($animal2);
            echo "<br/>";
        ?>
    </body>
</html>