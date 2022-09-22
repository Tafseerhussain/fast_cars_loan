<?php

namespace App\Http\Livewire\Admin\Faq;

use Livewire\Component;
use App\Models\Faq;

class EditForm extends Component
{
    public $faqId;
    public $title;
    public $description;

    public function mount($faq)
    {
        $this->faqId = $faq->id;
        $this->title = $faq->title;
        $this->description = $faq->description;
    }

    public function render()
    {
        return view('livewire.admin.faq.edit-form');
    }
}
