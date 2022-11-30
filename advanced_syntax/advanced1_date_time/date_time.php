<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Get a Date */
            echo "<h1>Get a Date</h1>";

            // Represent a year (in four digits)
            echo "<p>Year: " . date("Y") . "</p>";
            // Represent a month (01 to 12)
            echo "<p>Month: " . date("m") . "</p>";
            // Represent the day of the month (01 to 31)
            echo "<p>Day: " . date("d") . "</p>";
            // Represent the day of the week
            echo "<p>Day (Week): " . date("l") . "</p>";

            // Format a date
            echo "<p>Today is " . date("l, Y/m/d") . "</p>";
            echo "<p>Today is " . date("l, Y.m.d") . "</p>";
            echo "<p>Today is " . date("l, Y-m-d") . "</p>";

            echo "<hr/>";

            /* Get a Time */
            echo "<h1>Get a Time</h1>";

            // Represent 24-hour format of an hour (00 to 23)
            echo "<p>Hours (24-hour): " . date("H") . "</p>";
            // Represent 12-hour format of an hour with leading zeros (01 to 12)
            echo "<p>Hours (12-hour): " . date("h") . "</p>";
            // Represent minutes with leading zeros (00 to 59)
            echo "<p>Minutes: " . date("i") . "</p>";
            // Represent seconds with leading zeros (00 to 59)
            echo "<p>Seconds: " . date("s") . "</p>";
            // Represent lowercase Ante meridiem and Post meridiem (am or pm)
            echo "<p>am/pm: " . date("a") . "</p>";

            // Format a time
            echo "<p>The time is: " . date("H:i:s") . "</p>";
            echo "<p>The time is: " . date("h:i:sa") . "</p>";

            echo "<hr/>";

            /* Get/Set the Time Zone */
            echo "<h1>Get/Set the Time Zone</h1>";

            // Get the Time Zone
            echo "<p>The time zone is " . date_default_timezone_get() . "</p>";

            // Set the Time Zone
            date_default_timezone_set("Asia/Shanghai");
            echo "<p>The time zone is " . date_default_timezone_get() . "</p>";
            echo "<p>China time is: " . date("H:i:s, l, Y.m.d") . "</p>";
            echo "<p>China time is: " . date("h:i:sa, l, Y.m.d") . "</p>";

            date_default_timezone_set("America/Toronto");
            echo "<p>The time zone is " . date_default_timezone_get() . "</p>";
            echo "<p>Toronto time is: " . date("H:i:s, l, Y.m.d") . "</p>";
            echo "<p>Toronto time is: " . date("h:i:sa, l, Y.m.d") . "</p>";

            echo "<hr/>";

            /* Create a Date */
            echo "<h1>Create a Date</h1>";

            // mktime()
            $time1 = mktime(10, 20, 30, 10, 20, 1990);
            echo "<p>time1 is " . date("h:i:sa, l, Y.m.d", $time1) . "</p>";
            $time2 = mktime(21, 34, 23, 2, 5, 2002);
            echo "<p>time2 is " . date("h:i:sa, l, Y.m.d", $time2) . "</p>";

            // strtotime()
            $time3 = strtotime("10:20am May 3 2011");
            echo "<p>time3 is " . date("h:i:sa, l, Y.m.d", $time3) . "</p>";
            $time4 = strtotime("Aug. 23 2000");
            echo "<p>time4 is " . date("h:i:sa, l, Y.m.d", $time4) . "</p>";
            $time5 = strtotime("14:20 Apr 14 2004");
            echo "<p>time5 is " . date("h:i:sa, l, Y.m.d", $time5) . "</p>";
        ?>
    </body>
</html>