<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About - {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('layouts.app')

        <div class="container">
            <h1>About Laravel</h1>
            <p>Laravel is a web application framework with expressive, elegant syntax. It aims to make the development process a pleasing one for the developer without sacrificing application functionality.</p>
            <h2>How to Set Up Laravel</h2>
            <p>To set up Laravel, follow these steps:</p>
            <ol>
                <li>Install Composer, a dependency manager for PHP.</li>
                <li>Run the command <code>composer create-project --prefer-dist laravel/laravel project-name</code> to create a new Laravel project.</li>
                <li>Navigate to the project directory and run <code>php artisan serve</code> to start the development server.</li>
                <li>Visit <code>http://localhost:8000</code> in your browser to see your new Laravel application.</li>
            </ol>
        </div>
    </body>
</html>