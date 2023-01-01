<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h2>Posts</h2>
        @foreach ($posts as $post)
            <h3>{{ $post->title }}</h3>
            <p>{{ 'By: ' . $post->user->name }}</p>
            <p>{{ $post->content }}</p>
        @endforeach
    </body>
</html>
