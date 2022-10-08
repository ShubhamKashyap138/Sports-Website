@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('frontend/css/player.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/common.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/slider.css')}}">
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
                                    <img src="{{url('frontend/images/Mask Group 15.png')}}" alt="" class="img-fluid"><i class="underline2">Player</i>
                                </a>
                            </div>
                            <div class="col-4 option">
                                <a class="text-white" href="">
                                    <img src="{{url('frontend/images/Mask Group 16.png')}}" alt="" class="img-fluid"><i>Videos</i>
                                </a>
                            </div>
                            <div class="col-4 option">
                                <a class="text-white" href="{{url('/coach')}}">
                                    <img src="{{url('frontend/images/Mask Group 17.png')}}" alt="" class="img-fluid"><i>Coaches</i>
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
            <div class="col-11">
                <form>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">Country</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="exampleInputPassword1" class="form-label">Foot</label>
                            <input type="password" class="form-control area" id="exampleInputPassword1">
                            <label for="customRange1" class="form-label m-0">Weight(KG)</label>
                            <div class="wrapper w-100">
                                <div class="container">
                                    <div class="rangeSides" onclick="decrease1()"><i class="fa fa-minus icon" aria-hidden="true"></i></div>
                                    <div class="rangeSides" onclick="increase1()"><i class="fa fa-plus icon" aria-hidden="true"></i></div>
                                    <div class="values">
                                        <span id="range1">
                                            0
                                        </span>
                                        <span>&dash;</span>
                                        <span id="range2">
                                            200
                                        </span>
                                    </div>
                                    <div class="slider-track"></div>
                                    <input type="range" min="0" max="200" value="30" id="slider-1" oninput="slideOne()">
                                    <input type="range" min="0" max="200" value="70" id="slider-2" oninput="slideTwo()">
                                    <div class="rangeSides" onclick="Fdecrease1()"><i class="fa fa-minus icon" aria-hidden="true"></i></div>
                                    <div class="rangeSides" onclick="Fincrease1()"><i class="fa fa-plus icon" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">State</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="password" class="form-control area" id="exampleInputPassword1">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">Gender</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="customRange1" class="form-label m-0">Age(In Years)</label>
                            <div class="wrapper w-100">
                                <div class="container">
                                    <div class="rangeSides" onclick="decrease2()"><i class="fa fa-minus icon" aria-hidden="true"></i></div>
                                    <div class="rangeSides" onclick="increase2()"><i class="fa fa-plus icon" aria-hidden="true"></i></div>
                                    <div class="values">
                                        <span id="range3">
                                            0
                                        </span>
                                        <span>&dash;</span>
                                        <span id="range4">
                                            100
                                        </span>
                                    </div>
                                    <div class="slider-track2"></div>
                                    <input type="range" min="0" max="100" value="30" id="slider-3" oninput="slideThr()">
                                    <input type="range" min="0" max="100" value="70" id="slider-4" oninput="slideFour()">
                                    <div class="rangeSides" onclick="Fdecrease2()"><i class="fa fa-minus icon" aria-hidden="true"></i></div>
                                    <div class="rangeSides" onclick="Fincrease2()"><i class="fa fa-plus icon" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <label for="exampleInputEmail1" class="form-label">Position</label>
                            <select class="form-select area" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="customRange1" class="form-label m-0">Height(Inches)</label>
                            <div class="wrapper w-100">
                                <div class="container">
                                    <div class="rangeSides" onclick="decrease3()"><i class="fa fa-minus icon" aria-hidden="true"></i></div>
                                    <div class="rangeSides" onclick="increase3()"><i class="fa fa-plus icon" aria-hidden="true"></i></div>
                                    <div class="values">
                                        <span id="range5">
                                            0
                                        </span>
                                        <span>&dash;</span>
                                        <span id="range6">
                                            120
                                        </span>
                                    </div>
                                    <div class="slider-track3"></div>
                                    <input type="range" min="0" max="120" value="30" id="slider-5" oninput="slideFive()">
                                    <input type="range" min="0" max="120" value="70" id="slider-6" oninput="slideSix()">
                                    <div class="rangeSides" onclick="Fdecrease3()"><i class="fa fa-minus icon" aria-hidden="true"></i></div>
                                    <div class="rangeSides" onclick="Fincrease3()"><i class="fa fa-plus icon" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-6 col-lg-6">
                                    <button type="button" class="btn btn-danger mt-3"
                                        style="width: 100%;">Search</button>
                                </div>
                                <div class=" col-6 col-lg-6">
                                    <button type="button" class="btn btn-danger mt-3" style="width: 100%">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-evenly">
            <button class="btn-primary rounded col-8 col-sm-7 col-lg-2 col-md-4 mt-2"  style="text-decoration: none"><a href="{{ url('/pRegister') }}"
                class="text-light">Player Registration</a></button></button>
            <button class="btn-primary rounded col-8 col-sm-7 col-lg-2 col-md-4 mt-2"  style="text-decoration: none"><a href="{{ url('/pUpdate') }}"
                class="text-light">Player Update</a></button></button>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row card-group justify-content-evenly">
            @foreach ($players as $player)
            @if(session()->get('com')=='1')
            @if ($player->player_id==$d->player_id)
            @else
            <div class="col-8 col-sm-7 col-lg-3 col-md-5 mt-5 mb-5 pb-3 rounded-3 crd" style="background-color:#ededed">
                <img src="{{url('frontend/images/'.$player->profile_pic)}}" class="card-img-top play mt-2" alt="...">
                <div class="card-body text-center bg-light m-2 justify-content-evenly">
                    <h5 class="card-title fw-bold fs-3">{{$player->name}}</h5>
                    <div class="row justify-content-evenly">
                        <div class="col-3 border-3 border-end data  ">
                            <div class="fw-bold">{{$player->runs}}</div>
                            <div>Runs</div>
                        </div>
                        <div class="col-3 border-3 border-end data">
                            <div class="fw-bold">{{$player->Age}}</div>
                            <div>Age</div>
                        </div>
                        <div class="col-3 data">
                            <div class="fw-bold">{{
                                round($player->runs*100/$player->balls,2);
                                }}</div>
                            <div>Strike Rate</div>
                        </div>
                    </div>
                    <hr class="mt-1">
                    <div class="row">
                        <div class="col-6 text-start fw-bold">Six</div>
                        <div class="col-6 text-end fw-bold">{{$player->sixes}}</div>
                        <div class="col-6 text-start">Fours</div>
                        <div class="col-6 text-end">{{$player->fours}}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <a href={{url('/player_data'.'/'.$player->player_id)}}><button type="button" class="btn btn-danger" style="width: 100%;">More</button></a>
                        </div>
                        <div class="col-6">
                            <a href={{url('/compare2'.'/'.$player->player_id.'/'.$d->player_id)}}><button type="button" class="btn btn-danger" style="width: 100%;">Select</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @else
            <div class="col-8 col-sm-7 col-lg-3 col-md-5 mt-5 mb-5 pb-3 rounded-3 crd" style="background-color:#ededed">
                <img src="{{url('frontend/images/'.$player->profile_pic)}}" class="card-img-top play mt-2" alt="...">
                <div class="card-body text-center bg-light m-2 justify-content-evenly">
                    <h5 class="card-title fw-bold fs-3">{{$player->name}}</h5>
                    <div class="row justify-content-evenly">
                        <div class="col-3 border-3 border-end data  ">
                            <div class="fw-bold">{{$player->runs}}</div>
                            <div>Runs</div>
                        </div>
                        <div class="col-3 border-3 border-end data">
                            <div class="fw-bold">{{$player->Age}}</div>
                            <div>Age</div>
                        </div>
                        <div class="col-3 data">
                            <div class="fw-bold">{{
                                round($player->runs*100/$player->balls,2);
                                }}</div>
                            <div>Strike Rate</div>
                        </div>
                    </div>
                    <hr class="mt-1">
                    <div class="row">
                        <div class="col-6 text-start fw-bold">Six</div>
                        <div class="col-6 text-end fw-bold">{{$player->sixes}}</div>
                        <div class="col-6 text-start">Fours</div>
                        <div class="col-6 text-end">{{$player->fours}}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <a href={{url('/player_data'.'/'.$player->player_id)}}><button type="button" class="btn btn-danger" style="width: 100%;">More</button></a>
                        </div>
                        <div class="col-6">
                            <a href={{url('/compare'.'/'.$player->player_id)}}><button type="button" class="btn btn-danger" style="width: 100%;">Compare</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <script src="{{url('frontend/js/slider.js')}}"></script>
    @endsection

</body>

</html>
