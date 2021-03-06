<?php

use App\Http\Controllers\Control\AdvertisementsController as ControlAdvertisementsController;
use App\Http\Controllers\Control\PanelController;
use App\Http\Controllers\Control\ResourceController as ControlResourceController;
use App\Http\Controllers\Control\UserController as ControlUserController;
use App\Http\Controllers\Dashboard\AdvertisementsController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\DirectoryController;
use App\Http\Controllers\Dashboard\Organizational_chartController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\ResourceController;
use App\Http\Controllers\Dashboard\UserController;
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

Route::get('/', function () {
    return view('presentation.index');
})->name('inicio');

Route::get('/aviso-de-privacidad', function(){
    return view('presentation.aviso_privacidad');
})->name('aviso');

Route::get('/catalogos', function(){
    return view('presentation.catalogos');
})->name('catalogos');


Route::group(['prefix' => 'servicios'], function(){
    Route::get('/electrico', function(){
        return view('services.electrico');
    })->name('electrico');
    
    Route::get('/mecanico', function(){
        return view('services.mecanico');
    })->name('mecanico');
    
    Route::get('/riggin', function(){
        return view('services.riggin');
    })->name('riggin');
    
    Route::get('/automatizacion', function(){
        return view('services.automatizacion');
    })->name('automatizacion');
    
    Route::get('/industria-4.0', function(){
        return view('services.industria');
    })->name('industria');
    
    Route::get('/maquinados', function(){
        return view('services.maquinados');
    })->name('maquinados');
    
    Route::get('/seguridad-industrial', function(){
        return view('services.seguridad-industrial');
    })->name('seguridad-industrial');
});

Route::get('/contacto', function(){
    return view('presentation.contacto');
})->name('contacto');

Route::get('/nosotros', function(){
    return view('presentation.nosotros');
})->name('nosotros');

Route::get('/proyectos', function(){
    return view('presentation.proyectos');
})->name('proyectos');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', function(){
        return view('dashboard.admin.dashboard');
    })->name('dashboard');
    Route::resource('departments', DepartmentController::class)->except('show');
    Route::resource('organizational', Organizational_chartController::class)->except('show');
    Route::resources([
        'users' => UserController::class,
    ]);
    Route::get('profile/{user}/edit', [ProfileController::class, 'add_digital_card'])->name('profile.card');
    Route::post('profile/{user}/update', [ProfileController::class, 'register_digital_card'])->name('profile.card.update');
    Route::put('organizational/{organizational_chart}/change-status', [Organizational_chartController::class, 'change_status'])->name('organizational.change-status');
    Route::get('change-password/{user}/edit', [UserController::class, 'edit_password'])->name('password-change.edit');
    Route::put('change-password/{user}', [UserController::class, 'update_password'])->name('password-change.update');
    Route::resource('resources', ResourceController::class)->only('destroy', 'edit', 'update');
    Route::get('resources/{department}/show', [ResourceController::class, 'index'])->name('resources.index');
    Route::get('resources/{department}/create', [ResourceController::class, 'create'])->name('resources.create');
    Route::post('resources/{department}/store', [ResourceController::class, 'store'])->name('resources.store');
    Route::get('resources/{resource}/download', [ResourceController::class, 'download_resource'])->name('resources.download');
    Route::resource('advertisements', AdvertisementsController::class)->except('show');
});

Route::group(['prefix' => 'control', 'middleware' => ['auth', 'user']], function(){
    Route::get('/', [PanelController::class, 'show_data'])->name('control');
    Route::resource('user', ControlUserController::class)->only('index', 'show');
    Route::resource('departments', DepartmentController::class)->only('show');
    Route::resource('advertisement', ControlAdvertisementsController::class)->only('index');
    Route::get('resource/{slug}/show', [ControlResourceController::class, 'index'])->name('resource.department.show');
    Route::get('resource/{resource}/download', [ControlResourceController::class, 'download_resource'])->name('resource.download');
});


require __DIR__.'/auth.php';
