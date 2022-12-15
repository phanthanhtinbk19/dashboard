@extends('../layout/' . $layout)

@section('subhead')
<title>Post List - Midone - Tailwind HTML Admin Template</title>
@endsection
<style>
    .desc,
    .title {
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden !important;
        width: 100px;
        text-overflow: ellipsis;
    }
</style>
@section('subcontent')
<h2 class="intro-y text-lg font-medium mt-10">Post List</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="{{'add-post'}}">Add New Post</a>
        </button>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-lucide="plus"></i>
                </span>
            </button>
            <div class="dropdown-menu w-40">
                <ul class="dropdown-content">
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                        </a>
                    </li>

                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item">
                            <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto 2xl:overflow-visible">
        <table id="myTable" class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">
                        <input class="form-check-input" type="checkbox">
                    </th>
                    <th class="whitespace-nowrap">Id</th>
                    <th class="whitespace-nowrap">Title</th>
                    <th class="whitespace-nowrap">Image</th>
                    <th class="whitespace-nowrap">Desc</th>
                    <th class="whitespace-nowrap">Like</th>
                    <th class="whitespace-nowrap">Price</th>
                    <th class="whitespace-nowrap">Area</th>
                    <th class="whitespace-nowrap">Address</th>
                    <th class="whitespace-nowrap">Category</th>
                    <th class="whitespace-nowrap">Kind</th>
                    <th class="whitespace-nowrap">Status</th>
                    <th class="whitespace-nowrap">Created At</th>
                    <th class="whitespace-nowrap">Updated At</th>
                    <th class="whitespace-nowrap">Creatd By</th>
                    <th class="whitespace-nowrap">Updated By</th>
                    <th class="whitespace-nowrap">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                <tr class="intro-x">
                    <td class="w-10">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="w-40 !py-4">
                        <span class="font-medium whitespace-nowrap">{{$post->id}}</span>
                    </td>
                    <td class="w-40">
                        <span class="font-medium whitespace-nowrap title"
                            title="{{$post->title}}">{{$post->title}}</span>
                    </td>
                    <td class="w-40">
                        <div class="flex">
                            @foreach (explode(",", $post->images) as $key => $image)
                            <div class="w-10 h-10 image-fit zoom-in ">
                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{url("uploads/images/$image")}}">
                            </div>
                            @endforeach
                        </div>
                    </td>

                    <td class="w-40">
                        <div class="font-medium whitespace-nowrap desc" title="{{$post->desc}}">
                            <?php 
                                echo htmlspecialchars_decode($post->desc);
                                ?>

                        </div>
                    </td>
                    <td class="w-40">
                        <span href="" data-lucide="heart" class="w-4 h-4 mr-2 font-medium whitespace-nowrap">

                        </span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">{{$post->price}}</span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">{{$post->area}}</span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">{{$post->address}}</span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">
                            @foreach ($cates as $key => $cate)
                            @if ($cate->id == $post->category_id)
                            {{$cate->name}}
                            @endif
                            @endforeach
                        </span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">
                            @foreach ($kinds as $key => $kind)
                            @if ($kind->id == $post->kind_id)
                            {{ $kind->name}}

                            @endif
                            @endforeach
                        </span>
                    </td>
                    <td class="w-40">
                        <div class="flex items-center justify-center {{  'text-danger' }}">
                            <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ 'Inactive' }}
                        </div>
                    </td>

                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">
                            {{$post->created_at}}
                        </span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">
                            {{$post->updated_at}}
                        </span>
                    </td>
                    <td class="w-40">
                        {{-- <span href="" class="font-medium whitespace-nowrap">
                            {{$post->created_by}}
                        </span> --}}
                    </td>
                    <td class="w-40">
                        {{-- <span href="" class="font-medium whitespace-nowrap">
                            {{$post->updated_by}}
                        </span> --}}
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <a class="flex items-center text-danger btn-delete" href="javascript:;"
                                post_id="{{$post->id}}" data-tw-toggle="modal"
                                data-tw-target="#delete-confirmation-modal-post">
                                <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                            </a>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->

</div>
<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal-post" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot
                        be undone.</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-tw-dismiss="modal"
                        class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-danger w-24">
                        <a href="#">Delete</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- END: Delete Confirmation Modal -->
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    
} );
var oTable = $('#myTable').dataTable( {
    "aoColumnDefs": [
        { "bSortable": false, "aTargets": [ 0,8] }, 
        { "bSearchable": false, "aTargets": [0,8] }
    ]
}); 
</script>
<script>
    $(document).ready(function () {
        $('.btn-delete').click(function () {
            var post_id = $(this).attr('post_id');
            var url = "{{('/admin/delete-post/')}}";
            $('#delete-confirmation-modal-post').find('a').attr('href', url + post_id);
        });
    });
</script>
@endsection