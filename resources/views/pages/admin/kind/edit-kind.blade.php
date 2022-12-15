@extends('../layout/' . $layout)

@section('subhead')
<title>CRUD Form - Midone - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Edit Kind</h2>
</div>

<form action="{{" /admin/update-kind/$kind->id"}}" method="post">
    @csrf
    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">

        <div class="intro-y col-span-11 2xl:col-span-9">
            <!-- BEGIN: Kind Information -->
            <div class="intro-y box p-5 mt-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div
                        class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                        <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Kind Information
                    </div>
                    <div class="mt-5">
                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Kind Name</div>
                                        <div
                                            class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Required</div>
                                    </div>

                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <input name="name" id="product-name" type="text" class="form-control"
                                    placeholder="Kind name" value="{{$kind->name}}">
                                <div class="form-help text-right">Maximum character 0/70</div>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-2 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Category</div>
                                        <div
                                            class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Required</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <select name="category_id" id="Kind" class="form-select">
                                    @foreach ($cates as $key => $cate)
                                    @if ($cate->id == $kind->category_id)
                                    <option selected value="{{$cate->id}}">{{$cate->name}}</option>
                                    @else
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-inline items-start flex-col xl:flex-row mt-2 pt-5 first:mt-0 first:pt-0">
                            <div class="form-label xl:w-64 xl:!mr-10">
                                <div class="text-left">
                                    <div class="flex items-center">
                                        <div class="font-medium">Created By</div>
                                        <div
                                            class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">
                                            Required</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                <select name="created_by" id="Kind" class="form-select">
                                    <option value="Tài khoản cấp cao">Tài khoản cấp cao</option>
                                    <option value="Tài khoản quản trị">Tài khoản quản trị</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END: Product Information -->

            <div class="flex justify-center flex-col md:flex-row gap-2 mt-5">
                <button type="button"
                    class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Cancel</button>
                <button type="button"
                    class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52">Save & Add
                    New Kind</button>
                <button type="submit" class="btn py-3 btn-primary w-full md:w-52">Save</button>
            </div>
        </div>

    </div>
</form>

@endsection

@section('script')

@vite('resources/js/ckeditor-classic.js')
@endsection