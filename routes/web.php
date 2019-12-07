<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method 'PATCH'
        <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit</h1>
            </div>
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>      
            <div class="row">
                <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($errors->has(title'image'))
                    <strong>{{ $errors->first('image') }}</strong>
                @endif
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button> 
            </div>
        </div>
    </div>
    </form>
|
*/



Auth::routes();

Route::post('follow/{user}','FollowsController@store');
Route::get('/', 'PostsController@index');
Route::get('/p/create',"PostsController@create");
Route::post('/p',"PostsController@store");
Route::get('/p/{post}',"PostsController@show");

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
