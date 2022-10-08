@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('frontend/css/home.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/common.css')}}">
</head>

<body>
    @section('main-container')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{url('frontend/images/Web 1920 – 6.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="row justify-content-evenly">
                        <div class="col-12">
                            <a href=""><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon awesome-facebook-square.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon awesome-twitter-square.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon ionic-ios-call.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon zocial-email.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('frontend/images/Web 1920 – 7.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="row justify-content-evenly">
                        <div class="col-12">
                            <a href=""><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon awesome-facebook-square.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon awesome-twitter-square.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon ionic-ios-call.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon zocial-email.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{url('frontend/images/Web 1920 – 8.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="row justify-content-evenly">
                        <div class="col-12">
                            <a href=""><img src="{{url('frontend/images/Icon awesome-instagram.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon awesome-facebook-square.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon awesome-twitter-square.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon ionic-ios-call.png')}}" alt="" class="img-fluid"></a>
                            <a href=""><img src="{{url('frontend/images/Icon zocial-email.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-evenly">
            <a href="{{url('/player')}}" class="col-8 col-sm-7 col-md-5 col-lg-3">
                <div class="one text-white mt-4 text-center" style="position:relative;">
                    <div style=" position: absolute; top: 50%; left:35%;">Players</div>
                </div>
            </a>
            <a href="" class="col-8 col-sm-7 col-md-5 col-lg-3">
                <div class="two text-white mt-4 text-center" style="position:relative;">
                    <div style=" position: absolute; top: 50%; left:35%;">Videos</div>
                </div>
            </a>
            <a href="{{url('/coach')}}" class="col-8 col-sm-7 col-md-5 col-lg-3">
                <div class="three text-white mt-4 text-center" style="position:relative;">
                    <div style=" position: absolute; top: 50%; left:35%;">Coaches</div>
                </div>
            </a>
        </div>
    </div>
    @endsection
</body>

</html>
