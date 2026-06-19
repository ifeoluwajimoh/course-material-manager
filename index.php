<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Study Materials</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>📚 Study Materials</h1>

    <div class="container">
        <div class="cards">
            <?php
            $dir = "files/";
            if (is_dir($dir)) {
                $files = array_diff(scandir($dir), array('.', '..'));
                
                foreach ($files as $file) {
                    if (is_file($dir . $file)) {
                        
                        $title = pathinfo($file, PATHINFO_FILENAME);
                        $title = str_replace(array('_', '-'), ' ', $title);
                        
                        echo '<div class="card">';
                        echo '<h3>' . htmlspecialchars($title) . '</h3>';
                        echo '<a href="' . $dir . htmlspecialchars($file) . '" target="_blank">Open</a>';
                        echo '<a href="' . $dir . htmlspecialchars($file) . '" download>Download</a>';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
        
        <div class="upload-section">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="pdf" accept=".pdf" required>
                <button type="submit">Upload PDF</button>
            </form>
        </div>
    </div>

</body>
</html>