<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Property Overloading */
            echo "<h1>Property Overloading: <code>__set()</code>, <code>__get()</code>, <code>__isset()</code>, <code>__unset()</code></h1>";

            class Person {
                private string $name;
                private int $age;

                public function __set($name, $value) {
                    echo "<p>Setting '$name' to $value</p>";
                    $this->$name = $value;
                }
                
                public function __get($name) {
                    echo "<p>Getting '$name'</p>";
                    return $this->$name;
                }

                public function __isset($name) {
                    echo "<p>Is '$name' set?</p>";
                    return isset($this->$name);
                }

                public function __unset($name) {
                    echo "<p>Unsetting '$name'</p>";
                    unset($this->$name);
                }
            }

            $person = new Person();

            var_dump($person->__isset("name"));
            echo "<br/>";
            var_dump($person->__isset("age"));
            echo "<br/>";

            $person->__set("name", "Emma");
            var_dump($person->__get("name"));
            echo "<br/>";
            $person->__set("age", 23);
            var_dump($person->__get("age"));
            echo "<br/>";

            $person->__unset("name");
            var_dump($person->__isset("name"));
            echo "<br/>";
            $person->__unset("age");
            var_dump($person->__isset("age"));
            echo "<br/>";
        ?>
    </body>
</html>