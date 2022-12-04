@extends('../layout/' . $layout)


@section('subhead')
<title>Add New Post - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<form role="form" action="{{('/save-post')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add New Post</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0">
                <i class="w-4 h-4 mr-2" data-lucide="eye"></i> Preview
            </button>
            <div class="dropdown">
                <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false"
                    data-tw-toggle="dropdown">
                    Save <i class="w-4 h-4 ml-2" data-lucide="chevron-down"></i>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">

                        <a href="" class="dropdown-item">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> As New Post
                        </a>

                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> As Draft
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Word
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">

        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input name="title" type="text" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Title">
            <div class="post intro-y overflow-hidden box mt-5">
                <ul class="post__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800"
                    role="tablist">
                    <li class="nav-item">
                        <button title="Fill in the article content" data-tw-toggle="tab" data-tw-target="#content"
                            class="nav-link tooltip w-full sm:w-40 py-4 active" id="content-tab" role="tab"
                            aria-controls="content" aria-selected="true">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Content
                        </button>
                    </li>
                    <li class="nav-item">
                        <button title="Adjust the meta title" data-tw-toggle="tab" data-tw-target="#meta-title"
                            class="nav-link tooltip w-full sm:w-40 py-4" id="meta-title-tab" role="tab"
                            aria-selected="false">
                            <i data-lucide="code" class="w-4 h-4 mr-2"></i> Meta Title
                        </button>
                    </li>
                    <li class="nav-item">
                        <button title="Use search keywords" data-tw-toggle="tab" data-tw-target="#keywords"
                            class="nav-link tooltip w-full sm:w-40 py-4" id="keywords-tab" role="tab"
                            aria-selected="false">
                            <i data-lucide="align-left" class="w-4 h-4 mr-2"></i> Keywords
                        </button>
                    </li>
                </ul>
                <div class="post__content tab-content">
                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div
                                class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Text Content
                            </div>
                            <div class="mt-5">
                                <textarea name="desc" id="editor1" width="100%" rows="10"></textarea>
                            </div>
                            {{-- <div class="show"></div> --}}
                        </div>
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                            <div
                                class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Images
                            </div>
                            <div class="mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Upload Image</label>
                                    <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                        <div class="flex flex-wrap px-4 imgPreview">
                                        </div>
                                        <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span
                                                class="text-primary mr-1">Upload a file</span> or drag and drop
                                            <input id="images" type="file" multiple
                                                class="w-full h-full top-0 left-0 absolute opacity-0"
                                                name="imageFile[]">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class=" col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label class="form-label">Written By</label>
                    <div class="dropdown">
                        <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-darkmode-800 dark:border-darkmode-800 flex items-center justify-start"
                            role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <div class="w-6 h-6 image-fit mr-3">
                                <img class="rounded" alt="Midone - HTML Admin Template"
                                    src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="truncate">{{ $fakers[0]['users'][0]['name'] }}
                            </div>
                            <i class="w-4 h-4 ml-auto" data-lucide="chevron-down"></i>
                        </div>
                        <div name="created_by" class="dropdown-menu w-full">
                            <ul class="dropdown-content">
                                @foreach (array_slice($fakers, 0, 5) as $faker)
                                <li>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Midone - HTML Admin Template"
                                                src="{{ asset('build/assets/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-8 pl-1">{{
                                            $faker['users'][0]['name'] }}</div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="post-form-3" class="form-label">Categories</label>
                    <select name="category_id" data-placeholder="Select category" class="tom-select w-full"
                        id="post-form-3">
                        @foreach ($all_cate as $key => $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-3" class="form-label">Kinds</label>
                    <select name="kind_id" data-placeholder="Select kind" class="tom-select w-full" id="post-form-3">
                        @foreach ($all_kind as $key => $kind)
                        <option value="{{$kind->id}}">{{$kind->name}}</option>
                        @endforeach
                    </select>
                </div>
                <img src="" alt="">
                <div class="mt-3">
                    <label for="post-form-2" class="form-label">Price</label>
                    <input name="price" type="text" class="form-control" id="post-form-4" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="post-form-2" class="form-label">Area</label>
                    <input name="area" type="text" class="form-control" id="post-form-4" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="post-form-2" class="form-label">Address</label>
                    <textarea class="form-control" width="100%" name="address" id="" cols="30" rows="4"></textarea>
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="post-form-5" class="form-check-label ml-0 mb-2">Published</label>
                    <input name="status" id="post-form-5" class="form-check-input" type="checkbox">
                </div>
            </div>
        </div>

        <!-- END: Post Info -->
    </div>
</form>

@endsection


@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                   let tin =`<div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                    <img src="${event.target.result}" alt="">
                    <div title="Remove this image?"
                    class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"><i data-lucide="x" class="w-10 h-4 flex items-center justify-center absolute">x</i>  
                    </div>                                                                               
                    </div>`;
                   $(imgPreviewPlaceholder).append(tin)
                  
                    }
                    reader.readAsDataURL(input.files[i]);
                }
               
            }
        };
        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
</script>

<script>
    var editor = CKEDITOR.replace( 'editor1' );
// editor.on( 'change', function( evt ) {
// var data = evt.editor.getData();
// document.querySelector(".show").innerHTML = data;
// });

</script>

{{-- // Your code to save "data", usually through Ajax. --}}

@vite('resources/js/ckeditor-classic.js')
@endsection