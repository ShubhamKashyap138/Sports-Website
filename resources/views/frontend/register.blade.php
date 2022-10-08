@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @if (session()->get('type')=='Update')
  <title>Update</title>
  @else
  <title>Register</title>
  @endif
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
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
 
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{session()->get('type')}}</p>

                  <form class="mx-1 mx-md-4" action="{{$url}}" method="post">
                    @csrf
                    {{-- <pre>
                        @php
                            print_r($errors->all());
                        @endphp
                    </pre> --}}
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="text" id="form3Example1c" name = "name" class="form-control" value="{{session()->get('naam')}}"/>
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                        <input type="email" id="form3Example3c" name = "email" class="form-control" value="{{session()->get('mail')}}"
                        @if (session()->get('type')=='Update')
                        readonly
                        @endif>
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <span class="text-danger">
                            @error('pass')
                                This Field Is Required
                            @enderror
                            @error('msg')
                            {{$message}}
                            @enderror
                            @if (session()->get('type')!='Update')
                            @error('password_error')
                            {{$message}}
                            @enderror
                            @endif
                        </span>
                        <input type="password" id="form3Example4c" name = "pass" class="form-control" />
                        @if (session()->get('type')=='Update')
                        <label class="form-label" for="form3Example4c">Old Password</label>
                        @else
                        <label class="form-label" for="form3Example4c">Password</label>
                        @endif
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        @if (session()->get('type')=='Sign Up')
                        <span class="text-danger">
                            @error('rpass')
                                Password Did Not Match
                            @enderror
                        </span>
                        @else
                        <span class="text-danger">
                            @error('rpass')
                            Enter New Password(It can be same as previous)
                            @enderror
                            @if (session()->get('type')=='Update')
                            @error('password_error')
                            {{$message}}
                            @enderror
                            @endif
                        </span>

                        @endif
                        <input type="password" id="form3Example4cd" name = "rpass" class="form-control" />
                        @if (session()->get('type')=='Update')
                        <label class="form-label" for="form3Example4c">New Password</label>
                        @else
                        <label class="form-label" for="form3Example4c">Repeat Password</label>
                        @endif
                      </div>
                    </div>

                    @if(session()->get('type')=='Update')
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Update</button>
                    </div>
                    @else
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                      </div>
                    @endif
                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">

                </div>
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
