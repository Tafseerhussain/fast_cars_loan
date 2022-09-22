<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Auth;

class Profile extends Component
{
    public $name;
    public $email;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $user = Auth::user();
        $user->name = $this->name;
        $user->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        return view('livewire.admin.profile');
    }
}
