<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Enumerations */
            echo "<h1>Enumerations</h1>";

            enum Color {
                case Red;
                case Blue;
                case Green;
                case Yellow;
                case Black;
                case White;

                public function get_color(): string {
                    return $this -> name;
                }
            }

            function paint_color(Color $color): void {
                echo "<p>" . $color -> get_color() . "</p>";
                echo "<p>" . $color -> name . "</p>";
            }
            $black = Color::Black;
            paint_color($black);
            paint_color(Color::Red);
        ?>
    </body>
</html>