<!DOCTYPE html>
<html>
    <body>
        <?php
            /* PHP Filter Extension, filter_list() */
            echo "<h1>PHP Filter Extension, <code>filter_list()</code></h1>";

            foreach(filter_list() as $index => $filter) {
                echo "<p>" . $index . ": " . $filter . " " . filter_id($filter) . "</p>";
            }

            echo "<hr/>";

            /* Validating and Sanitizing Data, filter_var() */
            echo "<h1>Validating and Sanitizing Data, <code>filter_var()</code></h1>";
            
            // Validate a boolean, FILTER_VALIDATE_BOOLEAN
            echo "<h2>Validate a boolean, <code>FILTER_VALIDATE_BOOLEAN</code></h2>";

            echo "<h3>Return true</h3>";
            var_dump(filter_var(true, FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var(1, FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var("on", FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var("yes", FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var("true", FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var("1", FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";

            echo "<h3>Return false</h3>";
            var_dump(filter_var(false, FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var(0, FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var(100, FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";
            var_dump(filter_var("abc", FILTER_VALIDATE_BOOLEAN));
            echo "<br/>";

            echo "<h3>With <code>FILTER_NULL_ON_FAILURE</code> flag</h3>";
            var_dump(filter_var(100, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var("hi", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var(true, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var(1, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var(false, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var("off", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var(0, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var("no", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var("", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var("false", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";
            var_dump(filter_var("0", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
            echo "<br/>";

            // Validate an email, FILTER_VALIDATE_EMAIL
            echo "<h2>Validate an email, <code>FILTER_VALIDATE_EMAIL</code></h2>";

            var_dump(filter_var("abc@example.com", FILTER_VALIDATE_EMAIL));
            echo "<br/>";
            var_dump(filter_var("abc@gmail.com", FILTER_VALIDATE_EMAIL));
            echo "<br/>";
            var_dump(filter_var("abc@outlook.com", FILTER_VALIDATE_EMAIL));
            echo "<br/>";

            var_dump(filter_var("abc", FILTER_VALIDATE_EMAIL));
            echo "<br/>";
            var_dump(filter_var("@example.com", FILTER_VALIDATE_EMAIL));
            echo "<br/>";
            var_dump(filter_var("abc@example", FILTER_VALIDATE_EMAIL));
            echo "<br/>";

            // Validate a float, FILTER_VALIDATE_FLOAT
            echo "<h2>Validate a float, <code>FILTER_VALIDATE_FLOAT</code></h2>";

            echo "<h3>Return true</h3>";
            var_dump(filter_var(-2, FILTER_VALIDATE_FLOAT));
            echo "<br/>";
            var_dump(filter_var(12.323, FILTER_VALIDATE_FLOAT));
            echo "<br/>";
            var_dump(filter_var("1.23", FILTER_VALIDATE_FLOAT));
            echo "<br/>";
            var_dump(filter_var(TRUE, FILTER_VALIDATE_FLOAT));
            echo "<br/>";

            echo "<h3>Return false</h3>";
            var_dump(filter_var(FALSE, FILTER_VALIDATE_FLOAT));
            echo "<br/>";
            var_dump(filter_var("2.323asdf", FILTER_VALIDATE_FLOAT));
            echo "<br/>";
            var_dump(filter_var("2,232,123", FILTER_VALIDATE_FLOAT));
            echo "<br/>";
            
            echo "<h3>With <code>FILTER_FLAG_ALLOW_THOUSAND</code></h3>";
            var_dump(filter_var("2,232,123", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND));
            echo "<br/>";
            var_dump(filter_var("2,232.123", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND));
            echo "<br/>";
            var_dump(filter_var("2232.123", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND));
            echo "<br/>";

            // Validate an integer, FILTER_VALIDATE_INT
            echo "<h2>Validate an integer, <code>FILTER_VALIDATE_INT</code></h2>";

            echo "<h3>Return true</h3>";
            var_dump(filter_var(-2323, FILTER_VALIDATE_INT));
            echo "<br/>";
            var_dump(filter_var("1", FILTER_VALIDATE_INT));
            echo "<br/>";
            var_dump(filter_var(TRUE, FILTER_VALIDATE_INT));
            echo "<br/>";

            echo "<h3>Return false</h3>";
            var_dump(filter_var(FALSE, FILTER_VALIDATE_INT));
            echo "<br/>";
            var_dump(filter_var(1.23, FILTER_VALIDATE_INT));
            echo "<br/>";
            var_dump(filter_var("1.6949", FILTER_VALIDATE_INT));
            echo "<br/>";
            var_dump(filter_var("0o223", FILTER_VALIDATE_INT));
            echo "<br/>";
            var_dump(filter_var("0x1a23", FILTER_VALIDATE_INT));
            echo "<br/>";

            echo "<h3>With <code>FILTER_FLAG_ALLOW_OCTAL</code></h3>";
            var_dump(filter_var("0o223", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_OCTAL));
            echo "<br/>";
            var_dump(filter_var("0o293", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_OCTAL));
            echo "<br/>";

            echo "<h3>With <code>FILTER_FLAG_ALLOW_HEX</code></h3>";
            var_dump(filter_var("0x1a23", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX));
            echo "<br/>";
            var_dump(filter_var("0x1a23G", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_HEX));
            echo "<br/>";

            // Validate a URL, FILTER_VALIDATE_URL
            echo "<h2>Validate a URL, <code>FILTER_VALIDATE_URL</code></h2>";

            var_dump(filter_var("https://www.google.ca/", FILTER_VALIDATE_URL));
            echo "<br/>";
            var_dump(filter_var("http://www.google.ca/", FILTER_VALIDATE_URL));
            echo "<br/>";

            var_dump(filter_var("www.google.ca", FILTER_VALIDATE_URL));
            echo "<br/>";
            var_dump(filter_var("google.ca", FILTER_VALIDATE_URL));
            echo "<br/>";

            // Sanitize an email, FILTER_SANITIZE_EMAIL
            echo "<h2>Sanitize an email, <code>FILTER_SANITIZE_EMAIL</code></h2>";

            var_dump(filter_var("123@example.com", FILTER_SANITIZE_EMAIL));
            echo "<br/>";
            var_dump(filter_var("123   @example.com", FILTER_SANITIZE_EMAIL));
            echo "<br/>";

            // Sanitize a float, FILTER_SANITIZE_NUMBER_FLOAT
            echo "<h2>Sanitize a float, <code>FILTER_SANITIZE_NUMBER_FLOAT</code></h2>";

            var_dump(filter_var("23123.232", FILTER_SANITIZE_NUMBER_FLOAT));
            echo "<br/>";
            var_dump(filter_var("23,123,232", FILTER_SANITIZE_NUMBER_FLOAT));
            echo "<br/>";
            var_dump(filter_var("2312323e2", FILTER_SANITIZE_NUMBER_FLOAT));
            echo "<br/>";
            var_dump(filter_var("abc", FILTER_SANITIZE_NUMBER_FLOAT));
            echo "<br/>";

            echo "<h3>With <code>FILTER_FLAG_ALLOW_FRACTION</code></h3>";
            var_dump(filter_var("23123.232", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
            echo "<br/>";
            var_dump(filter_var("a.232", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
            echo "<br/>";

            echo "<h3>With <code>FILTER_FLAG_ALLOW_THOUSAND</code></h3>";
            var_dump(filter_var("23,123,232", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND));
            echo "<br/>";
            
            echo "<h3>With <code>FILTER_FLAG_ALLOW_SCIENTIFIC</code></h3>";
            var_dump(filter_var("23123e232", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC));
            echo "<br/>";
            var_dump(filter_var("23123E232", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_SCIENTIFIC));
            echo "<br/>";

            // Sanitize an integer, FILTER_SANITIZE_NUMBER_INT
            echo "<h2>Sanitize an integer, <code>FILTER_SANITIZE_NUMBER_INT</code></h2>";

            var_dump(filter_var("23123232", FILTER_SANITIZE_NUMBER_INT));
            echo "<br/>";
            var_dump(filter_var("23123.232", FILTER_SANITIZE_NUMBER_INT));
            echo "<br/>";
            var_dump(filter_var("23123e232", FILTER_SANITIZE_NUMBER_INT));
            echo "<br/>";
        ?>
    </body>
</html>