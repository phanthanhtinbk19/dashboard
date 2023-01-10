<a href="{{url("chi-tiet-bai-viet/$postIds")}}">
    <div class="card">
        <div class="card__top ">
            @foreach (explode(",",$images) as $key => $image)
            @if($key == 0)
            <img src="{{url("/uploads/images/$image")}}" />
            @endif
            @endforeach
            <span class="card__price ">
                <i class="fa-solid fa-tag"></i>
                {{$price}}tỷ
            </span>
            <span class="card__area"><i class="fa fa-arrows-alt hint mg-right-5"></i>
                {{$area}}
                m²</span>
        </div>
        <div class="card__middle ">
            <p class="card__desc ">
                {{$title}}
            </p>
            <div class="card__location ">
                <i class="fa-solid fa-location-crosshairs "></i>
                <span>{{$address}}</span>
            </div>
        </div>
        <div class="card__bottom ">
            <span class="card__date" date="{{$time}}"></span>
            <span class="card__btn-like "> <i class="fa-regular fa-heart "></i></span>
        </div>
    </div>
</a>

<script>
    function relativeDays(timestamp) {
  const rtf = new Intl.RelativeTimeFormat('en', {
    numeric: 'auto',
  });
  const oneDayInMs = 1000 * 60 * 60 * 24;
  const daysDifference = Math.round(
    (timestamp - new Date().getTime()) / oneDayInMs,
  );

  return rtf.format(daysDifference, 'day');
}
$(".card__date").each(function(){
    let timeAgo  = $(this).attr("date");
$(this).html(relativeDays(new Date(timeAgo).getTime()));
    });



</script>