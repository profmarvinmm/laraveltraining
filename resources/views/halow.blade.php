<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $pagetitle }}</title>
    </head>
    <body>
        <h1>My Tasks</h1>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach

        </ul>
    </body>
</html>
