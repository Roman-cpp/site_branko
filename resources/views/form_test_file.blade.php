<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post" enctype="multipart/form-data" action="/file/send">
    <input type="file" name="file">
    <input type="submit" value="отправить">
    @csrf
</form>
</body>
</html>
