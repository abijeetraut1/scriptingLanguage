<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $uploadDir = "uploads/";

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $file = $_FILES["file"];
    if ($file["error"] > 0) {
        echo "Error: " . $file["error"];
    } else {

        $fileallow = array('image/png', 'image/jpeg', 'image/gif');
        if (!in_array($file['type'], $fileallow)) {
            echo "only image allowed";
        } else {
            
            if ($file["size"] > 2097152) {
                echo "File size more 2MB";
            } else {
                $fileName = basename($file["name"]);
                $targetPath = $uploadDir . $fileName;

                if (move_uploaded_file($file["tmp_name"], $targetPath)) {
                    echo "File uploaded successfully.";
                } else {
                    echo "Error uploading file.";
                }
            }
        }
    }
}
?>;