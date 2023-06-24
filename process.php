<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the comment
  $comment = $_POST["comment"];
  
  // Get the file details
  $fileName = $_FILES["file"]["name"];
  $fileTmpName = $_FILES["file"]["tmp_name"];
  $fileSize = $_FILES["file"]["size"];
  $fileError = $_FILES["file"]["error"];
  $fileType = $_FILES["file"]["type"];
  
  // File upload destination
  $uploadPath = "uploads/" . basename($fileName);
  
  // Move the uploaded file to the desired location
  if (move_uploaded_file($fileTmpName, $uploadPath)) {
    // File upload success
    
    // Save comment and file details in a database or file
    
    // Redirect to a success page
    header("Location: success.html");
    exit();
  } else {
    // File upload failed
    echo "Sorry, there was an error uploading your file.";
  }
}
?>