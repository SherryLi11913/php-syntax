<!DOCTYPE html>
<html>
    <body>
        <?php
            /* File Upload */
            $error;

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // Check if image file is an actual image or fake image
                if (getimagesize($_FILES["image"]["tmp_name"]) === FALSE) {
                    $error = "File is not an image";
                }

                // Check if file already exists
                $target_file = "uploads/" . basename($_FILES["image"]["name"]);
                if (!isset($error) && file_exists($target_file)) {
                    $error = "File already exists";
                }

                // Limit file size
                if (!isset($error) && $_FILES["image"]["size"] > 5000000) {
                    $error = "File size is too large";
                }

                // Limit file type
                $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                if (!isset($error) && $image_type !== "jpg" && $image_type !== "png" && $image_type !== "jpeg") {
                    $error = "Only JPG, JPEG & PNG files are allowed";
                }
            }
        ?>

        <h1>File Upload</h1>

        <form 
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
            method="post"
            enctype="multipart/form-data"
        >
            Select image to upload:
            <input type="file" name="image"/>
            <input type="submit" value="Upload" name="submit"/>
        </form>

        <?php
            if (isset($_POST["submit"])) {
                if (isset($error)) {
                    echo "<h1>File upload failed. $error</h1>";
                } else {
                    // Upload file to target location
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        echo "<h1>File upload succeeded!</h1>";
                        echo '<img src="' . $target_file . '" width="300" height="300"/>';
                        unset($error);
                    } else {
                        $error = "There was an error uploading your file";
                        echo "<h1>File upload failed. $error</h1>";
                    }
                }
            }
        ?>
    </body>
</html>