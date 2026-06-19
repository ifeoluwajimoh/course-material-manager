<?php
if (isset($_FILES['pdf'])) {
    $fileName = $_FILES['pdf']['name'];
    $tmpName = $_FILES['pdf']['tmp_name'];

    // Ensure the folder exists
    if (!is_dir('files')) {
        mkdir('files', 0777, true);
    }

    $target = "files/" . $fileName;

    if (move_uploaded_file($tmpName, $target)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Upload failed!";
    }
}
?>