<?php

namespace App\Http\Livewire\Admin\Testimonial;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithFileUploads;

class AddNewTestimonial extends Component
{
    use WithFileUploads;

    public $name;
    public $designation;
    public $testimonialDescription;
    public $image;

    public function submit()
    {
         $this->validate([
            'name' => 'required',
            'designation' => 'required',
            'testimonialDescription' => 'required',
            'image' => 'required|image|max:2048',
        ]);
        $testimonial = new Testimonial;
        $testimonial->name = $this->name;
        $testimonial->designation = $this->designation;
        $testimonial->description = $this->testimonialDescription;
        $testimonial->image = 'temp';
        $testimonial->save();


        $testimonialImage = Testimonial::where('id', $testimonial->id)->first();
        $extension = $this->image->getClientOriginalExtension();
        $img = $this->image->storeAs('testimonials', 'testimonial-'.$testimonial->id.'.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $testimonialImage->image = $imgUrl;
        $testimonialImage->save();

        $this->reset();
        session()->flash('successMessage', 'Saved!');
    }

    public function render()
    {
        return view('livewire.admin.testimonial.add-new-testimonial');
    }
}
