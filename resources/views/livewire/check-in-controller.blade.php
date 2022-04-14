<div class="container">
    <div class="row pt-4 pb-4">
        <div class="col-lg-2">
            <div class="input-group input-group-sm">
                <input  type="date" wire:model="startDate" class="form-control input-group-sm" placeholder="" aria-label="Search By Name" name="getDate" value="" aria-describedby="basic-addon2">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="input-group input-group-sm">
                <input type="date" wire:model="endDate" class="form-control" placeholder="" aria-label="Search By Name" name="getDate" value="" aria-describedby="basic-addon2">
            </div>
        </div>
        <div class="col-lg-4">
            <p>{{$count_info}}<span> Sự kiện</span></p>
        </div>
        <div class="col-lg-2">
           <button class="btn btn-success btn-sm" wire:click="exportIntoExcel" type="button"><i class="fas fa-folder">
        </i> Xuất file</button>
        </div>
        <div class="col-lg-2">
            <div class="input-group input-group-sm">
                <input type="text" wire:model="name" class="form-control" placeholder="Tìm kiếm ...">
            </div>
        </div>
    </div>
    <div class="row pb-4">
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
            {{ $info->links() }}
        </div>
    </div>
</div>
