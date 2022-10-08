@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('frontend/css/support.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/common.css')}}">
</head>

<body>
    @section('main-container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 back">
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
        <div class="row justify-content-center">
            <div class="col-8 col-sm-7 col-md-5 col-lg-3 justify-content-evenly  mt-5">
                <div class="row justify-content-evenly">
                    <div class="col-12 text-center helpHeading">Registration</div>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to register as a player</div>
                    </a>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to register as a coach</div>
                    </a>
                </div>
            </div>
            <div class="col-8 col-sm-7 col-md-5 col-lg-3 bor1  mt-5">
                <div class="row justify-content-evenly">
                    <div class="col-12 text-center helpHeading">Login</div>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to login to access the portal</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="horiLine">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8 col-sm-7 col-md-5 col-lg-3 justify-content-evenly mt-5">
                <div class="row justify-content-evenly">
                    <div class="col-12 text-center helpHeading">Player Profiles</div>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to read the player card</div>
                    </a>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to read the player detail page</div>
                    </a>
                </div>
            </div>
            <div class="col-8 col-sm-7 col-md-5 col-lg-3 bor1  mt-5">
                <div class="row justify-content-evenly">
                    <div class="col-12 text-center helpHeading">Coach Profiles</div>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to read the coach card</div>
                    </a>
                    <a href="">
                        <div class="col-12 text-center text-dark">How to read the coach detail page</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>
