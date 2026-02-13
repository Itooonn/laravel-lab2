<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio | Projects</title>

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

        .content-wrapper {
            flex: 1;
            display: flex;
            align-items: center; 
            padding: 40px 0; 
        }

        .card {
            transition: transform 0.3s ease, shadow 0.3s ease;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        .text-color {
            color: #6a1b9a;
        }

        .nav-link-custom {
            text-decoration: none;
            transition: opacity 0.3s;
        }

        .nav-link-custom:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body class="bg-light text-center">
    
    <header>
        <nav class="p-4 unicolor">
            <a class="text-white mx-3 text-decoration-none nav-link-custom" href="{{ route('home') }}">Home</a>
            <a class="text-white mx-3 text-decoration-none nav-link-custom" href="{{ route('projects') }}">Projects</a>
            <a class="text-white mx-3 text-decoration-none nav-link-custom" href="{{ route('about') }}">About</a>
        </nav>
    </header>
    
    <main class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="display-5 fw-bold mb-3 text-color">My Work</h2>
                    <p class="lead text-muted mb-5">Below are some of the projects I have worked on in my time as Laverdarian College Student.</p>
                    
                    <div class="row g-4"> <div class="col-md-4">
                            <div class="card p-4 h-100">
                                <h3 class="h5 fw-bold text-color">Visit Colleges</h3>
                                <p class="text-secondary">A web app built to help upcomming college students to navigate and search nearby colleges around Apalit Pampanga.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-4 h-100">
                                <h3 class="h5 fw-bold text-color">Reserba Silid</h3>
                                <p class="text-secondary">A web app built to help students of La Verdad Christian College to view class schedules and reserve classrooms for events and etc.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-4 h-100">
                                <h3 class="h5 fw-bold text-color">Hunter Exam Python Game</h3>
                                <p class="text-secondary">A simple text based interactive game where the user is set to be one of the examinees inside the Hunter x Hunter anime.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>