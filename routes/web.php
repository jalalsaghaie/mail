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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
//    return view('welcome');
    $data = [
        'title'=>'this email is sent by mailgun',
        'content'=>'this is email content'
    ];

    Mail::send('emails.test',$data,function ($message){
        $message->to('jalal.sagaie@gmail.com','jalal')->subject('hello how are you');
    });



});
