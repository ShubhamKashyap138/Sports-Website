@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('frontend/css/about.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/common.css')}}">
</head>

<body>
    @section('main-container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row temp justify-content-center mb-3">
                    <div class="col-4">
                        <div class="row justify-content-center">
                            <div class="col-4 option">
                                <a class="text-white" href="{{url('/player')}}">
                                    <img src="{{url('frontend/images/Mask Group 15.png')}}" alt="" class="img-fluid">Player
                                </a>
                            </div>
                            <div class="col-4 option">
                                <a class="text-white" href="">
                                    <img src="{{url('frontend/images/Mask Group 16.png')}}" alt="" class="img-fluid">Videos
                                </a>
                            </div>
                            <div class="col-4 option">
                                <a class="text-white" href="{{url('/coach')}}">
                                    <img src="{{url('frontend/images/Mask Group 17.png')}}" alt="" class="img-fluid">Coaches
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-evenly">
            <div class="col-lg-10 col-md-10 col-sm-12 textAbout">
                <img src="{{url('frontend/images/crop1.png')}}" class="img-fluid" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
