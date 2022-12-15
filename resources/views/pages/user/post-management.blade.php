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
                <div class="col-sm-9">
                    <div class="post-manage">
                        <h3 class="post-manage__heading">Danh sách tin
                        </h3>
                        <div class="select">
                            <label>
                                Multi-select
                                <input mbsc-input id="my-input" data-dropdown="true" data-tags="true" />
                            </label>
                            <select id="multiple-select" multiple>
                                <option value="1">Books</option>
                                <option value="2">Movies, Music & Games</option>
                                <option value="3">Electronics & Computers</option>
                                <option value="4">Home, Garden & Tools</option>
                                <option value="5">Health & Beauty</option>
                                <option value="6">Toys, Kids & Baby</option>
                                <option value="7">Clothing & Jewelry</option>
                                <option value="8">Sports & Outdoors</option>
                            </select>
                        </div>
                        <div class="post-manage__func">
                            <div class="post-manage__search">
                                <input placeholder="Tin theo mã tin, tiêu đề" type="text">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="post-manage__time">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Mặc định</option>
                                    <option value="1">1 tuần qua</option>
                                    <option value="2">30 ngày qua</option>
                                    <option value="3">Tùy chọn</option>
                                </select>
                            </div>
                            <div class="post-manage__filter">
                                <i class="fa-solid fa-filter"></i><span> Lọc</span>
                            </div>
                            <div class="post-manage__excel">
                                <i class="fa-solid fa-download"></i><span>Excel</span>
                            </div>
                        </div>
                        <div class="post-manage__menu">
                            <div class="post-manage-menu__item active">
                                <button>Tất cả (1)</button>
                            </div>
                            <div class="post-manage-menu__item">
                                <button>Hết hạn (1)</button>
                            </div>
                            <div class="post-manage-menu__item">
                                <button>Đang hiển thị (1)</button>
                            </div>
                            <div class="post-manage-menu__item">
                                <button>Chờ duyệt (1)</button>
                            </div>
                            <div class="post-manage-menu__item">
                                <button>Không duyệt (1)</button>
                            </div>
                        </div>
                        <div class="post-manage__content">
                            <div class="post-manage__head">
                                <div class="post-manage__select">
                                    <input type="checkbox">
                                    <span>Chọn tất cả</span>
                                </div>
                                <div class="post-manage__sort">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Sắp xếp</option>
                                        <option>Mặc định</option>
                                        <option value="1">A-Z</option>
                                        <option value="2">Z-A</option>
                                    </select>
                                </div>
                            </div>
                            <div class="post-manage__list">
                                <div class="post-manage__item">
                                    <div class="post-manage__input">
                                        <input type="checkbox" name=""><span>#1</span>
                                    </div>
                                    <div class="post-manage__img">
                                        <img src="https://images.unsplash.com/photo-1657299142018-4f7f33aea18c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                                            alt="">
                                        <span>VIP 3</span>
                                    </div>
                                    <div class="post-manage__info">
                                        <div class="post-manage-info__head">
                                            <h4>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing
                                            </h4>
                                            <span>
                                                Bán nhà riêng Thủ Đức, Hồ Chí Minh
                                            </span>
                                        </div>

                                        <div class="post-manage__detail">
                                            <div class="post-manage__span">
                                                <span>
                                                    Trạng thái
                                                </span>
                                                <span>Chờ duyệt</span>
                                            </div>
                                            <div class="post-manage__span">
                                                <span>
                                                    Mã tin
                                                </span>
                                                <span>36081926</span>
                                            </div>
                                            <div class="post-manage__span">
                                                <span>
                                                    Ngày đăng
                                                </span>
                                                <span>09/12/2022</span>
                                            </div>
                                            <div class="post-manage__span">
                                                <span>
                                                    Ngày hết hạn
                                                </span>
                                                <span>19/12/2022 </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="post-manage__actions">
                                        <button><i class="fa-solid fa-eye"></i> Chi tiết</button>
                                        <button><i class="fa-solid fa-pen-to-square"></i> Sửa tin</button>
                                        <button>... Thao tác</button>
                                    </div>
                                </div>
                                <div class="post-manage__item">
                                    <div class="post-manage__input">
                                        <input type="checkbox" name=""><span>#1</span>
                                    </div>
                                    <div class="post-manage__img">
                                        <img src="https://images.unsplash.com/photo-1657299142018-4f7f33aea18c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=600&q=60"
                                            alt="">
                                        <span>VIP 3</span>
                                    </div>
                                    <div class="post-manage__info">
                                        <div class="post-manage-info__head">
                                            <h4>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing
                                            </h4>
                                            <span>
                                                Bán nhà riêng Thủ Đức, Hồ Chí Minh
                                            </span>
                                        </div>

                                        <div class="post-manage__detail">
                                            <div class="post-manage__span">
                                                <span>
                                                    Trạng thái
                                                </span>
                                                <span>Chờ duyệt</span>
                                            </div>
                                            <div class="post-manage__span">
                                                <span>
                                                    Mã tin
                                                </span>
                                                <span>36081926</span>
                                            </div>
                                            <div class="post-manage__span">
                                                <span>
                                                    Ngày đăng
                                                </span>
                                                <span>09/12/2022</span>
                                            </div>
                                            <div class="post-manage__span">
                                                <span>
                                                    Ngày hết hạn
                                                </span>
                                                <span>19/12/2022 </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="post-manage__actions">
                                        <button><i class="fa-solid fa-eye"></i> Chi tiết</button>
                                        <button><i class="fa-solid fa-pen-to-square"></i> Sửa tin</button>
                                        <button>... Thao tác</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </form>
</div>


















@endsection