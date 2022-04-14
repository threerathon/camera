<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        #container {
        width: 100px;
        height: 100px;
        border: 1px solid;
        }
    </style>

  </head>
  <body>
    <div class="row">
        <div class="col-lg-6">
            @if (isset($getDate) && isset($getName))
            <a name="" id="" class="btn btn-success mb-2 mt-2" href="{{ route('excel-export',['name' => $getName,'date_start' => $getDate,'date_end' => $getDateEnd]) }}" role="button">Export Excel</a>
            @endif
        </div>
        <div class="col-lg-2">
            <a name="" id="" class="btn btn-primary  mb-2 mt-2" href="{{route('index')}}" role="button">View all</a>
        </div>
        <div class="col-lg-4">
            <form action="{{route('search-name')}}" method="get">
                @csrf
                <div class="input-group mb-2 mt-2">
                <input type="text" class="form-control" placeholder="Search By Name" aria-label="Search By Name" name="getName" value="<?php if(isset($getName)){echo $getName;}else{echo null;} ?>" aria-describedby="basic-addon2">
                <input type="date" class="form-control" placeholder="Search By Name" aria-label="Search By Name" name="getDate" value="<?php if(isset($getDate)){echo $getDate;}else{echo date('Y-m-d');} ?>" aria-describedby="basic-addon2">
                <input type="date" class="form-control" placeholder="Search By Name" aria-label="Search By Name" name="getDateEnd" value="<?php if(isset($getDateEnd)){echo $getDateEnd;}else{echo date('Y-m-d');} ?>" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>
                <th>#</th>
                <th>aliasID</th>
                <th>Data Type</th>
                <th>Date</th>
                <th>Image</th>
                <th>Device ID</th>
                <th>Device Name</th>
                <th>Hash</th>
                <th>Key Code</th>
                <th>PersonID</th>
                <th>Person Name</th>
                <th>Person Title</th>
                <th>Person Type</th>
                <th>Place ID</th>
                <th>Place Name</th>
                <th>Mask</th>
                <th>Time</th>
                </tr>
            </thead>
            <tbody id="data">
            @php
                $i=1;
            @endphp
                @foreach ($info as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->aliasID}}</td>
                        <td>{{$item->data_type}}</td>
                        <td>{{$item->date}}</td>
                        <td><img onclick="resize()" width="100" height="100" id="container" src="{{$item->detected_image_url}}" alt="Face Image"></td>
                        <td>{{$item->deviceID}}</td>
                        <td>{{$item->deviceName}}</td>
                        <td>{{$item->hash}}</td>
                        <td>{{$item->keycode}}</td>
                        <td>{{$item->personID}}</td>
                        <td>{{$item->personName}}</td>
                        <td>{{$item->personTitle}}</td>
                        <td>{{$item->personType}}</td>
                        <td>{{$item->placeID}}</td>
                        <td>{{$item->placeName}}</td>
                        <td>{{$item->mask}}</td>
                        <td>{{$item->time}}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
  </body>
</html>
<script>
//    fetch('http://localhost:8000/api/')
//   .then(
//     function(response) {
//       if (response.status !== 200) {
//         console.log('Lỗi, mã lỗi ' + response.status);
//         return;
//       }
//       // parse response data
//       response.json().then(data => {
//         console.log(data.length);
//       })
//     }
//   )
//   .catch(err => {
//     console.log('Error :-S', err)
//   });
  function resize() {
  const image = document.getElementById('container');
  image.style.width = '450px';
  image.style.height = 'auto';
}
</script>
