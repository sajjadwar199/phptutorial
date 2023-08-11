<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8" />




<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Bootstrap CSS -->
<!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
<!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
<!-- https://cdnjs.com/libraries/font-awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
<title>upload file</title>
</head>
<body style="padding:20px;">
<h1 class="display-6" align="center" style="color:black;"> upload file library php(oop) with bootstrap by skmcoder</h1>
<br>
<div class="container" style="padding:14px;">
<?php
//upload file start
require  'fileuploadclass.php';
if (isset($_POST['upload'])) {
$up = new fileUpload('fileup', 'uploads', "file upload success", ["png", "jpg", "gif", "jpge",'pdf'], 3000000);
if ($up->filePathAfterUpload != '') {
echo  'file path after upload: ' . $up->filePathAfterUpload;
}
}
?>
<form class="was-validated" action="index.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
<input type="file" name="fileup" class="form-control" aria-label="file example" required>
</div>
<h3 class="mb-3" align="center">
<button type="submit" name="upload" class="btn btn-light">upload</button>
</h3>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html> 