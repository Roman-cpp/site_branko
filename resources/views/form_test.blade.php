<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
    <form style=" display: inline-block" method="post" action="/test/send">
        <input type="text" value="name" name="name">
        <input type="text" value="email" name="email">
        <input type="text" value="phone" name="phone">
        <input type="text" value="theme" name="theme">
        <textarea name="message"></textarea>
        <input type="submit" value="отправить">
        @csrf
    </form>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
