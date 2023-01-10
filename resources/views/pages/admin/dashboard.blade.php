@extends('../layout/' . $layout)

@section('subhead')
<title>Dashboard - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                    <a href="" class="ml-auto flex items-center text-primary">
                        <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                    </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="bookmark" class="report-box__icon text-primary"></i>

                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                <div class="text-base text-slate-500 mt-1">số lượng bài viết</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="message-circle" class="report-box__icon text-pending"></i>

                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                <div class="text-base text-slate-500 mt-1">Đánh Giá Từ Người Dùng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="users" class="report-box__icon text-warning"></i>

                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                <div class="text-base text-slate-500 mt-1">Tài Khoản Hệ Thống</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="phone-outgoing" class="report-box__icon text-success"></i>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">152</div>
                                <div class="text-base text-slate-500 mt-1">Liên Hệ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Sales Report -->
            <div class="col-span-12 lg:col-span-6 mt-8">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                        <i data-lucide="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div class="flex flex-col md:flex-row md:items-center">
                        <div class="flex">
                            <div>
                                <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000
                                </div>
                                <div class="mt-0.5 text-slate-500">This Month</div>
                            </div>
                            <div
                                class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5">
                            </div>
                            <div>
                                <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                <div class="mt-0.5 text-slate-500">Last Month</div>
                            </div>
                        </div>
                        <div class="dropdown md:ml-auto mt-5 md:mt-0">
                            <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false"
                                data-tw-toggle="dropdown">
                                Filter by Category <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content overflow-y-auto h-32">
                                    <li><a href="" class="dropdown-item">PC & Laptop</a></li>
                                    <li><a href="" class="dropdown-item">Smartphone</a></li>
                                    <li><a href="" class="dropdown-item">Electronic</a></li>
                                    <li><a href="" class="dropdown-item">Photography</a></li>
                                    <li><a href="" class="dropdown-item">Sport</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="report-chart">
                        <div class="h-[275px]">
                            <canvas id="report-line-chart" class="mt-6 -mb-6"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->
            <!-- BEGIN: Weekly Top Seller -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                    <a href="" class="ml-auto text-primary truncate">Show More</a>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <div class="mt-3">
                        <div class="h-[213px]">
                            <canvas id="report-pie-chart"></canvas>
                        </div>
                    </div>
                    <div class="w-52 sm:w-auto mx-auto mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                            <span class="truncate">17 - 30 Years old</span>
                            <span class="font-medium ml-auto">62%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            <span class="truncate">31 - 50 Years old</span>
                            <span class="font-medium ml-auto">33%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                            <span class="truncate">>= 50 Years old</span>
                            <span class="font-medium ml-auto">10%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Weekly Top Seller -->
            <!-- BEGIN: Sales Report -->
            <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                    <a href="" class="ml-auto text-primary truncate">Show More</a>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <div class="mt-3">
                        <div class="h-[213px]">
                            <canvas id="report-donut-chart"></canvas>
                        </div>
                    </div>
                    <div class="w-52 sm:w-auto mx-auto mt-8">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                            <span class="truncate">17 - 30 Years old</span>
                            <span class="font-medium ml-auto">62%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            <span class="truncate">31 - 50 Years old</span>
                            <span class="font-medium ml-auto">33%</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                            <span class="truncate">>= 50 Years old</span>
                            <span class="font-medium ml-auto">10%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Sales Report -->
            <!-- BEGIN: Official Store -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                    <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                        <i data-lucide="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                        <input type="text" class="form-control sm:w-56 box pl-10" placeholder="Filter by city">
                    </div>
                </div>
                <div class="intro-y box p-5 mt-12 sm:mt-5">
                    <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                    <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478"
                        data-sources="/build/assets/json/location.json"></div>
                </div>
            </div>
            <!-- END: Official Store -->
            <!-- BEGIN: Weekly Best Sellers -->
            <div class="col-span-12 xl:col-span-4 mt-6">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                </div>
                <div class="mt-5">
                    @foreach (array_slice($fakers, 0, 4) as $faker)
                    <div class="intro-y">
                        <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                            <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                <img alt="Midone - HTML Admin Template"
                                    src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                            </div>
                            <div
                                class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                                137 Sales</div>
                        </div>
                    </div>
                    @endforeach
                    <a href=""
                        class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
                        More</a>
                </div>
            </div>
            <!-- END: Weekly Best Sellers -->
            <!-- BEGIN: General Report -->
            <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="flex items-center">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate">Target Sales</div>
                                <div class="text-slate-500 mt-1">300 Sales</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <div class="w-[90px] h-[90px]">
                                    <canvas id="report-donut-chart-1"></canvas>
                                </div>
                                <div
                                    class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">
                                    20%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="flex">
                            <div class="text-lg font-medium truncate mr-3">Social Media</div>
                            <div
                                class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">
                                320 Followers</div>
                        </div>
                        <div class="mt-1">
                            <div class="h-[58px]">
                                <canvas class="simple-line-chart-1 -ml-1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="flex items-center">
                            <div class="w-2/4 flex-none">
                                <div class="text-lg font-medium truncate">New Products</div>
                                <div class="text-slate-500 mt-1">1450 Products</div>
                            </div>
                            <div class="flex-none ml-auto relative">
                                <div class="w-[90px] h-[90px]">
                                    <canvas id="report-donut-chart-2"></canvas>
                                </div>
                                <div
                                    class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">
                                    45%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                    <div class="box p-5 zoom-in">
                        <div class="flex">
                            <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                            <div
                                class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">
                                180 Campaign</div>
                        </div>
                        <div class="mt-1">
                            <div class="h-[58px]">
                                <canvas class="simple-line-chart-1 -ml-1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                            <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                        </button>
                        <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                            <i data-lucide="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                        </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">IMAGES</th>
                                <th class="whitespace-nowrap">PRODUCT NAME</th>
                                <th class="text-center whitespace-nowrap">STOCK</th>
                                <th class="text-center whitespace-nowrap">STATUS</th>
                                <th class="text-center whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_slice($fakers, 0, 4) as $faker)
                            <tr class="intro-x">
                                <td class="w-40">
                                    <div class="flex">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src="{{ asset('build/assets/images/' . $faker['images'][0]) }}"
                                                title="Uploaded at {{ $faker['dates'][0] }}">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src="{{ asset('build/assets/images/' . $faker['images'][1]) }}"
                                                title="Uploaded at {{ $faker['dates'][1] }}">
                                        </div>
                                        <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                            <img alt="Midone - HTML Admin Template" class="tooltip rounded-full"
                                                src="{{ asset('build/assets/images/' . $faker['images'][2]) }}"
                                                title="Uploaded at {{ $faker['dates'][2] }}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name']
                                        }}</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{
                                        $faker['products'][0]['category'] }}</div>
                                </td>
                                <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                <td class="w-40">
                                    <div
                                        class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{
                                        $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                    </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="">
                                            <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                        </a>
                                        <a class="flex items-center text-danger" href="">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                    <nav class="w-full sm:w-auto sm:mr-auto">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="w-4 h-4" data-lucide="chevrons-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="w-4 h-4" data-lucide="chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="w-4 h-4" data-lucide="chevron-right"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="w-4 h-4" data-lucide="chevrons-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <select class="w-20 form-select box mt-3 sm:mt-0">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
        <div class="2xl:border-l -mb-10 pb-10">
            <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                <!-- BEGIN: Transactions -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template"
                                        src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                    <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                </div>
                                <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{
                                    $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                            </div>
                        </div>
                        @endforeach
                        <a href=""
                            class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View
                            More</a>
                    </div>
                </div>
                <!-- END: Transactions -->
                <!-- BEGIN: Recent Activities -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div
                        class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template"
                                        src="{{ asset('build/assets/images/' . $fakers[9]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Has joined the team</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template"
                                        src="{{ asset('build/assets/images/' . $fakers[8]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500">
                                    <div class="mt-1">Added 3 new photos</div>
                                    <div class="flex mt-2">
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                            title="{{ $fakers[0]['products'][0]['name'] }}">
                                            <img alt="Midone - HTML Admin Template"
                                                class="rounded-md border border-white"
                                                src="{{ asset('build/assets/images/' . $fakers[8]['images'][0]) }}">
                                        </div>
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                            title="{{ $fakers[1]['products'][0]['name'] }}">
                                            <img alt="Midone - HTML Admin Template"
                                                class="rounded-md border border-white"
                                                src="{{ asset('build/assets/images/' . $fakers[8]['images'][1]) }}">
                                        </div>
                                        <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in"
                                            title="{{ $fakers[2]['products'][0]['name'] }}">
                                            <img alt="Midone - HTML Admin Template"
                                                class="rounded-md border border-white"
                                                src="{{ asset('build/assets/images/' . $fakers[8]['images'][2]) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template"
                                        src="{{ asset('build/assets/images/' . $fakers[7]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{
                                        $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                            </div>
                        </div>
                        <div class="intro-x relative flex items-center mb-3">
                            <div
                                class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="Midone - HTML Admin Template"
                                        src="{{ asset('build/assets/images/' . $fakers[6]['photos'][0]) }}">
                                </div>
                            </div>
                            <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                <div class="flex items-center">
                                    <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                    <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                </div>
                                <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{
                                        $fakers[6]['products'][0]['name'] }}</a> description</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Recent Activities -->
                <!-- BEGIN: Important Notes -->
                <div
                    class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                        <button data-carousel="important-notes" data-target="prev"
                            class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="important-notes" data-target="next"
                            class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="mt-5 intro-x">
                        <div class="box zoom-in">
                            <div class="tiny-slider" id="important-notes">
                                <div class="p-5">
                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of
                                        the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s.</div>
                                    <div class="font-medium flex mt-5">
                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of
                                        the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s.</div>
                                    <div class="font-medium flex mt-5">
                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                    </div>
                                </div>
                                <div class="p-5">
                                    <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                    <div class="text-slate-400 mt-1">20 Hours ago</div>
                                    <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of
                                        the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s.</div>
                                    <div class="font-medium flex mt-5">
                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Important Notes -->
                <!-- BEGIN: Schedules -->
                <div
                    class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                        <a href="" class="ml-auto text-primary truncate flex items-center">
                            <i data-lucide="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                        </a>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x box">
                            <div class="p-5">
                                <div class="flex">
                                    <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                    <div class="font-medium text-base mx-auto">April</div>
                                    <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                </div>
                                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                    <div class="font-medium">Su</div>
                                    <div class="font-medium">Mo</div>
                                    <div class="font-medium">Tu</div>
                                    <div class="font-medium">We</div>
                                    <div class="font-medium">Th</div>
                                    <div class="font-medium">Fr</div>
                                    <div class="font-medium">Sa</div>
                                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                                    <div class="py-0.5 rounded relative">1</div>
                                    <div class="py-0.5 rounded relative">2</div>
                                    <div class="py-0.5 rounded relative">3</div>
                                    <div class="py-0.5 rounded relative">4</div>
                                    <div class="py-0.5 rounded relative">5</div>
                                    <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                    <div class="py-0.5 rounded relative">7</div>
                                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                    <div class="py-0.5 rounded relative">9</div>
                                    <div class="py-0.5 rounded relative">10</div>
                                    <div class="py-0.5 rounded relative">11</div>
                                    <div class="py-0.5 rounded relative">12</div>
                                    <div class="py-0.5 rounded relative">13</div>
                                    <div class="py-0.5 rounded relative">14</div>
                                    <div class="py-0.5 rounded relative">15</div>
                                    <div class="py-0.5 rounded relative">16</div>
                                    <div class="py-0.5 rounded relative">17</div>
                                    <div class="py-0.5 rounded relative">18</div>
                                    <div class="py-0.5 rounded relative">19</div>
                                    <div class="py-0.5 rounded relative">20</div>
                                    <div class="py-0.5 rounded relative">21</div>
                                    <div class="py-0.5 rounded relative">22</div>
                                    <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                    <div class="py-0.5 rounded relative">24</div>
                                    <div class="py-0.5 rounded relative">25</div>
                                    <div class="py-0.5 rounded relative">26</div>
                                    <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                    <div class="py-0.5 rounded relative">28</div>
                                    <div class="py-0.5 rounded relative">29</div>
                                    <div class="py-0.5 rounded relative">30</div>
                                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                                </div>
                            </div>
                            <div class="border-t border-slate-200/60 p-5">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">UI/UX Workshop</span>
                                    <span class="font-medium xl:ml-auto">23th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">VueJs Frontend Development</span>
                                    <span class="font-medium xl:ml-auto">10th</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">Laravel Rest API</span>
                                    <span class="font-medium xl:ml-auto">31th</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Schedules -->
            </div>
        </div>
    </div>
</div>
@endsection