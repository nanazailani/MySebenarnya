<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySebenarnya</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f6f8fa;
            color: #24292f;
        }

        header {
            background-color: #24292f;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        .hero {
            padding: 4rem 2rem;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #0366d6;
        }

        .hero p {
            font-size: 1.25rem;
            color: #586069;
        }

        .buttons {
            margin-top: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: #2da44e;
            color: white;
            padding: 0.75rem 1.5rem;
            margin: 0 0.5rem;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: #218739;
        }

        footer {
            text-align: center;
            padding: 2rem;
            color: #6a737d;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>MySebenarnya</h1>
        <nav>
            <a href="/login" style="color: white; text-decoration: none; margin-right: 1rem;">Login</a>
            <a href="/register" style="color: white; text-decoration: none;">Register</a>
        </nav>
    </header>

    <div class="hero">
        <h2>Welcome to MySebenarnya</h2>
        <p>Your trusted platform for verifying news with integrity and speed.</p>
        <div class="buttons">
            <a href="/login" class="btn">Get Started</a>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} MySebenarnya. Built with Laravel.
    </footer>
</body>
</html>
