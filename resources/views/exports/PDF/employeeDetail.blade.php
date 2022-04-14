<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Employee</title>
    <style>

        * {
        box-sizing: border-box;
        font-family: DejaVu Sans !important;
        }

        body {
        font-family: 'Poppins', 'Verdana', sans-serif;
        display: flex;
        align-items: center;
        padding: 1.25em;
        min-height: 100vh;
        color: #444;
        }

        table {
        width: 100%;
        border-spacing: 0;
        border-radius: 1em;
        overflow: hidden;
        border: 1px solid rgb(146, 130, 130)
        }
        td,th{
            padding: 20px;
        }
        th{
        background: #215A8E;
        color: #fff;
        }


    </style>
</head>
<body>
    {{-- <table style='border:1px solid black'>
        //                 <tr>
        //                     <th>Mã nhân viên</th>
        //                     <th>Mã định danh</th>
        //                     <th>Tên nhân viên</th>
        //                     <th>ảnh đại diện</th>
        //                     <th>Tuổi</th>
        //                     <th>Chức vụ</th>
        //                 </tr>
        //                 <tr>
        //                     <td style='padding:15px'>{{$detailEmployee['id']}}</td>
        //                     <td style='padding:15px'>{{$detailEmployee['aliasID']}}</td>
        //                     <td style='padding:15px'>{{$detailEmployee['name']}}</td>
        //                     <td style='padding:15px'><img width='200' src='{{$detailEmployee['avatar']}}'></td>
        //                     <td style='padding:15px'>{{$detailEmployee['age']}}</td>
        //                     <td style='padding:15px'>{{$detailEmployee['title']}}</td>
        //                 </tr>
        //
          </table> --}}
          <table style="width:70%">
            <tr>
              <th>Mã nhân viên:</th>
              <td>{{$detailEmployee['id']}}</td>
            </tr>
            <tr>
              <th>Mã định danh:</th>
              <td>{{$detailEmployee['aliasID']}}</td>
            </tr>
            <tr>
              <th>Tên nhân viên:</th>
              <td>{{$detailEmployee['name']}}</td>
            </tr>
            <tr>
               <th>ảnh đại diện:</th>
               <td><img width='200' src='{{$detailEmployee['avatar']}}'></td>
            </tr>
            <tr>
                <th>Tuổi:</th>
                @if ($detailEmployee['age'] <= 0)
                <td>Không xác định</td>
                @else
                <td>{{$detailEmployee['age']}}</td>
                @endif
            </tr>
            <tr>
                <th>Chức vụ:</th>
                @if ($detailEmployee['title'] == null || $detailEmployee['title'] == '')
                    <td>Không xác định</td>
                @else
                    <td>{{$detailEmployee['title']}}</td>
                @endif
            </tr>
          </table>
</body>
</html>
