<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/test/upload" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" name="img">
        <input type="submit" value="上传">
</from>
</body>
</html>