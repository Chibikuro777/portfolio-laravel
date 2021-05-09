<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="container-fluid top-header">
        <div class="d-flex flex-column align-items-center justify-content-center header-title">
            <h1 class="title-name">My Work Experiences</h1>
        </div>
    </header>
    <nav aria-label="breadcrumb" class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index">Top</a></li>
            <li class="breadcrumb-item active" aria-current="page">Work Experiences</li>
            <li class="breadcrumb-item"><a href="./gallery">Gallery</a></li>
            <li class="breadcrumb-item"><a href="./hobby">Hobby</a></li>
            <li class="breadcrumb-item"><a href="./contact">Contact</a></li>
        </ol>
    </nav>

    <div class="container d-flex flex-column align-items-center">
        <div class="d-flex align-items-center justify-content-center">
            <h4 class="d-flex align-items-center mb-0 mr-2">Quoly Inc.</h4>
            <img src="{{ asset('image/company_logo.png') }}" alt="Quoly logo" width="10%">
        </div>
        <h5 class="mb-0">Position: QA tester / Assisitat programmer</h5>
        <div class="d-flex align-items-center mb-3">
            <a href="https://quoly.co.jp/" target="_blank"><p class="mb-0 mr-2">https://quoly.co.jp/</p></a>
            <span style="color:blue;">
                <i class="fas fa-external-link-alt"></i>
            </span>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <p>Feb 2020-Current</p>
            <p class="mb-0">Main Tasks: 
                <li>System unit tests</li>
                <li>compose system specifications</li>
                <li>Twitter / Instagram API application support, etc</li>
            </p>
        </div>
    </div>
</body>
</html>