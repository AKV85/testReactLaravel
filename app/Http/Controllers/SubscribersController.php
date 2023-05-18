<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\NewSubscriberNotification;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class SubscribersController extends Controller
{
    public function index()
    {
        $contacts = Subscriber::all();
        return response()->json(['contacts' => $contacts]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', Rule::unique('subscribers')],
        ]);

        $data['status'] = 'pending';

        $subscriber = Subscriber::create($data);

        try {
            Mail::to($subscriber->email)->send(new NewSubscriberNotification($subscriber));
            Log::info('Notification successfully delivered to ' . $subscriber->email);
        } catch (\Exception $e) {
            Log::error('Error delivering notification to ' . $subscriber->email . ': ' . $e->getMessage());
        }

        return response()->json([
            'message' => 'Successfully subscribed.',
        ]);
    }

}
