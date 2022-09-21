<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;

class FormEdit extends Component
{
    use WithFileUploads;

    public $blogId;
    public $title;
    public $shortDescription;
    public $longDescription;
    public $image;
    public $previewImage;

    public function mount($blog)
    {
        $this->blogId = $blog->id;
        $this->title = $blog->title;
        $this->shortDescription = $blog->short_description;
        $this->longDescription = $blog->description;
        $this->previewImage = $blog->image;
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'shortDescription' => 'required',
            'longDescription' => 'required',
        ]);
        $blog = Blog::where('id', $this->blogId)->first();
        $blog->title = $this->title;
        $blog->short_description = $this->shortDescription;
        $blog->description = $this->longDescription;
        $blog->save();
        session()->flash('successMessage', 'Saved!');
    }

    public function submitImage()
    {
        $this->validate([
            'image' => 'required|image',
        ]);
        $blog = Blog::where('id', $this->blogId)->first();
        $extension = $this->image->getClientOriginalExtension();
        $img = $this->image->storeAs('blogs', 'blog-'.$this->blogId.'.'.$extension , 'public');
        $imgUrl = 'storage/'.$img;
        $blog->image = $imgUrl;
        $blog->save();
        session()->flash('successMessageImage', 'Updated!');
    }

    public function render()
    {
        return view('livewire.admin.blog.form-edit');
    }
}
