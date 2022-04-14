<table>
    <thead>
    <tr style="color:red">
        <th>Họ và tên</th>
        <th>Thời gian vào
        </th>
        <th>Thời gian ra
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $invoice->personName }}</td>
            <td>{{ date("H:i" ,strtotime($invoice->dateStart)) }}</td>
            <td>{{ date("H:i" ,strtotime($invoice->dateEnd)) }}</td>
            <td>{{ $invoice->date }}</td>
            {{-- <td>{{ $invoice->detected_image_url }}</td>
            <td>{{ $invoice->deviceID }}</td>
            <td>{{ $invoice->deviceName }}</td>
            <td>{{ $invoice->keycode }}</td>
            <td>{{ $invoice->personID }}</td>

            <td>{{ $invoice->personTitle }}</td>
            <td>
                @if ( $invoice->personType==0   )
                    Nhân viên
                @elseif ($invoice->personType==1)
                    Khách hàng
                @elseif ($invoice->personType>1 && $invoice->personType<6)
                    Người lạ
                @else
                    ảnh chụp từ camera
                @endif
            </td>
            <td>{{ $invoice->placeName }}</td>
            <td>
                @if ( $invoice->mask==-1)
                    Không bật tính năng nhận diện khẩu trang
                @elseif ($invoice->mask==0)
                    Không đeo khẩu trang
                @else
                    Có đeo khẩu trang
                @endif
            </td>
        </tr> --}}
    @endforeach
    </tbody>
</table>
