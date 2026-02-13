<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | Home</title>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .unicolor {
            background-color: #6a1b9a; 
            color: #ffffff;
        }

        .main-content {
            flex: 1;
            display: flex;
            align-items: center; 
            justify-content: center;
            padding: 2rem 0; 
        }
    </style>
</head>

<body class="bg-light">
    <header>
        <nav class="p-4 unicolor text-center">
            <a class="text-white mx-3" href="{{ route('home') }}">Home</a>
            <a class="text-white mx-3" href="{{ route('projects') }}">Projects</a>
            <a class="text-white mx-3" href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main class="main-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-start px-4">
                    <h2 class="fw-bold">About Me</h2>
                    <p class="lead">I'm a student learning about computer technology and web development aiming to be able to help my community with computer technical expertise
                        and coding.</p>
                    
                    <h3 class="mt-4">My Goals</h3>
                    <ul class="text-muted">
                        <li>Build a system that my school and community can use.</li>
                        <li>Learn and be proficient in at least one of the programming languages I learned.</li>
                        <li>Learn more about general computer knowlegde such as networking, operating systems, and databases.</li>
                        <li>Make my own game.</li>
                    </ul>

                    <h3 class="mt-4">My Likes</h3>
                    <ul class="text-muted">
                        <li>Cats</li>
                        <li>Stories</li>
                        <li>Music</li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=facearea&w=400&h=400&facepad=2" 
                         alt="Profile" 
                         class="img-fluid rounded shadow-lg" 
                         style="max-width: 80%;">
                </div>
            </div>
        </div>
    </main>
</body>
</html>