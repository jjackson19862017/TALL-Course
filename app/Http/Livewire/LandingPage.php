<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class LandingPage extends Component
{
    public $email = 'test@example.com';

    protected $rules = [
        'email' => 'required|email:filter|unique:subscribers,email',
    ];

    public function subscribe()
    {
        $this->validate();

        DB::transaction(function () {
            $subscriber = Subscriber::create([
                'email' => $this->email,
            ]);

            $notification = new VerifyEmail; // Creates new VerifyEmail instance

            $subscriber->notify($notification); // Sends comfirmation from the new instance

        }, $deadlockRestries = 5);

        $this->reset('email');
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
