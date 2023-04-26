<?php

use App\Notifications\NewMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    $users = App\Models\User::all();
    return response()->json($users);
});

Route::post('/contacts', function (Illuminate\Http\Request $request) {
    $contact = new App\Models\Contact();
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->message = $request->input('message'); // add this line to save the message field
    $contact->save();

    // Отправка уведомления на email
    $to_email = 'a.kotov.laknojus@gmail.com';
    Mail::to($to_email)->send(new NewMessageNotification($contact));

    return response()->json(['message' => 'Form submitted successfully']);
});
