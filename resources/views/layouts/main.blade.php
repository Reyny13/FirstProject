<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px 0;
        }

        ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        li {
            display: inline-block;
            margin-right: 20px;
        }

        li:last-child {
            margin-right: 0;
        }

        a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 0 20px;
        }
    </style>
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="{{ route('main.index') }}">Main</a></li>
            <li><a href="{{ route('post.index') }}">Posts</a></li>
            <li><a href="{{ route('about.index') }}">About</a></li>
            <li><a href="{{ route('contact.index') }}">Contacts</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</div>
</body>
</html>
