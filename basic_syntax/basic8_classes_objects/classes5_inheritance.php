<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Object Inheritance */
            echo "<h1>Object Inheritance <code>extends</code></h1>";

            class Person {
                protected string $name;
                protected int $age;
                protected string $gender;

                function __construct(string $name, int $age) {
                    $this->name = $name;
                    $this->age = $age;
                }

                function info() {
                    return "Name: $this->name Age: $this->age";
                }
            }

            class Woman extends Person {
                function __construct(string $name, int $age) {
                    parent::__construct($name, $age);
                    $this->gender = "F";
                }

                function info() {
                    echo "<p>Woman: " . parent::info() . "</p>";
                }
            }

            $woman = new Woman("Alice", 45);
            $woman->info();

            echo "<hr/>";

            /* final Keyword */
            echo "<h1><code>final</code> Keyword</h1>";

            class Animal {
                function __construct(protected string $name, protected int $age) {
                }

                final public function info() {
                    echo "<p>Name: $this->name, $this->age years old</p>";
                }

                public function bark() {
                    echo "<p>Hi</p>";
                }
            }

            class Dog extends Animal {
                function __construct($name, $age) {
                    parent::__construct($name, $age);
                }

                function bark() {
                    echo "<p>Wang wang</p>";
                }
            }

            $dog = new Dog("Bob", 2);
            $dog->bark();
            $dog->info();
        ?>
    </body>
</html>