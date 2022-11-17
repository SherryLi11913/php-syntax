<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Global Scope */
            $global_var1 = "Global Variable 1";
            echo "<p>$global_var1 from global scope</p>";

            /* Local Scope */
            function localScope1() {                
                echo "<p>$global_var1 from local scope</p>";

                $local_var1 = "Local Variable 1";
                echo "<p>$local_var1 from local scope</p>";
            }
            localScope1();
            echo "<p>$local_var1 from global scope</p>";

            /* The global Keyword */
            $global_var2 = "Global Variable 2";
            $global_var3 = "Global Variable 3";
            echo "<p>$global_var2 from global scope</p>";
            echo "<p>$global_var3 from global scope</p>";

            function localScope2() {
                global $global_var2, $global_var3;
                echo "<p>$global_var2 from local scope</p>";
                echo "<p>$global_var3 from local scope</p>";

                $global_var3 = "New Global Variable 3";
                echo "<p>$global_var3 from local scope</p>";
            }
            localScope2();
            echo "<p>$global_var3 from global scope</p>";

            // $GLOBALS Array
            $global_var4 = "Global Variable 4";
            echo "<p>$global_var4 from global scope</p>";
            
            function localScope3() {
                $GLOBALS['global_var4'] = 'New Global Variable 4';
            }
            localScope3();
            echo "<p>$global_var4 from global scope</p>";

            // static Variables
            function localScope4() {
                static $static_var = 0;
                echo "<p>Static Variable: $static_var from local scope</p>";
                $static_var ++;
            }
            localScope4();
            localScope4();
            localScope4();
        ?>
    </body>
</html>