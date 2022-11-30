<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Write/Overwrite to File */
            echo "<h1>Write/Overwrite to File</h1>";

            $file_write = fopen("file_write.txt", "r") or die("Unable to open file_write.txt");
            while (!feof($file_write)) {
                echo fgets($file_write);
                echo "<br/>";
            }
            fclose($file_write);

            $file_write = fopen("file_write.txt", "w") or die("Unable to open file_write.txt");
            fwrite($file_write, "This will be the first line\n");
            fwrite($file_write, "This is the 2nd line\n");
            fclose($file_write);

            $file_write = fopen("file_write.txt", "r") or die("Unable to open file_write.txt");
            while (!feof($file_write)) {
                echo fgets($file_write);
                echo "<br/>";
            }
            fclose($file_write);

            echo "<hr/>";

            /* Append to File */
            echo "<h1>Append to File</h1>";

            $file_append = fopen("file_append.txt", "r") or die("Unable to open file_append.txt");
            while (!feof($file_append)) {
                echo fgets($file_append);
                echo "<br/>";
            }
            fclose($file_append);

            $file_append = fopen("file_append.txt", "a") or die("Unable to open file_append.txt");
            fwrite($file_append, "\nThis is the following line\n");
            fwrite($file_append, "This is the 2nd following line\n");
            fclose($file_append);

            $file_append = fopen("file_append.txt", "r") or die("Unable to open file_append.txt");
            while (!feof($file_append)) {
                echo fgets($file_append);
                echo "<br/>";
            }
            fclose($file_append);
        ?>
    </body>
</html>