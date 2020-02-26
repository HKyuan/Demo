<?php

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
    return view('index');
})->name('index');

Route::group(['prefix' => 'member'], function () {
    Route::get('/login', function () {
        return view('members.login');
    })->name('login');

    Route::get('/register', function () {
        return view('members.register');
    })->name('register');

    Route::get('/forget', function () {
        return view('members.forget');
    })->name('forget');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', function () {
        return view('news.index');
    })->name('news');

    Route::get('/update', function () {
        return view('news.update');
    })->name('update');

});

Route::group(['prefix' => 'systems'], function () {
    Route::get('/', function () {
        return view('systems.index');
    })->name('systems');

    Route::get('/know', function () {
        return view('know.index');
    })->name('know');

    Route::get('/education', function () {
        return view('education.index');
    })->name('education');

});

Route::group(['prefix' => 'materials'], function () {
    Route::get('/', function () {
        return view('materials.index');
    })->name('materials');

    Route::get('/upload', function () {
        return view('materials.upload');
    })->name('upload');
});

Route::group(['prefix' => 'creates'], function () {
    Route::get('/', function () {
        return view('creates.index');
    })->name('creates');
});

Route::group(['prefix' => 'creators'], function () {
    Route::get('/', function () {
        return view('creators.index');
    })->name('creators');
});

Route::group(['prefix' => 'personal'], function () {
    Route::get('/', function () {
        return view('personal.index');
    })->name('personal');
});

Route::group(['prefix' => 'relations'], function () {
    Route::get('/', function () {
        return view('relations.index');
    })->name('relations');
});

Route::group(['prefix' => 'contacts'], function () {
    Route::get('/', function () {
        return view('contacts.index');
    })->name('contacts');
});