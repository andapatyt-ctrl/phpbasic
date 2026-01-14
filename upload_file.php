<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = basename($_FILES['file']['name']);
        $destination = $uploadDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $destination)) {
            echo "File uploaded successfully: " . htmlspecialchars($fileName);
        } else {
            echo "Error moving the uploaded file.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}
?>