<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Auth;

class Password extends Component
{
    public $oldPassword;
    public $newPassword;

    public function submit()
    {
        $this->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required|min:9'
        ]);

        $user = Auth::user();

        if (Hash::check($this->oldPassword, $user->password)) { 
            $user->fill([
                'password' => Hash::make($this->newPassword)
            ])->save();
            session()->flash('successMessage', 'Password changed');

        } else {
            session()->flash('errorMessage', 'Old Password does not match');
        }
    }

    public function render()
    {
        return view('livewire.admin.password');
    }
}
