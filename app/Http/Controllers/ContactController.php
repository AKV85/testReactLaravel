<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Notifications\NewMessageNotification;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return response()->json(['contacts' => $contacts]);
    }

    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        // Send notification to email
        $to_email = 'a.kotov.laknojus@gmail.com';
        Mail::to($to_email)->send(new NewMessageNotification($contact));
        Log::info('Notification successfully delivered', ['contact' => $contact]);

        return response()->json(['message' => 'Form submitted successfully']);
    }
}
