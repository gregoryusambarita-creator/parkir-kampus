<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parkir Kampus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f8f9fa;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#212529;
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:12px 20px;
        }

        .sidebar a:hover{
            background:#343a40;
        }

        .content{
            width:100%;
        }

        .navbar-custom{
            background:white;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    @include('sidebar')

    <!-- Content -->
    <div class="content">

        <!-- Navbar -->
        <nav class="navbar navbar-custom px-4">
            <h4 class="mb-0">Dashboard Parkir Kampus</h4>
        </nav>

        <!-- Main -->
        <div class="p-4">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>