<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Tracks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>--}}
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="stylesheet" href="/css/bootstrap.css" media="screen">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a class="navbar-brand" href="#">Radio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Upload</a>
            </li>
        </ul>
        <div class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Email" aria-label="Email">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button">Sign Up</button>
        </div>
    </div>
</nav>
<main role="main" class="container">
    <div id="tracks">
        <tracks></tracks>
    </div>
</main>
<script src="/js/app.js"></script>
</body>
</html>
