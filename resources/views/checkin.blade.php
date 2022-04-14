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
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if (isset($getDate) && isset($getName))
                    <a name="" id="" class="btn btn-success mb-2 mt-2" href="{{ route('excel-export',['name' => $getName,'date_start' => $getDate,'date_end' => $getDateEnd]) }}" role="button">Xuất Excel</a>
                @elseif (isset($getDate) && !isset($getName))
                <a name="" id="" class="btn btn-success mb-2 mt-2" href="{{ route('excel-export-missname',['date_start' => $getDate,'date_end' => $getDateEnd]) }}" role="button">Xuất Excel</a>
                @endif
            </div>
            <div class="col-lg-6">
                <form action="{{route('search-name')}}" method="get">
                    @csrf
                    <div class="input-group mb-2 mt-2">
                    <input type="text" class="form-control" placeholder="Tên ..." aria-label="Search By Name" name="getName" value="<?php if(isset($getName)){echo $getName;}else{echo null;} ?>" aria-describedby="basic-addon2">
                    <input type="date" class="form-control" placeholder="Search By Name" aria-label="Search By Name" name="getDate" value="<?php if(isset($getDate)){echo $getDate;}else{echo date('Y-m-d');} ?>" aria-describedby="basic-addon2">
                    <input type="date" class="form-control" placeholder="Search By Name" aria-label="Search By Name" name="getDateEnd" value="<?php if(isset($getDateEnd)){echo $getDateEnd;}else{echo date('Y-m-d');} ?>" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="submit">Tìm kiếm</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @foreach ($info as $item)
                <div class="card mb-2 border-white shadow  bg-white rounded">
                    <div class="card-body d-inline-flex align-items-center">
                        <div style="width:200px">
                            <p class="align-middle pl-1 pr-1">{{$item->date}}</p>
                        </div>
                        <div >
                            <img class="rounded-circle border-white ml-5 mr-5 " onclick="resize()" style="width:80px;height:80px" id="container" src="{{$item->detected_image_url}}" alt="Face Image">
                        </div>
                        <div style="width:220px">
                            @if ($item->personType==0 || $item->personType==1)
                            <p class="align-middle pl-4 pr-4 font-weight-bold ">{{$item->personName}}</p>
                            @else
                            <p class="align-middle pl-4 pr-4 font-weight-bold "></p>
                            @endif
                        </div>
                        <div style="width:200px">
                            @if ($item->personType==0)
                                <p class="align-middle pl-4 pr-4 text-info">{{$item->personTitle}}</p>
                            @elseif ($item->personType==1)
                                <p class="align-middle pl-4 pr-4 text-success">Khách hàng</p>
                            @else
                                <p class="align-middle pl-4 pr-4 text-danger">Người lạ<p>
                            @endif
                        </div>
                        <div>
                            @if ($item->mask==-1)
                                <p class="align-middle pl-4 pr-4 text-secondary">Không bật tính năng đeo khẩu trang<p>
                            @elseif($item->mask==0)
                                <p class="align-middle pl-4 pr-4 text-secondary">Không đeo khẩu trang<p>
                            @elseif($item->mask==2)
                                <p class="align-middle pl-4 pr-4 text-secondary ">Có đeo khẩu trang<p>
                            @endif
                        </div>
                    </div>
                  </div>
                @endforeach
            </div>
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
