@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('frontend/css/coach.css')}}">
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
                                    <img src="{{url('frontend/images/Mask Group 15.png')}}" alt="" class="img-fluid"><i>Players</i>
                                </a>
                            </div>
                            <div class="col-4 option">
                                <a class="text-white" href="">
                                    <img src="{{url('frontend/images/Mask Group 16.png')}}" alt="" class="img-fluid"><i>Videos</i>
                                </a>
                            </div>
                            <div class="col-4 option">
                                <a class="text-white" href="{{url('/coach')}}">
                                    <img src="{{url('frontend/images/Mask Group 17.png')}}" alt="" class="img-fluid"><i
                                        class="underline2">Coaches</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-evenly mt-5">
            <div class="col-sm-11">
                <form>
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">Country</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">State</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">Gender</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="row justify-content-center dublicate">
                                <div class="col-12 mt-2">
                                    <button type="button" class="btn btn-danger" style="width: 100%;">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">Position</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="row justify-content-center">
                                <div class="col-8 col-lg-6 mt-2 search2">
                                    <button type="button" class="btn btn-danger" style="width: 100%;">Search</button>
                                </div>
                                <div class="col-12 col-lg-6 mt-2">
                                    <button type="button" class="btn btn-danger" style="width: 100%;">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr style="width: 92%; margin-left: auto; margin-right: auto;">
    <div class="container-fluid">
        <div class="row card-group justify-content-evenly">
            <div class="col-8 col-sm-5 col-lg-3 mt-5 mb-5 pb-3 rounded-3 crd" style="background-color:#ededed">
                <img src="{{url('frontend/images/Ellipse18.png')}}" class="card-img-top play mt-2" alt="...">
                <div class="card-body text-center bg-light m-2 mb-3">
                    <h5 class="card-title fw-bold">ASRAF</h5>
                    <div class="row justify-content-evenly">
                        <div class="col-3 border-3 border-end data  ">
                            <div>0</div>
                            <div>Rating</div>
                        </div>
                        <div class="col-3 border-3 border-end data">
                            <div>0</div>
                            <div>Report</div>
                        </div>
                        <div class="col-3 data">
                            <div>40</div>
                            <div>Views</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-start">Country</div>
                        <div class="col-6 text-end">Lorem</div>
                        <div class="col-6 text-start">State</div>
                        <div class="col-6 text-end">Ipsum</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <button type="button" class="btn btn-danger" style="width: 100%;">More</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-danger" style="width: 100%;">Compare</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 col-sm-5 col-lg-3 mt-5 mb-5 pb-3 rounded-3 crd" style="background-color:#ededed">
                <img src="{{url('frontend/images/Ellipse18.png')}}" class="card-img-top play mt-2" alt="...">
                <div class="card-body text-center bg-light m-2 ">
                    <h5 class="card-title fw-bold">AIDEN</h5>
                    <hr>
                    <div class="row justify-content-evenly">
                        <div class="col-2">
                            <div>1</div>
                            <div>Total</div>
                        </div>
                    </div>
                    <div class="row mt-5 justify-content-evenly">
                        <div class="col-11">
                            <button type="button" class="btn btn-danger" style="width: 100%;">Click to view</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5 justify-content-evenly">
            <div class="col-10" style="background-color: black;">
                <img src="{{url('frontend/images/img123.jpg')}}">
                <span class="text-white fw-bold h1">Time Line</span>
                <div class="text-white offset-sm-2 offset-md-1 offset-2">Player Events</div>
            </div>
            <div class="col-10" style="height:200px;background-color: rgb(245, 243, 243);">
            </div>
        </div>
    </div>
@endsection
</body>

</html>
