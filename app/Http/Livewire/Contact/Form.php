<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;

class Form extends Component
{
    public $fullName;
    public $emailAddress;
    public $message;

    protected $rules = [
        'fullName' => 'required',
        'emailAddress' => 'required',
        'message' => 'required'
    ];

    public function submit()
    {
        $this->validate();
        session()->flash('successMessage', 'Message successfully sent!.');
    }

    public function render()
    {
        return view('livewire.contact.form');
    }
}
