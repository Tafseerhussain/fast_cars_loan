<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class FastcarProducts extends Component
{
    use WithFileUploads;

    public $heading;
    public $subheading;
    public $points;
    public $buttomText;
    public $imagePreview;
    public $image;

    public function mount()
    {
        $product = Home::where('id', 1)->first(
            [
                'product_heading',
                'product_subheading', 
                'product_points', 
                'product_text', 
                'product_image'
            ]
        );
        $this->heading = $product->product_heading;
        $this->subheading = $product->product_subheading;
        $this->points = $product->product_points;
        $this->bottomText = $product->product_text;
        $this->imagePreview = $product->product_image;
    }

    public function submit()
    {
        $this->validate([
            'heading' => 'required',
            'subheading' => 'required',
            'points' => 'required',
            'bottomText' => 'required',
        ]);
        $hero = Home::where('id', 1)->first();
        $hero->product_heading = $this->heading;
        $hero->product_subheading = $this->subheading;
        $hero->product_points = $this->points;
        $hero->product_text = $this->bottomText;
        $hero->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'image' => 'required|image|max:2048',
        ]);
        $hero = Home::where('id', 1)->first();
        $extension = $this->image->getClientOriginalExtension();
        $img = $this->image->storeAs('home', 'product-image.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $hero->product_image = $imgUrl;
        $hero->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function render()
    {
        return view('livewire.admin.home.fastcar-products');
    }
}
