@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{session()->get('type')}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{url('frontend/css/common.css')}}">
</head>

<body>

  @section('main-container')
  <section style="background-color: #eee;">
    @if (session()->has('msg'))
    <h6 class="alert alert-success">{{session()->get('msg')}}</h6>
    @endif
    <div class="container">
      <div class="row justify-content-evenly">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-evenly">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{session()->get('type')}}</p>

                  <form class="mx-1 mx-md-4" action="{{$url}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-evenly">
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="text" id="form3Example1c" name = "name" class="form-control">
                        <label class="form-label" for="form3Example1c">Player Full Name</label>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                            @error('not_found')
                            {{$message}}
                            @enderror
                        </span>
                        <input type="email" id="form3Example3c" name = "email" class="form-control">
                        <label class="form-label" for="form3Example3c">Player Email</label>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('runs')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="number" id="form3Example3c" name = "runs" class="form-control">
                        <label class="form-label" for="form3Example3c">Total Runs</label>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('balls')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="number" id="form3Example3c" name = "balls" class="form-control">
                        <label class="form-label" for="form3Example3c">Total Ball Faced</label>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('fours')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="number" id="form3Example3c" name = "fours" class="form-control">
                        <label class="form-label" for="form3Example3c">4's</label>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('six')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="number" id="form3Example3c" name = "six" class="form-control">
                        <label class="form-label" for="form3Example3c">6's</label>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('Fname')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="text" id="form3Example3c" name = "Fname" class="form-control">
                        <label class="form-label" for="form3Example3c">Father Name</label>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('Mname')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="text" id="form3Example3c" name = "Mname" class="form-control">
                        <label class="form-label" for="form3Example3c">Mother Name</label>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('Address')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="text" id="form3Example3c" name = "Address" class="form-control">
                        <label class="form-label" for="form3Example3c">Address</label>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error ('state_error')
                            {{$message}}
                            @enderror
                        </span>
                        <select class="form-select" aria-label="Default select example" name="state">
                            <option selected>None</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Uttar Pardesh">Uttar Pardesh</option>
                            <option value="Punjab">Punjab</option>
                        </select>
                        <label for="exampleInputEmail1" class="form-label">State</label>
                      </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <span class="text-danger">
                            @error('gender_error')
                            {{$message}}
                            @enderror
                          </span>
                          <select class="form-select" aria-label="Default select example" name="gender">
                              <option selected>None</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                          </select>
                          <label for="exampleInputEmail1" class="form-label">Gender</label>
                        </div>
                      </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('age')
                            {{$message}}
                            @enderror
                        </span>
                        <input type="number" id="form3Example4cd" name = "age" class="form-control">
                        <label class="form-label" for="form3Example4c">Age</label>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-8 col-12 mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('photo')
                            {{$message}}
                            @enderror
                        </span>
                        <input type="file" id="form3Example4cd" name = "photo" class="form-control">
                        <label class="form-label" for="form3Example4c">Image</label>
                      </div>
                    </div>
                    @if(session()->get('type')=='Update Player')
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </div>
                    @else
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>
                    @endif
                    </div>
                  </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
</body>

</html>
