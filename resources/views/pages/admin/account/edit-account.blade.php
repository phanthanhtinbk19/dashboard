@extends('../layout/' . $layout)

@section('subhead')
<title>ADD Account</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Edit Account</h2>
</div>
<form role="form" action="{{(" /admin/update-account/$account->id")}}" method="post" enctype="multipart/form-data">
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
                                <div class="col-span-6 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Display Name</label>
                                        <input value="{{$account->name}}" name="name" id="update-profile-form-1"
                                            type="text" class="form-control" placeholder="Input text">
                                    </div>
                                </div>
                                <div class="col-span-6 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Email</label>
                                        <input name="email" id="update-profile-form-1" value="{{$account->email}}"
                                            type="email" class="form-control" placeholder="Input text">
                                    </div>
                                </div>
                                <div class="col-span-6 2xl:col-span-6">
                                    <div class="mt-3">
                                        <label for="update-profile-form-1" class="form-label">Password</label>
                                        <input name="password" id="update-profile-form-1" type="password"
                                            value="{{$account->password}}" class="form-control"
                                            placeholder="Input text">
                                    </div>
                                </div>
                                <div class="col-span-6 2xl:col-span-6">
                                    <div class="mt-3">
                                        <label for="update-profile-form-1" class="form-label">Phone Number</label>
                                        <input name="phone" value="{{$account->phone}}" id="update-profile-form-1"
                                            type="text" class="form-control" placeholder="Input text">
                                    </div>
                                </div>

                                <div class="col-span-6 2xl:col-span-6">
                                    <div class="mt-3">
                                        <label for="post-form-3" class="form-label">Role</label>
                                        <select name="role" id="Kind" class="form-select">
                                            @if ($account->role=="admin")
                                            <option selected value="admin">Admin</option>
                                            <option value="user">User</option>
                                            @else
                                            <option value="admin">Admin</option>
                                            <option selected value="user">User</option>
                                            @endif

                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">Address</label>
                                        <textarea name="address" id="update-profile-form-5" class="form-control"
                                            placeholder="Adress">{{$account->address}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 img-holder relative image-fit cursor-pointer zoom-in mx-auto">
                                    @if ($account->avatar)
                                    <img name="avatar" alt="Midone - HTML Admin Template" class="tooltip rounded-md"
                                        src="{{url("uploads/accounts/$account->avatar")}}" title="Uploaded at
                                    {{$account->created_at}}">
                                    >
                                    @else
                                    <img name="avatar" class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
                                    @endif

                                    <div title="Remove this profile photo?"
                                        class="tooltip w-5 h-5 flex items-center justify-center icon-delete absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full ">Change Photo</button>
                                    <input type="file" name="avatar"
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
        $('input[type="file"][name="avatar"]').val('');
        //Image preview
       
        $('input[type="file"][name="avatar"]').on('change', function(){
          
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
@section('script')

@endsection