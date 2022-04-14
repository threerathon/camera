<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>Admin</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Đăng nhập vào trang quản trị của bạn</p>

        <form method="post" action="{{route('handel-login')}}">
          @method('Post')
          @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @error('email') <span class="error">{{ $message }}</span> @enderror
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @error('password') <span class="error">{{ $message }}</span> @enderror
          <div class="row">
            <div class="col-12">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-main btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <p class="mb-1">
          <a href="">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
