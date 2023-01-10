@extends('../layout/' . $layout)

@section('subhead')
<title>Add New project - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<form action="{{'/admin/save-new'}}" name="demoform3" id="demoform3" method="POST" class="dropzone"
    enctype="multipart/form-data">
    @csrf
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Add New Project</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0">
                <i class="w-4 h-4 mr-2" data-lucide="eye"></i> Preview
            </button>
            <button class=" btn-submit dropdown-toggle btn btn-primary shadow-md flex items-center"
                aria-expanded="false" data-tw-toggle="dropdown" type="submit">
                Save
            </button>
        </div>
    </div>

    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">

        <!-- BEGIN: project Content -->
        <div class="intro-y col-span-12 lg:col-span-12">
            <input name="title" type="text" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Title">
            <div class="project intro-y overflow-hidden box mt-5">
                <ul class="project__tabs nav nav-tabs flex-col sm:flex-row bg-slate-200 dark:bg-darkmode-800"
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
                <div class="project__content tab-content">
                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div
                                class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Text Content
                            </div>
                            <div class="mt-5">

                                <textarea name="desc" id="editor2" width="100%" rows="10"></textarea>
                            </div>
                            {{-- <div class="show"></div> --}}
                        </div>
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                            <div
                                class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Images
                            </div>
                            <div class="mt-5">

                                <div class="project__img">
                                    <input type="hidden" class="newid" name="newid" id="newid" value="">
                                    <div class="form-group">
                                        <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                <input accept="image/*,.heic" multiple="" type="file" autocomplete="off"
                                                    tabindex="-1" style="display: none;">
                                                <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span
                                                    class="text-primary mr-1">Upload a file</span> or drag and drop
                                            </div>

                                        </div>
                                        <div class="dropzone-previews">


                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: project Content -->

    </div>
</form>

@endsection


@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<!-- Adding a script for dropzone -->

<script>
    Dropzone.autoDiscover = false;
    // Dropzone.options.demoform3 = false;	
    let token = $('meta[name="csrf-token"]').attr('content');
    $(function() {
        var myDropzone = new Dropzone("div#dropzoneDragArea", {
            paramName: "file",
            url: "{{ url('/storeMultipleImage') }}",
            previewsContainer: 'div.dropzone-previews',
            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 5,
            params: {
                _token: token
            },
            // The setting up of the dropzone
            init: function() {
                var myDropzone = this;
                //form submission code goes here
                $("form[name='demoform3']").submit(function(event) {
                    //Make sure that the form isn't actully being sent.
                    event.preventDefault();

                    URL = $("#demoform3").attr('action');
                    formData = $('#demoform3').serialize();
                    $.ajax({
                        type: 'POST',
                        url: URL,
                        data: formData,
                        success: function(result) {
                            if (result.status == "success") {

                                // fetch the useid 
                                var newid = result.new_id;
                                $("#newid").val(
                                newid); // inseting newid into hidden input field
                                //process the queue
                                myDropzone.processQueue();
                            } else {
                                console.log("error");
                            }
                        }
                    });
                    $('#demoform3').trigger("reset");
                });

                //Gets triggered when we submit the image.
                this.on('sending', function(file, xhr, formData) {
                    
                    //fetch the user id from hidden input field and send that newid with our image
                    let newid = document.getElementById('newid').value;
                    formData.append('newid', newid);
                });

                this.on("success", function(file, response) {
                    //reset the form
                    $('#demoform3')[0].reset();
                    //reset dropzone
                    $('.dropzone-previews').empty();
                });

                this.on("queuecomplete", function() {

                });
                this.on("sendingmultiple", function() {});

                this.on("successmultiple", function(files, response) {});

                this.on("errormultiple", function(files, response) {

                });
            }
        });
    });
</script>




<script>
    var editor = CKEDITOR.replace( 'editor2' );
// editor.on( 'change', function( evt ) {
// var data = evt.editor.getData();
// document.querySelector(".show").innerHTML = data;
// });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
   
var districts = document.getElementById("district");

var wards = document.getElementById("ward");
var Parameter = {
url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json", 
method: "GET", 
responseType: "application/json", 
};
var promise = axios(Parameter);
promise.then(function (result) {
renderCity(result.data);
});

function renderCity(data) {
for (const x of data) {
citis.options[citis.options.length] = new Option(x.Name, x.Id);
}
citis.onchange = function () {
district.length = 1;
ward.length = 1;
if(this.value != ""){
  const result = data.filter(n => n.Id === this.value);

  for (const k of result[0].Districts) {
    district.options[district.options.length] = new Option(k.Name, k.Id);
  }
}
};
district.onchange = function () {
ward.length = 1;
const dataCity = data.filter((n) => n.Id === citis.value);
if (this.value != "") {
  const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

  for (const w of dataWards) {
    wards.options[wards.options.length] = new Option(w.Name, w.Id);
  }
}
};
}
</script>

<script>
    $(".btn-submit").on("click", function(e) {
        if($("#city").val()=="city"){
            alert("Vui lòng chọn tỉnh thành");
            return false;
        }
    $("#address").val($("#city option:selected").text() + "," + $("#district option:selected").text() + "," + $("#ward option:selected").text());
  })
 
//   $( "#myselect option:selected" ).text();

</script>
@vite('resources/js/ckeditor-classic.js')
@endsection