@extends("layout.layout")
@section("content")
<div class="detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="detail__title">
                    <h2 class="heading">
                        {{ $post->title }}
                    </h2>
                </div>
                <div class="detail__text">
                    <i class="fa-solid fa-location-pin"></i>
                    {{ $post->address }}
                </div>
                <div class="detail__images">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiper3">
                        <div class="swiper-wrapper">
                            @foreach (explode(",", $post->images) as $key => $image)
                            <div class="swiper-slide">
                                <img src="{{url("/uploads/images/$image")}}" />
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                            @foreach (explode(",", $post->images) as $key => $image)
                            <div class="swiper-slide">
                                <img src="{{url("/uploads/images/$image")}}" />
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="detail__block">
                    <h4 class="sub-heading">Thông tin chi tiết
                    </h4>
                    <div id="infoDetail" class="detail__info">
                        <?php 
                                echo htmlspecialchars_decode($post->desc);
                                ?>
                    </div>
                    <div class="fb-like" data-href="http://127.0.0.1:8000/chi-tiet" data-width=""
                        data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                </div>

                <div class="detail__block">
                    <span class="sub-heading">Đặc điểm bất động sản</span>
                    <div class="feature">
                        <span class="feature__cate">Loại tin đăng: Bán nhà biệt thự, liền kề</span>
                        <div class="feature__list">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature__item">
                                        <span class="feature__item-icon">
                                            <img src="{{url("frontend/images/icons8-size-64.png")}}" alt="">
                                        </span>
                                        <span class="feature-item__title">Diện tích</span>
                                        <span class="feature-item__value">{{$post->area}} m²</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature__item">
                                        <span class="feature__item-icon"> <img src="{{url("frontend/images/icons8-dollar-coin-50.png")}}" alt=""></span>
                                        <span class="feature-item__title">Mức giá</span>
                                        <span class="feature-item__value">{{$post->price}} triệu/m²</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature__item">
                                        <span class="feature__item-icon"> <img src="{{url("frontend/images/building.png")}}" alt=""></span>
                                        <span class="feature-item__title">Số tầng</span>
                                        <span class="feature-item__value">4 tầng</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature__item">
                                        <span class="feature__item-icon"> <img src="{{url("frontend/images/icons8-empty-bed-50.png")}}" alt=""></span>
                                        <span class="feature-item__title">Số phòng ngủ</span>
                                        <span class="feature-item__value">6 phòng</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature__item">
                                        <span class="feature__item-icon"> <img src="{{url("frontend/images/icons8-toilet-bowl-50.png")}}" alt=""></span>
                                        <span class="feature-item__title">Số toilet</span>
                                        <span class="feature-item__value">4 phòng</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature__item">
                                        <span class="feature__item-icon"> <img src="{{url("frontend/images/icons8-sign-document-30.png")}}" alt=""></i></span>
                                        <span class="feature-item__title">Pháp lý</span>
                                        <span class="feature-item__value">Sổ đỏ/ Sổ hồng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="detail__block">
                    <h4 class="sub-heading">bản đồ
                    </h4>
                    <div class="detail__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.122982456389!2d106.8041019140831!3d10.878249660282252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d8a5f4e477e9%3A0x29d5aeb365cee20b!2zS8O9IHTDumMgeMOhIEtodSBBIMSQSCBRdeG7kWMgZ2lhIFRQLiBI4buTIENow60gTWluaA!5e0!3m2!1svi!2s!4v1665805457397!5m2!1svi!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>



                <div class="detail__block">
                    <div class="detail-short-info__list">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="detail-short-info__item"><span class="detail-short-info__title">Ngày
                                        đăng</span><span class="detail-short-info__value">03/12/2022</span></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="detail-short-info__item"><span class="detail-short-info__title">Ngày hết
                                        hạn</span><span class="detail-short-info__value">10/12/2022</span></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="detail-short-info__item"><span class="detail-short-info__title">Loại
                                        tin</span><span class="detail-short-info__value">Tin thường</span></div>
                            </div>
                            <div class="col-sm-3">
                                <div class="detail-short-info__item"><span class="detail-short-info__title">Mã
                                        tin</span><span class="detail-short-info__value">23960874</span></div>
                            </div>
                        </div>

                    </div>
                </div>









                <div class="detail__block">
                    <h4 class="sub-heading">Đánh giá </h4>
                    <div class="detail__review">
                        <div class="fb-comments" data-href="http://127.0.0.1:8000/chi-tiet" data-width=""
                            data-numposts="10">
                        </div>
                    </div>
                </div>

                <div class="detail__block">
                    <h4 class="sub-heading">Liên hệ</h4>
                    <div class="detail__contact">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="detail-contact__box">
                                    <p class="detail-contact__name">
                                        Thái Huy
                                    </p>
                                    <div class="detail-contact__info">
                                        <div class="detail-contact__avatar">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="detail-contact__content">
                                            <p class="fweight-600 text-ellipsis">
                                                <i class="fa fa-phone"></i>
                                                <span id="toPhone" title="
                                    0933988874 - 0933988874
                                ">
                                                    0933988874 - 0933988874
                                                </span>
                                            </p>
                                            <p class="fweight-600 text-ellipsis">
                                                <i class="fa fa-envelope"></i>
                                                <span id="toEmail" title="
                                    timnhacungban24h@gmail.com
                                ">
                                                    timnhacungban24h@gmail.com
                                                </span>
                                            </p>
                                            <p class="fweight-600 text-ellipsis no-mg">
                                                <i class="fa fa-map-marker"></i>
                                                <span id="toAddress" title="
                                    --
                                ">
                                                    --
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="detail-contact__send">
                                    <textarea name="" id="" rows="8"></textarea>
                                    <div class="d-grid col-6 pt-4 mx-auto"> <button type="button"
                                            class="btn btn-primary btn-lg">Gửi tin nhắn cho người bán</button></div>
                                </div>
                            </div>
                        </div>

                        <div class="detail__same">
                            <h2 class="heading">Tin rao tương tự
                            </h2>
                            <section class="article">
                                <div class="container">
                                    <div class="row g-4 ">
                                        @foreach ($all_post as $key => $post)
                                        <div class="col-sm-4 ">
                                            <x-card-sale postIds="{{$post->id}}" title="{{$post->title}}"
                                                price="{{$post->price}}" area="{{$post->area}}"
                                                address="{{$post->address}}" time="{{$post->created_at}}">
                                            </x-card-sale>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="pagination">
                                        <ul>
                                            <!--pages or li are comes from javascript -->
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-sm-3 mt-5">
                <div class="sale__search">
                    <h2 class="heading mt-2" style="text-align:center">TÌM KIẾM BẤT ĐỘNG SẢN
                    </h2>
                    <div class="sale__tabs">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                checked>
                            <label class="btn btn-outline-primary" for="btnradio1">Bán</label>
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">Cho Thuê</label>
                        </div>
                    </div>
                    <div class="sale-search__content">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Loại nhà đất</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Tỉnh/Thành phố</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Quận/Huyện</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Diện Tích</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Mức giá</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="d-grid col-12 p-2">
                            <button type="button" class="btn btn-success btn-lg ">Tìm kiếm</button>
                        </div>
                        <div class="text-center">
                            <a id="searchAdvance" style="font-size: 1.4rem; color:#fff; text-decoration: underline;"
                                class="white-clr text-underline fsize-13 ">Tìm nâng cao</a>
                        </div>
                    </div>

                </div>
                <x-sidebar></x-sidebar>
            </div>
        </div>

    </div>
</div>

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