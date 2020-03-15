<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file["size"];
  $fileErr = $file["error"];
  $fileExt = strtolower(end(explode(".", $fileName)));
  $allowed = ["jpeg", "jpg", "png", "pdf"];
  if (in_array($fileExt, $allowed)) {
    if ($fileErr === 0) {
      if ($fileSize <= 1000000) {
        $fileNewName = (explode(".", $fileName))[0] . uniqid('', true) . '.' . $fileExt;
        $fileDest = 'uploads/' . $fileNewName;
        move_uploaded_file($fileTmpName, $fileDest);
        header("Location: index.php?msg=File Uploaded Successfully!");
      } else header("Location: index.php?msg=You are not allowed to upload more the 10MB file...");
    } else header("Location:index.php?msg=There were ${fileErr} error(s) while uploading...");
  } else header("Location: index.php?msg=No supported file to upload");
}
