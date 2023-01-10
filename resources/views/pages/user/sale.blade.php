@extends("layout.layout")
@section("content")

<div class="sale">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="sale__head">
                    <h2>NHÀ ĐẤT BÁN TẠI VIỆT NAM</h2>
                    <p>Tổng hợp tất cả các thông tin về bất động sản bán</p>

                    <div class="sale-head__info">
                        <p>Có <span>876</span> kết quả.</p>
                        <div class="sale__sort">
                            <label>Sắp xếp</label>
                            <select class="form-select form-select-lg" aria-label=".form-select-lg example">
                                <option selected="selected" value="1">Thông thường</option>
                                <option value="2">Giá thấp nhất</option>
                                <option value="3">Giá cao nhất</option>
                                <option value="4">Diện tích nhỏ nhất</option>
                                <option value="5">Diện tích lớn nhất</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="sale__main">
                    <div class="row g-4">
                        @foreach ($all_post as $key => $post)
                        <div class="col-sm-4">
                            <x-card-sale postIds="{{$post->id}}" title="{{$post->title}}" price="{{$post->price}}"
                                area="{{$post->area}}" images="{{$post->images}}" address="{{$post->address}}"
                                time="{{$post->created_at}}">
                            </x-card-sale>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="pagination">
                    <ul>
                        <!--pages or li are comes from javascript -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="sale__search">
                    <h2>TÌM KIẾM BẤT ĐỘNG SẢN
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

@endsection