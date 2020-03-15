<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./style/style.css" rel="stylesheet" />
  <title>Upload</title>
</head>
<body>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file" class="inputfile" />
    <label for="file">Choose A File</label>
    <button type="submit" name="submit">Upload</button>
  </form>
  <p>
    <?php
    echo  $_GET['msg'];
    ?>
  </p>
</body>

</html>