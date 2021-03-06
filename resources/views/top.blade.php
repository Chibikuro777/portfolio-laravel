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
    <header class="container-fluid top-header mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center header-title">
            <h2>Thanks for visiting my portfolio site!</h2>
            <div class="d-flex flex-column">
                <h1>I'm</h1>
                <h1 class="title-name">Sanae Kawasaka</h1>
            </div>
            <h2>I design and develop websites and applications.</h2>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm text-center py-4 d-flex flex-column align-items-center top-content">
                <h1 class="col-sm text-center py-4">
                Work
                </h1>
                <span style="font-size:1000%; color:navy;">
                    <i class="fas fa-laptop-code icon"></i>
                </span>
                <a href="{{ route('work_experiences') }}"><button type="button" class="btn btn-secondary">View details</button></a>
            </div>
            <div class="col-sm text-center py-4 d-flex flex-column align-items-center top-content">
                <h1 class="col-sm text-center py-4">
                Gallery
                </h1>
                <span style="font-size:1000%; color:navy;">
                    <i class="far fa-folder icon"></i>
                </span>
                <a href="{{ route('gallery') }}"><button type="button" class="btn btn-secondary">View details</button></a>
            </div>
            <div class="col-sm text-center py-4 d-flex flex-column align-items-center top-content">
                <h1 class="col-sm text-center py-4">
                Hobby
                </h1>
                <span style="font-size:1000%; color:navy;">
                    <i class="far fa-thumbs-up icon"></i>
                </span>
                <a href="{{ route('hobby') }}"><button type="button" class="btn btn-secondary">View details</button></a>
            </div>
        </div>
    </div>



    <div class="container top-footer d-flex justify-content-end align-items-center">
        <h2 class="mr-2 mb-0">
            Contact Me!
        </h2>
        <span style="font-size:250%;">
            <a href="{{ route('contact') }}"><i class="fas fa-envelope-square mr-5 icon" style="color:navy;"></i></a>
        </span>
    </div>

    
    
</body>
</html>