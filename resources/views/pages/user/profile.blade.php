<!DOCTYPE html>
<html>
<head>
    <title>Dropzone Tutorial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <style>
        .dropzoneDragArea {
            background-color: #fbfdff;
            border: 1px dashed #c0ccda;
            border-radius: 6px;
            padding: 60px;
            text-align: center;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .dropzone {
            box-shadow: 0px 2px 20px 0px #f2f2f2;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <section class="bg-light mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="form-wrapper py-5">
                        <!-- form starts -->
                        <form action="{{ route('form.data') }}" name="demoform" id="demoform" method="POST"
                            class="dropzone" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">

                                <input type="hidden" class="adminid" name="adminid" id="adminid" value="">

                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name"
                                    class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter your email"
                                    class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" name="password" placeholder="Enter your password"
                                    class="form-control" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <div id="dropzoneDragArea" class="dz-default dz-message dropzoneDragArea">
                                    <span>Upload file</span>
                                </div>
                                <div class="dropzone-previews"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-md btn-primary">create</button>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>

                    <div class="show">
                        @foreach ($admin as $key => $value)
                        <h3>{{$value->name}}</h3>
                        <h3>{{$value->email}}</h3>
                        <h3>{{$value->password}}</h3>
                        @foreach (explode(",", $value->avatar) as $key => $av)
                        <img src="{{url("uploads/images/$av")}}" alt="">
                        @endforeach

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Adding a script for dropzone -->
    <script>
        Dropzone.autoDiscover = false;
// Dropzone.options.demoform = false;	
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
	    $("form[name='demoform']").submit(function(event) {
	    	//Make sure that the form isn't actully being sent.
	    	event.preventDefault();

	    	URL = $("#demoform").attr('action');
	    	formData = $('#demoform').serialize();
	    	$.ajax({
	    		type: 'POST',
	    		url: URL,
	    		data: formData,
	    		success: function(result){
					console.log(result);
	    			if(result.status == "success"){
	    				// fetch the useid 
	    				var adminid = result.admin_id;
						$("#adminid").val(adminid); // inseting adminid into hidden input field
	    				//process the queue
	    				myDropzone.processQueue();
	    			}else{
	    				console.log("error");
	    			}
	    		}
	    	});
	    });

	    //Gets triggered when we submit the image.
	    this.on('sending', function(file, xhr, formData){
	    //fetch the user id from hidden input field and send that adminid with our image
	      let adminid = document.getElementById('adminid').value;
		   formData.append('adminid', adminid);
		});
		
	    this.on("success", function (file, response) {
            //reset the form
            $('#demoform')[0].reset();
            //reset dropzone
            $('.dropzone-previews').empty();
        });

        this.on("queuecomplete", function () {
		
        });
		
        // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
	    // of the sending event because uploadMultiple is set to true.
	    this.on("sendingmultiple", function() {
	      // Gets triggered when the form is actually being sent.
	      // Hide the success button or the complete form.
	    });
		
	    this.on("successmultiple", function(files, response) {
	      // Gets triggered when the files have successfully been sent.
	      // Redirect user or notify of success.
	    });
		
	    this.on("errormultiple", function(files, response) {
	      // Gets triggered when there was an error sending the files.
	      // Maybe show form again, and notify user of error
	    });
	}
	});
});
    </script>

</body>
</html>