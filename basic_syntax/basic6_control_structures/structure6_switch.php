<!DOCTYPE html>
<html>
    <body>
        <?php
            /* switch */
            echo "<h1><code>switch</code></h1>";

            switch (0) {
                case "0":
                    echo "Zero";
                    break;
                case 1:
                    echo "One";
                    break;
                default:
                    echo "Other";
                    break;
            }
            echo "<br/>";

            switch (3) {
                case 0:
                    echo "Zero";
                    break;
                case 1:
                case 2:
                case 3:
                case 4:
                    echo "Positive integer less than 5";
                    break;
                default:
                    echo "Other";
                    break;
            }
            echo "<br/>";

            switch (-1) {
                case 0:
                    echo "Zero";
                    break;
                default:
                    echo "Other";
                    break;
            }
        ?>
    </body>
</html>