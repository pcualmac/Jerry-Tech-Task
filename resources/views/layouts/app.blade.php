<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40; /* Dark gray for the header */
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        .navbar h1 {
            color: white;
            margin-bottom: 0.5rem;
        }
        .navbar p {
            color: #ccc;
            font-size: 0.9rem;
        }
        .container {
            padding-top: 2rem;
        }
        .table-responsive {
            margin-top: 1rem;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .search-bar {
            margin-bottom: 1.5rem;
        }

        /* Custom styles for the action links */
        .action-link {
            color: inherit; /* Inherit text color from parent (usually black) */
            text-decoration: underline; /* Add underline */
            margin-right: 10px; /* Space between Edit and Delete */
        }

        .action-link:hover {
            color: #0056b3; /* A common hover color for links */
            text-decoration: underline;
        }

        .action-link-button {
            background: none; /* Remove background color */
            border: none; /* Remove border */
            padding: 0; /* Remove padding */
            font: inherit; /* Inherit font styles from parent */
            cursor: pointer; /* Indicate it's clickable */
            color: inherit; /* Inherit text color from parent */
            text-decoration: underline; /* Add underline */
            display: inline; /* Keep it inline with the form */
        }

        .action-link-button:hover {
            color: #dc3545; /* A common hover color for delete-like actions */
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="container">
            <h1>Book Shop</h1>
            <p>Cupcake ipsum dolor sit amet croissant. I love topping candy canes sweet roll croissant caramels. Soufflé macaroon liquorice chocolate tart I love.</p>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>