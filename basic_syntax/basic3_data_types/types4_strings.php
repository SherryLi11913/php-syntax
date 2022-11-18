<!DOCTYPE html>
<html>
    <body>
        <?php
            /* Strings */
            echo "<h1>Strings</h1>";
            
            // Single-quoted strings
            $single_quoted = 'Single quoted: Symbols like \', \\ can be displayed, but escaped characters like \n or \t cannot';
            echo "<p>$single_quoted</p>";

            // Double-quoted strings
            $double_quoted = "Double quoted: \n\tAll escaped characters can be interpreted";
            echo "<pre>$double_quoted</pre>";

            // Heredoc strings
            $heredoc = <<<STR
            Heredoc:
                Symbols like ', \ can be displayed
                    Escaped characters like \n 
                    and \t can also be displayed
            STR;
            echo "<pre>$heredoc</pre>";

            // Nowdoc strings
            $nowdoc = <<<'NOWDOC'
            Nowdoc:
                Symbols like ', \ can be displayed
                    Escaped characters like \n and \t cannot be displayed
            NOWDOC;
            echo "<pre>$nowdoc</pre>";
            
            echo "<hr/>";

            /* Variable Parsing */
            echo "<h1>Variable Parsing</h1>";

            $juices = array("apple", "orange", "grape" => "purple");

            // Simple variable parsing: $
            $simple_parsing = "We have $juices[0] juice, $juices[1] juice and $juices[grape] juice";
            echo "<p>$simple_parsing</p>";

            // Complex variable parsing: {$}
            $complex_parsing = "We have {$juices[0]} juice, {$juices[1]} juice and {$juices['grape']} juice";
            echo "<p>$complex_parsing</p>";

            echo "<hr/>";

            /* String Access and Modification by Character */
            echo "<h1>String Access and Modification by Character</h1>";

            $str = "ABCDEFG";
            echo "<p>$str[0]</p>";
            echo "<p>{$str[strlen($str) - 1]}</p>";

            $str[3] = '!';
            echo "<p>$str</p>";
        ?>
    </body>
</html>