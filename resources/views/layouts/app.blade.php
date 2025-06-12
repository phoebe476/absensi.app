<!DOCTYPE html>
<html>
<head>
    <title>Absensi App</title>
    <style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Outfit:wght@100..900&display=swap" rel="stylesheet">


        body { font-family: sans-serif; padding: 20px; background: #5F5D9C; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        .btn { padding: 8px 12px; border: none; background: #4f46e5; color: white; border-radius: 4px; text-decoration: none; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <div class="container">
        
        @yield('content')
    </div>
</body>
</html>
