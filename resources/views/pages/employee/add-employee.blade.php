@extends('../layout/' . $layout)

@section('subhead')
<title>ADD Employee</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Add Employee</h2>
</div>
<form role="form" action="{{('/save-employee')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-12 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Display Information</h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Display Name</label>
                                        <input name="name" id="update-profile-form-1" type="text" class="form-control"
                                            placeholder="Input text">
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3">
                                        <label for="post-form-3" class="form-label">Positon</label>
                                        <select name="position" id="Kind" class="form-select">
                                            @foreach (array_slice($fakers, 0, 9) as $faker)
                                            <option value="{{ $faker['categories'][0]['name'] }}">{{
                                                $faker['categories'][0]['name']
                                                }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 img-holder relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img name="photo" class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">

                                    <div title="Remove this profile photo?"
                                        class="tooltip w-5 h-5 flex items-center justify-center icon-delete absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full ">Change Photo</button>
                                    <input type="file" name="photo"
                                        class="w-full  h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>


                            {{-- <div class="form-group">
                                <label for="">Product image</label>
                                <input type="file" name="product_image" class="form-control">
                                <span class="text-danger error-text product_image_error"></span>


                                <div class="img-holder"></div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->

        </div>
    </div>
</form>
{{-- <script src="{{asset('jquery.min.js')}}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(function() {
      $(".icon-delete").on("click", function() {
        document.querySelector(".img-holder img").src =
                          `https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png`;
      });
        //Reset input file
        $('input[type="file"][name="photo"]').val('');
        //Image preview
       
        $('input[type="file"][name="photo"]').on('change', function(){
          
            var img_path = $(this)[0].value;
          
            var img_holder = $('.img-holder');
          
            var extension = img_path.substring(img_path.lastIndexOf('.')+1).toLowerCase();
          
            if(extension == 'jpeg' || extension == 'jpg' || extension == 'png'){
             
                 if(typeof(FileReader) != 'undefined'){
                   
                      var reader = new FileReader();
                  
                      reader.onload = function(e){
                          document.querySelector(".img-holder img").src =
                          `${e.target.result}`
                      }
                      img_holder.show();
                     reader.readAsDataURL($(this)[0].files[0])
                 }else{
                     $(img_holder).html('This browser does not support FileReader');
                 }
            }else{
                $(img_holder).empty();
            }
        });

    });
</script>
{{-- <script>
    $(document).ready(function(){
    //   $(".icon-delete").click(function(){
    //     
    //   })
    $(".icon-delete").click(function(){
  alert("The paragraph was clicked.");
});
      
        

    })
</script> --}}
@endsection