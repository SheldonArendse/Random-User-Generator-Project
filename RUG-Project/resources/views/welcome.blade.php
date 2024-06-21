<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- link css  --}}
        <link rel="stylesheet" href="css/nav.css">

        <title>Welcome</title>

        {{-- embedded css --}}
        <style>

        </style>
    </head>

    <body>
        <header>
            <h2 class="logo">Random User Project</h2>
            <nav class="navbar">
                <a href="#" onclick="window.location='{{ route('users.index') }}'">View Users</a>
                <a href="#" onclick="window.location='{{ route('users.create') }}'">Create User</a>
            </nav>
        </header>
        
    </body>
</html>
