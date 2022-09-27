<?php

namespace App\Http\Livewire\Admin\Emails;

use Livewire\Component;
use App\Models\Email;

class LoanRejected extends Component
{
    public $denialMessage;
    public $denialReason;
    public $lastMessage;

    public function mount($rejection)
    {
        $this->denialMessage = $rejection->denial_message;
        $this->denialReason = $rejection->denial_reason;
        $this->lastMessage = $rejection->last_message_rejected;
    }

    public function submit()
    {
        $this->validate([
            'denialMessage' => 'required',
            'denialReason' => 'required',
            'lastMessage' => 'required',
        ]);
        $em = Email::first();
        $em->denial_message = $this->denialMessage;
        $em->denial_reason = $this->denialReason;
        $em->last_message_rejected = $this->lastMessage;
        $em->save();

        session()->flash('successMessage', 'Template Updated');
    }

    public function render()
    {
        return view('livewire.admin.emails.loan-rejected');
    }
}
