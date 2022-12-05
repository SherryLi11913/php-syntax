<!DOCTYPE html>
<html>
    <body>
        <?php
            /* preg_match() */
            echo "<h1><code>preg_match()</code></h1>";

            var_dump(preg_match("/hello/", "Hello World"));
            echo "<br/>";
            var_dump(preg_match("/hello/i", "Hello World"));
            echo "<br/>";

            echo "<hr/>";

            /* preg_match_all() */
            echo "<h1><code>preg_match_all()</code></h1>";

            var_dump(preg_match_all("/[ts]ion/", "station tradition collision, provision"));
            echo "<br/>";
            var_dump(preg_match_all("/[ts]ion/", "hello world"));
            echo "<br/>";

            echo "<hr/>";

            /* preg_replace() */
            echo "<h1><code>preg_replace()</code></h1>";

            var_dump(preg_replace("/[ts]ion/", "!!!!", "station tradition collision, provision"));
            echo "<br/>";
        ?>
    </body>
</html>