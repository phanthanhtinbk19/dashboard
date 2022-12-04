@extends('../layout/' . $layout)
<style>
    .list-images {
        width: 50%;
        margin-top: 20px;
        display: inline-block;
    }

    .hidden {
        display: none;
    }

    .box-image {
        width: 100px;
        height: 108px;
        position: relative;
        float: left;
        margin-left: 5px;
    }

    .box-image img {
        width: 100px;
        height: 100px;
    }

    .wrap-btn-delete {
        position: absolute;
        top: -8px;
        right: 0;
        height: 2px;
        font-size: 20px;
        font-weight: bold;
        color: red;
    }

    .btn-delete-image {
        cursor: pointer;
    }

    .table {
        width: 15%;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                        <div class="flex flex-wrap px-4">
                                            <div class="input-group hdtuto control-group lst increment">
                                                <div class="list-input-hidden-upload">
                                                    <input type="file" name="filenames[]" id="file_upload"
                                                        class="myfrm form-control hidden">
                                                </div>
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success btn-add-image" type="button"><i
                                                            class="fldemo glyphicon glyphicon-plus"></i>+Add
                                                        image</button>
                                                </div>
                                            </div>
                                            <div class="list-images">
                                                {{-- @if (isset($list_images) && !empty($list_images))
                                                @foreach (json_decode($list_images) as $key => $img)
                                                <div class="box-tinimage">
                                                    <input type="hidden" name="images_uploaded[]" value="{{ $img }}"
                                                        id="img-{{ $key }}">
                                                    <img src="{{ asset('files/'.$img) }}" class="picture-box">
                                                    <div class="wrap-btn-delete"><span data-id="img-{{ $key }}"
                                                            class="btn-delete-image">x</span>
                                                    </div>
                                                </div> --}}
                                                {{--
                                                @endforeach --}}
                                                {{-- <input type="hidden" name="images_uploaded_origin"
                                                    value="{{ $list_images }}">
                                                <input type="hidden" name="id" value="{{ $id }}">
                                                @endif --}}
                                            </div>
                                            {{-- @foreach (array_slice($fakers, 0, 4) as $faker)
                                            <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                <img class="rounded-md" alt="Midone - HTML Admin Template" src="">

                                                <img style="width:100px;height:100px" src="{{url("uploads/product/$product->product_image")}}"
                                                alt="">
                                                <div title="Remove this image?"
                                                    class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                    <i data-lucide="x" class="w-4 h-4"></i>
                                                </div>
                                            </div>
                                            @endforeach --}}


                                        </div>
                                        {{-- <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span
                                                class="text-primary mr-1">Upload a file</span> or drag and drop
                                            <input type="file" multiple="multiple"
                                                class="w-full h-full top-0 left-0 absolute opacity-0" name="photo">

                                        </div> --}}
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
        <div class="col-span-12 lg:col-span-4">
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
                            <div class="truncate">{{ $fakers[0]['users'][0]['name'] }}</div>
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
                                        <div class="ml-8 pl-1">{{ $faker['users'][0]['name'] }}</div>
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
                        <option value="1" selected>Horror</option>
                        <option value="2">Sci-fi</option>
                        <option value="3" selected>Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-3" class="form-label">Kinds</label>
                    <select name="kind_id" data-placeholder="Select kind" class="tom-select w-full" id="post-form-3">
                        <option value="1" selected>Horror</option>
                        <option value="2">Sci-fi</option>
                        <option value="3" selected>Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </select>
                </div>
                {{-- <div class="mt-3">
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
                </div> --}}
            </div>
        </div>

        <!-- END: Post Info -->
    </div>
</form>

@endsection


@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
    //     let f_up =  document.querySelector('#file_upload');
//     document.querySelector(".btn-add-image").addEventListener("click", ()=>{
//      f_up.click();
//   })
//     f_up.addEventListener("change", (event)=>{
//     let today = new Date();
//     let time = today.getTime();
//     let image = event.target.files[0];
//     let file_name = event.target.files[0].name;
//     let box_image = document.createElement('div');
//     box_image.classList.add('box-image')
//     box_image.innerHTML =`<img src="${URL.createObjectURL(image)}" class="picture-box">`;
//     box_image.innerHTML+=`<div class="wrap-btn-delete"><span data-id='${time}' class="btn-delete-image">x</span></div>`;
//     document.querySelector(".list-images").appendChild(box_image);
//     console.log(event.target);
//     document.querySelector('#file_upload').removeAttribute('id');
//     document.querySelector('#file_upload').setAttribute('id', time);

//     let input_type_file = '<input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">';
//     $('.list-input-hidden-upload').append(input_type_file);
    // document.querySelector('.list-input-hidden-upload').innerHTML+=`<input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">`;
    // document.querySelector('#file_upload').setAttribute('id', time);
    // })
    $(function() {
$(".btn-add-image").on('click',function(){
document.querySelector('#file_upload').click();

});

$('.list-input-hidden-upload').on('change', '#file_upload', function(event){

    let today = new Date();
    let time = today.getTime();
   
    let image = event.target.files[0];

    let file_name = event.target.files[0].name;
    let box_image = $('<div class="box-image"></div>');
 
    box_image.append('<img src="' + URL.createObjectURL(image) + '" class="picture-box">');
    box_image.append('<div class="wrap-btn-delete"><span data-id='+time+' class="btn-delete-image">x</span></div>');
    $(".list-images").append(box_image);

    $(this).removeAttr('id');
    $(this).attr( 'id', time);
    let input_type_file = '<input type="file" name="filenames[]" id="file_upload" class="myfrm form-control hidden">';
    $('.list-input-hidden-upload').append(input_type_file);
});

$(".list-images").on('click', '.btn-delete-image', function(){
    let id = $(this).data('id');
    $('#'+id).remove();
    $(this).parents('.box-image').remove();
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

// Your code to save "data", usually through Ajax.

@vite('resources/js/ckeditor-classic.js')
@endsection