<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <?php
            /* Form Validation */
            $first_name = "";
            $middle_name = "";
            $last_name = "";
            $gender = "";

            $first_name_error = "";
            $last_name_error = "";
            $gender_error = "";

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (empty($_POST["first-name"])) {
                    $first_name_error = "First name is required";
                } else {
                    $first_name = $_POST["first-name"];
                    $first_name_error = "";
                }

                if (!empty($_POST["middle-name"])) {
                    $middle_name = $_POST["middle-name"];
                }

                if (empty($_POST["last-name"])) {
                    $last_name_error = "Last name is required";
                } else {
                    $last_name = $_POST["last-name"];
                    $last_name_error = "";
                }

                if (empty($_POST["gender"])) {
                    $gender_error = "Gender is required";
                } else {
                    $gender = $_POST["gender"];
                    $gender_error = "";
                }
            }
        ?>

        <h1>Form Validation</h1>

        <form 
            method="post" 
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
        >
            <div>
                <span>First Name: </span>
                <input 
                    type="text" 
                    name="first-name" 
                    value="<?php echo $first_name;?>"
                    placeholder="First Name"
                />
                <span>* <?php echo $first_name_error;?></span>
            </div>

            <div>
                <span>Middle Name: </span>
                <input 
                    type="text" 
                    name="middle-name" 
                    value="<?php echo $middle_name;?>"
                    placeholder="Middle Name"
                />
            </div>

            <div>
                <span>Last Name: </span>
                <input 
                    type="text" 
                    name="last-name" 
                    value="<?php echo $last_name;?>"
                    placeholder="Last Name"
                />
                <span>* <?php echo $last_name_error;?></span>
            </div>

            <div>
                <span>Gender: </span>
                <input 
                    type="radio" 
                    id="male"
                    name="gender"
                    value="Male"
                    <?php if (isset($gender) && $gender === "Male") echo "checked";?>
                />
                <label for="male">Male</label>
                <input 
                    type="radio" 
                    id="female"
                    name="gender"
                    value="Female"
                    <?php if (isset($gender) && $gender === "Female") echo "checked";?>
                />
                <label for="female">Female</label>
                <span>* <?php echo $gender_error;?></span>
            </div>

            <input type="submit" value="Submit"/>
        </form>

        <?php
            if (!empty($first_name) && !empty($last_name) && !empty($gender)) {
                if (empty($middle_name)) {
                    $name = "$first_name $last_name";
                } else {
                    $name = "$first_name $middle_name $last_name";
                }

                echo "<h1>Submission succeed!</h1>";
                echo "<p>Hi $name ($gender)</p>";
            } else {
                if (!empty($first_name_error) || !empty($last_name_error) || !empty($gender_error)) {
                    echo "<h1>Submission failed</h1>";
                }
            }
        ?>
    </body>
</html>