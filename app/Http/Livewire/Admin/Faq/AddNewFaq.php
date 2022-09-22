<?php

namespace App\Http\Livewire\Admin\Faq;

use Livewire\Component;
use App\Models\Faq;
use Livewire\WithFileUploads;

class AddNewFaq extends Component
{
    use WithFileUploads;

    public $title;
    public $description;

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $faq = new faq;
        $faq->title = $this->title;
        $faq->description = $this->description;
        $faq->save();
        $this->reset();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        return view('livewire.admin.faq.add-new-faq');
    }
}
