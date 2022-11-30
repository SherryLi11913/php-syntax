<!DOCTYPE html>
<html>
    <body>
        <?php
            /* readfile() */
            echo "<h1><code>readfile()</code></h1>";

            echo readfile("file.txt");
            echo "<br/>";

            echo "<hr/>";

            /* Read File fread() */
            echo "<h1>Read File <code>fread()</code></h1>";

            $file1 = fopen("file.txt", "r") or die("Unable to open file.txt");
            echo fread($file1, filesize("file.txt"));
            echo "<br/>";
            fclose($file1);

            echo "<hr/>";

            /* Read Single Line fgets() */
            echo "<h1>Read Single Line <code>fgets()</code></h1>";

            $file2 = fopen("file.txt", "r") or die("Unable to open file.txt");
            while (!feof($file2)) {
                echo fgets($file2);
                echo "<br/>";
            }
            fclose($file2);

            echo "<hr/>";

            /* Read Single Character fgetc() */
            echo "<h1>Read Single Character <code>fgetc()</code></h1>";

            $file3 = fopen("file.txt", "r") or die("Unable to open file.txt");
            while (!feof($file3)) {
                echo fgetc($file3);
                echo "<br/>";
            }
            fclose($file3);
        ?>
    </body>
</html>