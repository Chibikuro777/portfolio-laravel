<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Text:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid top-header">
        <div class="d-flex flex-column align-items-center justify-content-center header-title">
            <h4>Thanks for visiting my portfolio site!</h4>
            <div class="d-flex flex-column">
                <h1>I'm</h1>
                <h1 class="title-name">Sanae Kawasaka</h1>
            </div>
            <h4>I design and develop websites and applications.</h4>
        </div>
    </header>

    <div class="container-fluid top-content">
        <div class="row">
            <div class="col-sm text-center py-4 d-flex flex-column align-items-center">
                <h2 class="col-sm text-center py-4">
                Work Experiences
                </h2>
                <span style="font-size:1000%;">
                    <a href="./workExperiences"><i class="fas fa-laptop-code icon"></i></a>
                </span>
            </div>
            <div class="col-sm text-center py-4 d-flex flex-column align-items-center">
                <h2 class="col-sm text-center py-4">
                Gallery
                </h2>
                <span style="font-size:1000%;">
                    <a href="./gallery"><i class="far fa-folder icon"></i></a>
                </span>
            </div>
            <div class="col-sm text-center py-4 d-flex flex-column align-items-center">
                <h2 class="col-sm text-center py-4">
                Hobby
                </h2>
                <span style="font-size:1000%;">
                    <a href="./hobby"><i class="far fa-thumbs-up icon"></i></a>
                </span>
            </div>
        </div>
    </div>



    <div class="container-fluid top-footer d-flex justify-content-end align-items-center">
        <h2 class="mr-2 mb-0">
            Contact Me!
        </h2>
        <span style="font-size:250%;">
            <a href="./contact"><i class="fas fa-envelope-square mr-5 icon"></i></a>
        </span>
    </div>

    
    
</body>
</html>