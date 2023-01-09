<?php

namespace App\Http\Livewire\Admin\Advantage;

use Livewire\Component;
use App\Models\Advantage;
use Livewire\WithFileUploads;

class GetLoan extends Component
{
    use WithFileUploads;

    public $sectionHeading;
    public $sectionText;
    public $sectionButtonOne;
    public $sectionButtonTwo;
    public $sectionImage;
    public $imagePreview;

    public $isHidden;

    public function submit()
    {
        $this->validate([
            'sectionHeading' => 'required',
            'sectionText' => 'required',
            'sectionButtonOne' => 'required',
            'sectionButtonTwo' => 'required',
        ]);
        $get = Advantage::where('id', 1)->first();
        $get->get_head = $this->sectionHeading;
        $get->get_text = $this->sectionText;
        $get->get_btn1 = $this->sectionButtonOne;
        $get->get_btn2 = $this->sectionButtonTwo;
        $get->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'sectionImage' => 'required|image',
        ]);
        $get = Advantage::where('id', 1)->first();
        $extension = $this->sectionImage->getClientOriginalExtension();
        $img = $this->sectionImage->storeAs('advantage', 'get-img.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $get->get_img = $imgUrl;
        $get->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function hideUnhideSection($value)
    {
        $this->isHidden = $value;
        $hero = Advantage::where('id', 1)->first();
        $hero->get_hidden = $value;
        $hero->save();
    }

    public function render()
    {
        $get = Advantage::where('id', 1)->first(['get_head','get_text', 'get_btn1', 'get_btn2', 'get_img', 'get_hidden']);
        $this->sectionHeading = $get->get_head;
        $this->sectionText = $get->get_text;
        $this->sectionButtonOne = $get->get_btn1;
        $this->sectionButtonTwo = $get->get_btn2;
        $this->imagePreview = $get->get_img;
        $this->isHidden = $get->get_hidden;
        return view('livewire.admin.advantage.get-loan');
    }
}
