<!DOCTYPE html>
<html>
    <body>
        <?php
            /* class and new */
            echo "<h1><code>class</code> and <code>new</code></h1>";

            class Person {}
            $person = new Person();
            var_dump($person);
            echo "<br/>";
            
            echo "<hr/>";

            /* Properties and Methods */
            echo "<h1>Properties and Methods</h1>";

            class Woman {
                public $gender = "Female";
                public $name = "";

                public function info() {
                    return "$this->gender: $this->name";
                }
            }

            $woman = new Woman();
            echo "<p>" . $woman->gender . " " . $woman->name . " " . $woman->info() . "</p>";
            $woman->name = "Alice";
            echo "<p>" . $woman->gender . " " . $woman->name . " " . $woman->info() . "</p>";

            echo "<hr/>";

            /* Nullsafe Methods and Properties */
            echo "<h1>Nullsafe Methods and Properties</h1>";

            class Man {
                public $name;

                public function info() {
                    return $this->name ? "Name: $this->name" : null;
                }
            }

            $man = null;
            echo "<p>Man: " . $man?->info() . "</p>";
            echo "<p>Man: " . $man?->name . "</p>";
            $man = new Man();
            echo "<p>Man: " . $man?->info() . "</p>";
            echo "<p>Man: " . $man?->name . "</p>";
            $man->name = "Bob";
            echo "<p>Man: " . $man?->info() . "</p>";
            echo "<p>Man: " . $man?->name . "</p>";
        ?>
    </body>
</html>