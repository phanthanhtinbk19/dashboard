@extends("layout.layout")
@section("content")

<div class="sale">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h2 style="font-size:20px;padding-bottom:10px">{{$new->title}}</h2>
                <div class="new-more__time ">
                    <i class="fa-regular fa-calendar "></i>
                    <span>{{ date("d M Y", strtotime($new->created_at)) }}</span>
                </div>
                <div style="font-size:14px;line-height:1.5" class="desc">
                    {!! html_entity_decode(nl2br(e($new->desc))) !!}
                </div>
            </div>
            <div class="col-sm-3">
                <div class="sale__search">
                    <h2 style="font-size:20px">TÌM KIẾM BẤT ĐỘNG SẢN
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