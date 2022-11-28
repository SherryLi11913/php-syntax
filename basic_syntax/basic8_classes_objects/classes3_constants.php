<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Class Constants */
            echo "<h1>Class Constants <code>const</code></h1>";

            class Animal {
                const DOG = "Dog";
                public const CAT = "Cat";
                private const SECRET = "Secret";

                function dogBark() {
                    echo "<p>" . self::DOG . ": WANG WANG!</p>";
                }

                function catNoise() {
                    echo "<p>" . self::CAT . ": MIAO MIAO~</p>";
                }

                function showSecret() {
                    echo "<p>" . self::SECRET . ": Xu...</p>";
                }
            }

            echo "<p>" . Animal::DOG . "</p>";
            echo "<p>" . Animal::CAT . "</p>";

            $animal = new Animal();
            echo "<p>" . $animal::DOG . "</p>";
            echo "<p>" . $animal::CAT . "</p>";
            echo "<p>" . $animal->dogBark() . "</p>";
            echo "<p>" . $animal->catNoise() . "</p>";
            echo "<p>" . $animal->showSecret() . "</p>";
        ?>
    </body>
</html>