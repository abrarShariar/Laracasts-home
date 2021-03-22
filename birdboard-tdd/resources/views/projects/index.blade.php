<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birdboard</title>
</head>
<body>
    <h1>
        Project Details Page
    </h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="{{ $project->path() }}">  {{ $project->title }} </a>
            </li>
        @endforeach
    </ul>
</body>
</html>