<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Employee Management</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input, button { margin-top: 10px; display: block; }
    </style>
</head>
<body>
    <h1>My Company</h1>
    <hr>
    @yield('content')
</body>
</html>
