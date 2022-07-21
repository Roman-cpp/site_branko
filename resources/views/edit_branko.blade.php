<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>

<h1>Галерея</h1>
<form action="/edit" method="post">
    @csrf
    <input type="hidden" value="gallery">
    <input type="file">
    <select name="theme" required="required">
        <option value="">Выберите тему</option>
        <option value="Sales">обеспечение</option>
        <option value="Marketing">продукция</option>
    </select>
    <input type="submit" value="send">
</form>
</body>
</html>
