<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KindController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\NewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('people', [PeopleController::class, 'index'])->name('people.index');
Route::post('people/store', [PeopleController::class, 'store'])->name('people.store');
Route::get('people/edit/{id}/', [PeopleController::class, 'edit']);
Route::post('people/update', [PeopleController::class, 'update'])->name('people.update');
Route::get('people/destroy/{id}/', [PeopleController::class, 'destroy']);
// Route::get('register', [PageController::class, 'register']);

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)
    ->middleware('loggedin')
    ->group(function () {
        Route::get('login', 'loginView')->name('login.index');
        Route::post('login', 'login')->name('login.check');
    });

Route::controller(AuthController::class)->group(function () {
    Route::get('admin/login', 'adminLogin')->name('admin/login');
    Route::get('admin/logout', 'adminLogout')->name('admin/logout');
    Route::post('admin/save-login', 'adminSaveLogin')->name('admin/save-login');
    Route::get('login', 'login');
    Route::get('register', 'register');
    Route::post('save-login', 'saveLogin');
    Route::post('save-register', 'saveRegister');
});
Route::controller(UserController::class)->group(function () {
    Route::get('admin/add-account', 'adminAddAccount')->name('admin/add-account');
    Route::get('admin/all-account', 'adminAllAccount')->name('admin/all-account');
    Route::post('admin/update-account/{account_id}', 'updateAccount');
    Route::post('admin/save-account', 'adminSaveAccount')->name('admin/save-account');
    Route::get('admin/edit-account/{account_id}', 'editAccount');
    Route::get('admin/delete-account/{account_id}', 'deleteAccount');
    Route::get('admin/profile', 'adminProfile')->name('admin/profile');
    Route::post('admin/update-profile/{account_id}', 'updateProfile')->name('admin/Update-profile');
});
Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/add-category', 'addCategory')->name('admin/add-category');
    Route::get('admin/all-cate', 'allCate')->name('admin/all-cate');
    Route::post('save-category', 'saveCategory')->name('admin/save-category');
    Route::get('admin/edit-cate/{cate_id}', 'editCate');
    Route::post('admin/update-cate/{cate_id}', 'updateCate');
    Route::get('admin/delete-cate/{cate_id}', 'deleteCate');
});

Route::controller(KindController::class)->group(function () {
    Route::get('admin/add-kind', 'addKind')->name('admin/add-kind');
    Route::get('admin/delete-kind/{kind_id}', 'deleteKind')->name('admin/delete-kind/{kind_id}');
    Route::get('admin/edit-kind/{kind_id}', 'editKind');
    Route::get('admin/all-kind', 'allKind')->name('admin/all-kind');
    Route::post('admin/save-kind', 'saveKind')->name('admin/save-kind');
    Route::post('admin/update-kind/{kind_id}', 'updateKind')->name('admin/update-kind');
});
Route::controller(PostController::class)->group(function () {
    Route::get('admin/add-post', 'addPostAdmin')->name('admin/add-post');
    Route::get('admin/all-post', 'allPostadmin')->name('admin/all-post');
    Route::post('admin/save-post', 'savePostAdmin')->name('admin/save-post');
    Route::post('storeMultipleImage1', 'storeMultipleImage1')->name('storeMultipleImage1');
    Route::get('admin/delete-post/{post_id}', 'deletePost')->name('admin/delete-post/{post_id}');
    Route::get('/chi-tiet-bai-viet/{post_id}', 'detailPost');
    Route::post('/save-post', 'savePost')->name('/save-post');
  
});
Route::controller(ProjectController::class)->group(function () {
    Route::get('admin/add-project', 'addProject')->name('admin/add-project');
    Route::get('admin/all-project', 'allProjectAdmin')->name('admin/all-project');
    Route::post('admin/save-project', 'saveProject')->name('admin/save-project');
    Route::post('project/storeMultipleImage', 'storeMultipleImage')->name('project/storeMultipleImage');
    Route::get('admin/delete-project/{project_id}', 'deleteProject')->name('admin/delete-project/{project_id}');
    Route::get('admin/edit-project/{project_id}', 'editProject');
    Route::post('admin/update-project/{project_id}', 'updateProject');
});
Route::controller(NewController::class)->group(function () {
    Route::get('admin/add-new', 'addNew')->name('admin/add-new');
    Route::get('admin/all-new', 'allNew')->name('admin/all-new');
    Route::post('admin/save-new', 'saveNew')->name('admin/save-new');
    Route::post('storeMultipleImage', 'storeMultipleImage')->name('new/storeMultipleImage');
    Route::get('admin/delete-new/{new_id}', 'deleteNew')->name('admin/delete-new/{new_id}');
    Route::get('admin/edit-new/{new_id}', 'editNew');
    Route::post('admin/update-new/{new_id}', 'updateNew');
    Route::get('/chi-tiet-tin-tuc/{new_id}', 'detailNew');
});
Route::controller(EmployeeController::class)->group(function () {
    Route::get('admin/add-employee', 'addEmployee')->name('admin/add-employee');
    Route::get('admin/all-employee', 'allEmployee')->name('admin/all-employee');
    Route::post('admin/save-employee', 'saveEmployee')->name('admin/save-employee');
    Route::get('admin/delete-employee/{employee_id}', 'deleteEmployee')->name('admin/delete-employee/{employee_id}');
    Route::get('admin/edit-employee/{employee_id}', 'editEmployee');
    Route::post('admin/update-employee/{employee_id}', 'updateEmployee');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/admin/dashboard', 'dashboard')->name('admin/dashboard');
    Route::get('product-grid-page', 'productGrid')->name('product-grid');
    Route::get('transaction-list-page', 'transactionList')->name('transaction-list');
    Route::get('transaction-detail-page', 'transactionDetail')->name('transaction-detail');
    Route::get('seller-list-page', 'sellerList')->name('seller-list');
    Route::get('seller-detail-page', 'sellerDetail')->name('seller-detail');
    Route::get('reviews-page', 'reviews')->name('reviews');
    Route::get('inbox-page', 'inbox')->name('inbox');
    Route::get('file-manager-page', 'fileManager')->name('file-manager');
    Route::get('point-of-sale-page', 'pointOfSale')->name('point-of-sale');
    Route::get('chat-page', 'chat')->name('chat');
    Route::get('post-page', 'post')->name('post');
    Route::get('calendar-page', 'calendar')->name('calendar');
    Route::get('crud-data-list-page', 'crudDataList')->name('crud-data-list');
    Route::get('crud-form-page', 'crudForm')->name('crud-form');
    Route::get('users-layout-1-page', 'usersLayout1')->name('users-layout-1');
    Route::get('users-layout-2-page', 'usersLayout2')->name('users-layout-2');
    Route::get('users-layout-3-page', 'usersLayout3')->name('users-layout-3');
    Route::get('profile-overview-1-page', 'profileOverview1')->name('profile-overview-1');
    Route::get('profile-overview-2-page', 'profileOverview2')->name('profile-overview-2');
    Route::get('profile-overview-3-page', 'profileOverview3')->name('profile-overview-3');
    Route::get('wizard-layout-1-page', 'wizardLayout1')->name('wizard-layout-1');
    Route::get('wizard-layout-2-page', 'wizardLayout2')->name('wizard-layout-2');
    Route::get('wizard-layout-3-page', 'wizardLayout3')->name('wizard-layout-3');
    Route::get('blog-layout-1-page', 'blogLayout1')->name('blog-layout-1');
    Route::get('blog-layout-2-page', 'blogLayout2')->name('blog-layout-2');
    Route::get('blog-layout-3-page', 'blogLayout3')->name('blog-layout-3');
    Route::get('pricing-layout-1-page', 'pricingLayout1')->name('pricing-layout-1');
    Route::get('pricing-layout-2-page', 'pricingLayout2')->name('pricing-layout-2');
    Route::get('invoice-layout-1-page', 'invoiceLayout1')->name('invoice-layout-1');
    Route::get('invoice-layout-2-page', 'invoiceLayout2')->name('invoice-layout-2');
    Route::get('faq-layout-1-page', 'faqLayout1')->name('faq-layout-1');
    Route::get('faq-layout-2-page', 'faqLayout2')->name('faq-layout-2');
    Route::get('faq-layout-3-page', 'faqLayout3')->name('faq-layout-3');
    Route::get('login-page', 'login')->name('login');
    Route::get('register-page', 'register')->name('register');
    Route::get('error-page-page', 'errorPage')->name('error-page');

    Route::get('change-password-page', 'changePassword')->name('change-password');
    Route::get('regular-table-page', 'regularTable')->name('regular-table');
    Route::get('tabulator-page', 'tabulator')->name('tabulator');
    Route::get('modal-page', 'modal')->name('modal');
    Route::get('slide-over-page', 'slideOver')->name('slide-over');
    Route::get('notification-page', 'notification')->name('notification');
    Route::get('tab-page', 'tab')->name('tab');
    Route::get('accordion-page', 'accordion')->name('accordion');
    Route::get('button-page', 'button')->name('button');
    Route::get('alert-page', 'alert')->name('alert');
    Route::get('progress-bar-page', 'progressBar')->name('progress-bar');
    Route::get('tooltip-page', 'tooltip')->name('tooltip');
    Route::get('dropdown-page', 'dropdown')->name('dropdown');
    Route::get('typography-page', 'typography')->name('typography');
    Route::get('icon-page', 'icon')->name('icon');
    Route::get('loading-icon-page', 'loadingIcon')->name('loading-icon');
    Route::get('regular-form-page', 'regularForm')->name('regular-form');
    Route::get('datepicker-page', 'datepicker')->name('datepicker');
    Route::get('tom-select-page', 'tomSelect')->name('tom-select');
    Route::get('file-upload-page', 'fileUpload')->name('file-upload');
    Route::get('wysiwyg-editor-classic', 'wysiwygEditorClassic')->name('wysiwyg-editor-classic');
    Route::get('wysiwyg-editor-inline', 'wysiwygEditorInline')->name('wysiwyg-editor-inline');
    Route::get('wysiwyg-editor-balloon', 'wysiwygEditorBalloon')->name('wysiwyg-editor-balloon');
    Route::get('wysiwyg-editor-balloon-block', 'wysiwygEditorBalloonBlock')->name('wysiwyg-editor-balloon-block');
    Route::get('wysiwyg-editor-document', 'wysiwygEditorDocument')->name('wysiwyg-editor-document');
    Route::get('validation-page', 'validation')->name('validation');
    Route::get('chart-page', 'chart')->name('chart');
    Route::get('slider-page', 'slider')->name('slider');
    Route::get('image-zoom-page', 'imageZoom')->name('image-zoom');
});

// user

Route::get('/', [HomeController::class, 'index']);
Route::get('/dang-tin', [PostController::class, 'addPost']);

// Route::post('/storeMultipleImage', [PostController::class, 'storeMultipleImage']);
Route::get('/quan-ly-tin-rao-ban-cho-thue', [PostController::class, 'listPost']);




Route::get('/nha-dat-ban', [SaleController::class, 'index']);
Route::get('/nha-dat-ban/1', [DetailController::class, 'index']);

//Login facebook
Route::get('/login-facebook', [AuthController::class, 'login_facebook']);
Route::get('/admin/callback', [AuthController::class, 'callback_facebook']);

//new

Route::get('/tin-tuc', [NewController::class, 'new']);
Route::get('/tin-tuc-du-an', [NewController::class, 'project']);

// Route::get('/profile', [ProfileController::class, 'profile']);
// Route::post('/profile-save', [ProfileController::class, 'profileSave'])->name('form.data');
// // Route::post('/storeimage', [ProfileController::class, 'storeImage']);
// Route::post('/storeMultipleImage', [ProfileController::class, 'storeMultipleImage']);

Route::get('/danh-sach-du-an-bat-dong-san', [ProjectController::class, 'allProject']);
Route::get('/du-an/{project_id}', [ProjectController::class, 'detailProject']);

// Route::get('/chi-tiet-bai-viet/{post_id}', [DetailController::class, 'detail']);