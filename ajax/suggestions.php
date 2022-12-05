<!DOCTYPE html>
<html>
    <body>
        <?php
            $names = [
                'Anna', 
                'Brittany', 
                'Cinderella', 
                'Diana', 
                'Eva', 
                'Fiona', 
                'Gunda', 
                'Hege', 
                'Inga', 
                'Johanna', 
                'Kitty', 
                'Linda', 
                'Nina', 
                'Ophelia', 
                'Petunia', 
                'Amanda', 
                'Raquel', 
                'Cindy', 
                'Doris', 
                'Eve', 
                'Evita', 
                'Sunniva', 
                'Tove', 
                'Unni', 
                'Violet', 
                'Liza', 
                'Elizabeth', 
                'Ellen', 
                'Vicky'
            ]; // Name suggestions

            // Get the text parameter from URL
            $query_text = $_REQUEST["text"];

            $suggestions = "";
            if ($query_text !== "") {
                $query_text = strtolower($query_text);

                foreach($names as $name) {
                    if (stristr($query_text, substr($name, 0, strlen($query_text)))) {
                        if ($suggestions === "") {
                            $suggestions = $name;
                        } else {
                            $suggestions .= ", $name";
                        }
                    }
                }
            }

            echo $suggestions === "" ? "No suggestions" : $suggestions;
        ?>
    </body>
</html>