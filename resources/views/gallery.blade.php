<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="container-fluid top-header">
        <div class="d-flex flex-column align-items-center justify-content-center header-title">
            <h1 class="title-name">Gallery</h1>
        </div>
    </header>

    <nav aria-label="breadcrumb" class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('top') }}">Top</a></li>
            <li class="breadcrumb-item"><a href="{{ route('work_experiences') }}">Work Experiences</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            <li class="breadcrumb-item"><a href={{ route('hobby') }}>Hobby</a></li>
            <li class="breadcrumb-item"><a href={{ route('contact') }}>Contact</a></li>
        </ol>
    </nav>
</body>
</html>