<?php

namespace App\Http\Livewire\Admin\Testimonial;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;

class EditForm extends Component
{
    use WithFileUploads;

    public $testimonialId;
    public $name;
    public $designation;
    public $testimonialDescription;
    public $image;
    public $previewImage;

    public function mount($testimonial)
    {
        $this->testimonialId = $testimonial->id;
        $this->name = $testimonial->name;
        $this->designation = $testimonial->designation;
        $this->testimonialDescription = $testimonial->description;
        $this->previewImage = $testimonial->image;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'designation' => 'required',
            'testimonialDescription' => 'required',
        ]);
        $testimonial = Testimonial::where('id', $this->testimonialId)->first();
        $testimonial->name = $this->name;
        $testimonial->designation = $this->designation;
        $testimonial->description = $this->testimonialDescription;
        $testimonial->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'image' => 'required|image|max:2048',
        ]);
        $testimonial = Testimonial::where('id', $this->testimonialId)->first();
        $extension = $this->image->getClientOriginalExtension();
        $img = $this->image->storeAs('testimonials', 'testimonial-'.$this->testimonialId.'.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $testimonial->image = $imgUrl;
        $testimonial->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function render()
    {
        return view('livewire.admin.testimonial.edit-form');
    }
}
