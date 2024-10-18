<!DOCTYPE html>
<html>
    <head>
        <title>Unggah file Dokumen</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
</form>
<div id="status"></div>

<script src="jquery-3.7.1.js"></script>
<script src="upload.js"></script>
</body>
</html>