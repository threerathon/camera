<div class="container">
    @foreach ($place->data as $places)
    <div class="row pt-2 pb-2">
        <div class="col">
            <div class="callout callout-info">
               <div class="row">
                   <div class="col-lg-8">
                        <h5 class="pt-2 pb-2"><i class="fas fa-home"></i>{{$places['name']}}</h5>
                   </div>
                   <div class="col-lg-4">
                        <button type="button" class="btn btn-sm btn-info ml-auto"><i class="fas fa-plus"></i> Thêm nhân viên</button>
                        <button type="button" data-toggle="modal" data-target="#modal-update-place" class="btn btn-sm btn-info ml-auto"><i class="fas fa-edit"></i> Cập nhật địa điểm</button>
                   </div>
               </div>
                <div class="row">
                    <div class="col-lg-3">
                        @foreach ($device->data as $devices)
                            @if ($places['name'] == $devices['placeName'])
                                <div class="card boder-0 shadow-none">
                                    <img class="card-img-top mx-auto" style="width: 120px" src="{{asset('assets/image/camera-preview.png')}}" alt="camera-preview.png">
                                    <div class="card-body">
                                        <h5 class="text-center">{{$devices['deviceName']}}</h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
              </div>
        </div>
    </div>
    @endforeach
    {{-- Model Update --}}
    <div class="modal fade" id="modal-update-place">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Cập nhật địa điểm</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                  <label for="my-input">Tên địa điểm</label>
                  <input id="my-input" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" type="text" name="">
              </div>
              <div class="form-group">
                <label for="my-input">Địa điểm</label>
                <input id="my-input" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" type="text" name="">
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-sm btn-block btn-primary">Cập nhật địa điểm</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
