<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4>Quản lý nhân viên</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    @if ($detailEmployee != null || $detailEmployee != [])
        <div class="row">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Mã số nhân viên</th>
                        <th>Ảnh</th>
                        <th>Họ tên</th>
                        <th>Loại</th>
                        <th>Chức vụ</th>
                        <th>Giới tính</th>
                        <th>Cccd/Cmt</th>
                        <th>Sđt</th>
                        <th>Năm sinh</th>
                        <th>Địa chỉ</th>
                        <th>Mã phòng ban</th>
                        <th>Mã chấm công</th>
                        <th>Mã thưởng</th>
                        <th>Mã lương</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $detailEmployee['code_employee'] }}</td>
                        <td><img width="80" src="{{ $detailEmployee['img_cover'] }}"
                                alt="{{ $detailEmployee['img_cover'] }}"></td>
                        <td>{{ $detailEmployee['name'] }}</td>
                        <td>{{ $detailEmployee['type'] }}</td>
                        <td>{{ $detailEmployee['title'] }}</td>
                        <td>{{ $detailEmployee['sex'] }}</td>
                        <td>{{ $detailEmployee['cccd'] }}</td>
                        <td>{{ $detailEmployee['phone_number'] }}</td>
                        <td>{{ $detailEmployee['birthday'] }}</td>
                        <td>{{ $detailEmployee['address'] }}</td>
                        <td>{{ $detailEmployee['code_dm'] }}</td>
                        <td>{{ $detailEmployee['code_timesheet'] }}</td>
                        <td>{{ $detailEmployee['code_bonus'] }}</td>
                        <td>{{ $detailEmployee['code_salary'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
    <div class="row">
        <div class="modal fade" id="">
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
                            <input id="my-input"
                                class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0"
                                type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Địa điểm</label>
                            <input id="my-input"class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0"type="text" name="">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-sm btn-block btn-primary">Cậ nhật địa điểm</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="row">
                            <div class="col">
                                <div class="card-header-left  d-flex align-items-end justify-content-center">
                                    <button type="button" data-toggle="modal" data-target="#modal-add-employee"
                                        class="btn btn-sm btn-info ml-auto"><i class="fas fa-edit"></i>Thêm nhân
                                        viên</button>
                                </div>
                            </div>
                            <div>
                                <div class="input-group input-group-sm" style="width: 150px;margin: 0px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 500px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Mã số nhân viên</th>
                                <th>Ảnh</th>
                                <th>Họ tên</th>
                                <th>Loại</th>
                                <th>Chức vụ</th>
                                <th>Giới tính</th>
                                <th>Cccd/Cmt</th>
                                <th>Sđt</th>
                                <th>Năm sinh</th>
                                <th>Địa chỉ</th>
                                <th>Mã phòng ban</th>
                                <th>Mã chấm công</th>
                                <th>Mã thưởng</th>
                                <th>Mã lương</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee as $employees)
                                <tr>
                                    <td>{{ $employees['code_employee'] }}</td>
                                    <td><img width="80" src="{{ $employees['img_cover'] }}"
                                            alt="{{ $employees['img_cover'] }}"></td>
                                    <td>{{ $employees['name'] }}</td>
                                    <td>{{ $employees['type'] }}</td>
                                    <td>{{ $employees['title'] }}</td>
                                    <td>{{ $employees['sex'] }}</td>
                                    <td>{{ $employees['cccd'] }}</td>
                                    <td>{{ $employees['phone_number'] }}</td>
                                    <td>{{ $employees['birthday'] }}</td>
                                    <td>{{ $employees['address'] }}</td>
                                    <td>{{ $employees['code_dm'] }}</td>
                                    <td>{{ $employees['code_timesheet'] }}</td>
                                    <td>{{ $employees['code_bonus'] }}</td>
                                    <td>{{ $employees['code_salary'] }}</td>
                                    <td class="project-actions">

                </div>
                <!-- Modal -->
                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header float-right">
                                <h5>User details</h5>
                                <div class="text-right"> <i data-dismiss="modal" aria-label="Close"
                                        class="fa fa-close"></i> </div>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr style="white=100%">
                                                <th>Mã số nhân viên</th>
                                                <th>Ảnh</th>
                                                <th>Họ tên</th>
                                                <th>Loại</th>
                                                <th>Chức vụ</th>
                                                <th>Giới tính</th>
                                                <th>Cccd/Cmt</th>
                                                <th>Sđt</th>
                                                <th>Năm sinh</th>
                                                <th>Địa chỉ</th>
                                                <th>Mã phòng ban</th>
                                                <th>Mã chấm công</th>
                                                <th>Mã thưởng</th>
                                                <th>Mã lương</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($detailEmployee != '')
                                                <tr>
                                                    <th scope="row">{{ $detailEmployee['code_salary'] }}</th>
                                                    <td>{{ $detailEmployee['code_salary'] }}</td>
                                                    <td>{{ $detailEmployee['code_salary'] }}</td>
                                                    <td>@samso</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Tinor</td>
                                                    <td>Horton</td>
                                                    <td>@tinor_har</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Mythor</td>
                                                    <td>Bully</td>
                                                    <td>@myth_tobo</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button> <button type="button"
                                    class="btn btn-primary">Save changes</button> </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header float-right">
                                <h5>User details</h5>
                                <div class="text-right"> <i data-dismiss="modal" aria-label="Close"
                                        class="fa fa-close"></i> </div>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr style="white=100%">
                                                <th>Mã số nhân viên</th>
                                                <th>Ảnh</th>
                                                <th>Họ tên</th>
                                                <th>Loại</th>
                                                <th>Chức vụ</th>
                                                <th>Giới tính</th>
                                                <th>Cccd/Cmt</th>
                                                <th>Sđt</th>
                                                <th>Năm sinh</th>
                                                <th>Địa chỉ</th>
                                                <th>Mã phòng ban</th>
                                                <th>Mã chấm công</th>
                                                <th>Mã thưởng</th>
                                                <th>Mã lương</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($detailEmployee != '')
                                                <tr>
                                                    <th scope="row">{{ $detailEmployee['code_salary'] }}</th>
                                                    <td>{{ $detailEmployee['code_salary'] }}</td>
                                                    <td>{{ $detailEmployee['code_salary'] }}</td>
                                                    <td>@samso</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Tinor</td>
                                                    <td>Horton</td>
                                                    <td>@tinor_har</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Mythor</td>
                                                    <td>Bully</td>
                                                    <td>@myth_tobo</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button> <button type="button"
                                    class="btn btn-primary">Save changes</button> </div>
                        </div>
                    </div>
                </div> --}}
                <a class="btn btn-primary btn-xs" wire:click="detailEmployee({{ $employees['code_employee'] }})"
                    data-toggle="modal" data-target="#modal-detail-employee" href="#">
                    <i class="fas fa-folder"></i>
                    View
                </a>
                <a class="btn btn-info btn-xs">
                    <i class="fas fa-edit">
                    </i>
                    Edit
                </a>
                {{-- <div class="height d-flex justify-content-center align-items-center"> <button type="button" class="btn btn-primary"> Edit</button> </div> --}}
                <a class="btn btn-danger btn-xs" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
</div>
{{-- Model Update --}}
<div class="modal fade" id="modal-add-employee">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Thêm nhân viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="form-row modal-body">
                  <div class="form-group col-md-6">
                    <label>Mã nhân viên</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Ảnh</label>
                    <input type="file" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Họ tên</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Loại</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Chức vụ</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Giới tính</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Cccd/Cmt</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0"  >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" >
                  </div>
                  <div class="form-group col-md-6">
                    <label>Ngày sinh</label>
                    <input type="date" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0">
                  </div>
                </div>
              </form>
            <div class="modal-body">
                <div class="form-group">
                    <label for="my-input">Tên địa điểm</label>
                    <input id="my-input"
                        class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" type="text"
                        name="">
                </div>
                <div class="form-group">
                    <label for="my-input">Địa điểm</label>
                    <input id="my-input"
                        class="form-control border-top-0 border-right-0 border-left-0 border-info rounded-0" type="text"
                        name="">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-block btn-primary">Thêm</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
