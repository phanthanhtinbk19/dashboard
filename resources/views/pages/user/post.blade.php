@extends('layout.layout')
@section('content')

<div class="container-fluid">
    <form action="{{ route('form.data') }}" name="demoform" id="demoform" method="POST" class="dropzone"
        enctype="multipart/form-data">
        @csrf
        <div class="post">
            <div class="row">
                <div class="col-sm-3">
                    <div class="post__left">
                        <div class="menu_login row-cl">
                            <h3 class="sub_block_title">Trang cá nhân</h3>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <svg font-size="24px" width="2rem" height="2rem" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.5 6C5.32843 6 6 5.32843 6 4.5C6 3.67157 5.32843 3 4.5 3C3.67157 3 3 3.67157 3 4.5C3 5.32843 3.67157 6 4.5 6Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M4.5 13C5.32843 13 6 12.3284 6 11.5C6 10.6716 5.32843 10 4.5 10C3.67157 10 3 10.6716 3 11.5C3 12.3284 3.67157 13 4.5 13Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M4.5 20C5.32843 20 6 19.3284 6 18.5C6 17.6716 5.32843 17 4.5 17C3.67157 17 3 17.6716 3 18.5C3 19.3284 3.67157 20 4.5 20Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.5 4.5H20.5" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.5 11.5H20.5" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M8.5 18.5H20.5" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Đăng tin BĐS
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <li> <a href="">Đăng mới</a></li>
                                            <li> <a href="">Danh sách tin</a></li>
                                            <li> <a href="">Tin nháp</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">

                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <svg width="2rem" height="2rem" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M20.4578 3.17765L15.8979 2.85194C15.5385 2.82512 15.2251 3.09467 15.1981 3.45403C15.1711 3.81354 15.4407 4.12683 15.8002 4.1538L15.8013 4.15388L18.6396 4.34662L13.1043 8.67684L8.65977 5.18998C8.40806 4.99084 8.04884 5.00474 7.81325 5.2227L3.14905 9.68627C2.89331 9.92917 2.87763 10.3312 3.1126 10.5933C3.23148 10.7443 3.41547 10.8294 3.60771 10.8222C3.77796 10.8192 3.94029 10.7497 4.0599 10.6285L8.3009 6.55911L12.685 10.0125C12.9227 10.2024 13.2594 10.2031 13.4971 10.0134L13.405 9.89505L13.4987 10.0121L19.6455 5.22898L19.4217 8.00298L19.4216 8.01437C19.42 8.36421 19.6854 8.65749 20.0336 8.69078L20.0408 8.69146H20.0726C20.4082 8.69293 20.69 8.43917 20.7236 8.10526L21.0494 3.86963C21.0721 3.69705 21.0119 3.52404 20.8874 3.40287C20.7845 3.26841 20.6274 3.18587 20.4578 3.17765ZM19.6619 5.02604L19.6455 5.22898L19.806 5.10414L19.8223 4.90127L19.8222 4.90126L19.6619 5.02604ZM8.29121 6.36053L8.39506 6.46876L8.3009 6.55911L8.19839 6.47836L8.29121 6.36053ZM3.22751 10.4968L3.11679 10.5979L3.1126 10.5933L3.10871 10.5883L3.22751 10.4968ZM13.1041 8.86729L13.0117 8.74925L13.1043 8.67684L13.1967 8.74938L13.1045 8.86698L13.1041 8.86729ZM18.8634 4.36182L18.6396 4.34662L18.8165 4.20822L19.0403 4.22341L18.8634 4.36182ZM4.0599 10.6285L4.05834 10.63L3.95449 10.5218L4.06164 10.6268L4.0599 10.6285ZM3.60771 10.8222L3.60568 10.8222L3.60355 10.6722L3.60974 10.8221L3.60771 10.8222ZM9.69531 14.0061C9.69531 13.6463 9.98693 13.3547 10.3467 13.3547H13.6556C14.0153 13.3547 14.3069 13.6463 14.3069 14.0061V20.4986C14.3069 20.8583 14.0153 21.1499 13.6556 21.1499H10.3467C9.98693 21.1499 9.69531 20.8583 9.69531 20.4986V14.0061ZM10.998 14.6574V19.8472H13.0042V14.6574H10.998ZM16.5781 10.8501C16.3888 10.8501 16.2117 10.9081 16.0787 11.009C15.9456 11.11 15.8501 11.2605 15.8501 11.4387V20.5615C15.8501 20.7397 15.9456 20.8901 16.0787 20.9911C16.2117 21.092 16.3888 21.1501 16.5781 21.1501H20.4221C20.6114 21.1501 20.7885 21.092 20.9215 20.9911C21.0546 20.8901 21.1501 20.7397 21.1501 20.5615V11.4387C21.1501 11.2605 21.0546 11.1101 20.9215 11.0091C20.7885 10.9082 20.6114 10.8501 20.4221 10.8501H16.5781ZM17.3062 19.9729V12.0273H19.694V19.9729H17.3062ZM3.12744 16.4377C3.12744 16.078 3.41905 15.7864 3.7788 15.7864H7.11281C7.47256 15.7864 7.76416 16.078 7.76416 16.4377V20.4987C7.76416 20.8584 7.47255 21.15 7.11281 21.15H3.7788C3.41905 21.15 3.12744 20.8584 3.12744 20.4987V16.4377ZM4.43015 17.0891V19.8473H6.46145V17.0891H4.43015Z">
                                                </path>
                                            </svg>
                                            Quản lý tài chính
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <li> <a href="">Thông tin số dư</a></li>
                                            <li> <a href="">Lịch sử giao dịch</a></li>
                                            <li> <a href="">Nạp tiền vào tài khoản</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            <svg font-size="24px" width="2rem" height="2rem" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path xmlns="http://www.w3.org/2000/svg"
                                                    d="M20 10.9696L11.9628 18.5497C10.9782 19.4783 9.64274 20 8.25028 20C6.85782 20 5.52239 19.4783 4.53777 18.5497C3.55315 17.6211 3 16.3616 3 15.0483C3 13.7351 3.55315 12.4756 4.53777 11.547L12.575 3.96687C13.2314 3.34779 14.1217 3 15.05 3C15.9783 3 16.8686 3.34779 17.525 3.96687C18.1814 4.58595 18.5502 5.4256 18.5502 6.30111C18.5502 7.17662 18.1814 8.01628 17.525 8.63535L9.47904 16.2154C9.15083 16.525 8.70569 16.6989 8.24154 16.6989C7.77738 16.6989 7.33224 16.525 7.00403 16.2154C6.67583 15.9059 6.49144 15.4861 6.49144 15.0483C6.49144 14.6106 6.67583 14.1907 7.00403 13.8812L14.429 6.88674"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            Báo giá & Hướng dẫn
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <li> <a href="">Báo giá</a></li>
                                            <li> <a href="">Hướng dẫn sử dụng</a></li>
                                            <li> <a href="">Hướng dẫn thanh toán</a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="post__content">
                        <div class="post__item">
                            <h2>Thông tin cơ bản</h2>
                            <div class="btn-group btn-group-lg" role="group"
                                aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="btnradio1">Bán</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Thuê</label>
                            </div>

                            <div class="post__info">
                                <div class="post__group">
                                    <label for="">Loại bất động sản<span style="color:red">&nbsp;*</span></label>
                                    <select name="kind" class="form-select form-select-lg"
                                        aria-label="Default select example">
                                        <option disabled>Chọn</option>
                                        @foreach ($all_kind as $key => $kind)
                                        <option>{{ $kind->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="city">Tỉnh, thành phố<span
                                                    style="color:red">&nbsp;*</span></label>
                                            <select id="city" class="form-select form-select-lg"
                                                aria-label="Default select example">
                                                <option selected>Chọn</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="district">Quận, huyện<span style="color:red">&nbsp;*</span>
                                            </label>
                                            <select id="district" class="form-select form-select-lg"
                                                aria-label="Default select example">
                                                <option selected>Chọn</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="ward">Phường, xã<span style="color:red">&nbsp;*</span>
                                            </label>
                                            <select id="ward" class="form-select form-select-lg"
                                                aria-label="Default select example">
                                                <option selected>Chọn</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="">Đường, phố * </label>
                                            <select class="form-select form-select-lg"
                                                aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="post__group">
                                    <label for="">Dự án </label>
                                    <select class="form-select form-select-lg" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="post__group">
                                    <label for="">Địa chỉ hiển thị trên tin đăng<span style="color:red">&nbsp;*</span>
                                    </label>
                                    <input name="address" class="address" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="post__item">
                            <h2>Thông tin bài viết</h2>
                            <div class="post__group">
                                <label for="">Tiêu đề<span style="color:red">&nbsp;*</span></label>
                                <textarea name="title" id="" cols="30" rows="7"></textarea>
                                <div class="post__required">
                                    <p>Tối thiểu 30 ký tự, tối đa 99 ký tự</p>
                                </div>
                            </div>
                            <div class="post__group">
                                <label for="">Mô tả<span style="color:red">&nbsp;*</span>
                                </label>
                                <input name="description" type="hidden" class="description">
                                <textarea name="desc" id="editor" cols="30" rows="7"></textarea>
                                <div class="post__required">
                                    <p>Tối thiểu 30 ký tự, tối đa 3.000 ký tự</p>
                                </div>
                            </div>
                        </div>
                        <div class="post__item">
                            <h2>Thông tin bất động sản</h2>
                            <div class="post__group">
                                <label for="">Diện tích<span style="color:red">&nbsp;*</span>
                                </label>
                                <div class="post-group__input">
                                    <input
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        name="area" placeholder="Nhập diện tích, VD 80" type="text">
                                    <span class="post__unit">m²</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="post__group">
                                        <label for="">Mức giá<span style="color:red">&nbsp;*</span>
                                        </label>
                                        <input
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                            name="price" placeholder="Nhập giá, VD 12000000" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post__group">
                                        <label for="">Đơn vị<span style="color:red">&nbsp;*</span>
                                        </label>
                                        <select class="form-select form-select-lg" aria-label="Default select example">
                                            <option selected>VND</option>
                                            <option>Thỏa thuận</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="post__policy">
                                <label for="">Giấy tờ pháp lý</label>
                                <div class="post__paper">
                                    <span class="post-paper__item post-paper__item--active">Sổ đỏ/ Sổ hồng</span>
                                    <span class="post-paper__item">Hợp đồng mua bán</span>
                                    <span class="post-paper__item">Đang chờ sổ</span>
                                    <span>+</span>
                                </div>
                            </div>
                            <div style="display: flex; margin-bottom: 24px; margin-top: 24px;">
                                <div class="sc-RFdAl crHCyZ"></div>
                            </div>
                            <div class="post__detail">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="">Số phòng ngủ</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="post__qty">
                                            <button class="btn-minus btn-minus__bedroom unactive">-</button>
                                            <input name="qty_bedroom" type="text" value="0" class="qty__bedroom">
                                            <button class="btn-plus btn-plus__bedroom">+</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="">Số phòng tắm, vệ sinh</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="post__qty">
                                            <button class="btn-minus btn-minus__bathroom unactive">-</button>
                                            <input name="qty_bathroom" type="text" value="0" class="qty__bathroom">
                                            <button class="btn-plus btn-plus__bathroom">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="">Số tầng</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="post__qty">
                                            <button class="btn-minus btn-minus__building unactive">-</button>
                                            <input class="qty__building" name="qty_building" type="text" value="0">
                                            <button class="btn-plus btn-plus__building">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; margin-bottom: 24px; margin-top: 24px;">
                                <div type="tertiary"
                                    style="font-size: 12px; font-weight: 500;    color: rgb(153, 153, 153);">Mô tả bổ
                                    sung
                                </div>
                                <div class="sc-RFdAl crHCyZ"></div>
                            </div>
                            <div class="post__extra">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="">Hướng nhà
                                                *</label>
                                            <select class="form-select form-select-lg"
                                                aria-label="Default select example">
                                                <option selected>Chọn</option>
                                                <option value="Đông">Đông</option>
                                                <option value="Tây">Tây</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Bắc">Bắc</option>
                                                <option value="Đông Bắc">Đông Bắc</option>
                                                <option value="Tây Bắc">Tây Bắc</option>
                                                <option value="Tây Nam">Tây Nam</option>
                                                <option value="Đông Nam">Đông Nam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="">Hướng ban công
                                                *</label>
                                            <select class="form-select form-select-lg"
                                                aria-label="Default select example">
                                                <option selected>Chọn</option>
                                                <option value="Đông">Đông</option>
                                                <option value="Tây">Tây</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Bắc">Bắc</option>
                                                <option value="Đông Bắc">Đông Bắc</option>
                                                <option value="Tây Bắc">Tây Bắc</option>
                                                <option value="Tây Nam">Tây Nam</option>
                                                <option value="Đông Nam">Đông Nam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="">Đường vào
                                                *</label>
                                            <div class="post-group__input">
                                                <input
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    placeholder="Nhập số" type="text">
                                                <span class="post__unit">m²</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="post__group">
                                            <label for="">Mặt tiền
                                                *</label>
                                            <div class="post-group__input">
                                                <input
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                    placeholder="Nhập số" type="text">
                                                <span class="post__unit">m²</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="post__item">
                            <h2>Hình ảnh & Video</h2>
                            <p>Hãy dùng ảnh thật, không trùng, không chèn số điện thoại. Mỗi ảnh kích thước tối
                                thiểu100x100,
                                tối đa 15 MB. Số lượng ảnh tối đa tuỳ theo loại tin.</p>
                            <div class="post__img">




                                <input type="hidden" class="postid" name="postid" id="postid" value="">

                                <div class="form-group">
                                    <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">

                                        <div class="sc-kaHvZy jZfqQr"><input accept="image/*,.heic" multiple=""
                                                type="file" autocomplete="off" tabindex="-1" style="display: none;"><svg
                                                width="80" height="80" viewBox="0 0 130 130" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M118.42 75.84C118.43 83.2392 116.894 90.5589 113.91 97.33H16.09C12.8944 90.0546 11.3622 82.1579 11.6049 74.2154C11.8477 66.2728 13.8593 58.4844 17.4932 51.4177C21.1271 44.3511 26.2918 38.1841 32.6109 33.3662C38.93 28.5483 46.2443 25.2008 54.0209 23.5676C61.7976 21.9345 69.8406 22.0568 77.564 23.9257C85.2873 25.7946 92.4965 29.363 98.6661 34.3709C104.836 39.3787 109.81 45.6999 113.228 52.8739C116.645 60.0478 118.419 67.8937 118.42 75.84Z"
                                                    fill="#F2F2F2"></path>
                                                <path d="M5.54 97.33H126.37" stroke="#63666A" stroke-width="1"
                                                    stroke-miterlimit="10" stroke-linecap="round"></path>
                                                <path
                                                    d="M97 97.33H49.91V34.65C49.91 34.3848 50.0154 34.1305 50.2029 33.9429C50.3904 33.7554 50.6448 33.65 50.91 33.65H84.18C84.6167 33.6541 85.0483 33.7445 85.4499 33.9162C85.8515 34.0878 86.2152 34.3372 86.52 34.65L96.02 44.15C96.3321 44.4533 96.5811 44.8153 96.7527 45.2151C96.9243 45.615 97.0152 46.0449 97.02 46.48L97 97.33Z"
                                                    fill="#D7D7D7" stroke="#63666A" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M59.09 105.64H42.09C41.8248 105.64 41.5704 105.535 41.3829 105.347C41.1954 105.16 41.09 104.905 41.09 104.64V41.79C41.09 41.5248 41.1954 41.2705 41.3829 41.0829C41.5704 40.8954 41.8248 40.79 42.09 40.79H77.33L89 52.42V104.62C89 104.885 88.8946 105.14 88.7071 105.327C88.5196 105.515 88.2652 105.62 88 105.62H74.86"
                                                    fill="white"></path>
                                                <path
                                                    d="M59.09 105.64H42.09C41.8248 105.64 41.5704 105.535 41.3829 105.347C41.1954 105.16 41.09 104.905 41.09 104.64V41.79C41.09 41.5248 41.1954 41.2705 41.3829 41.0829C41.5704 40.8954 41.8248 40.79 42.09 40.79H77.33L89 52.42V104.62C89 104.885 88.8946 105.14 88.7071 105.327C88.5196 105.515 88.2652 105.62 88 105.62H74.86"
                                                    stroke="#63666A" stroke-width="1" stroke-miterlimit="10"
                                                    stroke-linecap="round">
                                                </path>
                                                <path d="M88.97 52.42H77.33V40.77L88.97 52.42Z" fill="#D7D7D7"
                                                    stroke="#63666A" stroke-width="1" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M27.32 65.49V70.6" stroke="#D7D7D7" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M29.88 68.04H24.76" stroke="#D7D7D7" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M110.49 32.5601V39.9901" stroke="#D7D7D7" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M114.2 36.27H106.77" stroke="#D7D7D7" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M34.07 14.58V25.59" stroke="#D7D7D7" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M39.57 20.08H28.57" stroke="#D7D7D7" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M67 115.86V67.12" stroke="#63666A" stroke-width="1"
                                                    stroke-miterlimit="10" stroke-linecap="round"></path>
                                                <path d="M55.5 78.61L67 67.12L78.5 78.61" fill="white"></path>
                                                <path d="M55.5 78.61L67 67.12L78.5 78.61" stroke="#63666A"
                                                    stroke-width="1" stroke-miterlimit="10"></path>
                                            </svg>
                                            <div type="primary" class="sc-crrsfI fAPcKa">Bấm để chọn ảnh cần tải
                                                lên</div>
                                            <div type="tertiary" class="sc-crrsfI fmnTOX" style="margin-bottom: 16px;">
                                                hoặc
                                                kéo
                                                thả
                                                ảnh vào đây</div>
                                        </div>

                                    </div>
                                    <div class="dropzone-previews">


                                    </div>
                                </div>



                            </div>
                            <div class="post__video">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg" font-size="24px">
                                                    <circle cx="12.5" cy="12.5" r="9.5" stroke="currentColor"
                                                        stroke-width="1.5">
                                                    </circle>
                                                    <path
                                                        d="M10.5 10.5017C10.5 9.70299 11.3901 9.22659 12.0547 9.66963L15.2519 11.8011C15.8457 12.1969 15.8457 13.0694 15.2519 13.4652L12.0547 15.5967C11.3901 16.0397 10.5 15.5633 10.5 14.7646V10.5017Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span>Thêm video từ Youtube</span>
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <input name="video"
                                                    placeholder="VD: https://www.youtube.com/watch?v=Y-Dw0NpfRug"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="post__item">
                            <h2>Thông tin liên hệ</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="post__group">
                                        <label for="">Tên liên hệ<span style="color:red">&nbsp;*</span>
                                        </label>
                                        <input name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="post__group">
                                        <label for="">Số điện thoại<span style="color:red">&nbsp;*</span></label>
                                        <input name="phone" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="post__group">
                                    <label for="">Địa chỉ
                                        *</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="post__group">
                                    <label for="">Email
                                        *</label>
                                    <input name="email" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post__btn-group">
                        <button class="btn-preview">Xem trước giao diện</button>
                        <button type="submit" class="btn-continue">Tiếp tục</button>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="post__right">
                        <div class="post__group">
                            <label for="">Loại tin đăng</label>
                            <select name="typeOfPost" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example">
                                <option selected>Chọn</option>
                                <option value="1">Tin thường</option>
                                <option value="2">Vip 3</option>
                                <option value="2">Vip 2</option>
                                <option value="2">Vip 1</option>
                                <option value="2">Vip Đặc Biệt</option>

                            </select>
                        </div>
                        <div class="post__group">
                            <label name="datePost" for="">Số ngày đăng</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Chọn</option>
                                <option value="7">7 ngày</option>
                                <option value="10">10 ngày</option>
                                <option value="15">15 ngày</option>
                                <option value="20">20 ngày</option>
                                <option value="25">25 ngày</option>
                                <option value="30">30 ngày</option>
                                <option value="60">60 ngày</option>
                                <option value="90">90 ngày</option>
                                <option value="180">180 ngày</option>
                            </select>
                        </div>
                        <div class="post__group">
                            <label for="">Ngày bắt đầu</label>
                            <input name="startDate" type="date">
                        </div>
                        <div type="primary" style="padding-top:.7rem; font-size:1.2rem; color: rgb(80, 80, 80);">Kết
                            thúc
                            ngày
                            25/10/2022</div>
                        <div class="payment">
                            <div class="payment__info">
                                <div type="primary" class="">Đơn giá / ngày</div><span type="tertiary" class=""><span
                                        type="primary" class="">2.727</span> VND</span>
                            </div>
                            <div class="payment__info">
                                <div type="primary" class="">Số ngày đăng tin</div>
                                <div type="primary" class="sc-crrsfI fAPcKa">10 ngày</div>
                            </div>
                            <div class="payment__info">
                                <div type="primary" class="">VAT (10%)</div><span type="tertiary" class=""><span
                                        type="primary" class="">2.727</span> VND</span>
                            </div>
                            <div class="payment__info">
                                <div type="primary">Bạn trả</div>
                                <span>30.000VND</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </form>
</div>














<script>
    var editor = CKEDITOR.replace('editor');
    editor.on( 'change', function( evt ) {
var data = evt.editor.getData();
$(".description").val(data);

// document.querySelector(".show").innerHTML = data;
});
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
</script>
<script>
    const papers = document.querySelectorAll('.post-paper__item');
        papers.forEach((paper, index) => {
            paper.addEventListener('click', (e) => {
                document.querySelector(".post-paper__item--active").classList.remove(
                    'post-paper__item--active');

                paper.classList.add('post-paper__item--active');

            })

        })
</script>

<script>
    var text="";
    $("#city").on('change', function(e) {
        text+=$("#city option:selected").text();
$(".address").val(text)
    })
    $("#district").on('change', function(e) {
     text+=$("#district option:selected").text();
$(".address").val(text)
    })
    $(".btn-plus__bedroom").on("click", function(e) {
            $(".btn-minus__bedroom").removeClass("unactive");
            $('.qty__bedroom').val(function(i, oldval) {
                return ++oldval;
            })
        });
        $(".btn-minus__bedroom").on("click", function(e) {
            if (parseInt($('.qty__bedroom').val()) > 0) {
                $('.qty__bedroom').val(function(i, oldval) {
                    return --oldval;
                });
            } else {
                $(this).addClass("unactive");
            }


        });

        $(".btn-plus__bathroom").on("click", function(e) {
            $(".btn-minus__bathroom").removeClass("unactive");
            $('.qty__bathroom').val(function(i, oldval) {
                return ++oldval;
            })
        });
        $(".btn-minus__bathroom").on("click", function(e) {
            if (parseInt($('.qty__bathroom').val()) > 0) {
                $('.qty__bathroom').val(function(i, oldval) {
                    return --oldval;
                });
            } else {
                $(this).addClass("unactive");
            }


        });

        $(".btn-plus__building").on("click", function(e) {
            $(".btn-minus__building").removeClass("unactive");
            $('.qty__building').val(function(i, oldval) {
                return ++oldval;
            })
        });
        $(".btn-minus__building").on("click", function(e) {
            if (parseInt($('.qty__building').val()) > 0) {
                $('.qty__building').val(function(i, oldval) {
                    return --oldval;
                });
            } else {
                $(this).addClass("unactive");
            }


        });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<!-- Adding a script for dropzone -->


<script>
    Dropzone.autoDiscover = false;
    // Dropzone.options.demoform = true;	
    let token = $('meta[name="csrf-token"]').attr('content');
    $(function() {
        var myDropzone = new Dropzone("div#dropzoneDragArea", {
            paramName: "file",
            url: "{{ url('/storeMultipleImage') }}",
            previewsContainer: 'div.dropzone-previews',
            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 5,
            params: {
                _token: token
            },
            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;
                //form submission code goes here
                $("form[name='demoform']").submit(function(event) {
                    //Make sure that the form isn't actully being sent.
                    event.preventDefault();

                    URL = $("#demoform").attr('action');
                    formData = $('#demoform').serialize();
                    $.ajax({
                        type: 'POST',
                        url: URL,
                        data: formData,
                        success: function(result) {
                        alert(result);
                            if (result.status == "success") {

                                // fetch the useid 
                                var postid = result.post_id;
                                $("#postid").val(
                                postid); // inseting postid into hidden input field
                                //process the queue
                                myDropzone.processQueue();
                            } else {
                                console.log("error");
                            }
                        }
                    });
                });

                //Gets triggered when we submit the image.
                this.on('sending', function(file, xhr, formData) {
                    //fetch the user id from hidden input field and send that postid with our image
                    let postid = document.getElementById('postid').value;
                    formData.append('postid', postid);
                });

                this.on("success", function(file, response) {
                    //reset the form
                    $('#demoform')[0].reset();
                    //reset dropzone
                    $('.dropzone-previews').empty();
                });

                this.on("queuecomplete", function() {

                });
                this.on("sendingmultiple", function() {});

                this.on("successmultiple", function(files, response) {});

                this.on("errormultiple", function(files, response) {

                });
            }
        });
    });
</script>






@endsection