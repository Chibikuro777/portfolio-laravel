<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <header class="container-fluid top-header">
        <div class="d-flex flex-column align-items-center justify-content-center header-title">
            <h1 class="title-name">Contact</h1>
        </div>
    </header>

    <nav aria-label="breadcrumb" class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('top') }}">Top</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('work_experiences') }}">Work Experiences</a></li>
            <li class="breadcrumb-item"><a href={{ route('gallery') }}>Gallery</a></li>
            <li class="breadcrumb-item"><a href={{ route('hobby') }}>Hobby</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>

    <div class="container mb-4 mt-4">
            <div class="row">
                <div class="col-sm border bg-white p-3 text-center">
                Input
                </div>
                <div class="col-sm border p-3 bg-white text-center">
                Confirm
                </div>
                <div class="col-sm border p-3 bg-success text-center">
                Complete
                </div>
            </div>
        </div>

    <div class="container">
        Thank you message
    </div>
</body>
</html>