<div class="card1">
    <div class="card1__img">
        @foreach (explode(",", $images) as $key => $image)
        @if($key == 0)
        <img src="{{url("/uploads/images/$image")}}" />
        @endif
        @endforeach
    </div>
    <div class="card1__info ">
        <div class="card1__tag">
            <label>Đang mở bán</label>
            <span>11/9/2022: mở bán giai đoạn 1. Đã bán hết 96% rổ hàng</span>
        </div>
        <h3 class="card1__name">
            {{$title}}
        </h3>
        <div class="card1__meta">
            <span class="card1__price ">{{$price}} triệu/m²</span><span class="card1__dot ">·</span>
            <span class="card1__area ">{{$area}} m²</span>
        </div>
        <div class="card1__location" title="Quận 9, Hồ Chí Minh ">
            <i class="fa-solid fa-location-crosshairs "></i>
            <span>{{$address}}</span>
        </div>
    </div>
</div>