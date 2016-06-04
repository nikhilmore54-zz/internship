<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use App\Task;
use Illuminate\Http\Request;


Route::get('/', function () {
    $users = \App\User::orderBy('created_at', 'desc')->first();
    return view('users', [
        'users' =>$users
    ]);
});

Route::post('/user', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'email' => 'required',
    ]);
  
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $user = new \App\User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return 'Thank you '.$request->name.' for registering with us!!';

});
