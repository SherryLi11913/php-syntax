<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Class Abstraction */
            echo "<h1>Class Abstraction <code>abstract</code></h1>";

            abstract class Animal {
                function __construct(protected $name, protected $gender, protected $category) {
                }

                abstract function category();

                public function info() {
                    echo "<p>" . $this->category() . " ($this->gender): $this->name</p>";
                }
            }

            class Dog extends Animal {
                function __construct($name, $age, $category) {
                    parent::__construct($name, $age, $category);
                }

                function category() {
                    return "$this->category Dog";
                }
            }

            $dog = new Dog("Bob", "M", "Yorkshire Terrier");
            $dog->info();
        ?>
    </body>
</html>