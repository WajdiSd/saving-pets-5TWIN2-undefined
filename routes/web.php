<?php

use Illuminate\Support\Facades\Route;

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

$controller_path = 'App\Http\Controllers';

// Main Page Route
//Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');

$routeMiddleware = [
    // ...
    'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
];

// backoffice routes
Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::get('/backoffice/table', [\App\Http\Controllers\backoffice\AllTables::class, 'index'])->name('backoffice-table');
        Route::resource('/backoffice/association', \App\Http\Controllers\backoffice\Association\AssociationController::class);
        Route::resource('/backoffice/event', \App\Http\Controllers\backoffice\Association\EventController::class);
        Route::resource('/backoffice/rewards', \App\Http\Controllers\backoffice\RewardController::class);
        Route::resource('/backoffice/typerewards', \App\Http\Controllers\backoffice\TypeRewardController::class);
        //Vaccination
        Route::resource('/backoffice/vaccines', \App\Http\Controllers\backoffice\Vaccination\VaccineController::class);
        Route::resource('/backoffice/typevaccines', \App\Http\Controllers\backoffice\Vaccination\TypeVaccineController::class);

        Route::get('/backoffice/table', [\App\Http\Controllers\backoffice\AllTables::class, 'index'])->name('backoffice-table');
        Route::resource('/backoffice/association', \App\Http\Controllers\backoffice\Association\AssociationController::class);
        Route::resource('/backoffice/event', \App\Http\Controllers\backoffice\Association\EventController::class);
        Route::resource('/backoffice/rewards', \App\Http\Controllers\backoffice\RewardController::class);
        Route::resource('/backoffice/typerewards', \App\Http\Controllers\backoffice\TypeRewardController::class);
        Route::resource('/backoffice/enclos', \App\Http\Controllers\backoffice\Local\EnclosController::class);
        Route::resource('/backoffice/locals', \App\Http\Controllers\backoffice\Local\LocalController::class);

        //Sterilization
        Route::resource('/backoffice/sterilization', \App\Http\Controllers\backoffice\Sterilization\BackSterilizationController::class, [
            'names' => [
                'index' => 'sterilization.index',
                'create' => 'sterilization.create',
                'edit' => 'sterilization.edit',
                'show' => 'sterilization.show',
                // etc...
            ]
        ]);
        //Veterinarian
        Route::resource(
            '/backoffice/veterinarian',
            \App\Http\Controllers\backoffice\Sterilization\BackVetoController::class,
            [
                'names' => [
                    'index' => 'veterinarian.index',
                    'create' => 'veterinarian.create',
                    'edit' => 'veterinarian.edit',
                    'show' => 'veterinarian.show',
                    // etc...
                ]
            ]
        );

        //pet
        Route::resource('/backoffice/pets', \App\Http\Controllers\backoffice\Pet\PetsController::class);

    });

    ###
    /* #################################################################################### */
    ###
    // frontoffice routes
    Route::get('/frontoffice', [\App\Http\Controllers\frontoffice\FrontOffice::class, 'index'])->name('frontoffice');
    Route::get('/frontoffice/association', [\App\Http\Controllers\frontoffice\Association\FrontAssociationController::class, 'index'])->name('frontofficeassociation');
    Route::get('/frontoffice/event', [\App\Http\Controllers\frontoffice\Association\FrontEventController::class, 'index'])->name('frontofficeevent');
    Route::get('/frontoffice/reward', [\App\Http\Controllers\frontoffice\Reward\FrontRewardController::class, 'index'])->name('frontofficerewards');
    //Sterilization
    Route::get('/frontoffice/veterinarian', [\App\Http\Controllers\backoffice\Sterilization\BackVetoController::class, 'front'])->name('frontofficeveterinarian');
    Route::get('/frontoffice/vaccine', [\App\Http\Controllers\backoffice\Vaccination\VaccineController::class, 'front'])->name('frontofficevaccine');
    Route::get('/frontoffice/local', [\App\Http\Controllers\backoffice\Local\LocalController::class, 'front'])->name('frontofficelocal');
});




// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

// Breeze authentication

Route::get('/', function () {
    return view('welcome');
})->name('welcome');



require __DIR__ . '/auth.php';

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
