@extends('common.master')
@section('content')
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }
        section {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }
        .project-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>My Projects</h1>
    </header>

    <section class="container">
        <!-- Example project card -->
        <div class="project-card">
            <h3>Project Title 1</h3>
            <p>Description of Project 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>

        <!-- Example project card -->
        <div class="project-card">
            <h3>Project Title 2</h3>
            <p>Description of Project 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p><strong>Technologies:</strong> Python, Flask, SQL</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>

        <!-- Add more project cards as needed -->

    </section>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

@endsection