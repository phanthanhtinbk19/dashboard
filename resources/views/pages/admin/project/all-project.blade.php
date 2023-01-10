@extends('../layout/' . $layout)

@section('subhead')
<title>project List - Midone - Tailwind HTML Admin Template</title>
@endsection
<style>
    .desc,
    .title,
    .address {
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden !important;
        width: 100px;
        text-overflow: ellipsis;
        text-transform: lowercase;


    }
</style>
@section('subcontent')
<h2 class="intro-y text-lg font-medium mt-10">Project List</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2">
            <a href="{{'/admin/add-project'}}">Add New Project</a>
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
                    <th class="whitespace-nowrap">image</th>
                    <th class="whitespace-nowrap">Desc</th>
                    <th class="whitespace-nowrap">address</th>
                    <th class="whitespace-nowrap">Created At</th>
                    <th class="whitespace-nowrap">Created By</th>
                    <th class="whitespace-nowrap">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $key => $project)
                <tr class="intro-x">
                    <td class="w-10">
                        <input class="form-check-input" type="checkbox">
                    </td>
                    <td class="w-40 !py-4">
                        <span class="font-medium whitespace-nowrap">{{$project->id}}</span>
                    </td>
                    <td class="w-40">
                        <span class="font-medium whitespace-nowrap title"
                            title="{{$project->title}}">{{$project->title}}</span>
                    </td>
                    <td class="w-40">
                        <div class="flex">
                            @foreach (explode(",", $project->images) as $key => $image)
                            <div class="w-10 h-10 image-fit zoom-in ">
                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="{{url("uploads/images/$image")}}">
                            </div>
                            @endforeach
                        </div>
                    </td>

                    <td class="w-40">
                        <div class="font-medium whitespace-nowrap desc" title="{{$project->desc}}">
                            <?php 
                                echo htmlspecialchars_decode($project->desc);
                                ?>

                        </div>
                    </td>


                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap address">{{$project->address}}</span>
                    </td>



                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">
                            {{$project->created_at}}
                        </span>
                    </td>
                    <td class="w-40">
                        <span href="" class="font-medium whitespace-nowrap">
                            {{$project->updated_at}}
                        </span>
                    </td>

                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="{{(" /admin/edit-project/$project->id")}}">
                                <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                            </a>
                            <a class="flex items-center text-danger btn-delete" project_id="{{$project->id}}" href="#"
                                data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
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
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
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
                    <button type="button" class="btn btn-danger w-24"> <a href="#"> Delete</a></button>
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
        { "bSortable": false, "aTargets": [ 0,3,8] }, 
        { "bSearchable": false, "aTargets": [0,3,8] }
    ]
}); 
</script>
<script>
    $(document).ready(function () {
        $('.btn-delete').click(function () {
            var project_id = $(this).attr('project_id');
            var url = "{{('/admin/delete-project/')}}";
            $('#delete-confirmation-modal').find('a').attr('href', url + project_id);
        });
    });
</script>
@endsection