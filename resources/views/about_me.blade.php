<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>About me</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light flex-center">
        <div class="container">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/about_me">About Me</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/hobbies">Hobbies</a>
            </li>
            </ul>
        </div>
    </nav>

    <div style="text-align: center;">
        <h1>About Me</h1>
        <h5>{{$name}}</h5>
        <p>{{$age}}</p>
        <p>{{$email}}</p>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>