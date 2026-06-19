<?php
header('Content-Type: application/json');

$dir = "files/";
$files = [];

if (is_dir($dir)) {
    // Scan directory and remove . and ..
    $scannedFiles = array_diff(scandir($dir), array('.', '..'));
    
    foreach ($scannedFiles as $file) {
        // Only include files (you can add a PDF check here if you want)
        if (is_file($dir . $file)) {
            $files[] = $file;
        }
    }
}

echo json_encode($files);
?>