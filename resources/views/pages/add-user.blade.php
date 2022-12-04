@extends('../layout/' . $layout)

@section('subhead')
<title>Update Profile - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Add User</h2>
</div>
<form role="form" action="{{('/save-user')}}" method="post" enctype="multipart/form-data">
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
                                        <label for="update-profile-form-1" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" placeholder="Input text">
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Password</label>
                                        <input name="password" id="update-profile-form-4" type="password"
                                            class="form-control" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Confirm Password</label>
                                        <input id="update-profile-form-4" type="password" class="form-control"
                                            placeholder="Enter confirm password">
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Rule</label>
                                        <select name="rule" id="category" class="form-select">
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-6">
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Phone Number</label>
                                        <input name="phone" id="update-profile-form-4" type="text" class="form-control"
                                            placeholder="Input text">
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">Address</label>
                                        <textarea name="address" id="update-profile-form-5" class="form-control"
                                            placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            {{-- <div
                                class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img name="photo" class="rounded-md" alt="Midone - HTML Admin Template"
                                        src="{{ asset('build/assets/images/' . $fakers[0]['photos'][0]) }}">
                                    <div title="Remove this profile photo?"
                                        class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div> --}}
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" name="photo"
                                placeholder="Enter name">
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->

        </div>
    </div>
</form>
@endsection