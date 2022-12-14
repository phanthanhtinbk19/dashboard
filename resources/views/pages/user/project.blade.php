@extends("layout.layout")
@section("content")

<div class="project">
    <div class="project__head">

        <h2 class="heading">
            TIN TỨC DỰ ÁN NỔI BẬT
        </h2>

        <div class="project__search">
            <input maxlength="50" placeholder="-Tìm tin tức, lời khuyên...-">
            <span>
                <i class="fa fa-search"></i>
            </span>
        </div>
    </div>
    <div class="container">
        <div class="project__main">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card--simple card--primary">
                        <div class="img">
                            <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8dHJhdmVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                alt="">
                        </div>
                        <h2>TP.HCM muốn làm 5 tuyến đường sắt kết nối với các tỉnh thành</h2>
                        <p>Theo đề xuất của TP.HCM, sẽ có 5 tuyến đường sắt được đầu tư để giúp kết nối thành phố với
                            các tỉnh thành như Cần Thơ, Long An, Tây Ninh, sân bay quốc tế Long Thành và trên trục Bắc -
                            Nam.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row mb-4">
                        @foreach ($all_project as $key => $project)
                        <a href="/du-an/{{$project->id}}">
                            <div class="col-sm-6 ">
                                <div class="card--simple card--secondary">
                                    <div class="img">
                                        <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8dHJhdmVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                            alt="">
                                    </div>
                                    <h2>{{$project->title}}</h2>
                                </div>
                            </div>
                        </a>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-9">
                <div class="project__list">
                    <div class="project__item">
                        <div class="project__img">
                            <img src="https://images.unsplash.com/photo-1657214058406-bb36358fe2f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxzZWFyY2h8OHx8dHJhdmVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                alt="">
                        </div>
                        <div class="project__info">
                            <div class="project__title">
                                Bất động sản công nghiệp phía Bắc trên đà phát triển mạnh
                            </div>
                            <div class="project__date">
                                <span><i class="fa-solid fa-calendar"></i> 30/12/2020</span>
                                <a href="/thong-tin-thi-truong" title="Tin ">Tin dự án </a>
                            </div>
                            <p class="project__desc">
                                Bất động sản công nghiệp tại khu vực miền Bắc có nhiều chuyển biến tích cực trong những
                                năm qua nhờ nguồn vốn FDI đổ mạnh vào các tỉnh, thành tại đây. Trên đà này, giá thuê nhà
                                xưởng kho bãi thời gian qua cũng có sự tăng nhẹ.
                            </p>
                        </div>
                    </div>
                    <div class="project__item">
                        <div class="project__img">
                            <img src="https://images.unsplash.com/photo-1657214058406-bb36358fe2f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxzZWFyY2h8OHx8dHJhdmVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60"
                                alt="">
                        </div>
                        <div class="project__info">
                            <div class="project__title">
                                Bất động sản công nghiệp phía Bắc trên đà phát triển mạnh
                            </div>
                            <div class="project__date">
                                <span><i class="fa-solid fa-calendar"></i> 30/12/2020</span>
                                <a href="/thong-tin-thi-truong" title="Tin ">Tin dự án </a>
                            </div>
                            <p class="project__desc">
                                Bất động sản công nghiệp tại khu vực miền Bắc có nhiều chuyển biến tích cực trong những
                                năm qua nhờ nguồn vốn FDI đổ mạnh vào các tỉnh, thành tại đây. Trên đà này, giá thuê nhà
                                xưởng kho bãi thời gian qua cũng có sự tăng nhẹ.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="fb-comments" data-href="http://127.0.0.1:8000/tin-tuc" data-width="" data-numposts="5">
                </div> --}}
                <div class="pagination">
                    <ul>
                        <!--pages or li are comes from javascript -->
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <x-sidebar>

                </x-sidebar>
            </div>
        </div>



    </div>
</div>



@endsection