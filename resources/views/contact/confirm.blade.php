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

    <div class="container">

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
                <div class="col-sm border p-3 bg-success text-center">
                Confirm
                </div>
                <div class="col-sm border p-3 bg-white text-center">
                Complete
                </div>
            </div>
        </div>

        <form action="{{ route('complete') }}" method="POST" class="container-md">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="title_male" id="inlineRadio1" value={{ $request['title_male'] }}>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="hidden" name="title_female" id="inlineRadio2" value={{ $request['title_female'] }}>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <input type="hidden" name="first_name" class="form-control" placeholder="First name">{{$request['first_name']}}
                    </div>
                    <div class="col">
                        <input type="hidden" class="form-control" placeholder="Last name">{{$request['last_name']}}
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">{{$request['email']}}
            </div>
            
            <div class="form-group">
                <label for="Message">Message</label>
                <div>{{$request['message']}}</div>
            </div>

            <div class="button d-flex justify-content-center mt-5 mb-5">
                <button type="button" class="btn btn-success col-5 p-3" value="back">Back</button>
                <button type="button" class="btn btn-success col-5 p-3" value="complete">Complete</button>
            </div>
        </form>

        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</body>
</html>