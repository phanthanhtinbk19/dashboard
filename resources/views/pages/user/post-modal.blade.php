@extends('layout.layout')
@section('content')
@foreach ($all_post as $key => $post)
<div class="container">
    <div class="post-modal">
        <div class="post-modal__head"></div>
        <div class="post-modal__content">
            <div class="row">
                <div class="col-sm-9">


                    <div class="post-modal__images">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                                @foreach (json_decode($post->images) as $key => $image)
                                <div class="swiper-slide">
                                    <img src="{{ url("uploads/posts/$image") }}" />
                                </div>
                                @endforeach

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper1">
                            <div class="swiper-wrapper">
                                @foreach (json_decode($post->images) as $key => $image)
                                <div class="swiper-slide">
                                    <img src="{{ url("uploads/posts/$image") }}" />
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="post-modal__block">
                        <div class="post-modal__link">
                            <a style="color: rgb(153, 153, 153);font-size: 14px;" href="/ban-nha-rieng" level="1"
                                title="Bán nhà riêng tại Việt Nam">Bán</a><span
                                style="color: rgb(153, 153, 153);font-size: 14px;">/</span><a
                                style="color: rgb(153, 153, 153);font-size: 14px;" href="/ban-nha-rieng-tp-hcm">Hồ Chí
                                Minh</a><span style="color: rgb(153, 153, 153);font-size: 14px;">/</span><a
                                style="color: rgb(153, 153, 153);font-size: 14px;" href="/ban-nha-rieng-binh-tan"
                                level="3">Bình
                                Tân</a><span style="color: rgb(153, 153, 153);font-size: 14px;">/</span><a
                                style="color:#000;font-size: 14px;" href="/ban-nha-rieng-phuong-binh-hung-hoa"
                                level="4">Nhà riêng
                                tại phường Bình Hưng
                                Hòa</a>
                        </div>
                        <h3 class="post-modal__title">
                            {{ $post->title }}
                        </h3>

                        <p class="post-modal__sub">

                            {{ $post->address }}
                        </p>
                    </div>

                    <div class="post-modal__block">
                        <h4 class="sub-heading">Thông tin chi tiết
                        </h4>
                        <div id="infopost-modal" class="post-modal__info">
                            <?php
                                    echo htmlspecialchars_decode($post->desc);
                                    ?>
                        </div>
                        <div class="fb-like" data-href="http://127.0.0.1:8000/chi-tiet" data-width=""
                            data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                    </div>

                    <div class="post-modal__block">
                        <span class="sub-heading">Đặc điểm bất động sản</span>
                        <div class="feature">
                            <span class="feature__cate">Loại tin đăng: Bán nhà biệt thự, liền kề</span>
                            <div class="feature__list">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="feature__item">
                                            <span class="feature__item-icon">
                                                <img src="{{ url('frontend/images/icons8-size-64.png') }}" alt="">
                                            </span>
                                            <span class="feature-item__title">Diện tích</span>
                                            <span class="feature-item__value">{{ $post->area }} m²</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature__item">
                                            <span class="feature__item-icon"> <img
                                                    src="{{ url('frontend/images/icons8-dollar-coin-50.png') }}"
                                                    alt=""></span>
                                            <span class="feature-item__title">Mức giá</span>
                                            <span class="feature-item__value">{{ $post->price }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature__item">
                                            <span class="feature__item-icon"> <img
                                                    src="{{ url('frontend/images/building.png') }}" alt=""></span>
                                            <span class="feature-item__title">Số tầng</span>
                                            <span class="feature-item__value">4 tầng</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature__item">
                                            <span class="feature__item-icon"> <img
                                                    src="{{ url('frontend/images/icons8-empty-bed-50.png') }}"
                                                    alt=""></span>
                                            <span class="feature-item__title">Số phòng ngủ</span>
                                            <span class="feature-item__value">6 phòng</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature__item">
                                            <span class="feature__item-icon"> <img
                                                    src="{{ url('frontend/images/icons8-toilet-bowl-50.png') }}"
                                                    alt=""></span>
                                            <span class="feature-item__title">Số toilet</span>
                                            <span class="feature-item__value">4 phòng</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="feature__item">
                                            <span class="feature__item-icon"> <img
                                                    src="{{ url('frontend/images/icons8-sign-document-30.png') }}"
                                                    alt=""></i></span>
                                            <span class="feature-item__title">Pháp lý</span>
                                            <span class="feature-item__value">Sổ đỏ/ Sổ hồng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="post-modal__block">
                        <h4 class="sub-heading">bản đồ
                        </h4>
                        <div class="post-modal__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.122982456389!2d106.8041019140831!3d10.878249660282252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d8a5f4e477e9%3A0x29d5aeb365cee20b!2zS8O9IHTDumMgeMOhIEtodSBBIMSQSCBRdeG7kWMgZ2lhIFRQLiBI4buTIENow60gTWluaA!5e0!3m2!1svi!2s!4v1665805457397!5m2!1svi!2s"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>



                    <div class="post-modal__block">
                        <div class="post-modal-short-info__list">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="post-modal-short-info__item"><span
                                            class="post-modal-short-info__title">Ngày
                                            đăng</span><span class="post-modal-short-info__value">03/12/2022</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="post-modal-short-info__item"><span
                                            class="post-modal-short-info__title">Ngày
                                            hết
                                            hạn</span><span class="post-modal-short-info__value">10/12/2022</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="post-modal-short-info__item"><span
                                            class="post-modal-short-info__title">Loại
                                            tin</span><span class="post-modal-short-info__value">Tin thường</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="post-modal-short-info__item"><span
                                            class="post-modal-short-info__title">Mã
                                            tin</span><span class="post-modal-short-info__value">23960874</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-sm-3 mt-5">
                    <div class="post-modal__user">
                        <img src="" alt="">
                        <span>Được đăng bởi</span>
                        <span>tín phan</span>
                        <div class="post-modal__btns">
                            <button>0868827535</button>
                            <button>Gửi mail</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endforeach
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper1", {

            spaceBetween: 10,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper3", {

            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
</script>
@endsection