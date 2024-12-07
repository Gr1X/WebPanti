<!-- resources/views/layout/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A</title>
    @vite('resources/css/app.css')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>
<body class="overflow-x-hidden">
    <!-- Include Navbar -->

    <!-- Main Content -->
    <main>
        @yield('content') <!-- This is where your page content will go -->
    </main>
    
    <!-- Include Footer -->
    @include('component.footer')
</body>
</html>
