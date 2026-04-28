<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Parkir Kampus')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body{
            margin:0;
            padding:0;
            background:#f4f6f9;
            font-family:Arial, Helvetica, sans-serif;
        }

        .wrapper{
            display:flex;
            min-height:100vh;
        }

        /* Sidebar nanti diatur di sidebar.blade.php */
        .sidebar{
            width:250px;
            min-height:100vh;
            background:#1e293b;
            color:white;
        }

        /* Main Content */
        .main-content{
            flex:1;
            display:flex;
            flex-direction:column;
        }

        /* Navbar */
        .topbar{
            background:white;
            padding:15px 25px;
            box-shadow:0 2px 8px rgba(0,0,0,0.08);
        }

        .topbar h4{
            margin:0;
            font-size:22px;
            font-weight:bold;
        }

        /* Content Area */
        .page-content{
            padding:25px;
        }

        /* Card Default */
        .card-custom{
            border:none;
            border-radius:12px;
            box-shadow:0 4px 10px rgba(0,0,0,0.08);
        }

        /* Responsive */
        @media(max-width:768px){
            .sidebar{
                width:200px;
            }

            .page-content{
                padding:15px;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="wrapper">

    <!-- Sidebar -->
    @include('sidebar')

    <!-- Main -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="topbar">
            <h4>@yield('page-title', 'Dashboard')</h4>
        </div>

        <!-- Isi Halaman -->
        <div class="page-content">
            @yield('content')
        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>