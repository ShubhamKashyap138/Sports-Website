@extends('frontend.layouts.main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ url('frontend/css/common.css') }}">
</head>

<body>
    @section('main-container')
    @if (session()->get('com')!='1')
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col" class="table-dark">Field</th>
            <th scope="col" class="table-dark">Values</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="table-dark">Name</td>
            <td class="table-dark">{{$f[0]->name}}</td>
          </tr>
          <tr>
            <td class="table-dark">Father Name</td>
            <td class="table-dark">{{$f[0]->Fname}}</td>
          </tr>
          <tr>
            <td class="table-dark">Mother Name</td>
            <td class="table-dark">{{$f[0]->Mname}}</td>
          </tr>
          <tr>
            <td class="table-dark">Address</td>
            <td class="table-dark">{{$f[0]->Address}}</td>
          </tr>
          <tr>
            <td class="table-dark">Total Runs</td>
            <td class="table-dark">{{$f[0]->runs}}</td>
          </tr>
          <tr>
            <td class="table-dark">Strike Rate</td>
            <td class="table-dark">{{round($f[0]->runs*100/$f[0]->balls,2);}}</td>
          </tr>
          <tr>
            <td class="table-dark">Sixes</td>
            <td class="table-dark">{{$f[0]->sixes}}</td>
          </tr>
          <tr>
            <td class="table-dark">Fours</td>
            <td class="table-dark">{{$f[0]->fours}}</td>
          </tr>
          <tr>
            <td class="table-dark">State</td>
            <td class="table-dark">{{$f[0]->state}}</td>
          </tr>
          <tr>
            <td class="table-dark">Gender</td>
            <td class="table-dark">{{$f[0]->gender}}</td>
          </tr>
        </tbody>
    </table>
    @else
    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col" class="table-dark">Field</th>
            <th scope="col" class="table-dark">Player1</th>
            <th scope="col" class="table-dark">Player2</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="table-dark">Name</td>
            <td class="table-dark">{{$f2[0]->name}}</td>
            <td class="table-dark">{{$f[0]->name}}</td>
          </tr>
          <tr>
            <td class="table-dark">Father Name</td>
            <td class="table-dark">{{$f2[0]->Fname}}</td>
            <td class="table-dark">{{$f[0]->Fname}}</td>
          </tr>
          <tr>
            <td class="table-dark">Mother Name</td>
            <td class="table-dark">{{$f2[0]->Mname}}</td>
            <td class="table-dark">{{$f[0]->Mname}}</td>
          </tr>
          <tr>
            <td class="table-dark">Address</td>
            <td class="table-dark">{{$f2[0]->Address}}</td>
            <td class="table-dark">{{$f[0]->Address}}</td>
          </tr>
          <tr>
            <td class="table-dark">Total Runs</td>
            <td class="table-dark">{{$f2[0]->runs}}</td>
            <td class="table-dark">{{$f[0]->runs}}</td>
          </tr>
          <tr>
            <td class="table-dark">Strike Rate</td>
            <td class="table-dark">{{round($f2[0]->runs*100/$f2[0]->balls,2);}}</td>
            <td class="table-dark">{{round($f[0]->runs*100/$f[0]->balls,2);}}</td>
          </tr>
          <tr>
            <td class="table-dark">Sixes</td>
            <td class="table-dark">{{$f2[0]->sixes}}</td>
            <td class="table-dark">{{$f[0]->sixes}}</td>
          </tr>
          <tr>
            <td class="table-dark">Fours</td>
            <td class="table-dark">{{$f2[0]->fours}}</td>
            <td class="table-dark">{{$f[0]->fours}}</td>
          </tr>
          <tr>
            <td class="table-dark">State</td>
            <td class="table-dark">{{$f2[0]->state}}</td>
            <td class="table-dark">{{$f[0]->state}}</td>
          </tr>
          <tr>
            <td class="table-dark">Gender</td>
            <td class="table-dark">{{$f2[0]->gender}}</td>
            <td class="table-dark">{{$f[0]->gender}}</td>
          </tr>
        </tbody>
    </table>
    @endif
    @endsection
</body>

</html>
