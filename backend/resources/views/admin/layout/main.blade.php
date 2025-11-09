<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaptive LMS Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
</head>
<body>


    <!-- Sidebar Navigation -->
    @include('admin.layout.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <!-- top -->
         @include('admin.layout.top')
        <!-- content -->
        @yield('content')
        <!-- footer -->
         @include('admin.layout.footer')
    </div>

    <!-- script -->
    <script src="{{ asset('admin/js/dashboard.js') }}"></script>

</body>
</html>