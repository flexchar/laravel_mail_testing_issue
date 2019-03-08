<?php

use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

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
    /**
     * Inbox URL
     * https://www.mailinator.com/v3/index.jsp?zone=public&query=laravelmailtesting#/#inboxpane
     */
    Notification::route('mail', 'laravelMailTesting@mailinator.com')
            ->notify(new SendEmailNotification());

    return view('welcome');
});
