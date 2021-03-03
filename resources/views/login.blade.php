<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
</head>
<body>

<form method="post">
    {!! csrf_field() !!}
    <input name="email" placeholder="Email" required/>
    <input name="password" placeholder="Password" required/>
    <button type="submit">Login</button>
</form>

</body>
</html>
