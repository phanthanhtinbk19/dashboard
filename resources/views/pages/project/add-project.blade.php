@extends('../layout/' . $layout)


@section('subhead')
<title>Add New Post - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<form role="form" action="{{('/save-project')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add New Project</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0">
                <i class="w-4 h-4 mr-2" data-lucide="eye"></i> Preview
            </button>
            <div class="dropdown">
                <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false"
                    data-tw-toggle="dropdown">
                    Save
                </button>

            </div>
        </div>
    </div>

    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">

        <!-- BEGIN: Project Content -->
        <div class="intro-y col-span-12 lg:col-span-12">
            <input name="title" type="text" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Title">
            <textarea name="address" id="" cols="10" rows="3" class="intro-y  mt-5 form-control py-3 px-4 box pr-10"
                placeholder="Address"></textarea>

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

                </ul>
                <div class="post__content tab-content">
                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div
                                class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Text Content
                            </div>
                            <div class="mt-5">

                                <textarea name="desc" id="editor1" width="100%" rows="20"></textarea>
                            </div>
                            {{-- <div class="show"></div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
    </div>
</form>

@endsection


@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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