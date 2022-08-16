<html>

<body>
    <p> Upload File in Gallery</p>
    <form action="upload_image.php" method="post" enctype="multipart/form-data">
        <label for="file1">Filename:</label>
        <input type="file" name="file1" id="file1" />
        <input type="submit" value="Upload">

        <p> Note: Upload ได้เฉพาะไฟล์ที่มีนามสกุลเป็น .gif, .jpeg, .txt หรือ .docx เท่านั้น และไฟล์ที่ Upload ต้องมีขนาดไม่เกิน 50 KB</p>
    </form>
</body>

</html>