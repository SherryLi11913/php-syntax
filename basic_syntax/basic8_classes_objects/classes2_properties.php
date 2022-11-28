<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Type Declarations */
            echo "<h1>Type Declarations</h1>";

            class Person {
                public string $name;
                public ?int $age;

                function __construct(string $name, ?int $age) {
                    $this->name = $name;
                    $this->age = $age;
                }
            }

            $person1 = new Person("Ann", 23);
            var_dump($person1);
            echo "<br/>";

            $person2 = new Person("Bob", null);
            var_dump($person2);
            echo "<br/>";

            echo "<hr/>";

            /* Property Modifier - Visibility */
            echo "<h1>Property Modifier - Visibility</h1>";
            
            class Visibility {
                public $public = "Public property";
                protected $protected = "Protected property";
                private $private = "Private property";

                function print() {
                    echo "<p>$this->public</p>";
                    echo "<p>$this->protected</p>";
                    echo "<p>$this->private</p>";
                }
            }

            $visibility = new Visibility();
            echo "<p>$visibility->public</p>";
            $visibility->print();

            echo "<hr/>";
            
            /* Property Modifier - static */
            echo "<h1>Property Modifier - <code>static</code></h1>";

            class Animal {
                static $category = "dog";
            }

            echo "<p>" . Animal::$category . "</p>";
            Animal::$category = "cat";
            echo "<p>" . Animal::$category . "</p>";

            $animal = new Animal();
            echo "<p>" . $animal::$category . "</p>";
            $animal::$category = "bird";
            echo "<p>" . $animal::$category . "</p>";
            echo "<p>" . Animal::$category . "</p>";

            echo "<hr/>";

            /* Property Modifier - readonly */
            echo "<h1>Property Modifier - <code>readonly</code></h1>";

            class Woman {
                readonly string $gender;

                function __construct() {
                    $this->gender = "F";
                }
            }

            $woman = new Woman();
            echo "<p>$woman->gender</p>";
        ?>
    </body>
</html>