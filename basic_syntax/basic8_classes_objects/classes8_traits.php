<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Traits */
            echo "<h1>Traits <code>trait</code></h1>";

            trait Greeting {
                private function info() {
                    return $this->name;
                }

                public function greet() {
                    return "Hi " . $this->info() . "";
                }
            }

            class Person {
                function __construct(private string $name) {
                }

                use Greeting;
            }

            $person = new Person("Alice");
            echo "<p>" . $person->greet() . "</p>";
        ?>
    </body>
</html>