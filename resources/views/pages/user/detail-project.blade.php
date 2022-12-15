@extends("layout.layout")
@section("content")
@foreach ($project as $key => $pro)
<div class="detail">
    <div class="container">
        <?php 
        echo htmlspecialchars_decode($pro->desc);
        ?>

    </div>
</div>

@endforeach
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>



@endsection