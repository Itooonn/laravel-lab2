<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | Home</title>

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        .unicolor {
            background-color: #6a1b9a; /* Deep Purple */
            color: #ffffff;
        }
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center;     
            padding-bottom: 10vh;   
        }

        .nav-link-custom {
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .nav-link-custom:hover {
            opacity: 0.7;
        }

        .text-color {
            color: #6a1b9a;
        }
    </style>
</head>

<body class="bg-light text-center">

    <header>
        <nav class="p-4 unicolor">
            <a class="text-white mx-3 nav-link-custom" href="{{ route('home') }}">Home</a>
            <a class="text-white mx-3 nav-link-custom" href="{{ route('projects') }}">Projects</a>
            <a class="text-white mx-3 nav-link-custom" href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main class="container">
        <h1 class="display-1 text-color">Hi, I'm Karl Ashton Mahusay</h1>
        <p class="lead mb-0">An Associate of Computer Technology Student</p>
        <p class="fs-5 text-muted">at the esteemed La Verdad Christian College.</p>
    </main>

</body>
</html>