@extends("layout.layout")
@section("content")


<div class="register">
    <form class="row g-3" action="{{('/save-register')}}" method="post">
        {{ csrf_field() }}

        <div class="register__header">
            <h2>Đăng ký tài khoản</h2>
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}

        </div>
        <div class="register__body">
            {{-- <div class="col-md-12">
                <div class="register__group">
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Tên đăng nhập*">
                </div>
            </div> --}}
            <div class="col-md-12">
                <div class="register__group">
                    <input placeholder="Địa chỉ email*" value="{{old('email')}}" name="email" type="email"
                        class="form-control" id="inputPassword4">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="register__group">
                        <input type="password" value="{{old('password')}}" name="password" class="form-control"
                            id="inputEmail4" placeholder="Mật khẩu*">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="register__group">
                        <input placeholder="Nhập lại mật khẩu*" id="password" type="password"
                            name="password_confirmation" class="form-control" id="inputPassword4">
                    </div>
                    {{-- @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                </div>
            </div>
            <div class="register__title">
                <span> Thông tin cá nhân</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="register__group">
                <input type="text" class="form-control" id="inputEmail4" placeholder="Họ và tên*">
            </div>
        </div>
        <div class="col-md-12">
            <div class="register__group">
                <input placeholder="Số điện thoại*" type="text" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="d-grid gap-2 mb-3">
            <button type="submit" class="btn  btn-danger btn-lg">Sign up</button>
        </div>

        <div class="register__social">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{url("login-facebook")}}" class="login__fb">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 64 64" style=" fill:#000000;">
                            <path fill="#008aa9"
                                d="M48.26,48.26c-3.47,3.48-7.77,5.6-12.26,6.38c-2.64,0.48-5.36,0.48-8,0	c-4.49-0.78-8.79-2.9-12.26-6.38c-8.99-8.98-8.99-23.54,0-32.52c8.98-8.99,23.54-8.99,32.52,0C57.25,24.72,57.25,39.28,48.26,48.26z">
                            </path>
                            <ellipse cx="32" cy="61" opacity=".3" rx="19" ry="3"></ellipse>
                            <path fill="#fff"
                                d="M36,28v4h4.847c0.609,0,1.076,0.539,0.99,1.141l-0.592,4.141C41.105,38.268,40.261,39,39.265,39H36	v15.64c-2.64,0.48-5.36,0.48-8,0V39h-4c-1.105,0-2-0.895-2-2v-3c0-1.105,0.895-2,2-2h4v-4c0-6.603,3.559-11.426,12.354-9.854	C41.305,18.316,42,19.154,42,20.12v1.979c0,1.014-0.762,1.879-1.77,1.983C37.41,24.372,36,25.481,36,28z">
                            </path>
                            <path fill="#fff"
                                d="M32,14c2.577,0,4.674-1.957,4.946-4.461C35.352,9.19,33.699,9,32,9 C19.297,9,9,19.297,9,32c0,1.699,0.19,3.352,0.539,4.946C12.044,36.674,14,34.577,14,32C14,22.075,22.075,14,32,14z"
                                opacity=".3"></path>
                            <path
                                d="M54.461,27.054C51.956,27.326,50,29.423,50,32c0,9.925-8.075,18-18,18 c-2.577,0-4.674,1.957-4.946,4.461C28.648,54.81,30.301,55,32,55c12.703,0,23-10.297,23-23C55,30.301,54.81,28.648,54.461,27.054z"
                                opacity=".15"></path>
                            <path fill="#fff"
                                d="M15.045,24.927c-0.229,0-0.46-0.053-0.678-0.163c-0.739-0.375-1.033-1.278-0.658-2.017	c2.019-3.977,5.339-7.241,9.347-9.192c0.743-0.364,1.642-0.053,2.005,0.692c0.363,0.745,0.053,1.643-0.692,2.005	c-3.424,1.667-6.26,4.456-7.985,7.853C16.119,24.627,15.592,24.927,15.045,24.927z">
                            </path>
                        </svg>
                        <span>Facebook</span>
                    </a>
                </div>
                <div class="col-md-6"> <a
                        href="https://batdongsan.com.vn/trang-ca-nhan/HandlerWeb/UserHandler.ashx?type=googlelogin"
                        class="login__google ">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 48 48" style=" fill:#000000;">
                            <path fill="#fbc02d"
                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                            <path fill="#e53935"
                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                            </path>
                            <path fill="#4caf50"
                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                            </path>
                            <path fill="#1565c0"
                                d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                            </path>
                        </svg>
                        <span>Google</span>
                    </a></div>
            </div>
        </div>
        <div class="register__footer">
            Already a member? <a href="/register"> Log In</a> 
        </div>
    </form>
</div>


@endsection