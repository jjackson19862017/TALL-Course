<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    //
    public function verify(Subscriber $subscriber)
    {
        //info Marks the email address as valid, and if they clicked it twice it will only run once.
        if (!$subscriber->hasVerifiedEmail()) {
            $subscriber->markEmailAsVerified();
        }
        return redirect('/?verified=1');
    }

    public function all()
    {
        return view('subscribers.all');
    }
}
